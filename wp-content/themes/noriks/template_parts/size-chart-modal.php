<!-- Size Chart Modal Styles -->
<style>
/* --- Base UI bits you already had --- */
#size-suggestion-result { border: 1px solid #ccc; }
.body-type-options { display: flex; justify-content: space-between; gap: 5px; }
.body-type-option {
  display: flex; flex-direction: column; align-items: center; cursor: pointer;
  padding: 5px; border: 1px solid #ccc; border-radius: 2px; width: auto; text-align: center;
  transition: all 0.2s ease;
}
.body-type-option input { display: none; }
.body-type-option img { width: 100px; height: 100px; margin-bottom: 5px; }
.body-type-option:hover { background-color: #e0e0e0; }
.body-type-option.selected { border: 2px solid #f39c13; background-color: #fff3d6; }
.slike-mobile-only { display: flex; }

/* --- Modal base --- */
/* Height is AUTO on ALL screens now (desktop same as mobile). */
#custom-size-chart-modal {
  display: none;              /* hidden by default; shown via .show */
  position: fixed;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 90%;
  max-width: 800px;
  height: auto;               /* << auto height */
  background: #fff;
  border-radius: 3px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.25);
  z-index: 9999999;
  overflow: visible;          /* no forced scrollbars */
  font-family: sans-serif;
}

/* Single-column content wrapper (only image) */
.size-chart-left {
  display: flex;              /* center the image inside */
  align-items: center;        /* vertical center */
  justify-content: center;    /* horizontal center */
  background: white;
  padding: 0;
}

/* Image fills modal width, keeps aspect ratio */
.size-chart-left img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: contain;
  margin: 0;                  /* ensure no offsets */
}

/* When opened */
#custom-size-chart-modal.show { display: block; }

/* --- Mobile tweaks (kept minimal) --- */
@media (max-width: 768px) {
  .info-box-desktop { display: none !important; }
  .second-one, .third-one { display: inline-block; width: 49%; }
  #size-suggestion-result { padding-top: 3px; padding-bottom: 3px; }
  .form-title { margin-top: 4px; text-align: left; padding-left: 10px; font-size: 15px; }
  .size-chart-field { margin-top: 10px; text-align: left; }
  .size-chart-field label { text-align: left; }

  /* Modal stays auto-height on mobile too; nothing else needed */

  /* --- Larger size-chart image with horizontal scroll on mobile --- */
  /* Push content below the absolute X-close button so it doesn't overlap */
  #custom-size-chart-modal { padding-top: 45px; padding-bottom: 10px; }

  .size-chart-left {
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch; /* iOS momentum */
    justify-content: flex-start;       /* scroll starts at the left edge */
    scrollbar-width: thin;
    padding-bottom: 6px;                /* room for native scrollbar */
  }
  .size-chart-left img {
    width: auto !important;             /* override base 100% width */
    max-width: none !important;
    min-width: 720px;                   /* large enough for text to be readable */
    height: auto !important;
    margin-top: 0 !important;           /* override inline 70px margins */
    margin-bottom: 0 !important;
    object-fit: initial;                /* let natural size dictate dimensions */
  }
  /* Soft hint that the image is horizontally scrollable */
  .size-chart-left::-webkit-scrollbar { height: 6px; }
  .size-chart-left::-webkit-scrollbar-thumb { background: rgba(0,0,0,0.25); border-radius: 3px; }
}

/* Desktop cleanups */
@media (min-width: 769px) {
  .slike-mobile-only { display: none !important; }
  .info-box-mobile  { display: none !important; }
}
</style>


<?php if ( has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', get_the_ID() ) ): ?>  

<style>

@media (min-width: 769px) {
  .size-chart-left  img { 
      max-width: 50% !important; 
      margin: 0 auto !important;
      
  }

}
</style>


<?php endif; ?>

<!-- Modal HTML -->
<div id="custom-size-chart-modal" aria-modal="true" role="dialog">
  <span id="close-size-chart-x" style="position: absolute;
    top: 5px; right: 5px; font-size: 24px; font-weight: bold; cursor: pointer;
    background: black; border-radius: 1px; width: 40px; height: 40px; text-align: center; color: white;">&times;</span>

  <div  style="<?php if ( has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', get_the_ID() ) ): ?>  display: block; <?php endif; ?>"
        class="size-chart-left">
      
      <?php if ( has_term( array( 'boksarice', 'orto-bokserice' , 'bokserice-sastavi-paket' ), 'product_cat', get_the_ID() )   && 
       !has_term( 'black-friday', 'product_cat', get_the_ID() )   ): ?>
      
    <img
    
    style="margin-top: 70px;margin-bottom: 70px;"
    
      src="https://noriks.com/si/wp-content/uploads/2026/04/bokserice_si.jpg"
      alt="Size Guide">
      
      
       
      <?php elseif ( has_term( array( 'nogavice', 'zimske-carape	' ), 'product_cat', get_the_ID() ) ): ?>
      
      
       <img
    
    style="margin-top: 70px;margin-bottom: 70px;"
    
      src="https://noriks.com/si/wp-content/uploads/2026/04/nogavice_si.jpg"
      alt="Size Guide">
      
      
      <?php elseif ( has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', get_the_ID() ) ): ?>
      
      
      
     <img
    
    style="margin-top: 35px;margin-bottom: 0px;"
    
      src="https://noriks.com/si/wp-content/uploads/2026/04/tablica_si.jpg"
      alt="Size Guide">
      
      
       <img
    
    style="margin-top: 0px;margin-bottom: 0px;"
    
      src="https://noriks.com/si/wp-content/uploads/2026/04/bokserice_si.jpg"
      alt="Size Guide">
     
      
      
      <?php else: ?>

      <!-- MAJICE: HTML size chart (visina x teza matrika) -->
      <div class="noriks-size-chart-wrap">
        <style>
          .noriks-size-chart-wrap {
            width: 100%;
            padding: 20px 18px 24px;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: #111;
          }
          .noriks-sc-table-wrap { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; }
          table.noriks-sc {
            border-collapse: collapse;
            width: 100%;
            min-width: 720px;
            font-size: 13px;
            table-layout: fixed;
          }
          table.noriks-sc th, table.noriks-sc td {
            border: 2px solid #fff;
            text-align: center;
            padding: 9px 4px;
            background: #ececec;
            font-weight: 600;
            color: #111;
          }
          table.noriks-sc thead th {
            background: #b8b8b8;
            color: #000;
            font-weight: 700;
          }
          table.noriks-sc thead th.noriks-sc-empty { background: #b8b8b8; }
          table.noriks-sc tbody th {
            background: #b8b8b8;
            font-weight: 700;
          }
          table.noriks-sc tbody th.noriks-sc-vis-label {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            background: #b8b8b8;
            color: #000;
            width: 32px;
            letter-spacing: 1px;
          }
          table.noriks-sc td.noriks-sc-empty { background: #ececec; color: transparent; }
          table.noriks-sc td.noriks-sc-size {
            background: #d9d9d9;
            color: #000;
            font-weight: 700;
          }
          .noriks-sc-steps {
            margin-top: 22px;
          }
          .noriks-sc-steps h3 {
            margin: 0 0 12px;
            font-size: 16px;
            font-weight: 800;
            color: #111;
          }
          .noriks-sc-steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
          }
          .noriks-sc-step {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            font-size: 13px;
            line-height: 1.4;
            color: #222;
          }
          .noriks-sc-step .noriks-sc-num {
            flex: 0 0 22px;
            width: 22px; height: 22px;
            border-radius: 50%;
            background: #111;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            display: flex; align-items: center; justify-content: center;
          }
          .noriks-sc-pro {
            margin-top: 16px;
            border: 1.5px solid #f39c13;
            border-radius: 4px;
            padding: 10px 12px;
            background: #fff8ec;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            line-height: 1.4;
          }
          .noriks-sc-pro-tag {
            background: #f39c13;
            color: #fff;
            font-weight: 800;
            font-size: 11px;
            padding: 5px 9px;
            border-radius: 2px;
            letter-spacing: 0.5px;
            flex: 0 0 auto;
            white-space: nowrap;
          }
          .noriks-sc-guarantee {
            margin-top: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #222;
          }
          .noriks-sc-check {
            width: 20px; height: 20px;
            border-radius: 50%;
            background: #2ecc40;
            color: #fff;
            font-weight: 800;
            font-size: 13px;
            display: flex; align-items: center; justify-content: center;
            flex: 0 0 auto;
          }
          @media (max-width: 600px) {
            .noriks-sc-steps-grid { grid-template-columns: 1fr; }
            table.noriks-sc { font-size: 12px; }
            .noriks-size-chart-wrap { padding: 14px 10px 18px; }
          }
        </style>

        <div class="noriks-sc-table-wrap">
          <table class="noriks-sc">
            <thead>
              <tr>
                <th class="noriks-sc-empty" rowspan="2" style="width:42px;"></th>
                <th class="noriks-sc-empty" style="width:80px;">Velikost</th>
                <th colspan="9">Teža (kg)</th>
              </tr>
              <tr>
                <th>59-68 kg</th>
                <th>69-77 kg</th>
                <th>78-84 kg</th>
                <th>84-95 kg</th>
                <th>96-102 kg</th>
                <th>103-113 kg</th>
                <th>114-129 kg</th>
                <th>130-136 kg</th>
                <th>137-150 kg</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="noriks-sc-vis-label" rowspan="10">Višina (cm)</th>
                <th>168 cm</th>
                <td class="noriks-sc-size">S</td>
                <td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td>
              </tr>
              <tr>
                <th>170 cm</th>
                <td class="noriks-sc-size">S</td>
                <td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td><td class="noriks-sc-empty"></td>
              </tr>
              <tr>
                <th>173 cm</th>
                <td class="noriks-sc-size">S</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>175 cm</th>
                <td class="noriks-sc-size">S</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>178 cm</th>
                <td class="noriks-sc-size">S</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>180 cm</th>
                <td class="noriks-sc-size">S</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>183 cm</th>
                <td class="noriks-sc-size">S</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>185 cm</th>
                <td class="noriks-sc-empty"></td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>188 cm</th>
                <td class="noriks-sc-empty"></td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>191 cm</th>
                <td class="noriks-sc-empty"></td>
                <td class="noriks-sc-empty"></td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
              <tr>
                <th>193 cm</th>
                <td class="noriks-sc-empty"></td>
                <td class="noriks-sc-empty"></td>
                <td class="noriks-sc-size">M</td>
                <td class="noriks-sc-size">L</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">XL</td>
                <td class="noriks-sc-size">2XL</td>
                <td class="noriks-sc-size">3XL</td>
                <td class="noriks-sc-size">3XL</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="noriks-sc-steps">
          <h3>Kako poiskati svojo velikost</h3>
          <div class="noriks-sc-steps-grid">
            <div class="noriks-sc-step">
              <span class="noriks-sc-num">1</span>
              <span>Poišči svojo <strong>višino</strong> v levem stolpcu.</span>
            </div>
            <div class="noriks-sc-step">
              <span class="noriks-sc-num">2</span>
              <span>Poišči svojo <strong>težo</strong> v zgornji vrstici.</span>
            </div>
            <div class="noriks-sc-step">
              <span class="noriks-sc-num">3</span>
              <span>Polje, kjer se sekata &mdash; to je tvoja velikost.</span>
            </div>
          </div>
        </div>

        <div class="noriks-sc-pro">
          <span class="noriks-sc-pro-tag">PRO NASVET</span>
          <span>Če si med dvema velikostima in želiš <strong>bolj sproščen kroj</strong>, vzemi večjo. Za <strong>bolj prilegajoč videz</strong> vzemi manjšo.</span>
        </div>

        <div class="noriks-sc-guarantee">
          <span class="noriks-sc-check">&#10003;</span>
          <span>Nisi prepričan? Brezplačna zamenjava velikosti v 90 dneh.</span>
        </div>
      </div>

      <?php endif; ?>
      
      
      
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("custom-size-chart-modal");
  const openBtn = document.getElementById("open-size-chart");
  const closeX = document.getElementById("close-size-chart-x");

  // Open using a class so CSS controls display across breakpoints
  openBtn?.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.add("show");
  });

  // Close
  closeX?.addEventListener("click", function () {
    modal.classList.remove("show");
  });

  // Optional: close on ESC
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") modal.classList.remove("show");
  });
});
</script>
