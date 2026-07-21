<?php
/**
 * product-bottom: KOREKTOR HALUKSA (bunion / halux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * Mediji so v temi (git), relativno preko get_template_directory_uri():
 *   img/bunion-videos/section-1.mp4, funkcionira.mp4, step-1..3.mp4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
$bun_video_1 = $bun_vid_dir . 'section-1.mp4'; // 1) One foot away
$bun_video_2 = $bun_vid_dir . 'funkcionira.mp4'; // 2) Kako deluje

$bun_img_features = get_template_directory_uri() . '/img/bunion/why.png';

// Pravi rezultati — odstotki
$bun_results = array(
    array( 'pct' => 91, 'text' => 'uporabnikov je poročalo o zmanjšanju bolečin zaradi haluksa že od 2. seje' ),
    array( 'pct' => 90, 'text' => 'uporabnikov je popolnoma odpravilo bolečine zaradi haluksa že po 14 dneh dosledne uporabe (30 min/dan)' ),
    array( 'pct' => 88, 'text' => 'uporabnikov je opazilo vidne izboljšave pri poravnavi prstov že po 30 dneh dosledne uporabe (30 min/dan)' ),
);

// Zakaj izbrati nas — primerjava (isti stil kot knc-table na nogavicah z zadrgo)
$bun_cmp = array(
    '90-dnevna garancija vračila denarja',
    'Blaži nelagodje',
    'Preprečuje rast haluksa',
    'Sčasoma izboljša stanje haluksa',
    'Gibljiva zasnova — lahko hodite z njim',
    'Vzdržljiv in dolgotrajen',
);

// Kako se uporablja — 3 koraki (video + opis)
$bun_steps = array(
    array( 'video' => $bun_vid_dir . 'step-1.mp4', 'caption' => 'Pritrdite NORIKS korektor na palec in stopalo' ),
    array( 'video' => $bun_vid_dir . 'step-2.mp4', 'caption' => 'Nastavite intenzivnost raztezanja po želji' ),
    array( 'video' => $bun_vid_dir . 'step-3.mp4', 'caption' => 'Sprostite se in pustite, da NORIKS korektor opravi svoje delo' ),
);
?>

<!-- ============ 1) Le korak ste oddaljeni… ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_1 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Le korak ste oddaljeni od tega, da se rešite <span class="bun-hl">nelagodja zaradi haluksa</span>, oteklih prstov in bolečin v stopalih…</h2>
      <p>Če to berete, je velika verjetnost, da trpite zaradi vztrajnega <strong class="bun-red">nelagodja zaradi haluksa</strong>.</p>
      <p>Rezultat? Bolečina in nelagodje vplivata na vaše vsakodnevne dejavnosti.</p>
      <p>Če se ne zdravijo, se lahko poslabšajo. Prsti se prekrižajo, razvijejo se lahko kladivasti prsti in kostne izrastline.</p>
      <p>Haluks je <strong class="bun-red">napredujoča težava</strong> in ne bo izginil sam od sebe.</p>
      <p>Sčasoma lahko privede do resnejših težav, kot so <u>invazivna operacija, težave s kolki, koleni in spodnjim delom hrbta ter celo negibljivost</u>.</p>
      <p>S pomočjo klinično dokazane napredne terapije poravnave in patentiranega zglobnega mehanizma <strong>NORIKS korektor haluksa</strong> učinkovito blaži nelagodje na prizadetem delu stopala in obnavlja zdravje vašega stopala z le 30 minutami dnevne uporabe.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>91 % uporabnikov je poročalo o <strong>zmanjšanju bolečin v stopalih</strong> že v prvem tednu</em></p>
    </div>
  </div>
</section>

<!-- ============ 2) Kako deluje? ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row bun-reverse">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_2 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Kako deluje?</h2>
      <p><strong>NORIKS korektor haluksa</strong> uporablja napredno terapijo poravnave. Zasnovan je tako, da <strong class="bun-red">podpre ponovno poravnavo</strong> palca in postopoma ublaži vnetje s pomočjo močnega patentiranega zglobnega mehanizma.</p>
      <p>Pomaga sprostiti mišično napetost tako, da nežno vrača palec v njegov naravni položaj, kar sčasoma privede do neboleče naravne poravnave sklepa prsta.</p>
      <p>Tako se sprosti leta nakopičena napetost, izboklina se popravi in zmanjša, bolečina se ublaži in prepreči se nadaljnja rast — da spet stopite na noge, vzravnano in samozavestno.</p>
      <p>Nekateri uporabniki bodo morda potrebovali sejo ali dve, da se navadijo, saj je <strong class="bun-red">občutek lahko izrazitejši</strong> v primerjavi z drugimi metodami.</p>
      <p>To je naraven in neinvaziven način za povrnitev naravnega položaja prsta in stopala ter za odpravo škode, ki jo povzročajo neustrezna obutev ali genetika.</p>
      <p>Ne glede na to, ali gre za majhno otroško stopalo ali veliko stopalo odrasle osebe, je <u>korektor izdelan tako, da se udobno prilega vsem velikostim stopal</u>.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>87 % uporabnikov je poročalo o <strong>vidnih izboljšavah</strong> že v prvem mesecu</em></p>
    </div>
  </div>
</section>

<!-- ============ 3) Kako se uporablja (sivo, 3 koraki) ============ -->
<section class="bun-why bun-howto">
  <div class="bun-wrap">
    <h2 class="bun-howto-title">Kako se uporablja</h2>
    <div class="bun-howto-intro">
      <p>Priporočamo, da začnete s 30 minutami na dan in postopoma povečujete do seje 1 do 3 ure.</p>
      <p>Ko se počutite udobno, ga lahko začnete nositi tudi med spanjem vsako noč.</p>
      <p>Najboljši je za mirovanje — ko ležite na kavču, gledate TV, berete ali spite.</p>
      <p>Toda za razliko od drugih izdelkov na trgu se lahko tudi gibljete, ne da bi vas NORIKS korektor omejeval pri gibanju, po zaslugi svoje gibljive zasnove.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) 8 razlogov, zakaj ga boste vzljubili ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">8 razlogov, zakaj ga boste vzljubili</h2>
      <ul class="bun-reasons">
        <li><strong>Olajšanje nelagodja</strong> pri hoji, vadbi, stanju in spanju</li>
        <li><strong>Preprečuje</strong> nadaljnjo rast haluksa</li>
        <li><strong>Nekirurška možnost</strong> za olajšanje</li>
        <li>Trdna poravnava sklepa, ki <strong>resnično izboljša vaše stanje</strong></li>
        <li><strong>Nastavljiva</strong> intenzivnost raztezanja</li>
        <li>Zasnovan in priporočen s strani <strong>medicinskih strokovnjakov</strong></li>
        <li><strong>Preprost za uporabo</strong> in prenosen</li>
        <li><strong>90-dnevna garancija vračila denarja</strong> („rezultati ali polno vračilo"), ker smo tako prepričani v svoj izdelek in vemo, da vam bo pomagal</li>
      </ul>
    </div>
    <div class="bun-col bun-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img_features ); ?>" alt="Zakaj je NORIKS korektor haluksa drugačen" />
    </div>
  </div>
</section>

<!-- ============ 5) Pravi rezultati, pravi ljudje ============ -->
<section class="bun-why bun-results-sec">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Pravi <span class="bun-hl">rezultati</span>, pravi ljudje</h2>
      <p>Izvedli smo potrošniški test, v katerem smo NORIKS korektor haluksa poslali v več kot <strong>37 podiatričnih ordinacij</strong>. Skupno ga je preizkusilo <strong>432 pacientov</strong> s haluksom. Tukaj so rezultati.</p>
    </div>
    <div class="bun-col">
      <div class="bun-results">
        <?php foreach ( $bun_results as $bun_r ) : $bun_dash = round( $bun_r['pct'] * 1.6336, 1 ); ?>
          <div class="bun-result">
            <svg class="bun-ring" viewBox="0 0 60 60" aria-hidden="true">
              <circle cx="30" cy="30" r="26" fill="none" stroke="#dfe6ee" stroke-width="5"/>
              <circle cx="30" cy="30" r="26" fill="none" stroke="#1a86d0" stroke-width="5" stroke-linecap="round"
                      stroke-dasharray="<?php echo esc_attr( $bun_dash ); ?> 163.4" transform="rotate(-90 30 30)"/>
              <text x="30" y="34" text-anchor="middle" class="bun-ring-txt"><?php echo (int) $bun_r['pct']; ?>%</text>
            </svg>
            <p class="bun-result-text"><?php echo esc_html( $bun_r['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Zakaj izbrati nas? (primerjalna tabela, knc stil) ============ -->
<section class="bun-cmp-section">
  <div class="bun-cmp-wrap">
    <h2 class="bun-cmp-title">Zakaj izbrati nas?</h2>
    <p class="bun-cmp-lead">Ne nasedajte <span class="bun-hl">POCENI imitacijam</span></p>
    <p class="bun-cmp-sub">Kako se <strong>NORIKS korektor haluksa</strong> primerja z ostalimi:</p>
    <div class="bun-cmp-scroll">
      <table class="bun-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="bun-us">NORIKS</th>
            <th class="bun-comp">Ostali korektorji</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $bun_cmp as $bun_row ) : ?>
            <tr>
              <td><?php echo esc_html( $bun_row ); ?></td>
              <td class="us ok">✓</td>
              <td class="no">✕</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  /* Ni "Tabela velikosti" povezave na korektorju haluksa (ne plugin ne globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): skrij standardne pike (•), ostane samo ✅;
     razmik nad "Prednosti:" in več prostora pod seznamom.
     (Ta predloga se naloži samo na orto-bunion straneh.) */
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

  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #fbf9f4; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .bun-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .bun-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-title { font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .bun-hl { color: #1a86d0; }
  .bun-red { color: #e0563f; }
  .bun-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 12px; }
  .bun-stat { display: flex; align-items: flex-start; gap: 8px; margin-top: 6px !important; }
  .bun-check { color: #1a86d0; font-weight: 800; }
  .bun-stat em { font-style: italic; color: #333; }

  /* section 2: media on the right */
  .bun-reverse .bun-media { order: 2; }
  .bun-reverse .bun-copy { order: 1; }

  /* 3) Kako se uporablja (sivo ozadje) */
  .bun-why.bun-howto { background: #f0f2f5; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 18px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 34px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 12px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  /* 4) 8 razlogov */
  .bun-media img { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-reasons { list-style: none; margin: 0; padding: 0; }
  .bun-reasons li { position: relative; padding: 0 0 16px 34px; font-size: 15.5px; line-height: 1.5; color: #333; }
  .bun-reasons li:before {
      content: ""; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%;
      background: #1a86d0 url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 12.5l4 4 8-8' fill='none' stroke='white' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/></svg>") center/15px no-repeat;
  }

  /* 5) Pravi rezultati */
  .bun-results { display: flex; flex-direction: column; gap: 18px; }
  .bun-result { display: flex; align-items: center; gap: 16px; border-bottom: 1px solid #e6e6e6; padding-bottom: 16px; }
  .bun-result:last-child { border-bottom: 0; padding-bottom: 0; }
  .bun-ring { width: 70px; height: 70px; flex: 0 0 70px; }
  .bun-ring-txt { font-size: 16px; font-weight: 800; fill: #1a86d0; }
  .bun-result-text { font-size: 14.5px; line-height: 1.5; color: #333; margin: 0; }

  /* 6) Zakaj izbrati nas — primerjalna tabela (isti stil kot knc-table) */
  .bun-cmp-section { background:#fff; padding:44px 0; }
  .bun-cmp-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .bun-cmp-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:800; color:#111; margin:0 0 8px; }
  .bun-cmp-lead { text-align:center; font-size:18px; font-weight:800; color:#111; margin:0 0 6px; }
  .bun-cmp-sub { text-align:center; font-size:14px; color:#444; margin:0 0 24px; }
  .bun-cmp-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .bun-cmp-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .bun-cmp-table th, .bun-cmp-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .bun-cmp-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .bun-cmp-table thead th:first-child { width:52%; background:#fff; }
  .bun-cmp-table .bun-comp { background:#767676; }
  .bun-cmp-table .bun-us { background:#111; }
  .bun-cmp-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .bun-cmp-table tbody tr { border-bottom:1px solid #eef0f4; }
  .bun-cmp-table tbody tr:nth-child(even) { background:#fafbfc; }
  .bun-cmp-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .bun-cmp-table td.no { color:#d64545; font-size:18px; font-weight:700; }
  .bun-cmp-table td.us { background:#f3f3f3 !important; }
  .bun-cmp-table td.us.ok { color:#1a9e5f; }
  @media (max-width:600px) {
    .bun-cmp-table th, .bun-cmp-table td { padding:12px 6px; font-size:13px; }
    .bun-cmp-table thead th { font-size:12px; }
    .bun-cmp-table tbody td:first-child { font-size:12px; padding-left:10px; }
  }

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
