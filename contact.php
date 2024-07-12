<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("components/head.php"); ?>
  <title>Kontak - Ahmad Andi Zainuri</title>
  <link rel="stylesheet" href="styles/contact.css">
</head>

<body>
  <?php include("components/header.php"); ?>
  <main>
    <div id="overlayForMenu"></div>
    <p class="title">Kontak</p>
    <section>

    </section>

    <section id="ctn_emailSender">
      <div>
        <form action="mail.php" method="post">
          <p class="title">Kirimi saya email</p>
          <label for="nama">Nama</label>
          <input placeholder="Your name" name="name" type="text" tabindex="1"><br>
          <label for="email">Email</label>
          <input placeholder="Your Email Address" name="email" type="email" tabindex="2"><br>
          <label for="subject">subject</label>
          <input placeholder="Type your subject line" type="text" name="subject" tabindex="4"><br>
          <textarea name="message" placeholder="Type your Message Details Here..." tabindex="5"></textarea><br>
          <input type="submit" name="send">
        </form>
      </div>






      <div>
        <img src="img/index/contact.svg" alt="">
      </div>
    </section>
  </main>








  <footer>
    <section class="text_center">
      <p>Terima kasih telah mengunjungi halaman saya!</p>
      <article class="socialLinks">
        <div><a href="https://github.com/MartinaFSA"><img src="img/social/gh.svg" alt="GitHub"></a></div>
        <div><a href="https://www.linkedin.com/in/martina-fernandez-suarez-anzorena/"><img src="img/social/in.svg"
              alt="LinkedIn"></a></div>
        <div><a href="https://www.instagram.com/mafesa._/"><img src="img/social/ig.svg" alt="Instagram"></a>
        </div>
      </article>
      <p>Ahmad Andi Zainuri</p>
    </section>
    <div id="backToTop">
      <a href="#page_top">Kembali Keatas </a>
    </div>
  </footer>
  <script src="scripts/scripts.js"></script>
</body>

</html>