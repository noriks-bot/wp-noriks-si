
<?php
/* Bunion (korektor haluksa) in ortopas (ortopedski pas): lastne why-sekcije.
   BREZ return — za tem teče skupni sistem mnenj + FAQ (ostale why-sekcije so
   tipsko zaščitene, zato se za te produkte ne prikažejo). */
if ( function_exists( 'noriks_is_type' ) ) {
    if ( noriks_is_type( 'bunion' ) ) {
        get_template_part( 'template_parts/product-bottom/why-bunion' );
    } elseif ( noriks_is_type( 'ortopas' ) ) {
        get_template_part( 'template_parts/product-bottom/why-ortopas' );
    } elseif ( noriks_is_type( 'fisiorest' ) ) {
        get_template_part( 'template_parts/product-bottom/why-fisiorest' );
    } elseif ( noriks_is_type( 'norikshers' ) ) {
        get_template_part( 'template_parts/product-bottom/why-norikshers' );
    }
}
?>
<?php if ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>
<!-- Compression socks: NORIKS vs. others comparison (demo/UGC videos need SI assets — omitted) -->
<section class="why-section knc-compare-section">
  <div class="knc-compare-wrap">
    <h2 class="knc-compare-title">NORIKS proti ostalim</h2>
    <div class="knc-table-scroll">
      <table class="knc-table">
        <thead>
          <tr>
            <th class="knc-feat"></th>
            <th class="knc-comp">Klasične nogavice<span>(Bauerfeind, medi…)</span></th>
            <th class="knc-comp">TV-nogavice<span>(Zip Sox &amp; Co.)</span></th>
            <th class="knc-us">NORIKS<em class="knc-badge">Št. 1</em></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Medicinska kompresija</td><td class="ok">✓</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Zadrga za preprosto obuvanje</td><td class="no">✕</td><td class="ok">✓</td><td class="us ok">✓</td></tr>
          <tr><td>Samostojno obuvanje brez pomoči</td><td class="no">✕</td><td class="mid">~</td><td class="us ok">✓</td></tr>
          <tr><td>Ojačana zadrga, se nikoli ne zatakne</td><td class="mid">—</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Zračna tkanina</td><td class="mid">~</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Udobje ves dan (+12 ur)</td><td class="mid">~</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>60-dnevna garancija vračila denarja</td><td class="no">✕</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr class="knc-price"><td>Cena na par</td><td>od 85 €</td><td>~15 €</td><td class="us">od 23,33 €</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<style>
  .knc-compare-section { background:#fff; padding:30px 0 40px; }
  .knc-compare-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .knc-compare-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:700; color:#111; margin:0 0 24px; }
  .knc-table-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .knc-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .knc-table th, .knc-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .knc-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .knc-table thead th:first-child { width:34%; background:#fff; }
  .knc-table .knc-comp { background:#767676; }
  .knc-table .knc-comp span { display:block; font-weight:400; font-size:11.5px; opacity:.8; margin-top:3px; }
  .knc-table .knc-us { background:#111; }
  .knc-badge { display:inline-block; margin-left:6px; background:#fff; color:#111; font-style:normal; font-weight:700; font-size:10.5px; padding:2px 8px; border-radius:999px; vertical-align:middle; }
  .knc-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .knc-table tbody tr { border-bottom:1px solid #eef0f4; }
  .knc-table tbody tr:nth-child(even) { background:#fafbfc; }
  .knc-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .knc-table td.no { color:#cdd2da; font-size:18px; }
  .knc-table td.mid { color:#e0a52e; font-size:18px; font-weight:700; }
  .knc-table td.us { background:#f3f3f3 !important; }
  .knc-table td.us.ok { color:#1a9e5f; }
  .knc-table .knc-price td { font-weight:700; color:#4a5568; }
  .knc-table .knc-price td:first-child { color:#1e2a3a; }
  .knc-table .knc-price td.us { color:#111; font-size:16px; }
  @media (max-width:640px){
    .knc-table th, .knc-table td { padding:12px 6px; font-size:13px; }
    .knc-table thead th { font-size:12px; }
    .knc-table thead th:first-child { width:40%; }
    .knc-table tbody td:first-child { font-size:12px; padding-left:10px; }
    .knc-badge { display:block; margin:4px auto 0; width:-moz-max-content; width:max-content; }
  }
</style>
<?php endif; ?>

<?php
if (  has_term( array( 'starter-paketi','orto-starter' ), 'product_cat', get_the_id() )  )   :
?>



<section  class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="" src="https://noriks.com/si/wp-content/uploads/2026/04/si.jpg">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
ZAŠTO LJUDI BIRAJU STARTER PAKET?
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;"  ><strong>“Uzeo sam jer nisam bio siguran hoće li mi odgovarati.” 



</strong><span style="font-weight:normal;">Marko - Zagreb</span></p>
        <p class="description">Mnogi kupci krenu sa starter paketom jer žele prvo vidjeti kako NORIKS stoji i kako se nosi. Jedna majica i jedne bokserice dovoljne su da bez velikog ulaganja donesu odluku.



</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;" ><strong>“Po prvem nošenju sem takoj naročil še.” 



</strong><span style="font-weight:normal;">Pavle - Split</span></p>
        <p class="description">Više od 95% kupaca nakon starter paketa ponovno naruči. Ne zato što su planirali, nego zato što već prvi dan osjete razliku u kroju, udobnosti i kvaliteti.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;"  ><strong>“Materijal i fit su me uvjerili.” 



</strong><span style="font-weight:normal;">Ante - Pula</span></p>
        <p class="description">Majica in boksarice so mehke, lahke in prijetne na koži. Začetni paket je najpogostejši razlog, da NORIKS hitro postane del vsakodnevne garderobe.



</p>
      </div>
    </div>

  </div>
</section>



<section style="background: white;" class="why-section">
   <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
           <img style="" src="https://noriks.com/si/wp-content/uploads/2026/04/si2.jpg">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
KOMBINACIJA KOJA SE NOSI SVAKI DAN

      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Dizajnirano za cjelodnevnu udobnost


</strong></p>
        <p class="description">Majica i bokserice napravljene su za nošenje od jutra do večeri, bez prilagođavanja i nelagode. Sve stoji na mjestu, ne steže i omogućuje slobodno kretanje tijekom cijelog dana.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Kroj koji radi s tijelom


</strong></p>
        <p class="description">Kroj majice naglašava gornji dio tijela, dok bokserice pružaju dovoljno prostora i stabilnost bez podizanja. Rezultat je siguran, opušten osjećaj i uredan izgled u svakoj situaciji.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Kvaliteta koju osjetiš odmah


</strong></p>
        <p class="description">Materijali su mekani, prozračni i ugodni na koži, bez gubitka oblika nakon pranja. Već pri prvom nošenju jasno je zašto ova kombinacija brzo postaje dio svakodnevne garderobe.


</p>
      </div>
    </div>

  </div>
</section>






<section class="why-section">
   <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="" src="https://noriks.com/si/wp-content/uploads/2026/04/si3.jpg">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
NAJLAKŠI I NAJSIGURNIJI POČETAK
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Najmanji mogući rizik


</strong></p>
        <p class="description">Zato što ti omogućuje da upoznaš kvalitetu bez velikog ulaganja.
Namesto da vnaprej kupiš več kosov, vzameš eno majico in ene boksarice — ravno dovolj, da vidiš, kako stojijo, kako se nosijo in kakšen je občutek materiala.

</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Osmišljeno za prvi korak


</strong></p>
        <p class="description">Starter paket je osmišljen kao prvo iskustvo, ne kao zaliha.
Dostupan je samo jednom po kupcu i po posebnoj cijeni, kako bi odluka bila jednostavna i bez razmišljanja.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Iskustvo koje se ponavlja


</strong></p>
        <p class="description">Većina muškaraca nakon toga nastavi s NORIKS-om jer shvati razliku u kroju, udobnosti i kvaliteti.
Ali prvi korak je ovaj — najmanji rizik, najčišći dojam. 

</p>
      </div>
    </div>

  </div>
</section>



<?php endif; ?>







<?php 
if (  has_term( array( 'majice', 'orto-majice' ), 'product_cat', get_the_id() )  ||  has_term( 'black-friday', 'product_cat', get_the_id() )) : 
?>





<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
        <video 
          autoplay muted loop playsinline 
          class="why-video">
          <source src="https://noriks.com/si/wp-content/uploads/2025/09/noriks_gif_hr_2-1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        <?php echo get_field( 'singlepp_content_part_h1', 'options' ); ?>
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_1', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_2', 'options' ); ?></p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_3', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_4', 'options' ); ?></p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_5', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_6', 'options' ); ?></p>
      </div>
    </div>

  </div>
</section>


  
  
  
  
  
  
<!-- table section -->

  
  
<section class="comparison-section" style="padding-top: 30px;" >
    <div class="comparison-intro">
     <!-- <h4 class="highlight"><?php echo get_field("_comp_table_t1", "options"); ?></h4>-->
      <h1 style="color:white;"><?php echo get_field("_comp_table_t2", "options"); ?></h1>
      <p style="    opacity: 0.6;" class="note"><?php echo get_field("_comp_table_t3", "options"); ?></p>
    </div>
  </section>
  
  
<section class="comparison-table-section">
 
 <div class="comparison-container">
   <table class="comparison-table">
      <thead>
        <tr>
          <th></th>
          <th class="brand-column">
                <?php echo get_field("_comp_table_inside_1", "options"); ?><br>
            <div class="price"><?php echo get_field("_comp_table_inside_3", "options"); ?></div>
          </th>
          <th class="other-brand"><?php echo get_field("_comp_table_inside_2", "options"); ?><br><span><?php echo get_field("_comp_table_inside_4", "options"); ?></span></th>
        </tr>
      </thead>
      <tbody>
          
          <?php
          $_comp_table_fieldlines = get_field("_comp_table_fieldlines","options");
          ?>
          
            <?php if ($_comp_table_fieldlines): ?>
             <?php foreach ($_comp_table_fieldlines as $item): ?>
          
                    <tr>
                      <td><?php echo $item['text']; ?></td>
                      <td class="bg-best"><span  style="background: #496d8f;" class="checkmark">✔</span></td>
                      <td class="bg-bad"><span class="crossmark">✖</span></td>
                    </tr>
                    
            <?php endforeach; ?>
        <?php endif; ?>
       
       
      </tbody>
    </table>

    <p style="    opacity: 0.6;" class="small-note">
      <?php echo get_field("_comp_table_bottom_text", "options"); ?>
    </p>
  </div>
</section>



<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="width: 100%;       
    aspect-ratio: 1/1; 
    object-fit: cover;  " src="<?php echo get_template_directory_uri(); ?>/img/majice-3 (1).jpeg">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        ZAKAJ BO TA MAJICA POSTALA VAŠ STANDARD?
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Oblikovana za vsakdanje življenje
</strong></p>
        <p class="description">Ta majica je narejena za celodnevno nošenje, od jutra do večera. Ne zahteva prilagajanja ali razmišljanja — preprosto izgleda dobro v vsaki situaciji.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Kroj, ki razume telo
</strong></p>
        <p class="description">Kroj je razvit tako, da sledi liniji telesa brez stiskanja in poudari tisto, kar mora. Rezultat je urejen, samozavesten videz brez občutka nelagodja.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Občutite razliko že ob prvem nošenju
</strong></p>
        <p class="description">Material je mehak, lahek in zračen na koži. Po prvem nošenju je jasno, zakaj ta majica hitro postane tista, po kateri najpogosteje posežete.
</p>
      </div>
    </div>

  </div>
</section>

  
<!-- table section -->

<?php endif; ?>







<!-- here we include new file BOXERIRICE-->

<?php if ( has_term( array( 'boksarice', 'bokserice-sastavi-paket',  'orto-bokserice' ), 'product_cat', get_the_ID() )  && !has_term( 'black-friday', 'product_cat', get_the_ID() ) ): ?>



<style>
    .why-container  {
    max-width: 1440px !important;
}
    
</style>


<?php 
if(  get_the_ID() == 39181 ): 
?>


<!-- invlude video views here -->


<?php 
endif; 
?>










<!-- 1 boksarica -->


<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img src="https://noriks.com/si/wp-content/uploads/2026/04/2026-04-24-09.28.40-1.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
       Prilagodljiv kroj za močnejše noge
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Celodnevno udobje
</strong></p>
        <p class="description">Posebej zasnovano za moške z debelejšimi stegni. Elastičen in raztegljiv material zagotavlja maksimalno udobje brez zategnjenosti ali neudobnega pasu. Spodnje perilo ostane na mestu in se ne dviga, tako da se lahko prosto gibljete ves dan.</p>
      </div>

    
    
    </div>

  </div>
</section>
<style>
/* your styles */
</style>





<!-- 2 boksarica -->

<section  style="background: white;" class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img src="https://noriks.com/si/wp-content/uploads/2026/04/si-2.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
       Manj obrabe in poškodb
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Super vzdržljivo 💪
</strong></p><p class="description">Pozabite na nenehno kupovanje raztrganega spodnjega perila. Kratke hlače NORIKS so narejene iz močnejšega materiala – dlje zdržijo in vam prihranijo obisk trgovine.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        
        
        <p class="description">
        
        ✅ Manj trganja <br/>
✅ Manj potenja <br/>
✅ Celodnevno udobje <br/>
                
        </p>
      </div>

     
    </div>

  </div>
</section>
<style>
/* your styles */
</style>




<!-- 3 boksarica -->

<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img style="width: 100%;       
    aspect-ratio: 1/1; 
    object-fit: cover;  " src="https://noriks.com/si/wp-content/uploads/2026/04/2026-04-24-09.28.49-1.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
      Dovolj prostora za vse
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Fantje, pustite svojemu mednožju prosto dihati!
</strong></p>
        <p class="description">Spodnje perilo NORIKS nudi oporo ves dan, ne da bi izgubilo obliko. Nebeško mehak material Modal se razteza in se popolnoma prilega na pravih mestih. Prostor za vaše »pripomočke« je bolj prostoren in prilagodljiv, zato se ne boste počutili utesnjeno.</p>
      </div>

   
   
    </div>

  </div>
</section>
<style>
/* your styles */
</style>








<?php endif; ?>

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

          <?php elseif ( !has_term( array( 'bokserice', 'bokserice-sastavi-paket' ), 'product_cat', get_the_ID() ) ): ?>

          <?php echo get_field("singlepp_content_standard_reviews_t2","options"); ?>

          <?php else: ?>

          Nisi sam v iskanju najboljših bokseric.

          <?php endif; ?>


          </h1>
    <p class="note" style="color: black; margin-top: 0px; margin-bottom: 5px;"><?php if ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') ): ?>Tisoči ljudi že uporabljajo NORIKS FisioRest za manj bolečin in napetosti v vratu – trakcija, vibracija in toplota v eni napravi.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bunion') ): ?>Tisoči ljudi že uporabljajo NORIKS korektor haluksa za manj bolečin in bolj pravilno lego palca – doma, med gledanjem TV ali med spanjem.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopas') ): ?>Tisoči ljudi že nosijo NORIKS ortopedski pas za manj bolečin in stabilnejši hrbet – med delom, pri dvigovanju in dolgotrajnem sedenju.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>Tisoče moških že nosi NORIKS kompresijske nogavice za lažje in bolj spočite noge – v službi, na potovanjih in pri treningu.<?php else: ?><?php echo get_field("singlepp_content_standard_reviews_t3","options"); ?><?php endif; ?></p>
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

  // Fallback product name shown in review cards.
  $rv_fallback_title = $is_fisiorest_page ? 'NORIKS | FisioRest'
                     : ( $is_bunion_page ? 'NORIKS | Korektor haluksa'
                     : ( $is_ortopas_page ? 'NORIKS | Ortopedski pas'
                     : ( $is_nogavice_page ? 'Kompresijske nogavice z zadrgo' : 'Ena Siva Majica' ) ) );

  // Include review pools (own pool per product group)
  if ( $is_fisiorest_page ) {
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
      $transient_key = 'reviews_product_pool_cache_v2',
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
      if ( $product_id ) {
          $is_bokserice = has_term( array( 'bokserice','orto-bokserice', 'bokserice-sastavi-paket' ), 'product_cat', $product_id );
          $is_nogavice  = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $product_id) );
          $is_ortopas   = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $product_id) );
          $is_bunion    = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $product_id) );
          $is_fisiorest = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $product_id) );
      }

      $cache_key = $transient_key . ( $is_fisiorest ? '_fisiorest' : ( $is_bunion ? '_bunion' : ( $is_ortopas ? '_ortopas' : ( $is_nogavice ? '_nogavice' : ( $is_bokserice ? '_bokserice' : '_all' ) ) ) ) );

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

      if ( $is_fisiorest ) {
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
          $args['tax_query'] = [
              [
                  'taxonomy' => 'product_cat',
                  'field'    => 'slug',
                  'terms'    => [ 'bokserice' ],
                  'operator' => 'NOT IN',
              ],
          ];
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
  // Compression socks + belt + bunion + fisiorest: text-only reviews (no avatar images).
  $avatar_pool = ( $is_nogavice_page || $is_ortopas_page || $is_bunion_page || $is_fisiorest_page ) ? array() : get_review_avatar_pool($avatar_type);

  $product_pool = get_wc_product_pool();

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

<?php if ( $is_nogavice_page || $is_ortopas_page || $is_bunion_page || $is_fisiorest_page ) : ?>
<style>/* socks + belt + bunion + fisiorest: text-only reviews, no avatar */ #reviews-section .avatar { display: none !important; }</style>
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
  array( 'questioon' => 'Ali obstaja garancija vračila denarja?', 'answer' => 'Ponujamo garancijo zadovoljstva! Če s pasom NORIKS niste zadovoljni, nas kontaktirajte na info@noriks.com za vračilo in povračilo v 90 dneh. Rok se šteje od prejema pasu.' ),
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
  array( 'questioon' => 'Ali ga lahko vrnem, če ne vidim rezultatov?', 'answer' => 'Seveda! Nudimo polno garancijo vračila denarja v 90 dneh od dostave, če z izdelkom niste zadovoljni. Pišite nam na info@noriks.com in odgovorili bomo v 12 urah od prejema sporočila!' ),
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
$faq_pick = function( $title, $list ) use ( $is_knc, $knc_faq, $is_ortopas_faq, $ortopas_faq, $is_bunion_faq, $bunion_faq, $is_fisiorest_faq, $fisiorest_faq ) {
  $is_info = ( stripos( (string) $title, 'izdelku' ) !== false );
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
                         <?php echo $faq_item["questioon"]; ?>
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
                         <?php echo $faq_item["questioon"]; ?>
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
                         <?php echo $faq_item["questioon"]; ?>
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
		
