<?php
/**
 * product-bottom: ORTOPEDSKI PAS ZA HRBET (ortopas)
 *
 * Dedicated bottom-nicer for the NORIKS orthopedic back belt.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('ortopas').
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ------------------------------------------------------------------
 * MEDIJI po sekcijah.
 * Videi 2, 3, 4, 6 so v temi (git) — /img/ortopas-videos/.
 * TODO: sliki 1 (kolaž) in 5 (indikacije) sta zaenkrat HR verziji —
 *       potrebni SI (slovenski) sliki.
 * ------------------------------------------------------------------ */
$opz_vid_dir      = get_template_directory_uri() . '/img/ortopas-videos/';
$opz_img_collage  = 'https://noriks.com/hr/wp-content/uploads/2026/07/ortopas-hr-9.png'; // 1) zadovoljne stranke (slika) — TODO SI
$opz_video_relief = $opz_vid_dir . 'relief.mp4';                                          // 2) naravno olajšanje (video)
$opz_video_cause  = $opz_vid_dir . 'cause.mp4';                                           // 3) pravi vzrok (video)
$opz_img_indik    = 'https://noriks.com/hr/wp-content/uploads/2026/07/noriks_static_indikacije_HR_1x1.png'; // 5) kako deluje (slika) — TODO SI
$opz_video_feat   = $opz_vid_dir . 'features.mp4';                                        // 6) inovativne značilnosti (video)

/* Kartice (krožni videi) — 4) sekcija s 3 karticami */
$opz_cards = array(
    array(
        'video' => $opz_vid_dir . 'card-1.mp4',
        'title' => 'Blaži težave',
        'text'  => 'Lahko nudi hitro olajšanje pri išiasu in bolečinah v hrbtu',
    ),
    array(
        'video' => $opz_vid_dir . 'card-2.mp4',
        'title' => 'Razbremenitev ledvene hrbtenice',
        'text'  => 'Stabilizira in poravna spodnji del hrbta',
    ),
    array(
        'video' => $opz_vid_dir . 'card-3.mp4',
        'title' => 'Preverjena metoda',
        'text'  => 'Temelji na ciljni kompresijski tehnologiji',
    ),
);

/* Primerjalna tabela — 7) sekcija. array( naziv, NORIKS(bool), Fizio(bool) ) */
$opz_cmp_rows = array(
    array( 'Olajšanje bolečin',              true,  true  ),
    array( 'Dolgotrajen učinek',             true,  false ),
    array( 'Ugodna cena',                    true,  false ),
    array( 'Takojšnja sprostitev',           true,  false ),
    array( 'Brez čakanja',                   true,  false ),
    array( '60-dnevna garancija vračila denarja', true, false ),
    array( 'Dolgoročni stroški',             false, true  ),
);
/* Mnenja s sliko — 8) sekcija */
$opz_reviews = array(
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-1.webp',
        'title' => 'Velika pomoč proti bolečinam v spodnjem delu hrbta',
        'text'  => 'Pas NORIKS mi je resnično zelo olajšal življenje. Deluje točno tako, kot obljublja. Spet se lahko sklonim brez bolečin.',
        'name'  => 'Elizabeta M.',
    ),
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-2.jpg',
        'title' => 'Mehak in udoben',
        'text'  => 'Moj fizioterapevt mi je priporočil pas proti bolečinam v hrbtu. Prej sem preizkusil tudi druge pasove, a ta je veliko udobnejši za sedenje in sklanjanje. Kljub temu nudi odlično oporo!',
        'name'  => 'Julija U.',
    ),
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-3.webp',
        'title' => 'Vrhunsko!',
        'text'  => 'Pomaga mi, da sedim vzravnano in imam občutek, da hodim bolj pokončno. Bolečine so se močno zmanjšale in končno lahko brez bolečin vstanem tudi po daljšem sedenju. Pas nosim približno 2–3 ure na dan – večinoma v službi.',
        'name'  => 'Ivan D.',
    ),
);

$opz_yes = '<svg class="opz-yes" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M5 12.5l4 4 10-10" fill="none" stroke="#22a45d" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$opz_no  = '<svg class="opz-no" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M7 7l10 10M17 7L7 17" fill="none" stroke="#dc3545" stroke-width="2.4" stroke-linecap="round"/></svg>';
?>

<!-- ============ 1) Več kot 14.000 zadovoljnih strank ============ -->
<section class="opz-why opz-customers">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_img_collage ); ?>" alt="Zadovoljne stranke NORIKS ortopedskega pasu" />
    </div>
    <div class="opz-col opz-copy">
      <div class="opz-stars" aria-hidden="true">★★★★★</div>
      <h2 class="opz-title">Več kot 14.000 zadovoljnih strank</h2>
      <p class="opz-sub">Tisoči ljudi so vsakodnevno bolečino v hrbtu že zamenjali s stabilnostjo in olajšanjem — v službi, med vožnjo in doma.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Naravno olajšanje bolečin ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_relief ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Naravno olajšanje bolečin</h2>
      <p>Ko nadanete pas NORIKS, napredna tehnologija z <strong>dvema kompresijskima conama</strong> poskrbi za pravilno poravnavo vaših bokov in spodnjega dela hrbta. To lahko stabilizira vašo hrbtenico in razbremeni išijasni živec.</p>
      <p>Običajno bi morali opraviti obsežno fizioterapijo, da bi dosegli to olajšanje. Pas NORIKS omogoča, da <strong>olajšanje občutite v realnem času</strong> — medtem ko delate ali ste v gibanju z najdražjimi.</p>
      <p>Takoj ko sta vaš spodnji del hrbta in boki pravilno podprta, se lahko pritisk na išijasni živec zmanjša. To lahko pomeni <strong>manj bolečin in večjo gibljivost</strong>.</p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravi vzrok bolečin v hrbtu in išiasa ============ -->
<section class="opz-why opz-cause">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_cause ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Pravi vzrok bolečin v hrbtu in išiasa</h2>
      <p>Ure, preživete za pisalno mizo, ponavljajoči se gibi ali težko fizično delo lahko ustvarijo <strong>neenakomeren pritisk na medvretenčne ploščice</strong>. V kombinaciji z nepravilno držo lahko to skozi leta povzroči znatne poškodbe hrbtenice.</p>
      <p>Posledično lahko ploščice zdrsnejo iz svojega položaja in pritisnejo na išijasni živec, kar povzroči <strong>pekočo bolečino, zbadanje in celo šibkost</strong>, ki se širijo od spodnjega dela hrbta navzdol po nogah.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Naravno olajšanje (3 kartice) ============ -->
<section class="opz-why opz-cards">
  <div class="opz-wrap">
    <h2 class="opz-cards-title">Naravno olajšanje pri išiasu in bolečinah v hrbtu</h2>
    <div class="opz-cards-grid">
      <?php foreach ( $opz_cards as $opz_card ) : ?>
        <div class="opz-card">
          <div class="opz-card-media">
            <video src="<?php echo esc_url( $opz_card['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="opz-card-head">
            <span class="opz-check" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="22" height="22"><circle cx="12" cy="12" r="12" fill="#28a745"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <h3 class="opz-card-title"><?php echo esc_html( $opz_card['title'] ); ?></h3>
          </div>
          <p class="opz-card-text"><?php echo esc_html( $opz_card['text'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) Kako deluje pas NORIKS? ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_img_indik ); ?>" alt="Indikacije — pri čem pomaga NORIKS ortopedski pas" />
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Kako deluje pas NORIKS?</h2>
      <p>Pas NORIKS <strong>ciljno stabilizira</strong> področje L5 hrbtenice s pomočjo <strong>ciljne kompresije</strong>, pravilno poravna medenico in vrne SI-sklep v njegov naravni obseg gibanja.</p>
      <p><strong>Podpira problematično področje</strong>, lahko razbremeni medvretenčne ploščice in tako zmanjša pritisk na išijasni živec.</p>
      <p>Ciljna kompresija spodbuja krvni obtok, s čimer se lahko podpre proces samozdravljenja.</p>
      <p>Ta kombinacija lahko nudi hitro olajšanje pri išiasu, bolečinah v hrbtu in SI-težavah ter <strong>dolgotrajno lajšanje bolečin</strong> ob redni uporabi.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Inovativne značilnosti ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_feat ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Inovativne značilnosti</h2>
      <p><strong>Tanek in praktičen:</strong> Razvit za vsakodnevno uporabo in se udobno prilega pod večino oblačil, tako da nihče ne opazi, da ga nosite!</p>
      <p><strong>Nastavljiva kompresija:</strong> Omogoča vam, da stopnjo opore prilagodite svojim potrebam, in nudi največje udobje.</p>
      <p>Dostop do fizioterapevtov in strokovnjakov za bolečino je pogosto omejen ter povezan z visokimi stroški in porabo časa. <strong>Pas NORIKS ponuja profesionalno rešitev na najvišji ravni</strong> in predstavlja učinkovito ter dostopno alternativo.</p>
    </div>
  </div>
</section>

<!-- ============ 7) Pas NORIKS v primerjavi (tabela) ============ -->
<section class="opz-why opz-compare">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Pas NORIKS v primerjavi</h2>
      <p class="opz-sub">Ciljno deluje na spodnji del hrbta, da zmanjša obremenitve.</p>
    </div>
    <div class="opz-col">
      <table class="opz-table">
        <thead>
          <tr>
            <th class="opz-th-feat"></th>
            <th class="opz-th-brand">NORIKS</th>
            <th class="opz-th-alt">Fizio</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $opz_cmp_rows as $opz_r ) : ?>
            <tr>
              <th class="opz-feat"><?php echo esc_html( $opz_r[0] ); ?></th>
              <td class="opz-brand"><?php echo $opz_r[1] ? $opz_yes : $opz_no; ?></td>
              <td class="opz-alt"><?php echo $opz_r[2] ? $opz_yes : $opz_no; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============ 8) Mnenja strank (s sliko) ============ -->
<section class="opz-why opz-reviews">
  <div class="opz-wrap">
    <div class="opz-reviews-grid">
      <?php foreach ( $opz_reviews as $opz_rev ) : ?>
        <div class="opz-review">
          <div class="opz-review-media">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_rev['img'] ); ?>" alt="NORIKS pas — mnenje stranke <?php echo esc_attr( $opz_rev['name'] ); ?>" />
          </div>
          <div class="opz-review-stars" aria-hidden="true">★★★★★</div>
          <h3 class="opz-review-title"><?php echo esc_html( $opz_rev['title'] ); ?></h3>
          <p class="opz-review-text"><?php echo esc_html( $opz_rev['text'] ); ?></p>
          <div class="opz-review-name"><?php echo esc_html( $opz_rev['name'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  /* Ni "Tabela velikosti" povezave na pasu (ne plugin ne globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description) pasu: skrij standardne pike (•),
     ostane samo ✅ iz besedila; malo razmika med "Prednosti:" in seznamom.
     (Ta predloga se naloži samo na orto-ortopas straneh.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
  }
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }

  .opz-why { padding: 44px 0; }
  .opz-why.opz-customers { background: #f7f7f7; }
  .opz-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .opz-row { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .opz-media img,
  .opz-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .opz-stars { color: #f5a623; font-size: 24px; letter-spacing: 2px; margin-bottom: 10px; }
  .opz-title { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1c1c1c; line-height: 1.15; margin: 0 0 16px; }
  .opz-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 14px; }
  .opz-sub { font-size: 17px; line-height: 1.6; color: #333; margin: 0; }

  /* --- 4) sekcija s karticami (sivo ozadje / noriks stil) --- */
  .opz-why.opz-cards { background: #f7f7f7; }
  .opz-cards-title { text-align: center; font-size: clamp(22px,2.6vw,30px); font-weight: 800; color: #1c1c1c; margin: 0 0 32px; line-height: 1.2; }
  .opz-cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
  .opz-card { background: #fff; border-radius: 14px; padding: 26px 22px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
  .opz-card-media { width: 108px; height: 108px; margin: 0 auto 18px; border-radius: 50%; overflow: hidden; }
  .opz-card-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .opz-card-head { display: flex; align-items: center; justify-content: center; gap: 8px; margin: 0 0 10px; }
  .opz-check { flex: 0 0 auto; line-height: 0; }
  .opz-card-title { font-size: 18px; font-weight: 800; color: #1c1c1c; margin: 0; line-height: 1.2; }
  .opz-card-text { font-size: 14px; line-height: 1.55; color: #555; margin: 0; }

  /* --- primerjalna tabela (noriks zeleni stil) --- */
  .opz-why.opz-compare { background: #f7f7f7; }
  .opz-table { width: 100%; border-collapse: separate; border-spacing: 0; background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 18px rgba(0,0,0,0.07); }
  .opz-table th, .opz-table td { padding: 13px 14px; text-align: center; vertical-align: middle; }
  .opz-table thead th { background: #22a45d; color: #fff; font-size: 15px; font-weight: 800; }
  .opz-table thead .opz-th-feat { background: #22a45d; }
  .opz-table .opz-feat { background: #22a45d; color: #fff; font-weight: 700; text-align: left; font-size: 14px; line-height: 1.25; width: 55%; }
  .opz-table tbody tr td { border-bottom: 1px solid #eee; background: #fff; }
  .opz-table tbody tr:last-child td,
  .opz-table tbody tr:last-child .opz-feat { border-bottom: 0; }
  .opz-table .opz-brand { background: #f2fbf6; }
  .opz-yes, .opz-no { display: inline-block; vertical-align: middle; }

  /* --- 8) mnenja strank (s sliko) --- */
  .opz-reviews-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .opz-review { background: #fafafa; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05); text-align: center; }
  .opz-review-media { width: 100%; aspect-ratio: 1 / 1; background: #eee; }
  .opz-review-media img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .opz-review-stars { color: #f5b301; font-size: 20px; letter-spacing: 2px; margin: 16px 0 8px; }
  .opz-review-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 14px 10px; line-height: 1.25; }
  .opz-review-text { font-size: 14px; line-height: 1.6; color: #444; margin: 0 16px 14px; }
  .opz-review-name { font-size: 13px; font-style: italic; font-weight: 700; color: #333; border-top: 1px solid #e6e6e6; margin: 0 16px; padding: 12px 0 18px; }

  @media (max-width: 820px) {
    .opz-row { grid-template-columns: 1fr; gap: 22px; }
    .opz-title { text-align: left; }
    .opz-cards-grid { grid-template-columns: 1fr; gap: 16px; }
    .opz-reviews-grid { grid-template-columns: 1fr; gap: 18px; }
    .opz-table th, .opz-table td { padding: 11px 10px; }
    .opz-table .opz-feat { font-size: 13px; }
    .opz-table thead th { font-size: 14px; }
  }
</style>
