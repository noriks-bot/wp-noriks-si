<?php
/**
 * product-bottom: FISIOREST (orto-fisiorest)
 *
 * Dedicated bottom-nicer for the NORIKS FisioRest product.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('fisiorest').
 *
 * SCAFFOLD — mediji v temi: img/fisiorest*.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// 1) "Znanstveno podprto" — 4 kartice.
$fis_science = array(
    array( 'title' => 'Grba na vratu',        'text' => 'Trakcija <strong>sprosti pritisk in povrne pravilno držo</strong>, da zmanjša grbo zaradi tehnološkega vratu.' ),
    array( 'title' => 'Bolečine v vratu',     'text' => '<strong>Ublaži mišične vozle in okorelost</strong> ter <strong>znova poravna krivino vratu</strong> za hitro olajšanje bolečin.' ),
    array( 'title' => 'Kakovosten spanec',    'text' => 'Pomirjujoča terapija <strong>sprosti vrat in hrbtenico</strong> za globok in osvežujoč spanec.' ),
    array( 'title' => 'Sproščanje stresa',    'text' => 'Topla masaža in raztezanje <strong>sprostita nakopičeno napetost</strong> za večje udobje.' ),
);
$fis_v = get_template_directory_uri() . '/img/fisiorest-videos/';
$fis_hero_video = $fis_v . 'hero.mp4';

// 3) Priporočajo strokovnjaki
$fis_experts = array(
    array( 'vid' => $fis_v.'v01.mp4', 'name' => 'Marina Novak',   'role' => 'Certificirana masažna terapevtka', 'org' => '' ),
    array( 'vid' => $fis_v.'v08.mp4', 'name' => 'Dr. Ana Kovač',  'role' => 'Doktorica fizioterapije',          'org' => '' ),
    array( 'vid' => $fis_v.'v03.mp4', 'name' => 'Dr. Ivan Zupan', 'role' => 'Doktor kiropraktike',              'org' => '' ),
);
// 4) Izkušnje uporabnikov
$fis_ugc = array(
    array( 'vid' => $fis_v.'v09c.mp4', 'cap' => '„Prvič po dolgem času sem končno brez bolečin…"' ),
    array( 'vid' => $fis_v.'v06.mp4', 'cap' => '„Blazina NORIKS je moja nova vsakodnevna nujnost…"' ),
    array( 'vid' => $fis_v.'v11c.mp4', 'cap' => '„Zelo mi pomaga pri lajšanju napetosti v vratu in ramenih."' ),
    array( 'vid' => $fis_v.'v02c.mp4', 'cap' => '„Če ste ravno postali mamica, bi to lahko bilo prav tisto, kar potrebujete…"' ),
);
// 5) ThermoTrac 3-v-1
$fis_thermo = array(
    array( 'vid' => $fis_v.'v10.mp4', 'title' => 'Terapija s trakcijo' ),
    array( 'vid' => $fis_v.'v07.mp4', 'title' => 'Terapija z vibracijo' ),
    array( 'vid' => $fis_v.'v05.mp4', 'title' => 'Terapija s toploto' ),
);
// 6) Štiri izboljšave
$fis_upgrades = array(
    array( 't' => 'Polnilna baterija',        'd' => 'Vzemite ga kamor koli — baterija 2500 mAh zdrži do 2 uri.' , 'ico' => 'battery-v2.png' ),
    array( 't' => 'Prevleka iz murvine svile', 'd' => 'Ovita v hladilno svilo za mehak, luksuzen občutek.' , 'ico' => 'silk-v2.png' ),
    array( 't' => 'Izklop po 30 min',         'd' => 'Štiri seje po 30 minut na eno polnjenje, brez skrbi.' , 'ico' => 'timer-v2.png' ),
    array( 't' => 'Regulirana toplota',       'd' => 'Gretje na 50 °C z napredno tehnologijo ThermoTrac.' , 'ico' => 'heat-v2.png' ),
);
?>

<!-- ============ 1) Znanstveno podprto ============ -->
<section class="fis-science">
  <div class="fis-wrap">
    <div class="fis-box">
      <h2 class="fis-title">Znanstveno podprto: dokazano olajšanje za nego vratu</h2>
      <div class="fis-grid">
        <?php foreach ( $fis_science as $fis_c ) : ?>
          <div class="fis-card">
            <h3 class="fis-card-title"><?php echo esc_html( $fis_c['title'] ); ?></h3>
            <p class="fis-card-text"><?php echo wp_kses_post( $fis_c['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 2) Video hero + naslov ============ -->
<section class="fis-hero">
  <video class="fis-hero-vid" src="<?php echo esc_url( $fis_hero_video ); ?>" muted autoplay loop playsinline preload="metadata"></video>
  <div class="fis-hero-overlay"></div>
  <div class="fis-hero-inner">
    <h2 class="fis-hero-title">Odklenite globok ponovni zagon z združeno močjo poravnave in sprostitve</h2>
  </div>
</section>

<!-- ============ 3) Priporočajo strokovnjaki ============ -->
<section class="fis-experts">
  <div class="fis-wrap fis-exp-grid">
    <div class="fis-exp-quote">
      <h2 class="fis-h2">Priporočajo strokovnjaki</h2>
      <p>„NORIKS je ena najboljših blazin za vrat trenutno na trgu. Ker sem v wellness skupnosti že več kot 25 let, sem preizkusila različne blazine za vrat, in tisto, po čemer NORIKS izstopa, je funkcija trakcije…</p>
      <p>Če imate izbočeno glavo ali 'sključeno držo', lahko trakcija pomaga, da se vretenca znova poravnajo in v celoti podprejo telo. Sama ga uporabljam in priporočam svojim strankam!"</p>
      <p class="fis-exp-author"><strong>Marina Novak</strong><br>Certificirana masažna terapevtka</p>
    </div>
    <div class="fis-exp-cards">
      <?php foreach ( $fis_experts as $e ) : ?>
        <div class="fis-exp-card">
          <video src="<?php echo esc_url( $e['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          <div class="fis-exp-cap">
            <div class="fis-exp-name"><?php echo esc_html( $e['name'] ); ?></div>
            <div class="fis-exp-role"><?php echo esc_html( $e['role'] ); ?></div>
            <?php if ( $e['org'] ) : ?><div class="fis-exp-org"><?php echo esc_html( $e['org'] ); ?></div><?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) Izkušnje uporabnikov ============ -->
<section class="fis-ugc">
  <div class="fis-wrap">
    <div class="fis-ugc-grid">
      <?php foreach ( $fis_ugc as $u ) : ?>
        <div class="fis-ugc-card">
          <div class="fis-ugc-media"><video src="<?php echo esc_url( $u['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
          <p class="fis-ugc-cap"><?php echo esc_html( $u['cap'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) ThermoTrac 3-v-1 ============ -->
<section class="fis-thermo">
  <div class="fis-wrap">
    <p class="fis-eyebrow"><strong>ThermoTrac™</strong> tehnologija</p>
    <h2 class="fis-h2 fis-center">Doživite 3-v-1 terapijo za vrat</h2>
    <div class="fis-thermo-grid">
      <?php foreach ( $fis_thermo as $t ) : ?>
        <div class="fis-thermo-card">
          <video src="<?php echo esc_url( $t['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          <div class="fis-thermo-label"><?php echo esc_html( $t['title'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Štiri izboljšave ============ -->
<section class="fis-upg">
  <div class="fis-wrap">
    <h2 class="fis-h2 fis-center">Štiri velike izboljšave</h2>
    <div class="fis-upg-grid">
      <?php foreach ( $fis_upgrades as $g ) : ?>
        <div class="fis-upg-card">
          <img class="fis-upg-ico" src="<?php echo esc_url( get_template_directory_uri() . '/img/fisiorest-icons/' . $g['ico'] ); ?>" alt="" loading="lazy" width="120" height="120">
          <div class="fis-upg-title"><?php echo esc_html( $g['t'] ); ?></div>
          <p class="fis-upg-text"><?php echo esc_html( $g['d'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Zasnovano s strani inženirjev ============ -->
<section class="fis-eng">
  <div class="fis-wrap fis-row2">
    <div class="fis-row2-copy">
      <h2 class="fis-h2">Zasnovano s strani inženirjev. Izdelano po standardih fizioterapije</h2>
      <p>Vložili smo več kot 50.000 € in 2 leti razvoja, da NORIKS ni le masažna naprava za vrat. To je celovita naprava za terapijo vratu, ki resnično zdravi vzrok. Vsako naročilo gre skozi natančno kontrolo kakovosti, da prispe v popolnem stanju.</p>
    </div>
    <div class="fis-row2-media"><video src="<?php echo esc_url( $fis_v.'hero.mp4' ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
  </div>
</section>

<!-- ============ 8) 14x ceneje ============ -->
<section class="fis-cheaper">
  <div class="fis-wrap fis-row2">
    <div class="fis-row2-media"><video src="<?php echo esc_url( $fis_v.'v08.mp4' ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
    <div class="fis-row2-copy">
      <p class="fis-eyebrow">VARNA IN SPROŠČUJOČA TERAPIJA</p>
      <h2 class="fis-h2">14× ceneje od tedenskih terminov</h2>
      <p>NORIKS se povrne v dneh, ne mesecih. Priporočen s strani terapevtov, nudi nežno olajšanje brez grobega pritiska ali tveganih posegov. Uporabljajte ga vsak večer. Brez naročanja. Brez potovanj. Brez ponavljajočih se stroškov — le varna, dosledna nega vratu, kadar koli jo potrebujete.</p>
    </div>
  </div>
</section>

<style>
  /* 2) Video hero */
  .fis-hero { position: relative; width: 100vw; left: 50%; margin-left: -50vw; min-height: 520px; display: flex; align-items: center; overflow: hidden; }
  .fis-hero-vid { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
  .fis-hero-overlay { position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0.5), rgba(0,0,0,0.05) 55%); }
  .fis-hero-inner { position: relative; z-index: 2; max-width: 1180px; margin: 0 auto; padding: 0 40px; width: 100%; box-sizing: border-box; }
  .fis-hero-title { color: #fff; font-weight: 800; font-size: clamp(27px,4vw,46px); line-height: 1.15; max-width: 640px; margin: 0; text-shadow: 0 2px 14px rgba(0,0,0,0.4); }
  @media (max-width: 768px) { .fis-hero { min-height: 380px; } .fis-hero-inner { padding: 0 22px; } }

  /* skupno */
  .fis-h2 { font-size: clamp(24px,3vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .fis-center { text-align: center; }
  .fis-eyebrow { font-size: 13px; letter-spacing: 1px; text-transform: uppercase; color: #555; margin: 0 0 8px; }

  /* 3) Strokovnjaki */
  .fis-experts { padding: 44px 0; }
  .fis-exp-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: start; }
  .fis-exp-quote p { font-size: 15.5px; line-height: 1.6; color: #333; margin: 0 0 14px; }
  .fis-exp-author { color: #1c1c1c; }
  .fis-exp-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
  .fis-exp-card { position: relative; border-radius: 14px; overflow: hidden; aspect-ratio: 3/4; background: #222; }
  .fis-exp-card video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-exp-cap { position: absolute; left: 0; right: 0; bottom: 0; padding: 14px; color: #fff; background: linear-gradient(0deg, rgba(0,0,0,.75), rgba(0,0,0,0)); }
  .fis-exp-name { font-weight: 800; font-size: 18px; }
  .fis-exp-role { font-size: 13px; }
  .fis-exp-org { font-size: 12px; font-style: italic; opacity: .9; }

  /* 4) UGC */
  .fis-ugc { background: #223047; padding: 40px 0; }
  .fis-ugc-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
  .fis-ugc-media { border-radius: 12px; overflow: hidden; aspect-ratio: 3/4; background: #000; }
  .fis-ugc-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-ugc-cap { color: #eee; font-size: 14px; line-height: 1.5; margin: 10px 0 0; }

  /* 5) ThermoTrac */
  .fis-thermo { background: #f0efe9; padding: 44px 0; }
  .fis-thermo-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
  .fis-thermo-card { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 4/3; background: #111; }
  .fis-thermo-card video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-thermo-label { position: absolute; left: 16px; bottom: 14px; color: #fff; font-weight: 800; font-size: 18px; text-shadow: 0 1px 8px rgba(0,0,0,.6); }

  /* 6) Upgrades */
  .fis-upg { padding: 44px 0; }
  .fis-upg-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
  .fis-upg-ico { width: 56px; height: 56px; object-fit: contain; display: block; margin: 0 auto 14px; }
  .fis-upg-title { font-weight: 800; color: #1c1c1c; margin: 0 0 8px; font-size: 16px; }
  .fis-upg-text { font-size: 14px; line-height: 1.5; color: #444; margin: 0; }

  /* 7 + 8) row2 */
  .fis-eng, .fis-cheaper { padding: 40px 0; }
  .fis-cheaper { background: #f4f4f4; }
  .fis-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .fis-row2-copy p { font-size: 15.5px; line-height: 1.65; color: #333; }
  .fis-row2-media { border-radius: 16px; overflow: hidden; }
  .fis-row2-media video { width: 100%; height: auto; display: block; }
  .fis-cheaper .fis-row2-media { aspect-ratio: 16 / 10; }
  .fis-cheaper .fis-row2-media video { height: 100%; object-fit: cover; }

  @media (max-width: 900px) {
    .fis-exp-grid { grid-template-columns: 1fr; gap: 24px; }
    .fis-ugc-grid { grid-template-columns: 1fr 1fr; }
    .fis-thermo-grid { grid-template-columns: 1fr; }
    .fis-upg-grid { grid-template-columns: 1fr 1fr; gap: 22px; }
    .fis-row2 { grid-template-columns: 1fr; gap: 22px; }
    .fis-cheaper .fis-row2-media { order: 2; }
  }
  @media (max-width: 560px) {
    .fis-exp-cards { grid-template-columns: 1fr 1fr; }
    .fis-ugc-grid { grid-template-columns: 1fr; }
  }

  /* 1) Znanstveno podprto — siva kartica */
  .fis-science { background: #f4f4f4; padding: 44px 0; }
  .fis-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .fis-box { background: transparent; border-radius: 0; padding: 0; }
  .fis-title { font-size: clamp(23px,2.9vw,32px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 26px; }
  .fis-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; }
  .fis-card { padding: 0 22px; border-left: 1px solid #dcdcdc; }
  .fis-card:first-child { border-left: 0; padding-left: 0; }
  .fis-card-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 0 10px; }
  .fis-card-text { font-size: 15px; line-height: 1.55; color: #333; margin: 0; }
  @media (max-width: 820px) {
    .fis-grid { grid-template-columns: 1fr 1fr; gap: 22px 0; }
    .fis-card:nth-child(odd) { border-left: 0; padding-left: 0; }
  }
  @media (max-width: 480px) {
    .fis-grid { grid-template-columns: 1fr; }
    .fis-card { border-left: 0; padding-left: 0; }
  }

  /* Ni "Tabela velikosti" povezave na FisioRest-u (identično kot bunion). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: skrij standardne pike (•), razmiki. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
/* Oranžni active bundle-option preko inline !important (preživi LiteSpeed UCSS). */
(function(){
  function paintOrto(){
    var sel = document.getElementById('bundle-selector');
    if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); });
    var checked = sel.querySelector('input[name="bundle_option"]:checked');
    var card = checked ? checked.closest('.bundle-option')
             : (sel.querySelector('.bundle-option.active') || sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#f39c12','important'); card.style.setProperty('background','#f39c1217','important'); }
  }
  function bindOrto(){
    var sel = document.getElementById('bundle-selector');
    if(!sel) return;
    paintOrto();
    sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOrto); });
  }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOrto); } else { bindOrto(); }
})();
</script>
