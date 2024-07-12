<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("components/head.php"); ?>
  <link rel="stylesheet" href="styles/home.css">
  <title>Ahmad Andi Zainuri</title>
</head>

<body>
  <?php include("components/header.php"); ?>
  <main>
    <div id="overlayForMenu"></div>
    <!--Título-->
    <section>
      <article id="ctn_language">
      </article>
      <article class="column_centerCenter">
        <p>Ahmad Andi Zainuri</p>
        <p>development Web Full-Stack</p>
        <a href="#ctn_sobreMi">Tentang Saya
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 24" fill="none"
            stroke="#8FAE94" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-chevron-down">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </a>
      </article>
    </section>

    <!--Curly bracket--><img src="img/curly-braces.svg" id="bkg_braces" alt="">
    <!--Sobre mí-->
    <section class="text_center fadeInBottom" id="ctn_sobreMi">
      <article>
        <p class="title">Tentang Saya</p>
        <div>
          <p>Pengembang web berspesialisasi dalam Front-End. Saya memiliki kemampuan untuk belajar dengan
            cepat dan
            adaptif, yang memungkinkan saya beradaptasi dengan tantangan yang berbeda. Menjadi kolaboratif
            mendefinisikan saya,
            terorganisir, kreatif dan positif. Saya menikmati bekerja dalam tim dan menggunakan teknologi
            modern
            untuk membuat produk yang bertahan dalam ujian waktu.</p>
        </div>
      </article>
      <img src="img/index/sittingPC.svg" alt="">
    </section>

    <!--Habilidades-->
    <section class="fadeInBottom">
      <!--Numeral--><img src="img/hashtag.svg" id="bkg_hashtag" alt="">

      <article id="habilidadesCertificaciones">
        <p class="title">Keterampilan dan sertifikasi</p>
        <section id="ctn_habilities">
          <article>
            <div class="hability_btn">
              <div id="webDev_div" class="hability_btn_div"></div>
              <button id="webDev" class="hability_btn_btn">Web development</button>
            </div>
            <div class="hability_btn">
              <div id="design_div" class="hability_btn_div"></div>
              <button id="design" class="hability_btn_btn">Design</button>
            </div>
            <div class="hability_btn">
              <div id="english_div" class="hability_btn_div"></div>
              <button id="english" class="hability_btn_btn">Languages</button>
            </div>
          </article>
          <article id="hability_habilities">
            <div id="hability_webDev">
              <p class="hability_subtitle">Web development</p>
              <div class="hability_course">
                <p>development Web Front-End</p>
                <p>- HTML, CSS, SCSS, Bootstrap, JS, React, Vue</p>
              </div>
              <div class="hability_course">
                <p>development Web Back-End</p>
                <p>- PHP, MySQL</p>
              </div>
              <div class="hability_course">
                <p>DLL</p>
                <p>- GIT, Firebase</p>
              </div>
            </div>
            <div id="hability_design">
              <p class="hability_subtitle">Design</p>
              <div class="hability_course">
                <p>User Interface and User Experience Design (UX/UI)</p>
                <p>- Benchmarking, MVP, information architecture, user flow, wireframe and functional
                  prototyping, metrics, guidelines.</p>
              </div>
              <div class="hability_course">
                <p>Graphic design</p>
                <p>- Images for social networks and designs for printing.</p>
              </div>
            </div>
            <div id="hability_english">
              <p class="hability_subtitle">Idiomas</p>
              <div class="hability_course">
                <p>English</p>
                <p>- Professional Competence, level C1+</p>
              </div>
              <div class="hability_course">
                <p>Indonesia</p>
                <p>- Native</p>
              </div>
            </div>
          </article>
        </section>
      </article>
    </section>

    <!--Experiencia-->
    <section class="fadeInBottom" id="ctn_expLaboral">
      <!--Lightbulb--><img src="img/lightbulb.svg" alt="" id="bkg_lightbulb">
      <article class="text_center horizontalCenter">
        <p class="title">Ework experience</p>
        <div class="expLaboral">
          <p class="hability_subtitle">Accenture</p>
          <div class="workExpierence-tasks">
            <p>Application Development Associate</p>
            <p>- Analysis of programmatic problems
              <br>- Feature development
              <br>- Bug fixes
              <br>- Management of: Angular, Vue and JS
            </p>
          </div>
          <div class="workExpierence-tasks">
            <p>Contractor</p>
            <p>- Web accessibility improvements
              <br>- Bug fixes
              <br>- Management of: CSS, HTML, WordPress
            </p>
          </div>
        </div>
      </article>
      <!--Estrella--><img src="img/" alt="">
    </section>
    <?php include("components/contact_footer.php"); ?>
    <script src="scripts/homeScript.js"></script>

</body>

</html>