<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<style>

      .features2 {
    margin-top: 12px;
    margin-bottom: 12px;
      }

      .features__row {
        display: flex;
        justify-content: space-between;
        gap: 28px;
      }

      .feature {
        flex: 1 1 0;
        text-align: center;
      }

      .feature__icon {
 
        margin: 0 auto 0px;
        display: block;
        margin-bottom: 0 !important;
      }

      .feature__text {
        margin: 0;
        line-height: 1.1;
    font-size: 14px;
    margin: 0;
        font-family: 'Barlow', sans-serif;
      }

      /* Responsive: stack nicely on small screens */
      @media (max-width: 640px) {
        .features__row {
     
        }
      }
    </style>


 <section class=" features2" aria-label="Prednosti">
      <div class="features__row">
        <!-- 1) Truck -->
        
        
          <div class="feature">
          
  <img src="<?php echo get_template_directory_uri(); ?>/img/cod_icon_.png" alt="Customer Support Icon" class="feature__icon info-icon">
          <p class="feature__text">Plačilo tudi po povzetju</p>
        </div>
        
        
        <div class="feature">
      <img src="https://noriks.com/si/wp-content/uploads/2025/07/footer_icon1-1.png" alt="Shirt Icon" class="feature__icon info-icon">
          <p class="feature__text">Preizkusite 30 dni, brez tveganja</p>
        </div>
        
        

        <!-- 2) Smiley -->
        <div class="feature">
     
       
        <img src="https://noriks.com/si/wp-content/uploads/2025/07/footer_icon3-1.png" alt="Shipping Icon" class="feature__icon info-icon">
          <p class="feature__text">Brezplačna dostava za naročila nad 70 €</p>
        </div>

    
    
      </div>
    </section>




<?php if ( noriks_is_type( 'ortopas' ) ) : ?>
<!-- Ortopas: kartica "preverjeno s strani zdravnika" (slika) -->
<div class="ortopas-doctor-card" style="margin:14px 0;">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ortopas/ortopas-zdravnik.png' ); ?>"
       alt="Preverjeno s strani zdravnika — NORIKS ortopedski pas"
       style="width:100%; height:auto; display:block; border-radius:10px;"
       loading="lazy" decoding="async">
</div>
<?php endif; ?>

<!-- date and countdown section -->

<div class="shipping-box">
  <h2 id="shipping-window" class="shipping-title"></h2>
  <p class="shipping-sub">
    Naročite v naslednjih <span id="midnight-countdown" class="countdown"></span>
  </p>
</div>

<style>
  .shipping-box { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#222; margin-top: 13px;
    margin-bottom: 13px; 
      
    background: #f4f4f4;
    padding: 8px 6px 8px 12px;
    border-radius: 5px;
          text-align: center;
      
      
      
  }
  .shipping-title { font-family: 'Roboto', sans-serif;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1.4 !important; margin-bottom: 0px;
    color: #222 !important; }
  .shipping-sub { font-size: 14px; margin: 0; }
  .countdown { color: #22a155; font-weight: 700; }
</style>

<script>
  (function () {
    const weekdays = ['nedelja','ponedeljek','torek','sreda','četrtek','petek','sobota'];

    // Helper to add business days (skip Saturday/Sunday)
    function addBusinessDays(date, days) {
      let result = new Date(date);
      let added = 0;
      while (added < days) {
        result.setDate(result.getDate() + 1);
        const day = result.getDay();
        if (day !== 0 && day !== 6) { // skip Sunday(0) + Saturday(6)
          added++;
        }
      }
      return result;
    }

    // Get shipping days: today +2 business days, today +3 business days
    const today = new Date();
    const first  = addBusinessDays(today, 1);
    const second = addBusinessDays(today, 3);

    function formatDayMonth(d) {
      return `${d.getDate()}.${d.getMonth()+1}.`; // e.g. 21.8.
    }

    const windowEl = document.getElementById('shipping-window');
    windowEl.textContent = `Dostava od ${weekdays[first.getDay()]} ${formatDayMonth(first)} do ${weekdays[second.getDay()]} ${formatDayMonth(second)}`;

    // Countdown to midnight
    const cdEl = document.getElementById('midnight-countdown');

    function nextMidnight(now) {
      const n = new Date(now);
      n.setHours(24, 0, 0, 0);
      return n;
    }

    function updateCountdown() {
      const now = new Date();
      const end = nextMidnight(now);
      let diff = Math.max(0, end - now);

      const h = Math.floor(diff / 3_600_000); diff -= h * 3_600_000;
      const m = Math.floor(diff / 60_000);    diff -= m * 60_000;
      const s = Math.floor(diff / 1000);

      cdEl.textContent = `${h}h ${m}min ${s}s`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  })();
</script>


<!-- date and countdown section -->





<?php 

$is_singles_boxers = has_term( '1-kos-boksarice', 'product_cat', $current_product_id );

$is_boxers = has_term( array( 'boksarice', 'boksarice','orto-bokserice', 'boksarice-sestavi-paket' ), 'product_cat', $current_product_id ) && ! has_term( array( 'black-friday', 'majice-in-boksarice-paketi' ), 'product_cat', $current_product_id );

$is_carape = has_term( array( 'nogavice', 'zimske-nogavice' ), 'product_cat', $current_product_id );

$is_mixed_bundle = has_term( array( 'black-friday', 'majice-in-boksarice-paketi', 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id );

?>



<?php if( !$is_boxers && !$is_carape ): ?>


<!-- my thre icons content -->


<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>


<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 15px;
    margin-bottom: 15px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>
  
 <?php endif; ?>


<!--
<div style="margin-bottom: 15px;" class="woocommerce-product-details__short-description">
    
    
	<?php echo apply_filters( 'the_content', $product->get_description() );  ?>
	
	
</div>
-->



 <!-- icons -->
 
 <!--
 <div class="info-section">

    <div class="info-box">
     
     
     
      

     <img src="<?php echo get_field("singlepp_bottomicons_img1","options"); ?>" alt="" width="25" height="25">
     <?php echo get_field("singlepp_bottomicons_t1","options"); ?>

    
     
     
    </div>
    
    
    
     <div class="info-box">
    
         <a href="tel:+38517776471" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none; ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 1 .737-.07l2.547 1.272a.678.678 0 0 1 .291.901L6.29 5.72a.678.678 0 0 0 .145.776l2.457 2.457a.678.678 0 0 0 .776.145l2.29-1.24a.678.678 0 0 1 .901.291l1.272 2.547a.678.678 0 0 1-.07.737l-1.175 1.769c-.46.692-1.232 1.043-2.036.964-2.322-.238-4.96-2.223-6.856-4.12C1.77 7.667-.214 5.03.024 2.707c.079-.804.272-1.577.964-2.036L3.654 1.33z"/>
  </svg>
  01 777 64 71
</a>

<a href="mailto:info@noriks.com" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
  </svg>
  info@noriks.com
</a>
         
   
     </div>
     

    <div class="info-grid">
      
      
      
      
      <div class="info-box">
       <img src="<?php echo get_field("singlepp_bottomicons_img2","options"); ?>" alt=""  width="25" height="25">
        <?php echo get_field("singlepp_bottomicons_t2","options"); ?>
      </div>
      <div class="info-box">
  
<img src="<?php echo get_field("singlepp_bottomicons_img3","options"); ?>" alt=""  width="25" height="25">
<?php echo get_field("singlepp_bottomicons_t3","options"); ?>
      </div>
    </div>

  </div>
  -->
  
  <style>


    .info-section {
      display: flex;
      flex-direction: column;
      gap: 7px;
      max-width: 800px;
      margin: auto;
      margin-bottom: 25px;
    }
    
    .info-section img {
      width: 25px;
    }


    .info-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: #f5f6f8;
      border-radius: 3px;
      padding: 16px;
      color: #7b8a9b;
      font-weight: 500;
      font-size: 14px;
          font-family: 'Roboto', sans-serif; 
      text-align: center;
    }

    .info-grid {
      display: flex;
      gap: 7px;
    }

    .info-grid .info-box {
      flex: 1;
    }

    .info-box svg {
      width: 24px;
      height: 24px;
      fill: #7b8a9b;
    }
  </style>









 <!-- icons -->


 <div class="accordion">


    <!-- KidsNest: prvi dve accordion mesti (dolga vsebina iz summary-ja) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Obraz vašega otroka se oblikuje prav zdaj — čas pa imate do 9. leta</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Raziskovalci dihalnih poti in pediatrični zobozdravniki že leta opozarjajo na isti vzorec — večina staršev pa zanj še nikoli ni slišala. Imenuje se <strong>sindrom podolgovatega obraza</strong> (adenoidni obraz).</p>
        <p>Vsako noč, ko otrok spi z odprtimi usti na napačnem vzglavniku, se zgodijo štiri stvari hkrati: jezik pade nazaj, čeljust se umakne, nebo se zoži v visok lok, obraz pa začne rasti navpično namesto vodoravno. Po tisočih takšnih noči med 3. in 9. letom se spremembe utrdijo.</p>
        <p>Zato se 9-letniki danes pri ortodontu pojavljajo z umaknjeno brado, podočnjaki, nagnetenimi zobmi — in dragim računom za zobni aparat. Način, kako otrok diha med 3. in 9. letom, močno vpliva na obraz, ki ga bo nosil vse življenje.</p>
        <p>NORIKS <strong>KidsNest</strong> je zasnovan tako, da deluje na temeljni vzrok — napačen položaj glave in čeljusti med 9 urami spanja — s <strong>3-consko ergonomsko strukturo</strong>, ki glavo, vrat in čeljust drži v pravilni poravnavi od prve noči.</p>
        <p><strong>Kaj boste videli pri svojem otroku:</strong></p>
        <ul style="margin:6px 0 12px;padding-left:18px;">
          <li style="margin:0 0 7px;"><strong>Manj dihanja skozi usta:</strong> ustnice zaprte čez noč, vrnitev dihanja skozi nos, konec suhih ust zjutraj.</li>
          <li style="margin:0 0 7px;"><strong>Tišje noči:</strong> smrčanje se pri večini otrok umiri v 1–2 tednih.</li>
          <li style="margin:0 0 7px;"><strong>Podpora razvijajoči se čeljusti:</strong> pravilen položaj noč za nočjo, v letih, ko je to najpomembneje.</li>
          <li style="margin:0 0 7px;"><strong>Pametna preventiva:</strong> en vzglavnik danes — namesto dragih korekcij jutri.</li>
        </ul>
        <p><strong>En vzglavnik nocoj. Ali tisoči kasneje.</strong></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Starejši od 9? Okno se oži. Škoda se ne ustavi.</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Nasvet, ki ste ga slišali, je le napol resničen. Da, zgornje nebo se utrdi okoli 9. leta. Ampak obraz se razvija do 20., spodnja čeljust raste do 17., dihalne poti pa se nenehno prilagajajo.</p>
        <p>Zato vsaka noč dihanja skozi usta po 9. letu nalaga novo škodo na staro: škrtanje z zobmi, glavoboli, spanec, ki ne odpočije, upad koncentracije — in utrujenost, ki jo vsi zamenjujejo z lenobo. Vaš najstnik ni len. Vsako noč šest ur komaj diha.</p>
        <p>KidsNest v velikosti <strong>9–14 let</strong> je izdelan za starejšo glavo, vrat in ramena. Drugačna kontura, druga višina, druga podpora. Isti temeljni mehanizem: pravilna poravnava glave, vratu in čeljusti, vso noč, na telesu, ki še raste.</p>
        <p>Kaj opažajo starši: smrčanje se umiri v 7 do 14 nočeh, vrne se prava jutranja energija, glavoboli zbledijo, fokus se povrne.</p>
        <p>Najboljše okno je še vedno od 3. do 9. leta. Močno okno je od 8. do 18. Nobeno ni popolnoma zaprto — a vsaka noč čakanja dodaja pritisk telesu, ki si poskuša opomoči.</p>
        <p><strong>Včeraj je minilo. Nocoj je še vedno vaš.</strong></p>
      </div>
    </div>
    <?php endif; ?>


    <!-- ErgoSit ortopedska blazina: prvi dve accordion mesti (kopija originala, SI) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'ortopedski-jastuk', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Specifikacije izdelka</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 8px;"><strong>Zunanja prevleka:</strong> Zračna pletenina, snemljiva in pralna v pralnem stroju, hipoalergena</li>
          <li style="margin:0 0 8px;"><strong>Jedro:</strong> Adaptivna pena OrthoFlex™ | Netoksična, OEKO-TEX® certificirana | Zasnovana za razbremenitev pritiska + poravnavo drže</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Zakaj je tako posebna?</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 10px;"><strong>Spominska pena OrthoFlex™:</strong> Pena visoke gostote, ki razbremeni pritisk in se prilagaja, ne da bi se sploščila — podpira trtico, kolke in hrbtenico za celodnevno udobje.</li>
          <li style="margin:0 0 10px;"><strong>Prevleka BreatheEase™:</strong> Mehka, zračna in nežna do kože. Sname se in opere v pralnem stroju, da blazina vedno ostane sveža.</li>
          <li style="margin:0 0 10px;"><strong>Uravnotežena opora:</strong> Ne premehko, ne pretrdo. Zasnovano, da poravna držo in ublaži boleče točke po dolgih urah sedenja.</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>


    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : // skrij detajle na norikshers + ortopedski jastuk ?>
    <!-- 1 - detajli -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_1","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

         <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

                NORIKS KidsNest je izdelan iz hipoalergene, OEKO-TEX® certificirane spominske pene — brez formaldehida, težkih kovin in BPA — z zračno, pralno prevleko, ki se preprosto sname.<br><br>Njegova 3-conska ergonomska struktura nežno sprejme glavo, podpira vrat in pomaga ohranjati hrbtenico v naravni poravnavi — tudi ko se otrok ponoči veliko obrača. Tako spodbuja dihanje skozi nos ter mirnejši, globlji spanec.<br><br>Na voljo v treh velikostih (1–3, 3–9 in 9–14 let) raste z vašim otrokom in nudi pravo višino podpore v vsaki fazi razvoja.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) ): ?>

                NORIKS KneeFix je prilagodljiva opornica za koleno, ki združuje štiri funkcije v enem sistemu opore: nastavljivo kompresijo prek natančnega kolesca, dvojna stranska stabilizatorja, gelno blazinico, ki razbremeni pogačico, in silikonski nedrseči rob, ki opornico drži na mestu.<br><br>Za razliko od togih ortoz KneeFix kolena ne ukleni — podpira ga med naravnim gibanjem. Kompresijo nastavite v sekundi: zjutraj tesneje, popoldne bolj sproščeno, odvisno od tega, koliko ste na nogah. Koleno tako dobi stabilnost pri vstajanju, na stopnicah, med hojo in pri daljšem stanju.<br><br>Tkanina je lahka, zračna in odvaja vlago, zato lahko opornico nosite ure brez potenja in brez zarezovanja. Je tanka in diskretna — pod hlačami se je skoraj ne opazi.<br><br>Na voljo je v velikostih od S do 2XL glede na telesno težo ter v izvedbi za levo in desno koleno, zato je prileganje natančno.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                NORIKS inkontinenčne boksarice so izdelane iz mehkega antibakterijskega bambusovega vlakna z vodoodbojnim zunanjim slojem. V sredini je 7-slojno jedro PureDry™, ki trenutno vpije in zaklene do 300 ml tekočine, zato koža ostane suha, uhajanje pa ostane znotraj.<br><br>Kroj je tanek in diskreten — izgleda in se občuti kot običajno perilo, brez okornosti in brez občutka „plenice“. Zaščita ob nogah preprečuje stransko uhajanje, nadzor vonja pa ohranja svežino ves dan.<br><br>Pralne so in za večkratno uporabo — vpojno moč ohranijo skozi stotine pranj, kot okolju prijazna in varčna alternativa vložkom za enkratno uporabo in plenicam.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                NORIKS FIT je izdelan iz napredne ionske kompresijske tkanine, ki nudi oprijet, podporni kroj. Ciljna kompresija enakomerno stisne trebuh in boke, zgladi silhueto in podpira vzravnano držo — brez stiskanja, ki bi omejevalo dihanje ali gibanje.<br><br>Mikro-tkana vlakna spodbujajo cirkulacijo in vam pomagajo, da čez dan stojite bolj vzravnano in se počutite bolj samozavestno. Tkanina je lahka, zračna in odvaja vlago, zato ostanete suhi in vam je prijetno.<br><br>Tanek in diskreten kroj jo naredi nevidno pod katerokoli srajco, hkrati pa lahko služi tudi kot športna majica. Rezultat: ostrejši videz, boljša drža in samozavest — takoj ko jo oblečete.

         <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle && ! ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ) ): ?>



        <?php echo get_field("singlepp_acc_t_1","options"); ?>
        
        
        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        
                Naše vrhunske majice s kratkimi rokavi so narejene iz vrhunske mešanice 60 % obročasto predenega bombaža in 40 % poliestra, kar zagotavlja izjemno mehko in proti gubam odporno tkanino. <br><br>Boksarice NORIKS so narejene iz vrhunske mešanice 95 % modala in 5 % elastana, kar zagotavlja izjemno mehko in elastično tkanino, ki se popolnoma prilagodi telesu. Elastičen pas je zasnovan za optimalno prileganje, ki zagotavlja udobje brez zožitve in popoln videz pod oblačili. <br>
        
        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ): ?>

                Z graduirano kompresijo 15–20 mmHg NORIKS kompresijske nogavice pomagajo izboljšati cirkulacijo, zmanjšati otekanje in ublažiti napetost v utrujenih ali težkih nogah. Stranska zadrga omogoča preprosto obuvanje in sezuvanje – idealno za osebe z zmanjšano gibljivostjo ali z artritisom. Mehka notranja podloga ščiti kožo pred zadrgo in zagotavlja udobje brez draženja.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) ): ?>

                NORIKS FisioRest je terapevtska blazina za vrat, ki združuje trakcijo, toploto in vibracijsko masažo v ergonomski zasnovi iz spominske pene. Nežno razteza vrat pod pravim kotom, razbremeni vratno hrbtenico ter s toploto in masažo sprošča mišično napetost. Brezžična, polnilna in ovita v mehko hladilno svilo – varna tudi za spanje.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) ): ?>

                NORIKS korektor haluksa z napredno terapijo poravnave in patentiranim zglobnim mehanizmom nežno vrača palec v naraven položaj, blaži nelagodje in preprečuje nadaljnjo rast izbokline. Gibljiva zasnova omogoča, da z njim tudi hodite. Prilega se vsem velikostim stopal, brez leve ali desne strani. Za uporabo v mirovanju – med počitkom, gledanjem TV, branjem ali spanjem.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

                NORIKS ortopedski pas ciljno stabilizira spodnji del hrbta s pomočjo ciljne kompresije, pravilno poravna medenico in razbremeni išijasni živec. Tanek in neopazen pod oblačili, z nastavljivo stopnjo opore. Primeren pri bolečinah v križu, išiasu, mišični napetosti in težavah s SI-sklepom.

        <?php else: ?>



            <?php echo get_field("__overwrite_sekcije_bellow_1"); ?>
            
            
        <?php endif; ?>
        
        
        
      </div>
    </div>
    <?php endif; // /skrij detajle na norikshers ?>




     <!-- 2 - slika tablica velicina -->
     <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // ni tabele velikosti za bunion + fisiorest + norikshers + ortopedski jastuk ?>
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Tabela velikosti</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine-si.webp" alt="KidsNest velikosti po starosti" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
            <p style="margin:0;line-height:1.6;"><strong>Otrok je med dvema velikostma?</strong> Vedno izberite večjo. Vzglavnik je zasnovan tako, da podpira zdravo poravnavo, medtem ko otrok raste — večja velikost daje več prostora in daljše obdobje uporabe.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

          <div class="lbx-size">
            <p style="margin:0 0 6px;font-weight:700;">Kako izmeriti boke</p>
            <p style="margin:0 0 14px;line-height:1.6;">Merilni trak ovijte okoli najširšega dela bokov (čez zadnjico), brez zategovanja. Stojte sproščeno in vzravnano ter si zapišite mero v centimetrih.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#12233b;color:#fff;">
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Velikost</th>
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Boki (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lbx_sizes = array(
                  array('S','do 76 cm','do 30"'),
                  array('M','77 – 85 cm','30 – 33"'),
                  array('L','86 – 94 cm','34 – 37"'),
                  array('XL','95 – 102 cm','37 – 40"'),
                  array('2XL','103 – 114 cm','41 – 45"'),
                  array('3XL','115 – 121 cm','45 – 48"'),
                  array('4XL','122 – 129 cm','48 – 51"'),
                  array('5XL','130 – 137 cm','51 – 54"'),
                  array('6XL','138 – 145 cm','54 – 57"'),
                  array('7XL','146 – 153 cm','57 – 60"'),
                  array('8XL','154 cm in več','61" in več'),
                );
                foreach ( $lbx_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7fafb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Med dvema velikostma?</strong> Vedno priporočamo večjo številko za optimalno udobje in maksimalno vpojnost.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

          <div class="kmf-size">
            <table style="width:100%;border-collapse:collapse;font-size:15px;">
              <thead>
                <tr style="background:#111;color:#fff;">
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Velikost</th>
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Ustrezna teža</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kmf_sizes = array(
                  array('S','50 – 70 kg'), array('M','70 – 90 kg'), array('L','90 – 110 kg'), array('XL','110 – 130 kg'),
                  array('2XL','130 – 150 kg'), array('3XL','150 – 170 kg'), array('4XL','170 – 190 kg'), array('5XL','190 – 210 kg'),
                );
                foreach ( $kmf_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f4f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eaeaea;">
                    <td style="padding:9px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:9px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;">Velikost izberite glede na svojo težo. Med dvema velikostma? Za močnejšo kompresijo izberite manjšo številko.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : obseg bokov 75–110 cm<br>
            <strong>L/XL</strong> : obseg bokov 110–140 cm<br><br>
            Prosimo, izmerite obseg bokov, da najdete svojo velikost.
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : številka obutve 36–40 / obseg meče : 23–36 cm<br>
            <strong>L/XL</strong> : številka obutve 40–44 / obseg meče : 36–45 cm<br>
            <strong>2XL</strong> : številka obutve 44–48 / obseg meče : 45–56 cm<br><br>
            Prosimo, izmerite obseg meče na najširšem mestu, da najdete svojo velikost.<br><br>
            Priporočamo, da velikost izberete glede na obseg meče, ne glede na običajno številko obutve.
          </div>

        <?php elseif( $is_boxers ): ?>


          <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/si/wp-content/uploads/2026/04/bokserice_si.jpg">
          
          
          
        
        <?php elseif(  $is_carape ): ?>
        
        
                  <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/si/wp-content/uploads/2026/04/nogavice_si.jpg">
                  
    <?php elseif(  $is_mixed_bundle ): ?>
    
     <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
<img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/si/wp-content/uploads/2026/04/bokserice_si.jpg">
        
          <?php else: ?>
      
      
       <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">


        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /ni tabele velikosti za bunion + fisiorest ?>


    <!-- 3 - savjeti za pranje--> <!-- skrito tudi na kidsnest -->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('ortopas', $current_product_id) || noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) || noriks_is_type('kidsnest', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // ni nasvetov za pranje za pas/bunion/fisiorest + norikshers + ortopedski jastuk + kidsnest ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Perite na 30–40 °C, na programu za občutljivo perilo. Brez mehčalca in belila. Sušite na zraku. Vpojno moč ohranijo skozi stotine pranj.

             <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                Strojno pranje na hladnem, nežnem programu. Brez belila in mehčalca. Ne sušite v sušilnem stroju — sušite na zraku, da ohranite kompresijo in obliko.

             <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle && ! ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ) ): ?>
        <?php echo get_field("singlepp_acc_t_2","options"); ?>
        
         
        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        
                      Barve perite skupaj z barvami. Nežno perite v hladni vodi. Sušite na ravni površini ali v sušilnem stroju pri nizki temperaturi. Ne belite.            
        
        
          <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ): ?>

                Ročno pranje v hladni vodi ali strojno pranje na programu za občutljivo perilo. Ne uporabljajte belila.<br><br>Sušite izključno na zraku – ne uporabljajte sušilnega stroja, da ohranite elastičnost in učinkovitost kompresije.

          <?php else: ?>
            <?php echo get_field("__overwrite_sekcije_bellow_3"); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /ni nasvetov za pranje za pas/bunion/fisiorest ?>



    <!-- 4 povrati in menjave -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
       <p></p>
       Tako smo prepričani, da boste NORIKS obožali, da imate <b data-stringify-type="bold">30 dni</b> za vračilo ali zamenjavo.
Brez papirologije, brez stresa – rešimo vse v par klikih. </p>

<p>
    



  <a href="mailto:info@noriks.com" style="display: flex; align-items: center; text-decoration: none; color: #333;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" style="margin-right: 6px;" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
    </svg>
    info@noriks.com
  </a>
</p>
<p>Samo pošljite nam e-pošto, v kateri navedete, da želite zamenjavo, in <b data-stringify-type="bold">za to bomo takoj poskrbeli.</b></p>
       
       
      </div>
    </div>



    <!-- 5 - infomraicje o dostavi -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_4","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <?php echo get_field("singlepp_acc_t_4","options"); ?>
      </div>
    </div>
    
    
    <!-- konec 5 acrodinov -->

  </div>

  <script>
    function toggleAccordion(header) {
      const item = header.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }
  </script>
  
  
  <style>
      
       .accordion {
      border-top: 1px solid #ddd;
    }

    .accordion-item {
      border-bottom: 1px solid #ddd;
    }

    .accordion-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 5px 5px 0px;
      cursor: pointer;
    }

    .accordion-header h3 {
      display: flex;
      align-items: center;
      font-weight: 500;
      font-size: 16px;
      margin: 0;
      gap: 2px;
      font-family: 'Roboto', sans-serif;  
    }

    .accordion-content {
      padding: 0 0 0 0;
      display: none;
      font-size: 14px;
      font-family: 'Roboto', sans-serif;  
      line-height: 1.6;
      color: black;
    }

    .accordion-item.open .accordion-content {
      display: block;
    }

    .icon {
      width: 24px;
      height: 24px;
      display: inline-block;
      background-size: contain;
      background-repeat: no-repeat;

    }
    
    .icon-details {
   
      margin: 0 0px 0 10px !important;
    }
    
    .icon-size {
   
      margin: 0 0px 0 10px !important;
    }

    /* Placeholder icons using emojis 
    
    .icon.details::before { content: "📝"; }
     .icon.size::before { content: "👕"; }
    .icon.laundry::before { content: "🧺"; }
    .icon.returns::before { content: "↩️"; }
    .icon.shipping::before { content: "📦"; }
*/
    .toggle {
      font-size: 24px;
      transition: transform 0.3s ease;
    }

    .accordion-item.open .toggle {
      transform: rotate(45deg);
    }
  </style>








<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
