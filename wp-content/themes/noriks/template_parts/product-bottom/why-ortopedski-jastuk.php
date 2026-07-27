<?php
/**
 * product-bottom: NORIKS ErgoSit — ORTOPEDSKA BLAZINA ZA SEDENJE (orto-ortopedski-jastuk)
 * 1:1 kopija originalne strani (celinva.com/products/orthopedic-cushion):
 * iste sekcije, isti vrstni red, iste postavitve (levo-desno), vsebina prevedena SI,
 * rebrand NORIKS ErgoSit, lokalizirane grafike. Pink akcent #e5157e, navy #121030.
 * Vrstni red (original):
 *   1. marquee  2. "#1 Orthopedic Seat Cushion" + UGC  3. End Tailbone (img L / txt R)
 *   4. Improve Posture (txt L / img R)  5. Relief That Adapts (grid L / txt R)
 *   6. UGC reviews traka  7. Engineered (img L / txt R + CTA)
 *   8. Effective Against (akordeon, polna širina)  9. 20x Cheaper (img L / txt R + CTA)
 *   10. Won't Quit (txt L / tabela R)  11. 60 Days (temna, značka L / txt R)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$oj  = get_template_directory_uri() . '/img/ortopedski-jastuk/';
$ojv = get_template_directory_uri() . '/img/ortopedski-jastuk/videos/';
$oj_img = function( $file, $alt ) use ( $oj ) {
  return '<img src="'.esc_url($oj.$file).'" alt="'.esc_attr($alt).'" loading="lazy" onerror="this.style.display=\'none\'">';
};
?>

<!-- ============ 1) Marquee (temna traka, vrti se) ============ -->
<div class="oj-marquee" aria-hidden="true">
  <div class="oj-marquee-track">
    <?php $oj_ticker = array('ZRAČNO IN PRALNO','POPOLNA PORAVNAVA','PENA STABILITYCORE™','OEKO-TEX® CERTIFICIRANO','HIPOALERGENO','PREVLEKA SILKFLEX™');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $oj_ticker as $t ) { echo '<span class="oj-tick">'.esc_html($t).'</span><span class="oj-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) "Svetovna #1" + UGC karusel ============ -->
<section class="oj-sec">
  <div class="oj-wrap">
    <h2 class="oj-hero-h">Svetovna <em>#1 ortopedska blazina za sedenje</em> za vsakodnevno udobje</h2>
    <p class="oj-hero-sub">Zaupa ji na tisoče zadovoljnih kupcev — od <strong>voznikov na cesti do pisarniških delavcev in družin doma.</strong></p>
    <div class="oj-ugc-grid oj-ugc-5">
      <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
        <div class="oj-ugc-item" data-src="<?php echo esc_url( $ojv.'nasi-'.$i.'.mp4' ); ?>">
          <video class="oj-ugc-video" preload="metadata" playsinline muted></video>
          <span class="oj-ugc-play" aria-label="Predvajaj"></span>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 3) Konec bolečin v trtici — slika LEVO, tekst DESNO ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('07_lifestyle_HR.png','Prej in potem — bolečina v trtici med vožnjo'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em class="oj-pink-i">Konec bolečin v trtici, išiasa in bolečin v hrbtu</em> zaradi sedenja</h2>
      <p>Večina stolov vaše telo uniči v 30 minutah. <strong>Kolki se nagnejo, hrbtenica se ukrivi, pritisk na trtico in išiadični živec pa narašča.</strong> Zato dolge vožnje, pisarniško delo ali večerja za mizo pustijo boleč, otrpel ali odrevenel hrbet.</p>
      <p>NORIKS <strong>ErgoSit ortopedska blazina</strong> je zgrajena drugače. Izrez za trtico odpravi neposreden pritisk na trtično kost, konturirana oblika pa podpira hrbtenico in vrača zdravo držo. Spominska pena visoke gostote enakomerno porazdeli težo po kolkih in stegnih ter ohranja pretok krvi, da noge ne odrevenijo.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Izboljšajte držo — tekst LEVO, slika DESNO ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Izboljšajte držo in spodbudite cirkulacijo</h2>
      <p>Avtosedeži in pisarniški stoli so narejeni za vzdržljivost, ne za vaše telo. Njihova oblika sili kolke, da tonejo, stegna v sedež, cirkulacija pa se upočasni — noge postanejo nemirne, hrbet pa boli še dolgo po tem, ko vstanete.</p>
      <p>NORIKS <strong>ErgoSit</strong> je zasnovan za dolge ure. Oblikovana baza drži kolke v ravnini, konturirani robovi zmanjšujejo pritisk na stegna, dvignjeni del pa podpira hrbtenico kilometer za kilometrom. Rezultat? Vzravnana drža, zdrava cirkulacija in ure sedenja brez bolečin in otrdelosti.</p>
    </div>
    <div class="oj-media"><video class="oj-secvid" src="<?php echo esc_url( $ojv.'drzanje.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
  </div>
</section>

<!-- ============ 5) Prilagodi se, kjer koli sedite — grid 4 LEVO, tekst DESNO ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('prilagodba.webp','NORIKS ErgoSit — prilagodi se, kjer koli sedite'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2">Olajšanje, ki se prilagodi, kjer koli sedite.</h2>
      <p>NORIKS <strong>ErgoSit</strong> se prilagodi vsakemu mestu, na katerem sedite. Stabilna nedrseča baza jo drži na mestu na <strong>avtosedežih, pisarniških stolih, jedilnih stolih in invalidskih vozičkih</strong> — zato gre udobje z vami ves dan.</p>
      <p>Spominska pena visoke gostote podpira telo, ne da bi se sploščila, snemljiva pralna prevleka pa ostaja sveža, čista in pripravljena na vsakodnevno uporabo.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Trust traka (kot original press-bar, a s pravimi NORIKS oznakami) + SLIKE kupcev ============ -->
<section class="oj-sec oj-stills-sec">
  <div class="oj-trustbar" aria-hidden="true">
    <div class="oj-trustbar-track">
      <?php $oj_trust = array('120.000+ KUPCEV','OCENA 4,8/5','OEKO-TEX®','PRIPOROČILO ZDRAVNIKOV','60 DNI GARANCIJE','ORTOPEDSKA ZASNOVA');
      for ( $r = 0; $r < 2; $r++ ) { foreach ( $oj_trust as $t ) { echo '<span class="oj-trust-item">'.esc_html($t).'</span><span class="oj-trust-dot">•</span>'; } } ?>
    </div>
  </div>
  <div class="oj-wrap">
    <div class="oj-stills">
      <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
        <img src="<?php echo esc_url( $oj.'galerija/li'.$i.'.webp' ); ?>" alt="NORIKS ErgoSit — zadovoljni kupci" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Zasnovana z ortopedskim znanjem — slika LEVO, tekst DESNO + CTA ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('04_lijecnik_HR.png','Priporočilo zdravnikov — NORIKS ErgoSit'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2">Zasnovana z ortopedskim znanjem, ustvarjena za vsakodnevno sedenje.</h2>
      <p>Z vpogledi ortopedskih strokovnjakov in meseci ergonomskega testiranja je NORIKS <strong>ErgoSit</strong> zasnovan tako, da ublaži najpogostejše bolečine zaradi dolgega sedenja — od pritiska na trtico do nelagodja v spodnjem delu hrbta in kolkih.</p>
      <a class="oj-cta" href="#bundle-selector">👉 NAROČI ZDAJ</a>
    </div>
  </div>
</section>

<!-- ============ 8) Učinkovita proti pogostim težavam — akordeon, POLNA ŠIRINA ============ -->
<section class="oj-sec">
  <div class="oj-wrap">
    <h2 class="oj-h2 oj-center"><em class="oj-pink-i">Učinkovita proti</em> pogostim težavam pri sedenju</h2>
    <div class="oj-acc">
      <?php
      $oj_probs = array(
        array('Bolečina v trtici (trtična kost)','Izrez za trtico odpravi pritisk s trtične kosti in težo porazdeli po blazini, zato ne čutite tiste ostre, pekoče bolečine že po nekaj minutah sedenja.'),
        array('Išias in zbadanje po nogi','Ker drži kolke v ravnini in hrbtenico vzravnano, blazina razbremeni išiadični živec — zato lahko sedite, vozite ali delate brez zbadajoče bolečine, ki se širi po nogah.'),
        array('Bolečina v spodnjem delu hrbta','Večina stolov pusti praznino za spodnjim delom hrbta. NORIKS jo zapolni, povrne naravno krivino hrbtenice in zmanjša napetost mišic med dolgimi urami sedenja.'),
        array('Odrevenelost in otekanje nog','Ravne podlage prekinejo cirkulacijo. Konturirani robovi blazine razbremenijo stegna in ohranjajo pretok krvi, zato so noge lahke in polne energije, ne pa težke ali odrevenele.'),
        array('Bolečina v SI-sklepu in kolkih','Neenakomerna teža obremenjuje kolke in sklepe. NORIKS pritisk porazdeli enakomerno, pomaga ohranjati uravnoteženo držo in zmanjšuje napetost v kolkih.'),
        array('Olajšanje za občutljivo sedenje','Za občutljive predele blazina združuje čvrsto oporo z nežnim konturiranjem — razbremeni pritisk, da lahko udobno sedite, tudi ko je telo občutljivo.'),
      );
      foreach ( $oj_probs as $p ) : ?>
        <div class="oj-acc-item">
          <button class="oj-acc-head" type="button" aria-expanded="false">
            <span class="oj-acc-tick">✔</span><span class="oj-acc-title"><?php echo esc_html($p[0]); ?></span><span class="oj-acc-chev">⌄</span>
          </button>
          <div class="oj-acc-body"><p><?php echo esc_html($p[1]); ?></p></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 9) 20x ceneje — slika LEVO, tekst DESNO + CTA ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('14_vsebina_HR.png','NORIKS ErgoSit — sedi bolje, živi bolje'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em class="oj-pink-i">20× ceneje</em> od dragih rešitev</h2>
      <p>Večina ljudi <strong>zapravi na tisoče</strong> v poskusih, da bi rešila bolečino zaradi sedenja:</p>
      <ul class="oj-x">
        <li><span>✕</span> Ergonomski stol: <strong>750–1.100 €</strong></li>
        <li><span>✕</span> Tedenski obiski kiropraktika: <strong>70–140 € na obisk</strong> (3.000+ € letno)</li>
        <li><span>✕</span> Fizioterapija: <strong>190 €+ na obisk</strong>, pogosto tedni čakanja na termin</li>
      </ul>
      <p><strong>NORIKS ErgoSit ortopedska blazina</strong></p>
      <p>Enkraten nakup, ki ublaži bolečine v trtici, hrbtu in kolkih, ne da bi izpraznil denarnico.</p>
      <a class="oj-cta" href="#bundle-selector">Naroči zdaj</a>
    </div>
  </div>
</section>

<!-- ============ 10) Blazina, ki ne odneha — tekst LEVO, tabela DESNO ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Blazina, ki ne odneha</h2>
      <p class="oj-lead">Ostane čvrsta, blaži bolečine in nudi oporo tam, kjer druge odpovejo.</p>
    </div>
    <div class="oj-cmp-wrap">
      <span class="oj-cmp-others">Drugi</span>
      <div class="oj-cmp-pill"><span>NORIKS</span></div>
      <div class="oj-cmp-card">
        <div class="oj-cmp-row"><div class="f">Razbremeni trtico in hrbet</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Podpira vzravnano, zdravo držo</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Sčasoma ohrani obliko</div><div class="us">✓</div><div class="no">✕</div></div>
        <div class="oj-cmp-row"><div class="f">Nedrseča baza</div><div class="us">✓</div><div class="no">✕</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 11) Preizkusite 60 dni — TEMNA, značka LEVO, tekst DESNO ============ -->
<section class="oj-sec oj-guar-sec">
  <div class="oj-wrap">
  <div class="oj-guarantee oj-row2">
    <div class="oj-guar-badge"><?php echo $oj_img('15_znacka_60_dana_HR.png','60-dnevna garancija vračila denarja'); ?></div>
    <div class="oj-guar-copy">
      <h2 class="oj-h2 oj-h2-light">Preizkusite <em class="oj-pink-i">60 dni</em>, brez skrbi</h2>
      <p>Najti pravo blazino ni lahko — mnoge se sploščijo ali preprosto ne prinesejo pravega olajšanja. Zato je vsaki NORIKS <strong>ErgoSit</strong> priložena naša <strong>60-dnevna garancija udobja</strong>.</p>
      <p>Vzemite jo v pisarno, v avto ali za dolge ure doma. Če ne občutite manj bolečin in več udobja pri vsakodnevnem sedenju, bo naša ekipa poskrbela, da bo, kot mora biti.</p>
      <p>Kajti ko gre za vaše zdravje in udobje, verjamemo, da morate razliko <strong>občutiti</strong>, ne le upati nanjo.</p>
    </div>
  </div>
  </div>
</section>

<style>
  .oj-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* ista širina kot zgornji .product container */
  .oj-wrap-narrow { max-width: 820px; margin: 0 auto; padding: 0 18px; }
  .oj-sec { padding: 60px 0; }
  .oj-alt { background: #faf6f9; }
  .oj-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .oj-h2 { font-size: clamp(24px,3vw,36px); font-weight: 800; color: #121030; line-height: 1.15; margin: 0 0 16px; }
  .oj-h2-light { color: #fff; }
  .oj-pink-i { color: #e5157e; font-style: italic; }
  .oj-center { text-align: center; }
  .oj-copy p, .oj-lead { font-size: 15.5px; line-height: 1.6; color: #3a3450; margin: 0 0 14px; }
  .oj-lead { font-size: 16px; color: #55506b; }
  .oj-media img, .oj-grid2 img, .oj-media video.oj-secvid { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,21,51,.10); }

  /* 1) Marquee */
  .oj-marquee { background: #121030; overflow: hidden; white-space: nowrap; }
  .oj-marquee-track { display: inline-block; padding: 13px 0; animation: ojScroll 26s linear infinite; }
  .oj-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }
  @keyframes ojScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 2) hero */
  .oj-hero-h { text-align: center; font-size: clamp(26px,3.4vw,42px); font-weight: 800; color: #121030; line-height: 1.12; margin: 0 auto 12px; max-width: 900px; }
  .oj-hero-h em { color: #e5157e; font-style: italic; }
  .oj-hero-sub { text-align: center; font-size: 16px; color: #55506b; max-width: 660px; margin: 0 auto 28px; line-height: 1.55; }

  /* UGC */
  .oj-ugc-grid { display: grid; gap: 12px; }
  .oj-ugc-3 { grid-template-columns: repeat(3,1fr); max-width: 760px; margin: 0 auto; }
  .oj-ugc-5 { grid-template-columns: repeat(4,1fr); max-width: 1000px; margin: 0 auto; }
  .oj-ugc-item { position: relative; aspect-ratio: 9/16; border-radius: 12px; overflow: hidden; background: #121030; cursor: pointer; }
  .oj-ugc-item video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .oj-ugc-play { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 50px; height: 50px; border-radius: 50%; background: rgba(255,255,255,.92); }
  .oj-ugc-play::after { content: ""; position: absolute; top: 50%; left: 54%; transform: translate(-50%,-50%); border-style: solid; border-width: 10px 0 10px 16px; border-color: transparent transparent transparent #121030; }

  .oj-grid2 { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }

  /* CTA — temni navy gumb kot original */
  .oj-cta { display: inline-block; background: #121030; color: #fff; font-weight: 800; font-size: 15px; letter-spacing: .04em; padding: 15px 34px; border-radius: 8px; text-decoration: none; margin-top: 8px; }
  .oj-cta:hover { background: #e5157e; color: #fff; }

  /* 8) akordeon */
  .oj-acc { max-width: 880px; margin: 18px auto 0; border-top: 1px solid #ecdfe8; }
  .oj-acc-item { border-bottom: 1px solid #ecdfe8; }
  .oj-acc-head { width: 100%; background: none; border: 0; display: flex; align-items: center; gap: 12px; padding: 16px 4px; cursor: pointer; font-size: 15.5px; font-weight: 700; color: #121030; text-align: left; }
  .oj-acc-tick { color: #22b573; font-weight: 800; }
  .oj-acc-title { flex: 1; }
  .oj-acc-chev { transition: transform .2s; color: #b39aab; }
  .oj-acc-item.open .oj-acc-chev { transform: rotate(180deg); }
  .oj-acc-body { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
  .oj-acc-item.open .oj-acc-body { max-height: 260px; }
  .oj-acc-body p { font-size: 14.5px; line-height: 1.6; color: #4a4560; margin: 0 0 16px; padding-left: 28px; }

  /* 9) X lista */
  .oj-x { list-style: none; margin: 0 0 14px; padding: 0; }
  .oj-x li { font-size: 15px; color: #3a3450; margin: 0 0 10px; }
  .oj-x li span { color: #d64545; font-weight: 800; margin-right: 8px; }

  /* 6) Trust traka — svetla, "logotip" stil kot original press-bar (mešana tipografija) */
  .oj-trustbar { background: #f7f0f2; overflow: hidden; white-space: nowrap; width: 100vw; margin-left: calc(50% - 50vw); }
  .oj-trustbar-track { display: inline-block; padding: 14px 0; animation: ojScroll 34s linear infinite; }
  .oj-trust-item { color: #9b96a6; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-trust-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }

  /* 6) UGC stilli (slike kupcev) — full-bleed kot original */
  .oj-stills-sec { padding: 20px 0 40px; }
  .oj-stills-sec .oj-wrap { margin-top: 0; }
  .oj-stills-sec .oj-wrap { max-width: none; padding: 0; }
  .oj-stills { display: grid; grid-template-columns: repeat(6,1fr); gap: 6px; width: 100vw; margin-left: calc(50% - 50vw); }
  .oj-stills img { width: 100%; aspect-ratio: 9/16; object-fit: cover; display: block; border-radius: 0; }

  /* 10) primerjava — bela kartica + plavajoča pink pilula (kot original) */
  .oj-cmp-wrap { position: relative; padding: 40px 0 30px; }
  .oj-cmp-others { position: absolute; top: 8px; right: 0; width: 88px; text-align: center; font-weight: 800; color: #121030; font-size: 14px; }
  .oj-cmp-pill { position: absolute; top: 0; bottom: 0; right: 96px; width: 100px; background: #e5157e; border-radius: 28px; box-shadow: 0 16px 36px rgba(229,21,126,.35); z-index: 1; display: flex; justify-content: center; align-items: flex-start; padding-top: 14px; }
  .oj-cmp-pill span { color: #fff; font-weight: 800; font-size: 10.5px; letter-spacing: .14em; }
  .oj-cmp-card { position: relative; background: #fff; border-radius: 16px; box-shadow: 0 12px 34px rgba(27,21,51,.10); border: 1px solid #f1edf3; }
  .oj-cmp-row { display: grid; grid-template-columns: 1fr 100px 88px; align-items: center; border-bottom: 1px solid #f2eff4; min-height: 62px; }
  .oj-cmp-row:last-child { border-bottom: 0; }
  .oj-cmp-row .f { padding: 14px 16px; text-align: center; font-weight: 800; color: #121030; font-size: 15px; line-height: 1.3; }
  .oj-cmp-row .us { position: relative; z-index: 2; text-align: center; color: #fff; font-weight: 800; font-size: 18px; }
  .oj-cmp-row .no { text-align: center; color: #e23a3a; font-weight: 800; font-size: 16px; }

  /* 11) garancija — zaobljena temna kartica (kot original) */
  .oj-guar-sec { padding-top: 20px; }
  .oj-guarantee { background: #121030; border-radius: 18px; padding: 52px 48px; }
  .oj-guar-copy p { color: #cfc9e0; font-size: 15px; line-height: 1.6; margin: 0 0 12px; }
  .oj-guar-badge img { width: 280px; max-width: 100%; height: auto; margin: 0 auto; display: block; border-radius: 50%; }

  @media (max-width: 860px) {
    /* mobilni: prepolovljeni razmiki med sekcijami */
    .oj-sec { padding: 30px 0; }
    .oj-marquee + section.oj-sec { padding-top: 20px; }
    .oj-hero-h { font-size: 2rem !important; }
    .oj-stills-sec { padding: 10px 0 20px; }
    .oj-guar-sec { padding-top: 10px; }
    .oj-row2 { grid-template-columns: 1fr; gap: 18px; }
    .oj-ugc-3 { grid-template-columns: repeat(3,1fr); }
    /* hero videi: horizontalni slider v eni vrsti (kot original) */
    .oj-ugc-5 { display: flex; overflow-x: auto; gap: 10px; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; padding: 0 4px 6px; }
    .oj-ugc-5 .oj-ugc-item { flex: 0 0 46%; scroll-snap-align: center; }
    .oj-stills { grid-template-columns: repeat(3,1fr); }
    .oj-row2 .oj-media, .oj-row2 .oj-grid2 { order: -1; }
    .oj-guarantee { padding: 34px 22px; }
    .oj-guarantee .oj-guar-badge { order: -1; }
    .oj-cmp-others { width: 72px; }
    .oj-cmp-pill { right: 78px; width: 84px; }
    .oj-cmp-row { grid-template-columns: 1fr 84px 72px; }
  }

  /* No-attrs: skrij "Tabela velikosti", če se kje pojavi */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap, #open-size-chart, #open-size-chartCustom { display: none !important; }
</style>

<script>
(function(){
  /* Pink active bundle-option (preživi LiteSpeed UCSS). */
  function paintOj(){
    var sel = document.getElementById('bundle-selector'); if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); c.style.removeProperty('border-width'); });
    var checked = sel.querySelector('input[name="bundle_option"]:checked');
    var card = checked ? checked.closest('.bundle-option') : (sel.querySelector('.bundle-option.active') || sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#ED5E95','important'); card.style.setProperty('background','rgba(237,94,149,0.1)','important'); card.style.setProperty('border-width','2px','important'); }
  }
  function bindOj(){ var sel=document.getElementById('bundle-selector'); if(!sel) return; paintOj(); sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOj); }); }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOj); } else { bindOj(); }

  /* Akordeon */
  document.querySelectorAll('.oj-acc-head').forEach(function(btn){
    btn.addEventListener('click', function(){ var it=btn.closest('.oj-acc-item'); var open=it.classList.toggle('open'); btn.setAttribute('aria-expanded', open?'true':'false'); });
  });

  /* UGC video: prikaži prvi kader, klik = predvajaj z zvokom */
  document.querySelectorAll('.oj-ugc-item').forEach(function(item){
    var v = item.querySelector('.oj-ugc-video'); if(!v) return; v.src = item.dataset.src;
    item.addEventListener('click', function(){
      if (item.dataset.loaded) return; item.dataset.loaded='1';
      var play=item.querySelector('.oj-ugc-play'); if(play) play.remove();
      v.muted=false; v.controls=true; v.playsInline=true; var p=v.play(); if(p&&p.catch) p.catch(function(){});
    });
  });

  /* Gladki scroll za CTA */
  document.querySelectorAll('a.oj-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
