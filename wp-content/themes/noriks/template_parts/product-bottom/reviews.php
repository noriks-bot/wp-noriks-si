<!-- product-bottom: SHARED reviews / social proof + FAQ (all products) -->
<!-- end BOXERICE -->






<style>
    .most-popular {
    
        padding-top: 20px;
    
    }
</style>










<!--  BOXERICE stylee -->




















  
  
  <style>
      
      .comparison-section-gray  {
         border-radius: 5px;
        }
              
      .comparison-intro-gray  {
           margin-bottom: 0;
        }
      
  </style>
  <div  style="background: #f9f9f9; padding-top: 30px;" >
<section style="background: #f9f9f9; max-width: 1440px;" class="comparison-section comparison-section-gray">
    <div style="background: #f9f9f9;padding: 0;padding-left: 10px;
    padding-right: 10px;" class="comparison-intro comparison-intro-gray ">
      <!--<h4 style="" class="highlight"><?php echo get_field("singlepp_content_standard_reviews_t1","options"); ?></h4>-->
      <h1 style="color:black;     margin-bottom: 4px;">
          
          <?php if ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') ): ?>

          Nisi sam v boju proti napetosti v vratu.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bunion') ): ?>

          Nisi sam v boju proti bolečinam zaradi haluksa.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopas') ): ?>

          Nisi sam v boju proti bolečinam v hrbtu.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>

          Nisi sam pri iskanju popolnih kompresijskih nogavic.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('norikshers') ): ?>

          Niste edini v iskanju gladke kože brez gub.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('leakboxers') ): ?>

          Niste edini v iskanju zanesljive zaščite pred uhajanjem urina.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice') ): ?>

          Niste edini v iskanju ostrejše silhuete in boljše drže.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk') ): ?>

          Niste edini v iskanju sedenja brez bolečin.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kneefix') ): ?>

           Niste edini, ki išče stabilnejše koleno.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kneefix') ): ?>Tisoče kupcev že nosi opornico NORIKS KneeFix za stabilnejše koleno – na stopnicah, na sprehodu in med dolgim stanjem.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kidsnest') ): ?>

          Niste edini v iskanju mirnega otroškega spanca.

          <?php elseif ( !has_term( array( 'bokserice', 'bokserice-sastavi-paket' ), 'product_cat', get_the_ID() ) ): ?>

          <?php echo get_field("singlepp_content_standard_reviews_t2","options"); ?>

          <?php else: ?>

          Nisi sam v iskanju najboljših bokseric.

          <?php endif; ?>


          </h1>
    <p class="note" style="color: black; margin-top: 0px; margin-bottom: 5px;"><?php if ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') ): ?>Tisoči ljudi že uporabljajo NORIKS FisioRest za manj bolečin in napetosti v vratu – trakcija, vibracija in toplota v eni napravi.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bunion') ): ?>Tisoči ljudi že uporabljajo NORIKS korektor haluksa za manj bolečin in bolj pravilno lego palca – doma, med gledanjem TV ali med spanjem.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopas') ): ?>Tisoči ljudi že nosijo NORIKS ortopedski pas za manj bolečin in stabilnejši hrbet – med delom, pri dvigovanju in dolgotrajnem sedenju.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>Tisoče moških že nosi NORIKS kompresijske nogavice za lažje in bolj spočite noge – v službi, na potovanjih in pri treningu.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('norikshers') ): ?>Tisoče žensk že uporablja HERS silikonske kolagenske trakove za gladko, čvrstejšo in mlajše videti kožo.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('leakboxers') ): ?>Tisoče moških že nosi NORIKS vpojne boksarice za suhost in samozavest – brez vložkov in plenic.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice') ): ?>Tisoče moških že nosi NORIKS kompresijsko majico za zglajen trebuh, boljšo držo in več samozavesti.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk') ): ?>Tisoče kupcev že uporablja NORIKS ErgoSit ortopedsko blazino za sedenje brez bolečin v trtici, hrbtu in kolkih – v avtu, pisarni in doma.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kidsnest') ): ?>Tisoče staršev je običajni vzglavnik že zamenjalo z NORIKS KidsNestom – tišje noči, dihanje skozi nos in spanec, ki zares odpočije.<?php else: ?><?php echo get_field("singlepp_content_standard_reviews_t3","options"); ?><?php endif; ?></p>
    </div>
  </section>
  </div>
  
  
  <style>
      @media (max-width: 768px) {
          
          .basic-reviews-section  {
               padding-left: 0px;
               padding-right: 0px;
            }
            .review .content {
                font-size: 13px;
            }
            .review .info {
                font-size: 13px;
                line-height: 1.3;
            }
            .review {
  
                padding-bottom: 15px;
                margin-bottom: 16px;

            }
      }
  </style>
  
  
  <style>
.loader {
  border: 4px solid #f3f3f3;
  border-top: 4px solid #f5a623;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  animation: spin 0.8s linear infinite;
  margin: 0 auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.extra-review-group {
  opacity: 0;
  transition: opacity 0.5s ease;
}

.extra-review-group.show {
  opacity: 1;
}
</style>







<?php 
  // ===== CONFIG: LANGUAGE & DATA =====
  $reviews_language = get_field("webshop_language", "options");
  if (!$reviews_language) { $reviews_language = "EN"; }

  // Detect if current product belongs to bokserice group
  $current_product_id = (function_exists('is_product') && is_product()) ? get_queried_object_id() : get_the_id();
  $is_bokserice_page  = has_term( array( 'bokserice','orto-bokserice', 'bokserice-sastavi-paket' ), 'product_cat', $current_product_id );
  $is_nogavice_page   = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) );
  $is_ortopas_page    = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) );
  $is_bunion_page     = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) );
  $is_fisiorest_page  = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) );
  $is_norikshers_page = ( function_exists('noriks_is_type') && noriks_is_type('norikshers', $current_product_id) );
  $is_leakboxers_page = ( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $current_product_id) );
  $is_kompmajice_page = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $current_product_id) );
  $is_jastuk_page     = ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk', $current_product_id) );
  $is_kidsnest_page   = ( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) );
  $is_kneefix_page    = ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) );
  // Leak boxers / kompresijske majice / ortopedski jastuk / kidsnest take precedence even if they still carry the socks category.
  if ( $is_leakboxers_page || $is_kompmajice_page || $is_jastuk_page || $is_kidsnest_page || $is_kneefix_page ) { $is_nogavice_page = false; }

  // Fallback product name shown in review cards.
  $rv_fallback_title = $is_kneefix_page ? 'NORIKS KneeFix opornica za koleno'
                     : ( $is_kidsnest_page ? 'NORIKS KidsNest vzglavnik'
                     : ( $is_jastuk_page ? 'NORIKS ErgoSit ortopedska blazina'
                     : ( $is_leakboxers_page ? 'NORIKS vpojne boksarice'
                     : ( $is_kompmajice_page ? 'NORIKS FIT kompresijska majica'
                     : ( $is_norikshers_page ? 'NORIKS HERS'
                     : ( $is_fisiorest_page ? 'NORIKS | FisioRest'
                     : ( $is_bunion_page ? 'NORIKS | Korektor haluksa'
                     : ( $is_ortopas_page ? 'NORIKS | Ortopedski pas'
                     : ( $is_nogavice_page ? 'Kompresijske nogavice z zadrgo' : 'Ena Siva Majica' ) ) ) ) ) ) ) ) );

  // Include review pools (own pool per product group)
  if ( $is_kneefix_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_kneefix.php';
  } elseif ( $is_kidsnest_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_kidsnest.php';
  } elseif ( $is_jastuk_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_ortopedski_jastuk.php';
  } elseif ( $is_leakboxers_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_leakboxers.php';
  } elseif ( $is_kompmajice_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_kompresijske-majice.php';
  } elseif ( $is_norikshers_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_norikshers.php';
  } elseif ( $is_fisiorest_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_fisiorest.php';
  } elseif ( $is_bunion_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_bunion.php';
  } elseif ( $is_ortopas_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_ortopas.php';
  } elseif ( $is_nogavice_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SI_nogavice.php';
  } elseif ( ! $is_bokserice_page )  {
    include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'.php';
  } else {
    include get_stylesheet_directory() . '/auto_reviews/' . $reviews_language . '_bokserice.php';
  }

  include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'-2.php';

  // Ensure arrays exist
  $auto_reviews_en   = is_array($auto_reviews_en)   ? $auto_reviews_en   : [];
  $auto_reviews_ship = isset($auto_reviews_ship) && is_array($auto_reviews_ship) ? $auto_reviews_ship : [];

  // ===== HELPERS: STABLE DAILY RANDOMIZATION =====

  /**
   * Get WP/Woo timezone (fallback Europe/Ljubljana).
   */
  function reviews_wp_tz(): DateTimeZone {
    $tz_string = function_exists('wp_timezone_string') ? wp_timezone_string() : (get_option('timezone_string') ?: 'Europe/Ljubljana');
    return new DateTimeZone($tz_string ?: 'Europe/Ljubljana');
  }

  /**
   * Deterministic "random" integer in [0, $mod-1] from a seed string.
   */
  function stable_mod_index(string $seed, int $mod): int {
    if ($mod <= 0) return 0;
    $h = substr(sha1($seed), 0, 8); // 32-bit slice
    $n = hexdec($h);
    return (int) ($n % $mod);
  }

  /**
   * Deterministic shuffle based on a seed string. (Stable for a given seed.)
   */
  function shuffle_with_seed(array $arr, string $seed): array {
    if (empty($arr)) return $arr;
    $keys = array_keys($arr);
    usort($keys, function($a, $b) use ($seed) {
      $ha = sha1($seed . ':' . $a);
      $hb = sha1($seed . ':' . $b);
      return strcmp($ha, $hb);
    });
    $out = [];
    foreach ($keys as $k) { $out[] = $arr[$k]; }
    return $out;
  }

  /**
   * Build/caches a pool of products: [['title'=>..., 'url'=>...], ...]
   */
  function get_wc_product_pool(
      $transient_key = 'reviews_product_pool_cache_v4',
      $ttl = 12 * HOUR_IN_SECONDS
  ) {
      if ( ! function_exists( 'wc_get_products' ) ) {
          return [];
      }

      $product_id = 0;
      if ( function_exists( 'is_product' ) && is_product() ) {
          $product_id = get_queried_object_id();
      }

      $is_bokserice = false;
      $is_nogavice  = false;
      $is_ortopas   = false;
      $is_bunion    = false;
      $is_fisiorest = false;
      $is_norikshers = false;
      $is_leakboxers = false;
      $is_kompmajice = false;
      $is_jastuk    = false;
      $is_kidsnest  = false;
      if ( $product_id ) {
          $is_bokserice = has_term( array( 'bokserice','orto-bokserice', 'bokserice-sastavi-paket' ), 'product_cat', $product_id );
          $is_nogavice  = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $product_id) );
          $is_ortopas   = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $product_id) );
          $is_bunion    = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $product_id) );
          $is_fisiorest = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $product_id) );
          $is_norikshers = ( function_exists('noriks_is_type') && noriks_is_type('norikshers', $product_id) );
          $is_leakboxers = ( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $product_id) );
          $is_kompmajice = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $product_id) );
          $is_jastuk    = ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk', $product_id) );
          $is_kidsnest  = ( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $product_id) );
          if ( $is_leakboxers || $is_kompmajice || $is_jastuk || $is_kidsnest ) { $is_nogavice = false; }
      }

      /* Kljuc se izpelje iz tipa izdelka — rocni seznam zastavic je zaostajal
         za vejami in je npr. KneeFixu stregel predpomnjeni bazen majic. */
      $noriks_key_type = 'all';
      if ( function_exists( 'noriks_is_type' ) ) {
          foreach ( array( 'kneefix', 'kidsnest', 'ortopedski-jastuk', 'leakboxers', 'kompresijske-majice', 'norikshers', 'fisiorest', 'bunion', 'ortopas', 'kompresijske-nogavice', 'nosilka', 'controlpro', 'dental', 'hairmagic', 'norikshersbrush', 'noriks-cards', 'cloath', 'bra', 'hyd', 'snore', 'cloud', 'bokserice' ) as $t ) {
              if ( noriks_is_type( $t, $product_id ) ) { $noriks_key_type = $t; break; }
          }
      }
      $cache_key = $transient_key . '_' . $noriks_key_type;

      if ( function_exists( 'get_transient' ) ) {
          $cached = get_transient( $cache_key );
          if ( ! empty( $cached ) && is_array( $cached ) ) {
              return $cached;
          }
      }

      $args = [
          'status'  => 'publish',
          'limit'   => -1,
          'return'  => 'ids',
          'orderby' => 'date',
          'order'   => 'DESC',
      ];

      if ( $is_kidsnest ) {
          $args['category'] = [ 'orto-kidsnest' ];
      } elseif ( $is_jastuk ) {
          $args['category'] = [ 'orto-ortopedski-jastuk' ];
      } elseif ( $is_leakboxers ) {
          $args['category'] = [ 'orto-leak-boxers' ];
      } elseif ( $is_kompmajice ) {
          $args['category'] = [ 'orto-kompresijske-majice' ];
      } elseif ( $is_norikshers ) {
          $args['category'] = [ 'orto-norikshers', 'orto-noriks-hers' ];
      } elseif ( $is_fisiorest ) {
          $args['category'] = [ 'orto-fisiorest' ];
      } elseif ( $is_bunion ) {
          $args['category'] = [ 'orto-bunion' ];
      } elseif ( $is_ortopas ) {
          $args['category'] = [ 'orto-ortopas' ];
      } elseif ( $is_nogavice ) {
          $args['category'] = [ 'kompresijske-nogavice', 'orto-kompresijske-nogavice', 'nogavice' ];
      } elseif ( $is_bokserice ) {
          $args['category'] = [ 'bokserice' ];
      } else {
          // Stranice majica: bazen SAMO iz kategorije majica (s podkategorijama).
          // Prije je uzimao sve osim bokserica, pa su recenzije o majicama
          // zavrsavale pod orto proizvodima (Cloth XXL, Cool Curl…).
          $args['category'] = [ 'majice' ];
      }

      $ids = wc_get_products( $args );

      $pool = [];
      if ( ! empty( $ids ) ) {
          foreach ( $ids as $pid ) {
              $title = get_the_title( $pid );
              $url   = get_permalink( $pid );
              if ( $title && $url ) {
                  $pool[] = [
                      'title' => $title,
                      'url'   => $url,
                  ];
              }
          }
      }

      if ( function_exists( 'set_transient' ) ) {
          set_transient( $cache_key, $pool, $ttl );
      }

      return $pool;
  }

  /**
   * Load avatar images from theme folder and return URLs.
   * Expected folders:
   *  - /auto_reviews/bokserice-slike/
   *  - /auto_reviews/majice-slike/
   */
  function get_review_avatar_pool(string $type = 'majice'): array {
    $type = ($type === 'boksarice' || $type === 'bokserice') ? 'bokserice' : 'majice';

    $dir_path = trailingslashit(get_stylesheet_directory()) . 'auto_reviews/' . $type . '-slike/';
    $dir_url  = trailingslashit(get_stylesheet_directory_uri()) . 'auto_reviews/' . $type . '-slike/';

    if ( ! is_dir($dir_path) ) return [];

    $files = glob($dir_path . '*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);
    if (empty($files)) return [];

    $urls = [];
    foreach ($files as $f) {
      $base = basename($f);
      if ($base && $base[0] !== '.') {
        $urls[] = $dir_url . rawurlencode($base);
      }
    }
    return $urls;
  }

  /**
   * Assign avatars (some real, some placeholder) deterministically per day + review index.
   * If real image is chosen, sets $r['avatar_url'].
   */
  function assign_avatars_stable(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $real_probability_percent = 60): array {
    $count = count($avatar_pool);
    foreach ($reviews as $i => &$r) {
      $r['avatar_url'] = '';

      if ($count <= 0) continue;

      $roll = stable_mod_index($daily_seed . ':avatar-roll:' . $context_seed . ':' . $i, 100);
      if ($roll < max(0, min(100, $real_probability_percent))) {
        $pick_i = stable_mod_index($daily_seed . ':avatar-pick:' . $context_seed . ':' . $i, $count);
        $r['avatar_url'] = $avatar_pool[$pick_i] ?? '';
      }
    }
    return $reviews;
  }
  
  
  
  /**
 * Avatar images rules:
 * - First $first_n reviews ALWAYS get an image (if available)
 * - Remaining images (unique) are placed randomly within reviews [$range_start .. $range_end]
 * - Each image can appear ONLY once
 * - Deterministic per day (stable daily seed)
 */
function assign_unique_avatars_first3_then_random_until30(
  array $reviews,
  array $avatar_pool,
  string $daily_seed,
  string $context_seed = 'product',
  int $first_n = 3,
  int $range_start = 3,   // 0-based index: review #4
  int $range_end = 30     // 1-based count: up to review #30 -> last index 29
): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure key exists and default is placeholder
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffle of images (stable per day)
  $pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);
  $pool_count = count($pool);

  // 1) First N reviews always get images (as many as available)
  $first_n = max(0, min($first_n, $total, $pool_count));
  for ($i = 0; $i < $first_n; $i++) {
    $reviews[$i]['avatar_url'] = $pool[$i] ?? '';
  }

  // If no more images left, finish
  if ($pool_count <= $first_n) return $reviews;

  // 2) Randomly place remaining images from review #4 to #30 (indexes 3..29)
  $last_index = min($total - 1, $range_end - 1);
  if ($last_index < $range_start) return $reviews;

  $eligible = range($range_start, $last_index);

  // Deterministic shuffle of eligible positions (stable per day)
  $eligible = shuffle_with_seed($eligible, 'avatar-positions:' . $daily_seed . ':' . $context_seed);

  $remaining_images = array_slice($pool, $first_n);
  $take = min(count($remaining_images), count($eligible));

  for ($j = 0; $j < $take; $j++) {
    $pos = $eligible[$j];
    $reviews[$pos]['avatar_url'] = $remaining_images[$j] ?? '';
  }

  return $reviews;
}
  
  
  
  /**
 * Assign avatars for first N reviews:
 * - Use each real image at most once (no repeats).
 * - Only apply to first $use_first_n reviews.
 * - After that (or if pool runs out), use placeholder (avatar_url = '').
 * Deterministic per day.
 */
function assign_unique_avatars_first_n(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $use_first_n = 10): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure every review has the key
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffled image order for the day + context
  $shuffled_pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);

  // We can only place as many images as we have, and only in first N reviews
  $limit = min($use_first_n, $total, count($shuffled_pool));

  for ($i = 0; $i < $limit; $i++) {
    $reviews[$i]['avatar_url'] = $shuffled_pool[$i] ?? '';
  }

  return $reviews;
}

  /**
   * Assign a deterministic product (title+url) to each review for the day.
   * Stable per day AND per review index.
   */
  function assign_products_stable(array $reviews, array $product_pool, string $daily_seed): array {
    $count = count($product_pool);
    foreach ($reviews as $i => &$r) {
      if ($count > 0) {
        $pick = $product_pool[ stable_mod_index($daily_seed . ':prod:' . $i, $count) ];
        $r['product_title'] = $pick['title'];
        $r['product_url']   = $pick['url'];
      } else {
        $r['product_title'] = $r['product_title'] ?? '';
        $r['product_url']   = $r['product_url']   ?? '';
      }
    }
    return $reviews;
  }

  /**
   * Distribute review dates backward from today to a cutoff date (inclusive),
   * with a deterministic per-day count using the daily seed.
   */
  function assign_dates_stable(array $reviews, string $cutoff_date_string = '20.6.2025', int $min_per_day = 2, int $max_per_day = 9, string $display_format = 'j.n.Y'): array {
    if (empty($reviews)) return $reviews;

    $tz      = reviews_wp_tz();
    $today   = new DateTime('today', $tz);
     $today->modify('-7 days'); // newest review date = today - 7 days
    $cutoff  = DateTime::createFromFormat('j.n.Y', $cutoff_date_string, $tz) ?: new DateTime('20.6.2025', $tz);
    if ($cutoff > $today) $cutoff = clone $today;

    $daily_seed = $today->format('Y-m-d');
    $reviews    = shuffle_with_seed($reviews, 'reviews-order:' . $daily_seed);

    $total    = count($reviews);
    $assigned = 0;
    $day_off  = 0;

    while ($assigned < $total) {
      $date = (clone $today)->modify("-{$day_off} days");
      if ($date < $cutoff) $date = clone $cutoff;

      $span   = max(0, $max_per_day - $min_per_day);
      $add    = ($span > 0) ? (stable_mod_index('perday:'.$daily_seed.':'.$day_off, $span + 1)) : 0;
      $perday = $min_per_day + $add;

      $take = min($perday, $total - $assigned);
      for ($i = 0; $i < $take; $i++) {
        $reviews[$assigned]['assigned_date'] = $date->format($display_format);
        $assigned++;
      }

      $day_off++;
      if ($date == $cutoff && $assigned >= $total) break;
    }

    foreach ($reviews as &$r) {
      if (empty($r['assigned_date'])) $r['assigned_date'] = $cutoff->format($display_format);
    }
    return $reviews;
  }

  // ===== BUILD FOR TODAY =====
  $tz         = reviews_wp_tz();
  $today_obj  = new DateTime('today', $tz);
  $daily_seed = $today_obj->format('Y-m-d');

  // Avatar pools based on page category
  $avatar_type = $is_bokserice_page ? 'bokserice' : 'majice';
  // Compression socks + belt + bunion + fisiorest + norikshers + leak boxers + kompresijske majice + ortopedski jastuk + kidsnest: text-only reviews (no avatar images).
  $avatar_pool = ( $is_nogavice_page || $is_ortopas_page || $is_bunion_page || $is_fisiorest_page || $is_norikshers_page || $is_leakboxers_page || $is_kompmajice_page || $is_jastuk_page || $is_kidsnest_page || $is_kneefix_page ) ? array() : get_review_avatar_pool($avatar_type);

  // On single-product landing pages (leak boxers / kompresijske majice) the cards should
  // reference THIS product (via $rv_fallback_title), not random pool products.
  $product_pool = ( $is_leakboxers_page || $is_kompmajice_page || $is_kneefix_page ) ? array() : get_wc_product_pool();

  // 1) Stable daily shuffle of review pools
  $auto_reviews_en   = shuffle_with_seed($auto_reviews_en,   'pool-en:'   . $daily_seed);
  $auto_reviews_ship = shuffle_with_seed($auto_reviews_ship, 'pool-ship:' . $daily_seed);

  // 2) Stable product assignment for the day
  $auto_reviews_en   = assign_products_stable($auto_reviews_en,   $product_pool, $daily_seed);
  $auto_reviews_ship = assign_products_stable($auto_reviews_ship, $product_pool, $daily_seed);

  // 3) Deterministic date distribution back to cutoff 20.06.2025
  $auto_reviews_en   = assign_dates_stable($auto_reviews_en,   '20.6.2025', 2, 9, 'j.n.Y');
  $auto_reviews_ship = assign_dates_stable($auto_reviews_ship, '20.6.2025', 2, 9, 'j.n.Y');


  // 4) Deterministic avatars (some real, some placeholder)
$auto_reviews_en   = assign_unique_avatars_first3_then_random_until30($auto_reviews_en,   $avatar_pool, $daily_seed, 'product', 3, 3, 30);

$auto_reviews_ship = assign_unique_avatars_first_n($auto_reviews_ship, $avatar_pool, $daily_seed, 'shipping', 0);

  
  

  // ===== PAGINATION CHUNKS =====
  $initial_count = 18;   // show on load
  $load_count    = 9;    // per "load more"

  $initial_product   = array_slice($auto_reviews_en, 0, $initial_count);
  $remaining_product = array_slice($auto_reviews_en, $initial_count);
  $chunks_product    = array_chunk($remaining_product, $load_count);

  $initial_ship   = array_slice($auto_reviews_ship, 0, $initial_count);
  $remaining_ship = array_slice($auto_reviews_ship, $initial_count);
  $chunks_ship    = array_chunk($remaining_ship, $load_count);

  // Dynamic counts
  $prod_count = count($auto_reviews_en);
  $ship_count = count($auto_reviews_ship);
?>

<?php if ( $is_nogavice_page || $is_ortopas_page || $is_bunion_page || $is_fisiorest_page || $is_norikshers_page || $is_leakboxers_page || $is_kompmajice_page || $is_jastuk_page || $is_kidsnest_page || $is_kneefix_page ) : ?>
<style>/* socks + belt + bunion + fisiorest + norikshers + leak boxers + kompresijske majice + ortopedski jastuk + kidsnest: text-only reviews, no avatar */ #reviews-section .avatar { display: none !important; }</style>
<?php endif; ?>

<section id="reviews-section" class="basic-reviews-section" style="margin-bottom:40px!important;padding-bottom:40px!important;">
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1440px;padding-top:20px!important;margin:0 auto;padding-left: 10px; padding-right: 10px;">

    <!-- Tabs -->
    <div class="reviews-tabs" style="display:flex;gap:18px;border-bottom:1px solid #cbc8c8;margin-bottom:18px;">
      <button type="button" class="reviews-tab is-active" data-tab="product"
        style="appearance:none;background:#00000008;border:1px solid #cbc8c8;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Recenzije produkta', 'your-textdomain'); ?> (692)
      </button>
      <button type="button" class="reviews-tab" data-tab="shipping"
        style="appearance:none;background:transparent;border:1px solid transparent;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Recenzije dostave', 'your-textdomain'); ?> (389)
      </button>
    </div>

    <!-- PRODUCT GRID (default visible) -->
    <div class="reviews-grid" id="reviews-grid-product">
      <?php if (!empty($initial_product)) : foreach ($initial_product as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title"><a href="<?php echo esc_url($url); ?>">
              <?php echo esc_html($title); ?>
            </a></h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ($avatar_url) : ?>
              <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
            <?php else : ?>
              <div class="avatar">👤</div>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Potrjen kupec','your-textdomain'); ?></span>
          </div>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

    <!-- SHIPPING GRID (hidden initially) -->
    <div class="reviews-grid" id="reviews-grid-shipping" style="display:none;">
      <?php if (!empty($initial_ship)) : foreach ($initial_ship as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title">
              <a href="<?php echo esc_url($url); ?>">
                <?php echo esc_html($title); ?>
              </a>
            </h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ($avatar_url) : ?>
              <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
            <?php else : ?>
              <div class="avatar">👤</div>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Potrjen kupec','your-textdomain'); ?></span>
          </div>
          <?php if (!empty($review['headline'])) : ?>
            <div class="headline"><?php echo esc_html($review['headline']); ?></div>
          <?php endif; ?>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

  </div>

  <!-- Controls: one CTA row, reused per tab -->
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1100px;margin-top:30px!important;margin:0 auto;">
    <div class="cta-button" style="background:transparent;padding:0;justify-content:left;">
      <a class="cta-button2 button button--xl"
         style="margin:0 auto;text-align:left;background:black;font-family:'Roboto',sans-serif;color:#fff;text-transform:none;font-size:15px;padding:10px 25px;"
         href="#"><?php echo get_field("singlepp_content_standard_reviews_seemore_button","options"); ?></a>
    </div>
    <div id="reviews-loading" style="display:none;text-align:center;padding:15px;">
      <div class="loader"></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function(){
    // Data from PHP (already include product_title/product_url/assigned_date/avatar_url)
    const chunksProduct = <?php echo json_encode($chunks_product); ?>;
    const chunksShip    = <?php echo json_encode($chunks_ship); ?>;

    let nextProduct = 0;
    let nextShip    = 0;

    const tabs    = document.querySelectorAll('.reviews-tab');
    const gridP   = document.getElementById('reviews-grid-product');
    const gridS   = document.getElementById('reviews-grid-shipping');
    const seeMore = document.querySelector('.cta-button2');
    const loader  = document.getElementById('reviews-loading');

    let activeTab = 'product';

    function setTab(tab){
      activeTab = tab;
      tabs.forEach(t=>{
        if(t.dataset.tab === tab){ t.classList.add('is-active'); t.style.background='#00000008'; t.style.borderColor='#e6e6e6'; }
        else{ t.classList.remove('is-active'); t.style.background='transparent'; t.style.borderColor='transparent'; }
      });
      if(tab === 'product'){ gridP.style.display='grid'; gridS.style.display='none'; }
      else{ gridP.style.display='none'; gridS.style.display='grid'; }

      const moreAvail = tab === 'product'
        ? (nextProduct < (chunksProduct?.length || 0))
        : (nextShip < (chunksShip?.length || 0));
      if (seeMore) seeMore.style.display = moreAvail ? 'inline-block' : 'none';
    }

    setTab('product');
    tabs.forEach(btn => btn.addEventListener('click', ()=> setTab(btn.dataset.tab)));

    // Escape helper
    const esc = (str) => String(str ?? '').replace(/[&<>"']/g, s => ({
      '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'
    }[s]));

    function avatarHtml(avatarUrl){
      if(avatarUrl){
        return `<div class="avatar"><img src="${esc(avatarUrl)}" alt="" loading="lazy" /></div>`;
      }
      return `<div class="avatar">👤</div>`;
    }

    // Append a chunk of cards into a grid
    function appendChunk(grid, chunk){
      chunk.forEach(function(review){
        const article = document.createElement('article');
        article.className = 'review-card is-new';

        const url       = review.product_url   || '#';
        const title     = review.product_title || '<?php echo esc_js($rv_fallback_title); ?>';
        const name      = review.name          || 'Anonymní';
        const text      = review.text          || '';
        const headline  = review.headline      || '';
        const date      = review.assigned_date || '';
        const avatarUrl = review.avatar_url    || '';

        article.innerHTML = `
          <div class="card-top">
            <h3 class="product-title"><a href="${esc(url)}">${esc(title)}</a></h3>
            <div class="date">${esc(date)}</div>
          </div>
          <div class="stars">★★★★★</div>
          <div class="identity">
            ${avatarHtml(avatarUrl)}
            <div class="name">${esc(name)}</div>
            <span class="verified"><?php _e('Potrjen kupec','your-textdomain'); ?></span>
          </div>
          ${headline ? `<div class="headline">${esc(headline)}</div>` : ''}
          <div class="content">${esc(text)}</div>
        `;
        grid.appendChild(article);
      });
    }

    seeMore && seeMore.addEventListener('click', function(e){
      e.preventDefault();
      seeMore.style.display='none';
      loader.style.display='block';

      setTimeout(function(){
        if(activeTab === 'product' && nextProduct < (chunksProduct?.length || 0)){
          appendChunk(gridP, chunksProduct[nextProduct]);
          nextProduct++;
        }else if(activeTab === 'shipping' && nextShip < (chunksShip?.length || 0)){
          appendChunk(gridS, chunksShip[nextShip]);
          nextShip++;
        }
        loader.style.display='none';
        const moreAvail = activeTab === 'product'
          ? (nextProduct < (chunksProduct?.length || 0))
          : (nextShip < (chunksShip?.length || 0));
        if(moreAvail) seeMore.style.display='inline-block';
      }, 400);
    });
  });
</script>

<!-- new review styling -->
<style>
/* ===== Reviews: Full corrected CSS ===== */

/* Section + container */
#reviews-section{
  font-family: "Roboto", system-ui, -apple-system, Segoe UI, Arial, sans-serif;
  background:#f9f9f9;
}
.basic-reviews-section-container{
  max-width:1440px;
  margin:0 auto;
  padding:0 0px;
}

/* Tabs */
.reviews-tabs{ display:flex; gap:18px; border-bottom:1px solid #eee; margin-bottom:18px; }
.reviews-tab{
  appearance:none; background:transparent; border:1px solid transparent; border-bottom:0;
  padding:8px 14px; font-weight:700; cursor:pointer;
}
.reviews-tab.is-active{ background:#00000008; border-color:#e6e6e6; }

/* Grid */
.reviews-grid{
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:10px;
  width:100%;
}
@media (max-width:1100px){
  .reviews-grid{ grid-template-columns:repeat(2, 1fr); }
}
@media (max-width:640px){
  .reviews-grid{ grid-template-columns:1fr; }
}

/* Card */
.review-card{
  width:100%;
  height:100%;
  background:#fff;
  border:1px solid #efefef;
  border-radius:4px;
  box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
  padding:18px 20px;
  display:flex;
  flex-direction:column;
}

/* Card top */
.review-card .card-top{
  display:flex; align-items:flex-start; justify-content:space-between; gap:12px;
  margin:-2px 0 6px;
}
.review-card .product-title{
  margin:0; font-weight:800; font-size:16px; line-height:1.25;
}
.review-card .product-title a{
  color:#0e0e0e; text-decoration:underline; text-underline-offset:2px;
}
.review-card .date{
  color:#8c8c8c; font-size:13px; white-space:nowrap; margin-top:2px;
}

/* Stars */
.review-card .stars{
  letter-spacing:3px; font-size:18px; color:#0f0f0f; margin:2px 0 10px;
}

/* Identity */
.review-card .identity{
    
  display:flex;
  align-items:flex-start;   /* ⬅️ top-align items */
  gap:12px;
  margin:2px 0 12px;
  
  
}
.review-card .avatar{
  width:32px; height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex; align-items:center; justify-content:center;
  font-size:18px; color:#000; background:#fff;
  overflow:hidden;
}
.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}
.review-card .name{ font-weight:700; color:#111; font-size:15px; }
.review-card .verified{
  display:inline-block; background:#0f0f0f; color:#fff;
  font-size:12px; font-weight:700; line-height:1;
  padding:5px 8px 4px; border-radius:3px; margin-left:6px;
}

/* Headline + body */
.review-card .headline{ font-weight:800; font-size:16px; color:#111; margin:6px 0 6px; }
.review-card .content{ color:#2b2b2b; font-size:15px; line-height:1.7; }

/* Reveal for appended cards */
.review-card.is-new{ animation:rv-fade .28s ease-out both; }
@keyframes rv-fade{ from{opacity:0; transform:translateY(6px);} to{opacity:1; transform:none;} }

/* Loader */
#reviews-loading .loader{
  width:28px; height:28px; border:3px solid #e6e6e6; border-top-color:#111; border-radius:50%;
  margin:0 auto; animation:rv-spin .75s linear infinite;
}
@keyframes rv-spin{ to{ transform:rotate(360deg);} }



/* Default avatar (placeholder) stays 32x32 */
.review-card .avatar{
  width:32px;
  height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:18px;
  color:#000;
  background:#fff;
  overflow:hidden;
}

/* If avatar contains a real image -> make it 80x80 */
.review-card .avatar:has(img){
  width:250px;
  height:250px;
  font-size:0; /* hide any accidental text spacing */
  align-items:stretch;
  justify-content:stretch;
}

.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}

/* ONLY reviews with real image */
.review-card .identity:has(.avatar img){
  display:block;              /* ⬅️ image gets own row */
}

/* Real image wrapper */
.review-card .avatar:has(img){
  width:100%;
  height:auto;
  border:none;
  margin-bottom:10px;
}

/* Real image itself */
.review-card .avatar img{
  width:100%;
  max-width:320px;
  height:auto;
  display:block;
  object-fit:cover;
  border:1px solid #dfdfdf;
  border-radius:4px;
}

/* Name + verified BELOW image */
.review-card .identity:has(.avatar img) .name,
.review-card .identity:has(.avatar img) .verified{
  display:inline-block;
  vertical-align:middle;
}


@media (max-width: 991px){

  /* ONLY reviews with real image */
  .review-card .avatar:has(img){
    max-width:100%;
  }

  .review-card .avatar img{
    width:100%;        /* ✅ full width on mobile */
    max-width:100%;
    height:auto;
  }

}


</style>






<?php 
$faq_list = get_field('faq_list', 'option');
$faq_list2 = get_field('faq_list_2', 'option');
$faq_list3 = get_field('faq_list_3', 'option');

$is_knc = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') );
$is_ortopas_faq   = ( function_exists('noriks_is_type') && noriks_is_type('ortopas') );
$is_bunion_faq    = ( function_exists('noriks_is_type') && noriks_is_type('bunion') );
$is_fisiorest_faq = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') );
$is_norikshers_faq = ( function_exists('noriks_is_type') && noriks_is_type('norikshers') );
$is_leakboxers_faq = ( function_exists('noriks_is_type') && noriks_is_type('leakboxers') );
$is_kompmajice_faq = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice') );
$is_jastuk_faq     = ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk') );
$is_kidsnest_faq   = ( function_exists('noriks_is_type') && noriks_is_type('kidsnest') );
$is_kneefix_faq   = ( function_exists('noriks_is_type') && noriks_is_type('kneefix') );
if ( $is_leakboxers_faq || $is_kompmajice_faq || $is_jastuk_faq || $is_kidsnest_faq || $is_kneefix_faq ) { $is_knc = false; } // carry sock cat but are NOT socks

// NORIKS FIT (kompresijska/oblikovalna majica) — product FAQ, replaces ONLY the
// "Informacije o izdelku" container. (Prevod z reference, NORIKS FIT.)
$kompmajice_faq = array(
  array(
    'questioon' => 'Za koga je NORIKS FIT namenjen?',
    'answer'    => 'NORIKS FIT je ustvarjen za moške, ki želijo vitkejši videz, povrniti samozavest v lastno telo, popraviti držo, se čez dan počutiti bolj energične in izgledati vitkejši pod katerimikoli oblačili.'
  ),
  array(
    'questioon' => 'Kako NORIKS FIT majica pravzaprav deluje?',
    'answer'    => 'NORIKS FIT uporablja napredno ionsko kompresijsko tkanino, ki aktivira naravni odziv telesa. Mikro-tkana vlakna spodbujajo zdravo cirkulacijo in vam pomagajo ohranjati vzravnano držo od jutra do večera. Ob rednem nošenju daje vidno bolj oblikovan trup, boljšo poravnavo hrbtenice in več samozavesti.'
  ),
  array(
    'questioon' => 'Kako hitro bom opazil rezultate?',
    'answer'    => 'Vsako telo je drugačno, ampak večina kupcev poroča o vidni spremembi v prvih 30 dneh. Za najboljši učinek nosite NORIKS FIT vsak dan in ga kombinirajte z uravnoteženo prehrano ter rednim gibanjem.'
  ),
  array(
    'questioon' => 'Ali se vidi pod srajco?',
    'answer'    => 'Ne. NORIKS FIT je tanek, diskreten in neviden pod katerokoli srajco, hkrati pa oblikuje trebuh in prsni koš ter podpira držo.'
  ),
  array(
    'questioon' => 'Kako se pere in iz česa je izdelan?',
    'answer'    => 'Izdelan je iz 80 % najlona in 20 % elastana. Perite ga na hladnem, nežnem programu, da ohranite kompresijo in podaljšate življenjsko dobo tkanine.'
  ),
);

// NORIKS LEAK BOXERS (inkontinencne boksarice) — product FAQ, replaces ONLY the
// "Informacije o izdelku" container. (Prevod z reference, NORIKS.)
$leakboxers_faq = array(
  array(
    'questioon' => 'Zakaj je NORIKS izbralo več kot 123.000 moških?',
    'answer'    => 'NORIKS so najbolj vpojne pralne boksarice za moško uhajanje urina: zadržijo do 300 ml, so Oeko-Tex® certificirane in brez škodljivih snovi, pralne in za večkratno uporabo (okolju prijazna alternativa vložkom za enkratno uporabo), zasnovane za celodnevno udobje in samozavest. Kar 87 % kupcev po prvem nakupu naroči znova.'
  ),
  array(
    'questioon' => 'Koliko vpijejo?',
    'answer'    => 'Do 300 ml — skoraj 3-krat več kot večina izdelkov na trgu. Zahvaljujoč 7-slojnemu jedru PureDry™ se tekočina trenutno vpije in zaklene globoko v notranjost, zato koža ostane suha, zunanji sloj pa je vodoodbojen.'
  ),
  array(
    'questioon' => 'Ali se vidijo pod oblačili?',
    'answer'    => 'Ne. NORIKS boksarice so tanke, diskretne in prožne — izgledajo in se občutijo kot običajno perilo, brez okornosti in brez občutka „plenice“.'
  ),
  array(
    'questioon' => 'Kako se perejo?',
    'answer'    => 'Perite na 30–40 °C, brez mehčalca in belila, sušite na zraku. Vpojno moč ohranijo skozi stotine pranj.'
  ),
  array(
    'questioon' => 'Ali je dostava diskretna?',
    'answer'    => 'Da. Vsa naročila pošiljamo v nevtralni, diskretni embalaži brez vidnih oznak vsebine, da zaščitimo vašo zasebnost.'
  ),
  array(
    'questioon' => 'Iz česa so izdelane?',
    'answer'    => 'Zunanji sloj iz bambusovega vlakna z elastanom, 7-slojno vpojno jedro iz tehničnih mikrovlaken ter vodoodbojna zračna membrana.'
  ),
);

// ErgoSit ortopedska blazina — product FAQ (NORIKS).
$jastuk_faq = array(
  array( 'questioon' => 'Kako NORIKS ErgoSit blaži bolečine pri sedenju?', 'answer' => 'ErgoSit ima izrez za trtico, ki odpravi neposreden pritisk na trtično kost in išiadični živec, anatomska oblika iz spominske pene visoke gostote pa enakomerno porazdeli težo po kolkih in stegnih. Tako se razbremenijo občutljive točke in podpira zdrava, vzravnana drža.' ),
  array( 'questioon' => 'Kje vse lahko uporabljam blazino?', 'answer' => 'Kjer koli sedite — v avtomobilu, na pisarniškem stolu, jedilnem stolu, invalidskem vozičku ali doma. Stabilna nedrseča baza jo drži na mestu, zato gre udobje z vami ves dan.' ),
  array( 'questioon' => 'Ali se pena sčasoma splošči?', 'answer' => 'Ne. ErgoSit uporablja spominsko peno visoke gostote, ki ohrani obliko in čvrstost tudi po dolgotrajni vsakodnevni uporabi — za razliko od poceni blazin, ki se hitro sploščijo.' ),
  array( 'questioon' => 'Ali se prevleka lahko pere?', 'answer' => 'Da. Prevleka se sname in lahko pere v pralnem stroju, zato blazina ostane sveža in čista. Tkanina je zračna, hipoalergena in OEKO-TEX® certificirana.' ),
  array( 'questioon' => 'Ali ustreza mojemu stolu ali sedežu?', 'answer' => 'ErgoSit je univerzalne oblike in se prilega večini avtosedežev, pisarniških in kuhinjskih stolov ter invalidskih vozičkov. Velikosti ni — en model ustreza vsem.' ),
  array( 'questioon' => 'V kolikšnem času občutim razliko?', 'answer' => 'Večina uporabnikov občuti manj pritiska na trtico in udobnejše sedenje že od prvega dne. Za boljšo držo in manj bolečin v hrbtu se učinek dodatno stopnjuje z redno uporabo.' ),
  array( 'questioon' => 'Ali obstaja garancija vračila denarja?', 'answer' => 'Da, vsaki NORIKS ErgoSit je priložena 30-dnevna garancija udobja. Če ne občutite manj bolečin in več udobja, nas kontaktirajte in bomo uredili.' ),
);

// KidsNest otroski vzglavnik — product FAQ (NORIKS, ublazene trditve).
$kneefix_faq = array(
  array(
    'questioon' => 'Je KneeFix primeren za vsakodnevno uporabo?',
    'answer'    => 'Da. NORIKS KneeFix je razvit prav za vsakodnevne gibe — hojo, delo, hojo po stopnicah ali daljše stanje.',
  ),
  array(
    'questioon' => 'Ali lahko kompresijo nastavim sam?',
    'answer'    => 'Da. Z vgrajenim natančnim kolescem kompresijo nastavite sami — toliko opore, kolikor vam je prijetno.',
  ),
  array(
    'questioon' => 'Ali opornica med hojo zdrsava?',
    'answer'    => 'KneeFix ima protizdrsni silikonski rob, ki pomaga zmanjšati zdrsavanje in zvijanje opornice med nošenjem.',
  ),
  array(
    'questioon' => 'Ali lahko opornico nosim pod oblačili?',
    'answer'    => 'Da. Prilagodljiv in tanek kroj omogoča prijetno nošenje pod večino vsakodnevnih oblačil.',
  ),
  array(
    'questioon' => 'Ali opornica ustreza obema kolenoma?',
    'answer'    => 'Ob naročilu izberete stran (levo ali desno), zato se opornica prilega prav tistemu kolenu, ki ga želite podpreti.',
  ),
  array(
    'questioon' => 'Ali lahko opornico nosim dlje časa?',
    'answer'    => 'Opornica je razvita za vsakodnevno uporabo. Mnogi kupci jo nosijo v službi, na sprehodu in pri vsakodnevnih opravilih.',
  ),
  array(
    'questioon' => 'Kako izberem velikost?',
    'answer'    => 'Velikosti so določene po telesni teži: M (50–75 kg), L (76–90 kg), XL (91–110 kg) in 2XL (110 kg+).',
  ),
);

$kidsnest_faq = array(
  array( 'questioon' => 'Kako hitro bom videl(a), da dihanje skozi usta preneha?', 'answer' => 'Večina staršev opazi tišje dihanje in manj prebujanj z odprtimi usti v prvih 5–7 nočeh. Do 14. noči se pri večini otrok smrčanje umiri, ustnice pa ostanejo zaprte. Polno razliko — vidno boljši položaj in mirnejši spanec — starši najpogosteje opisujejo okoli 21. do 30. dneva. Uporabljajte ga vsako noč.' ),
  array( 'questioon' => 'Za katero starost je KidsNest namenjen?', 'answer' => 'KidsNest je na voljo v treh velikostih: 1–3, 3–9 in 9–14 let. Najpomembnejše okno je med 3. in 9. letom, ko se nebo in čeljust najintenzivneje razvijata — a vsaka starost ima svojo velikost in svojo korist.' ),
  array( 'questioon' => 'Ali je varen? Kaj je v njem?', 'answer' => 'KidsNest je izdelan iz hipoalergene, OEKO-TEX® certificirane spominske pene — brez formaldehida, težkih kovin in BPA. Odporen je na pršice in zračen, prevleka pa se sname in opere v pralnem stroju.' ),
  array( 'questioon' => 'Ali ga bo moj otrok res uporabljal?', 'answer' => 'Da. Ergonomska oblika se občuti kot podpora, ne kot nekaj čudnega — večina otrok se navadi v 1–2 nočeh. Starši pogosto sporočajo, da otroci po prvem tednu nočejo spati brez njega. 3-conska struktura naravno sprejme glavo — ni "pravilnega načina", ni boja pred spanjem.' ),
  array( 'questioon' => 'Ali deluje, če moj otrok že diha skozi usta?', 'answer' => 'Da — prav za takšne otroke je zasnovan. 3-conska struktura pomaga preprečiti nagibanje glave nazaj, zaradi katerega se usta v spanju odprejo. Pri večini otrok se v 7–14 nočeh ustnice naravno zaprejo in dihanje skozi nos se povrne.' ),
  array( 'questioon' => 'Kaj pa, če mojemu otroku ne pomaga?', 'answer' => 'Naj otrok spi na KidsNestu 30 noči. Če ne vidite razlike — manj dihanja skozi usta, tišje noči, mirnejši spanec — nam pišite in vrnemo denar. Brez vprašanj in brez drobnega tiska.' ),
);

// Korektor haluksa — FAQ o izdelku (prevod, NORIKS).
$bunion_faq = array(
  array( 'questioon' => 'Kako hitro se bom počutil bolje?', 'answer' => 'Približno 30 minut — toliko časa je potrebno, da se ublaži nelagodje. Ob redni uporabi dva tedna boste občutili znatno olajšanje pri vsakodnevnih dejavnostih, kot so hoja, stanje ali spanje.' ),
  array( 'questioon' => 'Kako hitro bom opazil razliko na haluksu?', 'answer' => 'Odvisno od resnosti haluksa večina kupcev opazi vidno izboljšanje po 4–8 tednih. Blag haluks: 4 tedne. Zmeren haluks: 4 tedne. Hujši haluks: 8 tednov.' ),
  array( 'questioon' => 'Ali se lahko nosi v čevljih? Ali lahko hodim z njim?', 'answer' => 'Ne, v čevelj ne gre. Da, hodite lahko z njim. Vendar je namenjen mirovanju — ko ležite na kavču, gledate TV, berete ali spite.' ),
  array( 'questioon' => 'Kaj če mi bo neprijetno?', 'answer' => 'To je povsem normalno! NORIKS korektor je zasnovan dovolj čvrsto, da poravna sklep palca, ustavi vnetje in zmanjša nelagodje. Morda boste potrebovali 1–2 seji, da se navadite, po tem pa se boste počutili veliko bolje!' ),
  array( 'questioon' => 'Kako dolgo naj ga uporabljam?', 'answer' => 'Priporočamo, da začnete s 30 minutami na dan in postopoma povečujete do seje 1 do 3 ure. Ko vam bo udobno, ga lahko začnete nositi tudi med spanjem. Nosite ga med sproščanjem — na kavču, ob TV, branju ali spanju.' ),
  array( 'questioon' => 'Ali bo pomagal pri mojem specifičnem stanju?', 'answer' => 'NORIKS korektor je idealen za: lajšanje nelagodja, ki vpliva na vsakodnevne dejavnosti, kot sta hoja ali stanje; olajšanje nelagodja zaradi haluksa med počitkom ali spanjem; obravnavo haluksa v zgodnji fazi, ki morda napreduje; haluks, ki se je vrnil po operaciji; pomoč pri hujšem haluksu, pripravljenem na operacijo; ter kot učinkovita nekirurška možnost.' ),
  array( 'questioon' => 'Ali bo ustrezal mojemu stopalu? Ali obstajata leva in desna stran?', 'answer' => 'Ne glede na velikost stopala — od najmanjšega otroškega do velikega stopala odrasle osebe — se NORIKS korektor udobno prilega. Ni strani! Po zaslugi prilagodljive zasnove se enako zlahka prilagodi levemu ali desnemu stopalu.' ),
);

// Ortopedski pas — FAQ o izdelku (prevod, NORIKS).
$ortopas_faq = array(
  array( 'questioon' => 'Kako hitro občutim olajšanje bolečin?', 'answer' => 'Mnogi uporabniki občutijo opazno olajšanje išiasa in bolečin v križu takoj po namestitvi pasu NORIKS. Njegova ciljna kompresija nudi takojšnjo oporo, stabilizira hrbtenico in zmanjša pritisk na živce. Za dolgotrajen učinek priporočamo, da pas dosledno nosite po navodilih vsaj dva tedna. Sčasoma boste ob pravilni uporabi in zdravih navadah lahko občutili trajno olajšanje in boljšo gibljivost.' ),
  array( 'questioon' => 'Kako pravilno namestiti pas?', 'answer' => 'Pas NORIKS nosite okoli bokov, malo pod linijo pasu. Nahajati se mora nad križničnim predelom (spodnji del hrbta, tik nad zadnjico) in pod grebenom medenice (zgornji del stranskih bokov). Za več informacij si oglejte navodila za uporabo.' ),
  array( 'questioon' => 'Ali pas oslabi moje mišice?', 'answer' => 'Ne, pas NORIKS ne oslabi mišic tako kot steznik za hrbet. Le pomaga držati SI-sklepe skupaj in obnavlja normalno napetost vezi. Nosite ga lahko tedne ali mesece brez strahu pred atrofijo mišic.' ),
  array( 'questioon' => 'Ali lahko pas nosim tudi med spanjem?', 'answer' => 'Da, pas lahko nosite tudi ponoči. Trajanje nošenja ni omejeno in daljše nošenje nima negativnih učinkov.' ),
  array( 'questioon' => 'Kako tesno naj ga namestim?', 'answer' => 'Pas se mora tesno prilegati, a ne pretesno, da se izognete nelagodju. Brez težav se morate gibati, ne da bi pas zarezoval ali zdrsnil. Napetost je z elastičnimi trakovi enostavno nastavljiva.' ),
  array( 'questioon' => 'Komu ga priporočate?', 'answer' => 'Vsem, ki se spopadajo z bolečinami v križu, išiasom, mišično napetostjo, kilo medvretenčne ploščice, bolečinami v kolkih ali medenici ter težavami s SI-sklepom. Ne glede na starost, spol, višino in težo.' ),
  array( 'questioon' => 'Ali obstaja garancija vračila denarja?', 'answer' => 'Ponujamo garancijo zadovoljstva! Če s pasom NORIKS niste zadovoljni, nas kontaktirajte na info@noriks.com za vračilo in povračilo v 30 dneh. Rok se šteje od prejema pasu.' ),
);

// FisioRest — FAQ o izdelku (prevod, NORIKS).
$fisiorest_faq = array(
  array( 'questioon' => 'Kako NORIKS FisioRest deluje?', 'answer' => 'FisioRest združuje trakcijo, toploto in vibracijsko masažo z ergonomsko zasnovo iz spominske pene. Ta tehnologija razteza vrat pod točno pravim kotom in razbremeni vratno hrbtenico. Nato pomirjujoča topla masaža spodbudi dotok s kisikom in hranili bogate krvi v mišice ter tako pomaga pri regeneraciji tkiv.' ),
  array( 'questioon' => 'Po čem je FisioRest boljši od drugih naprav?', 'answer' => 'NORIKS FisioRest je poseben, ker združuje <strong>tri terapije v eni</strong> — toploto, masažo in nežno trakcijo — ki sprostijo mišice in znova poravnajo vrat za dolgotrajno olajšanje. Poleg tega je <strong>brezžičen, varen za spanje in ovit v hladilno svilo</strong> za udobje, kakršnega drugje ne boste našli.' ),
  array( 'questioon' => 'Kako se uporablja FisioRest?', 'answer' => '1. Napolnite ga s priloženim USB-C kablom in polnilnikom približno 4 do 6 ur. 2. Držite tipko za masažo ali toploto 5 sekund, dokler ne zasveti lučka. 3. S ponovnim pritiskom tipk spreminjate hitrost masaže in nastavitve toplote. 4. Uživajte v sproščujoči masaži!' ),
  array( 'questioon' => 'Kako dolgo naj uporabljam FisioRest?', 'answer' => 'Priporočamo, da začnete s 15 minutami, da se vrat privadi. Sčasoma lahko napredujete do polne seje. Za orientacijo: cikel nežne toplote, masaže in trakcije traja 30 minut, kar je običajno idealen čas, da se vrat sprosti in povrne svojo naravno krivino.' ),
  array( 'questioon' => 'Ali je FisioRest brezžičen?', 'answer' => 'Da! NORIKS FisioRest je popolnoma brezžičen in polnilen za vsakodnevno uporabo.' ),
  array( 'questioon' => 'Kako se čisti FisioRest?', 'answer' => 'Tkanina je odporna na olja in prah, vendar priporočamo, da FisioRest po uporabi obrišete z razkuževalnim robčkom, saj prevleka blazine ni pralna.' ),
  array( 'questioon' => 'Ali je varen za vse?', 'answer' => 'NORIKS FisioRest je zasnovan tako, da ustreza vsem, ne glede na starost ali spol. Vendar je vsaka situacija drugačna. Za podrobne smernice, prilagojene vašim potrebam, priporočamo posvet z zdravnikom.' ),
  array( 'questioon' => 'Ali ga lahko vrnem, če ne vidim rezultatov?', 'answer' => 'Seveda! Nudimo polno garancijo vračila denarja v 30 dneh od dostave, če z izdelkom niste zadovoljni. Pišite nam na info@noriks.com in odgovorili bomo v 12 urah od prejema sporočila!' ),
);

// Compression-sock benefit content — replaces ONLY the product-info FAQ
// container ("...izdelku") on sock products; delivery/returns stay.
$knc_faq = array(
  array( 'questioon' => 'Težke in utrujene noge', 'answer' => 'NORIKS kompresijske nogavice uporabljajo graduirano kompresijo 15–20 mmHg, da spodbudijo cirkulacijo od gležnja navzgor. Namesto da bi se kri zadrževala v nogah, postopni pritisk podpira naravni povratni tok. Vaše noge se že po nekaj urah počutijo lažje.' ),
  array( 'questioon' => 'Krčne žile in venske težave', 'answer' => 'Ko cirkulacija oslabi, se žile razširijo ter postanejo vidne in boleče. NORIKS nogavice izvajajo blag, a stalen pritisk, ki podpira stene žil in olajša pretok krvi. Idealne so kot dopolnilo medicinskemu zdravljenju ali za preventivo pri osebah, nagnjenih k venskim težavam.' ),
  array( 'questioon' => 'Otekline in zadrževanje vode', 'answer' => 'Dolgotrajno sedenje ali stanje povzroča kopičenje tekočine v gležnjih in mečih. NORIKS nogavice izvajajo najmočnejši pritisk ob gležnju, ki se navzgor postopno zmanjšuje — ta graduirana kompresija pomaga zmanjšati otekline in preprečuje, da bi se zadrževanje vode čez dan ustalilo.' ),
  array( 'questioon' => 'Odrevenelost in mravljinci', 'answer' => 'Preozke ali slabo prilegajoče nogavice pritiskajo na žile in povzročajo ta neprijeten občutek mravljincev. NORIKS nogavice so zasnovane iz zračne tkanine in z uravnoteženo kompresijo, ki spodbuja cirkulacijo, ne da bi prekinila pretok krvi. Vaše noge ostanejo vitalne in občutljive, brez odrevenelosti ali mravljincev.' ),
  array( 'questioon' => 'Udobje za občutljivo kožo', 'answer' => 'Že blag pritisk lahko postane neprijeten na občutljivi ali razdraženi koži. NORIKS nogavice združujejo mehko in zračno tkanino, zaščitno notranjo podlogo ob zadrgi ter zmerno kompresijo za učinkovito oporo brez drgnjenja ali draženja. Nosite jih ves dan brez skrbi.' ),
);
// NORIKS HERS — FAQ o izdelku (prevod, NORIKS).
$norikshers_faq = array(
  array( 'questioon' => 'V čem se razlikuje od običajnih obližev proti gubam ali krem za brazgotine?', 'answer' => 'Večina obližev proti gubam je iz papirja ali hidrokoloida, kreme za brazgotine pa pogosto ostanejo le na površini kože. NORIKS HERS uporablja silikon klinične kakovosti, ki mu dermatologi že leta zaupajo pri vidnem izboljšanju teksture brazgotin in prožnosti kože — zdaj pa ga uporabljajo tudi za zmanjševanje gub.' ),
  array( 'questioon' => 'Ali lahko en sam obliž res deluje na gube in brazgotine?', 'answer' => 'Da, saj so gube in brazgotine posledica razgradnje kolagena ali slabe regeneracije kože. Silikon podpira zadrževanje vlage, obnovo kolagena in glajenje teksture kože, kar koristi obojemu.' ),
  array( 'questioon' => 'V kolikšnem času bom videl rezultate?', 'answer' => 'Večina uporabnikov opazi vidno zglajene fine linije že po 1–3 uporabah, videz brazgotin pa se izboljša v 2–3 tednih redne uporabe. Globlje brazgotine in gube lahko trajajo dlje, a se rezultati sčasoma stopnjujejo.' ),
  array( 'questioon' => 'Ali je varen za občutljivo ali k aknam nagnjeno kožo?', 'answer' => 'Vsekakor. NORIKS HERS je hipoalergen, brez lateksa in dovolj nežen za občutljiva območja, kot je okolica oči ali ust, celo za celeče se sledi aken. Če je vaša koža zelo reaktivna, ga vedno najprej preizkusite na majhnem predelu.' ),
  array( 'questioon' => 'Kako dolgo ga lahko nosim?', 'answer' => 'Za najboljše rezultate priporočamo nošenje NORIKS HERS 6–8 ur, ponoči. Uporabljate ga lahko tudi podnevi — le pazite, da je koža pod njim čista in brez olj ali serumov.' ),
  array( 'questioon' => 'Kako dolgo zdrži en zvitek?', 'answer' => 'Odvisno od tega, kako pogosto in kje ga uporabljate, en zvitek zdrži 3–6 tednov. Ker je za večkratno uporabo, je precej bolj varčen kot obliži ali kreme za enkratno uporabo.' ),
  array( 'questioon' => 'Ali ostane na mestu, medtem ko spim?', 'answer' => 'Da! NORIKS HERS je izdelan iz koži prijaznega, obstojnega lepila, ki sledi vašim gibom. Diha in ostane na mestu, tudi pri tistih, ki spijo na boku.' ),
  array( 'questioon' => 'Na katerih predelih ga lahko uporabljam?', 'answer' => 'Kjer koli! Večina kupcev NORIKS HERS uporablja na: gubah na čelu, gubah med obrvmi, mimičnih gubah, gubah na vratu, sledeh po aknah, brazgotinah po carskem rezu, strijah ter kirurških ali poškodbenih brazgotinah.' ),
  array( 'questioon' => 'Zakaj je NORIKS HERS boljši od poceni spletnih obližev?', 'answer' => 'Mnogi obliži, ki se prodajajo na spletu, so slabe kakovosti, tanki ali imajo slabo lepilo. NORIKS HERS uporablja vrhunski silikon, laboratorijsko preizkušen glede varnosti in obstojnosti, ter ostane na mestu vso noč. Poleg tega nudimo predano podporo strankam in hitrejšo zamenjavo, če potrebujete pomoč.' ),
  array( 'questioon' => 'Ali obstaja garancija vračila denarja?', 'answer' => 'Da, ponujamo 30-dnevno garancijo brez tveganja. Če niste zadovoljni, nas preprosto kontaktirajte in bomo uredili.' ),
);

$faq_pick = function( $title, $list ) use ( $is_knc, $knc_faq, $is_ortopas_faq, $ortopas_faq, $is_bunion_faq, $bunion_faq, $is_fisiorest_faq, $fisiorest_faq, $is_norikshers_faq, $norikshers_faq, $is_leakboxers_faq, $leakboxers_faq, $is_kompmajice_faq, $kompmajice_faq, $is_jastuk_faq, $jastuk_faq, $is_kidsnest_faq, $kidsnest_faq, $is_kneefix_faq, $kneefix_faq ) {
  $is_info = ( stripos( (string) $title, 'izdelku' ) !== false );
  if ( $is_kneefix_faq && $is_info )    { return $kneefix_faq; }
  if ( $is_kidsnest_faq && $is_info )   { return $kidsnest_faq; }
  if ( $is_jastuk_faq && $is_info )     { return $jastuk_faq; }
  if ( $is_leakboxers_faq && $is_info ) { return $leakboxers_faq; }
  if ( $is_kompmajice_faq && $is_info ) { return $kompmajice_faq; }
  if ( $is_norikshers_faq && $is_info ) { return $norikshers_faq; }
  if ( $is_fisiorest_faq && $is_info ) { return $fisiorest_faq; }
  if ( $is_bunion_faq && $is_info )    { return $bunion_faq; }
  if ( $is_ortopas_faq && $is_info )   { return $ortopas_faq; }
  if ( $is_knc && $is_info )           { return $knc_faq; }
  return $list;
};
?>





<section class="faq-section">
  <h2><?php echo get_field("singlepp_content_part_faq_h1","options"); ?></h2>
  

   <!-- first faq container --> 
      <div class="faq-container">
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #222223;
            margin-bottom: 10px; "><?php echo get_field('faq_title_1', 'option'); ?></h4>
            <?php 
              $faq_list = $faq_pick( get_field('faq_title_1', 'option'), $faq_list );
              if( $faq_list && is_array($faq_list) ):
                      foreach( $faq_list as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo function_exists('noriks_no_free_exchange') ? noriks_no_free_exchange( $faq_item["questioon"] ) : $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
    <!-- first faq container --> 
  
     <!-- 2 faq container --> 
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo get_field('faq_title_2', 'option'); ?></h4>
            <?php 
              $faq_list2 = $faq_pick( get_field('faq_title_2', 'option'), $faq_list2 );
              if( $faq_list2 && is_array($faq_list2) ):
                      foreach( $faq_list2 as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo function_exists('noriks_no_free_exchange') ? noriks_no_free_exchange( $faq_item["questioon"] ) : $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
        <!-- 2 faq container --> 
  
     <!-- 3 faq container --> 
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo get_field('faq_title_3', 'option'); ?></h4>
            <?php 
              $faq_list3 = $faq_pick( get_field('faq_title_3', 'option'), $faq_list3 );
              if( $faq_list3 && is_array($faq_list3) ):
                      foreach( $faq_list3 as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo function_exists('noriks_no_free_exchange') ? noriks_no_free_exchange( $faq_item["questioon"] ) : $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
  <!-- 3 faq container --> 
  
</section>

<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const faqAnswer = button.nextElementSibling;
      const arrow = button.querySelector('.arrow');

      if (faqAnswer.style.maxHeight) {
        faqAnswer.style.maxHeight = null;
        arrow.style.transform = 'rotate(0deg)';
      } else {
        document.querySelectorAll('.faq-answer').forEach(item => {
          item.style.maxHeight = null;
        });
        document.querySelectorAll('.arrow').forEach(item => {
          item.style.transform = 'rotate(0deg)';
        });
        faqAnswer.style.maxHeight = faqAnswer.scrollHeight + 'px';
        arrow.style.transform = 'rotate(180deg)';
      }
    });
  });
</script>
