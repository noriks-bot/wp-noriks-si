<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/. Svaka sekcija ima sliku s jedne
 * i tekst s druge strane (naizmjenično) — nema sekcija koje su samo slika.
 *   1. Ko vsak korak postane neprijeten   slika lijevo   13_stepenice
 *   2. Morda ne gre samo za obrabo   slika desno    14_zglob
 *   3. Opora za aktivna kolena         slika lijevo   08_aktivno
 *   4. 4 funkcije. Stabilnejši občutek.    slika desno    03_funkcije
 *   5. Udobna opora v 3 korakih          slika lijevo   04_koraki
 *   6. Več udobja v vsakdanu      slika desno    05_lifestyle
 *   7. Preporučeno za potporu koljena     slika lijevo   06_zdravnik
 *   8. Razlika se občuti                  slika desno    07_vs
 *   9. Kaj pravijo naše stranke                3 kartice      10/11/12
 * Recenzije i FAQ renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf      = get_template_directory_uri() . '/img/kneefix/';
$kf_path = get_template_directory() . '/img/kneefix/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$kf_img = function( $file, $alt ) use ( $kf, $kf_path ) {
  if ( file_exists( $kf_path . $file ) ) {
    return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="kfx-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Ko vsak korak postane neprijeten ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('kf-si-3.webp','Bolečina v kolenu pri hoji po stopnicah navzdol'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Ko vsak korak postane neprijeten</h2>
      <p class="kfx-lead">Na začetku je to pogosto le rahlo vlečenje.</p>
      <p>Potem pridejo trenutki, ko koleno občutite precej močneje:</p>
      <ul class="kfx-list">
        <li>Pri vstajanju</li>
        <li>Na stopnicah</li>
        <li>Po daljšem sedenju</li>
        <li>Pri hoji ali daljšem stanju</li>
      </ul>
      <p>Marsikdo takrat samodejno začne izogibati se gibom. Hodi počasneje, nezavedno razbremenjuje koleno ali se pri vsakodnevnih gibih počuti negotovo.</p>
      <p class="kfx-strong">Težava je v tem: bolj previdno kot se gibljete, bolj koleno postaja središče vašega vsakdana.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Morda ne gre samo za obrabo ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Morda ne gre samo za obrabo</h2>
      <p>Številne običajne razlage govorijo le o „obrabljenosti". A bolečina v kolenu se pogosto občuti bolj kot <strong>pritisk, draženje ali nestabilnost</strong>.</p>
      <p>Eden možnih razlogov je razdražena sklepna ovojnica — občutljiva notranja opna kolenskega sklepa. Ko se to tkivo razdraži, se koleno lahko občutljiveje odziva na obremenitev. To se lahko kaže kot:</p>
      <ul class="kfx-inline-list">
        <li>Občutek pritiska okoli pogačice</li>
        <li>Okorelost po mirovanju</li>
        <li>Negotovost pri gibanju</li>
        <li>Občutljivost pri obremenitvi</li>
      </ul>
      <p>Številne klasične opornice poskušajo težavo rešiti s togo stabilizacijo. A trde opornice so lahko neudobne, zdrsavajo ali omejujejo naraven gib. Prav zato je <strong>NORIKS KneeFix</strong> razvit drugače.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('14_zglob.jpg','Razdražena sklepna ovojnica kolenskega sklepa'); ?></div>
  </div>
</section>

<!-- ============ 3) Opora za aktivna kolena ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('08_aktivno_SI.webp','Ostanite aktivni — brez omejitev v kolenih'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Opora za aktivna kolena</h2>
      <p><strong>NORIKS KneeFix</strong> združuje več funkcij v enem prilagodljivem sistemu opore za vsakdan. Namesto težke opornice dobite:</p>
      <ul class="kfx-check">
        <li>Kompresijo, ki jo nastavite sami</li>
        <li>Stransko stabilizacijo</li>
        <li>Gel blazinico za razbremenitev pogačice</li>
        <li>Protizdrsni oprijemni rob</li>
      </ul>
      <p>Cilj ni ukleniti vašega kolena. KneeFix je razvit tako, da koleno prijetneje podpre pri vsakodnevnem gibanju — med hojo, v službi, pri nakupih ali na poti.</p>
    </div>
  </div>
</section>

<!-- ============ 4) 4 funkcije. Stabilnejši občutek. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">4 funkcije. Stabilnejši občutek.</h2>
      <p>KneeFix ne dela le enega — več sistemov opore deluje hkrati:</p>
      <ul class="kfx-check">
        <li><strong>Natančno kolesce za kompresijo</strong> — prilagodljiva kompresija in zanesljiv oprijem</li>
        <li><strong>Dvojna stranska stabilizatorja</strong> — stranska stabilnost kolena</li>
        <li><strong>Gel blazinica za pogačico</strong> — razbremenitev pritiska in blaženje udarcev</li>
        <li><strong>Silikonski oprijem proti zdrsavanju</strong> — mehka silikonska tekstura prepreči zdrs in zvijanje</li>
      </ul>
    </div>
    <div class="kfx-media"><?php echo $kf_img('03_funkcije_SI.webp','Štiri funkcije opornice NORIKS KneeFix'); ?></div>
  </div>
</section>

<!-- ============ 5) Udobna opora v 3 korakih ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('04_koraki_SI.webp','Udobna opora v treh korakih — povlecite, poravnajte, prilagodite'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Udobna opora v 3 korakih</h2>
      <ol class="kfx-steps">
        <li><strong>Opornico povlecite čez koleno.</strong> Povlecite jo navzgor za varen in udoben oprijem.</li>
        <li><strong>Poravnajte gel blazinico.</strong> Namestite jo sredinsko okoli pogačice.</li>
        <li><strong>Prilagodite kompresijo.</strong> Zavrtite kolesce, da nastavite oporo in stabilnost.</li>
      </ol>
      <p>Brez zapletenih pasov in nastavljanja — pripravljeni ste v nekaj sekundah.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Več udobja v vsakdanu ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Več udobja v vsakdanu</h2>
      <p>Marsikdo noče težke športne opornice. Želi preprosto:</p>
      <ul class="kfx-check">
        <li>Varneje hoditi</li>
        <li>Sproščeneje hoditi po stopnicah</li>
        <li>Dlje stati</li>
        <li>Svobodneje se gibati</li>
      </ul>
      <p>NORIKS KneeFix je razvit tako, da vsakodnevne gibe naredi prijetnejše — brez nepotrebnih omejitev. Prilagodljiv material se bolje prilagodi vašemu dnevu in podpre koleno tam, kjer to potrebujete.</p>
      <a class="kfx-cta" href="#bundle-selector">Izberi svojo velikost →</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('kf-si-1.webp','KneeFix v vsakdanu — sprehod, kolo, trening'); ?></div>
  </div>
</section>

<!-- ============ 7) Priporočeno za vsakodnevno oporo kolena ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('kf-si-2.webp','Priporočeno za vsakodnevno oporo kolena'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Priporočeno za vsakodnevno oporo kolena</h2>
      <ul class="kfx-check">
        <li>Prilagodljiva kompresijska opora</li>
        <li>Stabilizira in ščiti koleno</li>
        <li>Udobno za vsakodnevno uporabo</li>
      </ul>
      <p>KneeFix je zamišljen kot vsakodnevna opora, ne kot zdravljenje. Če imate akutno poškodbo ali trajne težave, se o nošenju posvetujte s svojim zdravnikom.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Razlika se občuti ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Razlika se občuti</h2>
      <p>Tradicionalne opornice težavo pogosto rešujejo tako, da koleno uklenejo. KneeFix gre po drugi poti — gib podpira, namesto da ga blokira.</p>
      <ul class="kfx-check">
        <li>Naravna hoja namesto okorelosti pri gibanju</li>
        <li>Sproščena drža telesa namesto neprijetnega položaja</li>
        <li>Svoboda gibanja in udobje namesto vidne obremenitve kolena</li>
      </ul>
      <a class="kfx-cta" href="#bundle-selector">Naroči KneeFix</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('07_vs_SI.webp','NORIKS opornica za koleno v primerjavi s tradicionalno ortozo'); ?></div>
  </div>
</section>

<!-- ============ 9) Kaj pravijo naše stranke ============ -->
<section class="kfx-sec kfx-revs">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">Kaj pravijo naše stranke</h2>
    <p class="kfx-sub kfx-center"><strong>Tisoče kupcev že vsak dan nosi NORIKS KneeFix</strong> ker je razvit tako, da koleno ciljno podpre — namesto da bi gib po nepotrebnem omejeval ali težave le kratkoročno prekril.</p>
    <div class="kfx-rev-grid">
      <?php foreach ( array(
        array( '10_review-1.jpg', 'Končno stabilnejša hoja', 'Preizkusil sem že več opornic, a so bile ali pretoge ali pa so nenehno zdrsavale. Ta se prilega občutno prijetneje in kolenu pri hoji ter na stopnicah daje veliko več stabilnosti.', 'Damir P.' ),
        array( '11_review-3.jpg', 'Več varnosti na stopnicah', 'Stopnice so bile zame leta mučenje, ker se mi je koleno zdelo nestabilno. Odkar nosim KneeFix, se počutim precej varneje. Skoraj ne zdrsne niti na daljših sprehodih.', 'Sanja M.' ),
        array( '12_review-6.jpg', 'Prijetno v vsakdanu', 'Nosim jo v službi in nisem mislila, da bo tako udobna. Material je prilagodljiv, kompresijo je lahko nastaviti, pod hlačami pa se je skoraj ne opazi.', 'Vesna N.' ),
      ) as $rv ) : ?>
        <article class="kfx-rev">
          <div class="kfx-rev-img"><?php echo $kf_img( $rv[0], 'Kupec nosi opornico NORIKS KneeFix' ); ?></div>
          <div class="kfx-rev-body">
            <div class="kfx-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
            <p class="kfx-rev-title"><?php echo esc_html( $rv[1] ); ?></p>
            <p class="kfx-rev-text"><?php echo esc_html( $rv[2] ); ?></p>
            <p class="kfx-rev-name"><?php echo esc_html( $rv[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 820px; margin: 0 auto 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .kfx-steps { list-style: none; counter-reset: kfxstep; margin: 0 0 16px; padding: 0; }
  .kfx-steps li { counter-increment: kfxstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .kfx-steps li:before { content: counter(kfxstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }

  /* 9) recenzije s fotografijama kupaca */
  .kfx-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .kfx-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; overflow: hidden; }
  .kfx-rev-img img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; border-radius: 0; }
  .kfx-rev-body { padding: 16px 18px 18px; text-align: center; }
  .kfx-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; }
  .kfx-rev-title { font-weight: 700; color: #141414; font-size: 15px; margin: 8px 0 8px; }
  .kfx-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 12px; }
  .kfx-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 10px; border-top: 1px solid #ededed; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-rev-grid { grid-template-columns: 1fr; }
    .kfx-rev-img img { aspect-ratio: 4/3; }
  }

  /* Nema "Tablica veličina" linka na KneeFixu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅
     iz teksta; razmak između "Prednosti:" i liste te ispod liste.
     (Ovaj se predložak učitava samo na orto-kneefix stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
      line-height: 1.55;
      margin-bottom: 6px;
  }
  /* razmak iznad "Prednosti:" (paragraf neposredno prije liste) */
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
