<?php
/**
 * product-bottom: NORIKS KidsNest — otroski vzglavnik za pravilno dihanje (orto-kidsnest).
 * Kopija tryneedo.com/products/kids-pillow sekcij, SI prevod (ublazene med. trditve).
 * Vrstni red:
 *   1. Trust marquee (modra)  2. "Zacnite nocoj..." (slika L / tekst D, moder naslov)
 *   3. "Pravilna podpora..." (tekst L / slika D)  4. Statistika 94/60/98 (svetlo-modra, 3 kartice s krogi)
 *   5. "#1 otroski vzglavnik 2026" + zvezdice + drseci foto trak
 * Modra: #2b3fb0, svetla: #eef1fb, navy: #1b2450. Slike: img/kidsnest/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kn = get_template_directory_uri() . '/img/kidsnest/';
?>

<!-- ============ 1) Trust marquee (modri trak, vrti se) ============ -->
<div class="kn-marquee" aria-hidden="true">
  <div class="kn-marquee-track">
    <?php $kn_ticker = array('PRIPOROČILO PEDIATROV','OEKO-TEX® SPOMINSKA PENA','3-CONSKA STRUKTURA','90 NOČI PREIZKUŠANJA','HIPOALERGENO','PRALNA PREVLEKA');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $kn_ticker as $t ) { echo '<span class="kn-tick">'.esc_html($t).'</span><span class="kn-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) Zacnite nocoj — slika LEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'01-poravnan.webp' ); ?>" alt="Popolnoma poravnano — glava, vrat in hrbtenica med spanjem" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <p class="kn-eyebrow">Razvito z zobozdravniki za otroške dihalne poti</p>
      <h2 class="kn-h2 kn-h2-blue">Začnite nocoj popravljati skrito škodo.</h2>
      <p>Pediatrični zobozdravniki za dihalne poti opozarjajo starše na isti tihi problem: otroci, ki smrčijo in dihajo skozi usta, ne "spijo samo slabše". Njihova čeljust, nebo in struktura obraza se lahko počasi razvijajo v napačno smer.</p>
      <p><strong>In okno za popravljanje ne ostane odprto za vedno.</strong></p>
      <p>NORIKS <strong>KidsNest vzglavnik</strong> je zasnovan tako, da <strong>podpira glavo, čeljust in dihalne poti v pravilnem položaju med spanjem</strong> — s tem spodbuja dihanje skozi nos in bolj zdrav razvoj obraza, dokler je to še pomembno.</p>
      <p><strong>To ni samo vzglavnik.<br>To je nočna podpora dihalnim potem v letih, ki oblikujejo obraz vašega otroka.</strong></p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravilna podpora — tekst LEVO, slika DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Pravilna podpora glave in vratu je ključna za zdrav spanec.</h2>
      <p>Ergonomski otroški vzglavnik drži <strong>glavo in vrat v naravni poravnavi ter pomaga preprečiti nagibanje glave</strong> med nočjo. Tako hrbtenica ostane pravilno poravnana — tudi če se otrok med spanjem veliko obrača.</p>
      <p><strong>Rezultat sta mirnejši spanec in boljša regeneracija.</strong></p>
    </div>
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'02-san.jpg' ); ?>" alt="Otrok mirno spi na vzglavniku KidsNest" loading="lazy" onerror="this.style.display='none'"></div>
  </div>
</section>

<!-- ============ 4) Statistika — svetlo-modra, 3 kartice s krogi ============ -->
<section class="kn-sec kn-stats-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Ustvarjen, da zaščiti razvijajoči se obraz vašega otroka</h2>
    <p class="kn-sub kn-center"><strong>Spanje z odprtimi usti v otroštvu lahko preoblikuje rastoči obraz. KidsNest drži glavo vašega otroka poravnano, da diha skozi nos.</strong></p>
    <div class="kn-stats">
      <?php
      $kn_stats = array(
        array('94','165.3','staršev opazi, da otrok spi <strong>z zaprtimi usti</strong> v roku 2 tednov'),
        array('60','105.5','razvoja obraza vašega <strong>otroka</strong> se oblikuje do 6. leta — to okno se ne odpre znova'),
        array('98','172.3','staršev bi priporočilo <strong>KidsNest</strong>, da zaščiti nasmeh še enega otroka'),
      );
      foreach ( $kn_stats as $st ) : ?>
      <div class="kn-stat-card">
        <svg class="kn-ring" viewBox="0 0 64 64" aria-hidden="true">
          <circle cx="32" cy="32" r="28" fill="none" stroke="#dfe5f5" stroke-width="5"/>
          <circle cx="32" cy="32" r="28" fill="none" stroke="#2b3fb0" stroke-width="5" stroke-linecap="round" stroke-dasharray="<?php echo esc_attr($st[1]); ?> 175.9" transform="rotate(-90 32 32)"/>
          <text x="32" y="38" text-anchor="middle" class="kn-ring-t"><?php echo esc_html($st[0]); ?>%</text>
        </svg>
        <p><?php echo wp_kses_post($st[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) #1 otroski vzglavnik + zvezdice + drseci foto trak ============ -->
<section class="kn-sec kn-rated-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Ocenjen kot otroški vzglavnik za spanje #1 v 2026.</h2>
    <p class="kn-sub kn-center">Podprite njihov spanec — podprite leta odraščanja.</p>
    <p class="kn-stars kn-center"><span aria-hidden="true">★★★★★</span> Ocena 4,8/5 na podlagi 140+ ocen</p>
  </div>
  <div class="kn-strip">
    <div class="kn-strip-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 5; $i++ ) : ?>
        <img src="<?php echo esc_url( $kn.'traka/t'.$i.'.webp' ); ?>" alt="NORIKS KidsNest — otroci in starši" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Kakovost materialov — slika LEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'03-detalj.webp' ); ?>" alt="KidsNest — 3-conska struktura in zračna tkanina od blizu" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Kakovost, ki se občuti — noč za nočjo.</h2>
      <p>Gosta, zračna pletenina in skrbno oblikovana površina nista tu zaradi videza — <strong>vsaka cona ima svojo vlogo</strong>. Sredina nežno sprejme glavo, robovi podpirajo vrat, struktura pa ohrani obliko tudi po mesecih vsakodnevne uporabe.</p>
      <p>Prevleka se sname in opere v pralnem stroju, pena je <strong>hipoalergena in odporna na pršice</strong> — zato vzglavnik ostane svež, čist in pripravljen na vsako noč. Brez udrtin, brez sploščenja, brez kompromisov.</p>
      <p><strong>Vzglavnik, ki tudi po enem letu izgleda — in podpira — kot prvi dan.</strong></p>
    </div>
  </div>
</section>

<style>
  .kn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* isti container kot zgornji .product */
  .kn-sec { padding: 60px 0; }
  .kn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .kn-h2 { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1b2450; line-height: 1.14; margin: 0 0 16px; }
  .kn-h2-blue { color: #2b3fb0; }
  .kn-center { text-align: center; }
  .kn-eyebrow { font-size: 13px; font-weight: 800; letter-spacing: .02em; color: #1b2450; margin: 0 0 6px; }
  .kn-copy p { font-size: 15.5px; line-height: 1.65; color: #33394f; margin: 0 0 14px; }
  .kn-sub { font-size: 16px; line-height: 1.55; color: #33394f; max-width: 680px; margin: 0 auto 10px; }
  .kn-media img { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,36,80,.10); }

  /* 1) marquee */
  .kn-marquee { background: #2b3fb0; overflow: hidden; white-space: nowrap; margin-top: 26px; }
  @media (min-width: 861px) { .kn-marquee { margin-top: -20px; } } /* desktop: prepolovljen razmik do vsebine zgoraj */
  .kn-marquee + .kn-sec { padding-top: 26px; }
  .kn-marquee-track { display: inline-block; padding: 13px 0; animation: knScroll 28s linear infinite; }
  .kn-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .kn-dot { color: #aebafe; margin: 0 22px; font-weight: 800; }
  @keyframes knScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 4) statistika */
  .kn-stats-sec { background: #eef1fb; }
  .kn-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; max-width: 1180px; margin: 30px auto 0; }
  .kn-stat-card { background: #fff; border-radius: 16px; padding: 34px 26px; text-align: center; box-shadow: 0 10px 28px rgba(27,36,80,.07); }
  .kn-ring { width: 150px; height: 150px; margin: 0 auto 18px; display: block; }
  .kn-ring-t { font-size: 15px; font-weight: 800; fill: #2b3fb0; }
  .kn-stat-card p { font-size: 15px; line-height: 1.5; color: #33394f; margin: 0; }
  .kn-stat-card p strong { color: #2b3fb0; }

  /* 5) rated + strip */
  .kn-rated-sec { background: #eef1fb; padding-bottom: 0; }
  .kn-stars { font-size: 16px; color: #1b2450; font-weight: 600; margin: 6px 0 26px; }
  .kn-stars span { color: #f5a623; letter-spacing: 2px; margin-right: 8px; }
  .kn-strip { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); padding-bottom: 34px; }
  .kn-strip-track { display: flex; gap: 8px; width: max-content; animation: knScroll 60s linear infinite; }
  .kn-strip:hover .kn-strip-track { animation-play-state: paused; }
  .kn-strip-track img { width: 350px; aspect-ratio: 1/1; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }

  @media (max-width: 860px) {
    .kn-sec { padding: 30px 0; }
    .kn-row2 { grid-template-columns: 1fr; gap: 18px; }
    .kn-row2 .kn-media { order: -1; }
    .kn-h2 { font-size: 2rem; }
    .kn-stats { grid-template-columns: 1fr; gap: 14px; margin-top: 18px; }
    .kn-ring { width: 120px; height: 120px; }
    .kn-strip-track img { width: 240px; }
  }
</style>
