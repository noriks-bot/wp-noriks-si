<?php
/**
 * Thank You — Post-Purchase Upsell System
 * 
 * - COD orders only: upsell popup shown
 * - COD orders go to "primary-hold" for 5 min (upsell window), then auto → processing
 * - Non-COD orders: no upsell, normal flow (processing/completed)
 * - 50% off SALE price, server-side calculated
 * - Metadata: _noriks_upsell = "thank you upsell"
 * - Emails (new order + customer processing) are DELAYED until primary-hold → processing
 *   so they contain the final order value (with any upsell items)
 */
if ( ! defined( 'ABSPATH' ) ) exit;


// ─── 0. SUPPRESS emails for COD orders during upsell window ─────────────
// Emails will be sent AFTER primary-hold → processing transition
// so they include the correct total (with any upsell items added).

// Suppress "New Order" admin email for COD orders that haven't finished upsell window
add_filter( 'woocommerce_email_enabled_new_order', 'noriks_suppress_cod_email_during_upsell', 10, 2 );
function noriks_suppress_cod_email_during_upsell( $enabled, $order ) {
    if ( ! $order || ! is_a( $order, 'WC_Order' ) ) return $enabled;
    if ( $order->get_payment_method() !== 'cod' ) return $enabled;
    // If order hasn't been through primary-hold → processing yet, suppress
    if ( ! $order->get_meta( '_noriks_upsell_emails_sent' ) ) {
        return false;
    }
    return $enabled;
}

// Suppress "Customer Processing Order" email for COD during upsell window
add_filter( 'woocommerce_email_enabled_customer_processing_order', 'noriks_suppress_cod_customer_email_during_upsell', 10, 2 );
function noriks_suppress_cod_customer_email_during_upsell( $enabled, $order ) {
    if ( ! $order || ! is_a( $order, 'WC_Order' ) ) return $enabled;
    if ( $order->get_payment_method() !== 'cod' ) return $enabled;
    if ( ! $order->get_meta( '_noriks_upsell_emails_sent' ) ) {
        return false;
    }
    return $enabled;
}

// Suppress "Customer On-Hold Order" email for COD during upsell window
add_filter( 'woocommerce_email_enabled_customer_on_hold_order', 'noriks_suppress_cod_onhold_email_during_upsell', 10, 2 );
function noriks_suppress_cod_onhold_email_during_upsell( $enabled, $order ) {
    if ( ! $order || ! is_a( $order, 'WC_Order' ) ) return $enabled;
    if ( $order->get_payment_method() !== 'cod' ) return $enabled;
    if ( ! $order->get_meta( '_noriks_upsell_emails_sent' ) ) {
        return false;
    }
    return $enabled;
}

/**
 * Send delayed emails after upsell window closes.
 * Called when order transitions from primary-hold → processing.
 */
function noriks_send_delayed_order_emails( $order_id ) {
    $order = wc_get_order( $order_id );
    if ( ! $order ) return;

    // Mark emails as allowed now
    $order->update_meta_data( '_noriks_upsell_emails_sent', 'yes' );
    $order->save();

    // Manually trigger the emails with final order data
    $mailer = WC()->mailer();
    $emails = $mailer->get_emails();

    // Send "New Order" to admin
    if ( isset( $emails['WC_Email_New_Order'] ) ) {
        $emails['WC_Email_New_Order']->trigger( $order_id, $order );
    }

    // Send "Customer Processing Order" to customer
    if ( isset( $emails['WC_Email_Customer_Processing_Order'] ) ) {
        $emails['WC_Email_Customer_Processing_Order']->trigger( $order_id, $order );
    }
}


// ─── 1. Register custom order status "primary-hold" ─────────────────────

add_action( 'init', 'noriks_register_primary_hold_status' );
function noriks_register_primary_hold_status() {
    register_post_status( 'wc-primary-hold', array(
        'label'                     => 'Primary Hold',
        'public'                    => true,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'Primary Hold <span class="count">(%s)</span>', 'Primary Hold <span class="count">(%s)</span>' ),
    ));
}

// Add to WC status list
add_filter( 'wc_order_statuses', 'noriks_add_primary_hold_to_statuses' );
function noriks_add_primary_hold_to_statuses( $statuses ) {
    $statuses['wc-primary-hold'] = 'Primary Hold';
    return $statuses;
}


// ─── 2. COD orders → primary-hold (instead of processing) ───────────────

add_action( 'woocommerce_thankyou', 'noriks_set_cod_primary_hold', 1 );
function noriks_set_cod_primary_hold( $order_id ) {
    if ( ! $order_id ) return;
    $order = wc_get_order( $order_id );
    if ( ! $order ) return;

    // Only COD orders
    if ( $order->get_payment_method() !== 'cod' ) return;

    // Only if currently on-hold or processing (fresh order)
    $status = $order->get_status();
    if ( ! in_array( $status, array( 'on-hold', 'processing', 'pending' ) ) ) return;

    // Don't re-apply if already in primary-hold
    if ( $status === 'primary-hold' ) return;

    $order->update_status( 'primary-hold', 'Upsell window: 5 min hold for post-purchase offers.' );

    // Schedule auto-transition to processing after 5 minutes
    if ( ! wp_next_scheduled( 'noriks_primary_hold_to_processing', array( $order_id ) ) ) {
        wp_schedule_single_event( time() + 300, 'noriks_primary_hold_to_processing', array( $order_id ) );
    }
}

// Auto-transition: primary-hold → processing after 5 min
add_action( 'noriks_primary_hold_to_processing', 'noriks_transition_to_processing' );
function noriks_transition_to_processing( $order_id ) {
    $order = wc_get_order( $order_id );
    if ( ! $order ) return;

    // Only transition if still in primary-hold
    if ( $order->get_status() !== 'primary-hold' ) return;

    $order->update_status( 'processing', 'Upsell window expired — auto-transitioned to processing.' );

    // NOW send delayed emails with final order value (including any upsells)
    noriks_send_delayed_order_emails( $order_id );
}


// ─── FAILSAFE: sweep stuck primary-hold orders (admin-only, lightweight) ─
// Runs only on admin order list page — not on every frontend page load.
// wp_cron scheduled event (above) is the primary mechanism.

add_action( 'woocommerce_order_list_table_prepare_items_query_args', 'noriks_failsafe_on_admin_orders' );

function noriks_failsafe_on_admin_orders( $args ) {
    // Only run once per 2 minutes (transient lock)
    if ( get_transient( 'noriks_ph_sweep_lock' ) ) return $args;
    set_transient( 'noriks_ph_sweep_lock', 1, 120 );

    $orders = wc_get_orders( array(
        'status'       => 'primary-hold',
        'limit'        => 20,
        'date_created' => '<' . ( time() - 300 ), // older than 5 min
    ));

    foreach ( $orders as $order ) {
        $order->update_status( 'processing', 'Failsafe: primary-hold exceeded 5 min — auto-moved to processing.' );
        noriks_send_delayed_order_emails( $order->get_id() );
    }

    return $args;
}


// ─── 3. AJAX: Manual fix stuck orders + auto-release ─────────────────────

add_action( 'wp_ajax_noriks_release_primary_hold', 'noriks_release_primary_hold' );
add_action( 'wp_ajax_nopriv_noriks_release_primary_hold', 'noriks_release_primary_hold' );

function noriks_release_primary_hold() {
    $order_id = absint( $_POST['order_id'] ?? 0 );
    if ( ! $order_id ) wp_send_json_error( 'Missing order_id' );

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Order not found' );
    if ( $order->get_status() !== 'primary-hold' ) wp_send_json_success( 'Already released' );

    $order->update_status( 'processing', 'Released from primary-hold (timer expired on client).' );

    // Send delayed emails now (with final order value)
    noriks_send_delayed_order_emails( $order_id );

    wp_send_json_success( 'Released to processing' );
}





// ─── 4. AJAX: Refresh order items HTML ───────────────────────────────────

add_action( 'wp_ajax_noriks_refresh_order_items', 'noriks_refresh_order_items' );
add_action( 'wp_ajax_nopriv_noriks_refresh_order_items', 'noriks_refresh_order_items' );

function noriks_refresh_order_items() {
    $order_id = absint( $_POST['order_id'] ?? 0 );
    if ( ! $order_id ) wp_send_json_error( 'Missing order_id' );

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Order not found' );

    // Build items HTML
    $items_html = '';
    foreach ( $order->get_items() as $item ) {
        $qty = $item->get_quantity();
        $meta_parts = array();
        foreach ( $item->get_formatted_meta_data( '_', true ) as $m ) {
            $meta_parts[] = wp_strip_all_tags( $m->display_key . ': ' . $m->display_value );
        }
        $is_upsell = $item->get_meta( '_noriks_upsell' ) === 'thank you upsell';
        $items_html .= '<div class="ty-item">';
        $items_html .= '<div>';
        $items_html .= '<div class="ty-item-name">' . $qty . '× ' . esc_html( $item->get_name() ) . '</div>';
        if ( $meta_parts ) {
            $items_html .= '<div class="ty-item-meta">' . esc_html( implode( ', ', $meta_parts ) ) . '</div>';
        }
        $items_html .= '</div>';
        $items_html .= '<div style="display:flex;align-items:center;gap:8px;">';
        $items_html .= '<div class="ty-item-price">' . $order->get_formatted_line_subtotal( $item ) . '</div>';
        /* remove button disabled */
        $items_html .= '</div>';
        $items_html .= '</div>';
    }

    // Build totals HTML
    $totals_html = '<div class="ty-totals">';
    foreach ( $order->get_order_item_totals() as $key => $total ) {
        $class = $key === 'order_total' ? 'ty-row ty-total-final' : 'ty-row';
        $totals_html .= '<div class="' . $class . '">';
        $totals_html .= '<span class="ty-row-label">' . $total['label'] . '</span>';
        $totals_html .= '<span class="ty-row-value">' . $total['value'] . '</span>';
        $totals_html .= '</div>';
    }
    $totals_html .= '</div>';

    wp_send_json_success( array(
        'items_html'  => $items_html . $totals_html,
        'item_count'  => $order->get_item_count(),
        'total'       => $order->get_formatted_order_total(),
    ));
}


// ─── 5. AJAX: Remove upsell item from order ─────────────────────────────

add_action( 'wp_ajax_noriks_remove_upsell', 'noriks_remove_upsell' );
add_action( 'wp_ajax_nopriv_noriks_remove_upsell', 'noriks_remove_upsell' );

function noriks_remove_upsell() {
    $order_id = absint( $_POST['order_id'] ?? 0 );
    $item_id  = absint( $_POST['item_id'] ?? 0 );
    if ( ! $order_id || ! $item_id ) wp_send_json_error( 'Missing data' );

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Order not found' );

    $item = $order->get_item( $item_id );
    if ( ! $item ) wp_send_json_error( 'Item not found' );

    // Odstraniti je mogoce samo postavke, ki so prisle iz upsella (katerikoli korak)
    if ( ! $item->get_meta( '_noriks_upsell' ) ) {
        wp_send_json_error( 'Samo upsell izdelke je mogoče odstraniti' );
    }

    // Only allow while in primary-hold
    if ( $order->get_status() !== 'primary-hold' ) {
        wp_send_json_error( 'Čas za spremembe je potekel' );
    }

    $product_name = $item->get_name();
    $order->remove_item( $item_id );
    $order->calculate_totals();
    $order->save();

    $order->add_order_note( sprintf( 'Upsell odstranjen: %s', $product_name ) );

    wp_send_json_success( array( 'message' => 'Odstranjeno' ) );
}


// ─── 6. AJAX: Add upsell product to order ───────────────────────────────

add_action( 'wp_ajax_noriks_add_upsell', 'noriks_handle_add_upsell' );
add_action( 'wp_ajax_nopriv_noriks_add_upsell', 'noriks_handle_add_upsell' );

function noriks_handle_add_upsell() {
    $order_id     = absint( $_POST['order_id'] ?? 0 );
    $product_id   = absint( $_POST['product_id'] ?? 0 );
    $variation_id = absint( $_POST['variation_id'] ?? 0 );
    $nonce        = $_POST['nonce'] ?? '';

    if ( ! wp_verify_nonce( $nonce, 'noriks_upsell_' . $order_id ) ) {
        wp_send_json_error( 'Neveljavna zahteva' );
    }

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Naročilo ni bilo najdeno' );

    // Only allow upsell on COD orders in primary-hold
    if ( $order->get_payment_method() !== 'cod' ) {
        wp_send_json_error( 'Upsell je na voljo samo pri plačilu po povzetju' );
    }
    if ( $order->get_status() !== 'primary-hold' ) {
        wp_send_json_error( 'Čas za dodajanje je potekel' );
    }

    // Time limit: 5 min from order creation (safety check)
    $created = $order->get_date_created();
    if ( $created && ( time() - $created->getTimestamp() ) > 330 ) { // 5.5 min grace
        wp_send_json_error( 'Čas za dodajanje je potekel' );
    }

    // Get the actual product (variation or simple)
    $product = $variation_id ? wc_get_product( $variation_id ) : wc_get_product( $product_id );
    if ( ! $product ) wp_send_json_error( 'Proizvod nije pronađen' );

    // Duplicate check
    $check_product_id = $variation_id ? $product_id : $product->get_id();
    foreach ( $order->get_items() as $item ) {
        $item_product_id = $item->get_product_id();
        $item_variation_id = $item->get_variation_id();
        if ( $item_product_id == $check_product_id || ( $variation_id && $item_variation_id == $variation_id ) ) {
            if ( $item->get_meta( '_noriks_upsell' ) ) {
                wp_send_json_error( 'Ta izdelek ste že dodali' );
            }
        }
    }

    // ─── Calculate 50% off SALE price ───
    $sale_price = (float) $product->get_sale_price();
    $current_price = (float) $product->get_price();

    if ( $sale_price && $current_price ) {
        $active_price = min( $sale_price, $current_price );
    } else {
        $active_price = $current_price ?: $sale_price;
    }

    if ( ! $active_price ) {
        $active_price = (float) $product->get_regular_price();
    }
    if ( ! $active_price ) {
        wp_send_json_error( 'Cena izdelka ni na voljo' );
    }

    $quantity = max( 1, absint( $_POST['quantity'] ?? 3 ) );

    // Korak 1 dovoli samo izdelka iz ponudbe koraka 1 (majica 250 / sive boksarice 2829)
    // in samo kolicine iz cenika — sicer bi se z rocno zahtevo dal dodati poljuben
    // izdelek ali poljubna kolicina po ceni enega kosa. Korak 2 ima svoj handler.
    $allowed_step1 = array( 250, 2829 );
    if ( ! in_array( $product_id, $allowed_step1, true ) ) {
        wp_send_json_error( 'Ta izdelek ni v ponudbi' );
    }
    if ( $variation_id && (int) wp_get_post_parent_id( $variation_id ) !== $product_id ) {
        wp_send_json_error( 'Neveljavna različica' );
    }

    // Prices depend on product type (bokserice vs majice)
    $bokserice_prices = array( 1 => 4.99, 3 => 14.97, 5 => 24.95 );
    $majice_prices    = array( 1 => 12.99, 3 => 29.99, 6 => 39.99 );
    // ─── Detect product type: exact same logic as frontend thankyou.php ───
    $_detect_id = $product_id ?: $product->get_id();
    $_detect_prod = wc_get_product( $_detect_id );
    $name = strtolower( $_detect_prod ? $_detect_prod->get_name() : '' );
    $sku = strtolower( $_detect_prod ? $_detect_prod->get_sku() : '' );
    $cats = wp_get_post_terms( $_detect_id, 'product_cat', array( 'fields' => 'slugs' ) );
    $cat_str = is_array( $cats ) ? strtolower( implode( ' ', $cats ) ) : '';
    $is_majice = ( strpos($cat_str, 'majic') !== false || strpos($name, 'majic') !== false );
    $qty_prices = $is_majice ? $majice_prices : $bokserice_prices;
    if ( ! isset( $qty_prices[ $quantity ] ) ) {
        wp_send_json_error( 'Neveljavna količina' );
    }
    $total_price = $qty_prices[ $quantity ];
    $upsell_price = $total_price / $quantity;

    // Add to order
    $item_id = $order->add_product( $product, $quantity, array(
        'subtotal' => $upsell_price * $quantity,
        'total'    => $upsell_price * $quantity,
    ));

    if ( ! $item_id ) wp_send_json_error( 'Napaka pri dodajanju' );

    // Mark as upsell
    $item = $order->get_item( $item_id );
    $upsell_type = sanitize_text_field( $_POST['upsell_type'] ?? 'post_purchase_step1' );
    $item->add_meta_data( '_noriks_upsell', $upsell_type, true );
    $item->save();

    $order->calculate_totals();
    $order->save();

    $order->add_order_note(
        sprintf(
            'Thank you upsell: %s dodano s 50%% popustom — akcijska cijena: %s, upsell cijena: %s',
            $product->get_name(),
            wc_price( $active_price ),
            wc_price( $upsell_price )
        )
    );

    wp_send_json_success( array(
        'message'      => 'Dodano',
        'item_id'      => $item_id,
        'product_name' => $product->get_name(),
        'upsell_price' => $upsell_price,
        'total'        => $order->get_formatted_order_total(),
    ));
}


// ─── 7. AJAX: korak 2 — dodaj ponudbo iz mreze ──────────────────────────
//
// Brskalnik poslje samo kljuc ponudbe ter izbrano barvo in velikost.
// Izdelek, kolicina in cena se preberejo iz ponudbe na strezniku
// (noriks_ty2_find_card), zato jih ni mogoce podtakniti.
//
// Metapodatki postavke so v ISTI obliki kot pri nakupu orto ponudbe na produktni
// strani (gck_order_item_meta), da jih skladisce in Metakocka bereta enako:
//   1, 2, … N          "Barva - Velikost" za vsak kos (brez atributov: ime izdelka)
//   _bundle_pairs      N
//   _offer_id          "N__ty2"
// in dodatno kot ostali upselli (product_page_upsell):
//   _noriks_upsell         post_purchase_step2
//   _noriks_upsell_pieces  N
//   _noriks_upsell_sku     SKU izdelka
//   _noriks_upsell_label   naslov kartice
//   _noriks_upsell_offer   kljuc ponudbe (za podvojitve in porocila)

add_action( 'wp_ajax_noriks_add_upsell_step2', 'noriks_handle_add_upsell_step2' );
add_action( 'wp_ajax_nopriv_noriks_add_upsell_step2', 'noriks_handle_add_upsell_step2' );

function noriks_handle_add_upsell_step2() {
    $order_id  = absint( $_POST['order_id'] ?? 0 );
    $offer_key = sanitize_key( wp_unslash( $_POST['offer_key'] ?? '' ) );
    $nonce     = $_POST['nonce'] ?? '';

    if ( ! wp_verify_nonce( $nonce, 'noriks_upsell_' . $order_id ) ) {
        wp_send_json_error( 'Neveljavna zahteva' );
    }
    $order = wc_get_order( $order_id );
    if ( ! $order ) { wp_send_json_error( 'Naročilo ni bilo najdeno' ); }
    if ( $order->get_payment_method() !== 'cod' ) {
        wp_send_json_error( 'Upsell je na voljo samo pri plačilu po povzetju' );
    }
    if ( $order->get_status() !== 'primary-hold' ) {
        wp_send_json_error( 'Čas za dodajanje je potekel' );
    }
    $created = $order->get_date_created();
    if ( $created && ( time() - $created->getTimestamp() ) > 330 ) {
        wp_send_json_error( 'Čas za dodajanje je potekel' );
    }
    if ( ! function_exists( 'noriks_ty2_find_card' ) ) {
        wp_send_json_error( 'Ponudba ni na voljo' );
    }

    $card = noriks_ty2_find_card( $offer_key, $order );
    if ( ! $card ) { wp_send_json_error( 'Ponudba ni več na voljo' ); }

    // ista ponudba samo enkrat
    foreach ( $order->get_items() as $it ) {
        if ( $it->get_meta( '_noriks_upsell_offer' ) === $offer_key ) {
            wp_send_json_error( 'To ponudbo ste že dodali' );
        }
    }

    $product = wc_get_product( $card['product_id'] );
    if ( ! $product ) { wp_send_json_error( 'Izdelek ni najden' ); }

    // barve doloci ponudba (fiksna ali mesane), kupec izbere samo velikost
    $size = sanitize_text_field( wp_unslash( $_POST['upsell_size'] ?? '' ) );
    if ( $card['sizes'] && ! in_array( $size, $card['sizes'], true ) ) { wp_send_json_error( 'Izberite velikost' ); }
    if ( ! $card['sizes'] ) { $size = ''; }
    $piece_colors = array_values( (array) $card['piece_colors'] );
    $color = $piece_colors[0] ?? '';

    // variabilen izdelek: v naročilo gre prava variacija, ne prva po vrsti
    $line_product = $product;
    if ( $product->is_type( 'variable' ) ) {
        $vid = noriks_ty2_match_variation( $product, $color, $size );
        if ( ! $vid ) { wp_send_json_error( 'Te kombinacije ni na zalogi' ); }
        $line_product = wc_get_product( $vid );
    }

    $pieces = (int) $card['qty'];
    $total  = (float) $card['new'];
    $piece_labels = array();
    for ( $i = 0; $i < $pieces; $i++ ) {
        $pl = implode( ' - ', array_filter( array( $piece_colors[ $i ] ?? $color, $size ) ) );
        $piece_labels[] = $pl !== '' ? $pl : $product->get_name();
    }
    $piece_label = implode( ', ', array_unique( $piece_labels ) );

    // kolicina postavke je 1, cena je paketna — enako kot orto ponudba s produktne strani
    $item_id = $order->add_product( $line_product, 1, array(
        'subtotal' => $total,
        'total'    => $total,
    ) );
    if ( ! $item_id ) { wp_send_json_error( 'Napaka pri dodajanju' ); }

    $item = $order->get_item( $item_id );
    for ( $i = 1; $i <= $pieces; $i++ ) {
        $item->add_meta_data( (string) $i, $piece_labels[ $i - 1 ], true );
    }
    $item->add_meta_data( '_bundle_pairs', $pieces, true );
    $item->add_meta_data( '_offer_id', $pieces . '__ty2', true );
    $item->add_meta_data( '_noriks_upsell', 'post_purchase_step2', true );
    $item->add_meta_data( '_noriks_upsell_pieces', $pieces, true );
    $item->add_meta_data( '_noriks_upsell_sku', $card['sku'], true );
    $item->add_meta_data( '_noriks_upsell_label', $card['label'], true );
    $item->add_meta_data( '_noriks_upsell_offer', $offer_key, true );
    $item->save();

    $order->calculate_totals();
    $order->save();

    $order->add_order_note( sprintf(
        'Thank you upsell (korak 2): %s [%s] — %d kos, %s, skupaj %s',
        $product->get_name(),
        $card['label'],
        $pieces,
        $piece_label,
        wc_price( $total )
    ) );

    wp_send_json_success( array(
        'message'      => 'Dodano',
        'item_id'      => $item_id,
        'product_name' => $product->get_name(),
        'price'        => $total,
        'total'        => $order->get_formatted_order_total(),
    ) );
}
