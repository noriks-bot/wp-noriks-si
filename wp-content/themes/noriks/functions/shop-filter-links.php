<?php
/**
 * NORIKS — filtri kategorij brez vticnika YITH.
 *
 * Nadomesti [yith_wcan_filters slug="..."] v woocommerce/archive-product.php.
 *
 * Filtri so bili v praksi le povezave na kategorije, zato jih izrisemo sami:
 *   - na strani trgovine  -> izbrane vrhnje kategorije
 *   - v kategoriji z otroki -> njeni otroci
 *   - v kategoriji brez otrok -> sorojenci (da lahko kupec preklaplja)
 *
 * Povezave so DIREKTNE na kategorijo (get_term_link), brez ?yith_wcan= parametrov.
 *
 * Razredi so namenoma enaki kot pri vticniku, da ostane videz nespremenjen;
 * potreben del sloga je prenesen v noriks_shop_filter_links_css().
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Katere vrhnje kategorije naj se pokazejo na strani trgovine.
 * Po trgih se slugi razlikujejo, zato pustimo filter za popravke.
 */
function noriks_shop_filter_root_slugs() {
	return apply_filters( 'noriks_shop_filter_root_slugs', array(
		'bestsellers',
		'zacetni-paketi',
		'veliki-paketi',
	) );
}

/**
 * Vrne seznam terminov (WP_Term), ki naj se izrisejo na trenutni strani.
 */
function noriks_shop_filter_terms() {

	$args = array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
		'orderby'    => 'name',
		'order'      => 'ASC',
	);

	// Stran trgovine -> vnaprej dolocene vrhnje kategorije, v zapisanem vrstnem redu.
	if ( is_shop() ) {
		$out = array();
		foreach ( noriks_shop_filter_root_slugs() as $slug ) {
			$t = get_term_by( 'slug', $slug, 'product_cat' );
			if ( $t && ! is_wp_error( $t ) && $t->count > 0 ) $out[] = $t;
		}
		return $out;
	}

	if ( ! is_product_category() ) return array();

	$current = get_queried_object();
	if ( ! $current || ! isset( $current->term_id ) ) return array();

	// Kategorija z otroki -> pokazi otroke.
	$children = get_terms( array_merge( $args, array( 'parent' => $current->term_id ) ) );
	if ( ! is_wp_error( $children ) && ! empty( $children ) ) return $children;

	// Brez otrok -> pokazi sorojence, da se da preklapljati znotraj iste skupine.
	if ( $current->parent ) {
		$siblings = get_terms( array_merge( $args, array( 'parent' => $current->parent ) ) );
		if ( ! is_wp_error( $siblings ) && ! empty( $siblings ) ) return $siblings;
	}

	return array();
}

/**
 * Izris. Klici v archive-product.php: <?php noriks_shop_filter_links(); ?>
 */
function noriks_shop_filter_links() {

	$terms = noriks_shop_filter_terms();
	if ( empty( $terms ) ) return;

	$current_id = 0;
	if ( is_product_category() ) {
		$q = get_queried_object();
		if ( $q && isset( $q->term_id ) ) $current_id = (int) $q->term_id;
	}

	echo '<div class="yith-wcan-filters no-title noriks-filters">';
	echo '<div class="filters-container">';
	echo '<div class="yith-wcan-filter filter-tax label-design" data-taxonomy="product_cat">';
	echo '<div class="filter-content">';
	echo '<ul class="filter-items filter-label level-0">';

	foreach ( $terms as $t ) {
		$link = get_term_link( $t );
		if ( is_wp_error( $link ) ) continue;

		$active = ( (int) $t->term_id === $current_id ) ? ' active' : '';

		printf(
			'<li class="filter-item label level-0 no-image label-right%1$s">'
			. '<a href="%2$s" role="button" data-term-id="%3$d" data-term-slug="%4$s">'
			. '<span class="term-label">%5$s</span></a></li>',
			esc_attr( $active ),
			esc_url( $link ),
			(int) $t->term_id,
			esc_attr( $t->slug ),
			esc_html( $t->name )
		);
	}

	echo '</ul></div></div></div></div>';
}

/**
 * Slog. Prenesen iz vticnikovega shortcodes.css (samo pravila za te "cipe")
 * in iz njegovega inline sloga (barvne spremenljivke), da videz ostane isti
 * tudi po izklopu vticnika.
 */
function noriks_shop_filter_links_css() {
	if ( ! is_shop() && ! is_product_category() ) return;
	?>
<style id="noriks-filter-links-css">
:root{
	--yith-wcan-filters_colors_titles: #333333;
	--yith-wcan-filters_colors_background: #FFFFFF;
	--yith-wcan-filters_colors_accent: rgb(222,222,222);
	--yith-wcan-labels_style_background: #FFFFFF;
	--yith-wcan-labels_style_background_hover: rgb(222,222,222);
	--yith-wcan-labels_style_background_active: rgb(222,222,222);
	--yith-wcan-labels_style_text: rgb(0,0,0);
	--yith-wcan-labels_style_text_hover: rgb(0,0,0);
	--yith-wcan-labels_style_text_active: rgb(0,0,0);
}
.yith-wcan-filters .yith-wcan-filter .filter-items { float: none; list-style: none; padding-left: 0; }
.yith-wcan-filters .yith-wcan-filter .filter-items.level-0 { margin: 0; padding: 0; }
.yith-wcan-filters .yith-wcan-filter .filter-items.filter-label { font-size: 0; margin: 0 -5px; }
.yith-wcan-filters .yith-wcan-filter.label-design .filter-items { font-size: 0; }
.yith-wcan-filters .yith-wcan-filter .filter-item.label { display: inline-block; margin: 0 5px 10px; vertical-align: top; }
.yith-wcan-filters .yith-wcan-filter .filter-item.label > a {
	background: var(--yith-wcan-labels_style_background, #fff);
	color: var(--yith-wcan-labels_style_text, #000);
	border: 1px solid #D7D7D7;
	border-radius: 0;
	display: inline-block;
	font-size: 14px;
	line-height: 1.4;
	padding: 3px 10px;
	text-decoration: none;
	cursor: pointer;
}
.yith-wcan-filters .yith-wcan-filter .filter-item.label > a:hover {
	background: var(--yith-wcan-labels_style_background_hover, rgb(222,222,222));
	color: var(--yith-wcan-labels_style_text_hover, #000);
}
.yith-wcan-filters .yith-wcan-filter .filter-item.label.active > a {
	background: var(--yith-wcan-labels_style_background_active, rgb(222,222,222));
	color: var(--yith-wcan-labels_style_text_active, #000);
}
.yith-wcan-filters .yith-wcan-filter .filter-title { display: none; }
</style>
	<?php
}
add_action( 'wp_head', 'noriks_shop_filter_links_css', 99 );
