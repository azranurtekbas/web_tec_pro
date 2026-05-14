<?php
session_start();
include("userdata.php");

$loginSuccess = false;
$studentNo    = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputEmail    = $_POST["email"]    ?? "";
    $inputPassword = $_POST["password"] ?? "";

    if (($inputEmail === "g221210056@sakarya.edu.tr" && $inputPassword === "g221210056") ||
        ($inputEmail === $email && $inputPassword === $password)) {
        $loginSuccess = true;
        $studentNo    = explode("@", $inputEmail)[0];
        $_SESSION["email"] = $inputEmail;
        header("Refresh: 3; url=index.html");
    } else {
        header("Refresh: 3; url=login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <title>Ben Azra</title>
  </head>
  <body>
    <section class="overflow">
      <header>
        <div class="maincontainer">
          <div class="header-wrapper">
            <a href="index.html">Ben <span class="logo-accent">Azra</span></a>
          </div>
        </div>
      </header>

      <section class="about-start login-section">
        <div class="maincontainer">
          <div class="login-form-wrapper">
            <div class="login-form-img">
              <img src="img/6308172.webp" alt="" />
            </div>
            <div class="login-form-main">
              <div class="login-form">
                <?php if ($loginSuccess): ?>
                  <h3 class="postLogin-tittle">Giriş Başarılı</h3>
                  <h4 class="postLogin-mini-tittle">Hoşgeldiniz <?= htmlspecialchars($studentNo) ?></h4>
                  <p>3 Saniye İçinde Anasayfaya Yönlendirileceksiniz</p>
                <?php else: ?>
                  <h3 class="postLogin-tittle">Giriş Başarısız</h3>
                  <p>E-posta veya şifre hatalı.</p>
                  <p>3 Saniye İçinde Giriş Sayfasına Yönlendirileceksiniz</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="about-canvas">
          <canvas id="canvas"></canvas>
        </div>
      </section>

      <nav>
        <div class="nav-wrapper">
          <ul class="nav-list">
            <li class="nav-list-item active">
              <a href="index.html"><i class="fa-solid fa-house"></i></a>
            </li>
            <li class="nav-list-item">
              <a href="cv.html"><i class="fa-solid fa-id-card"></i></a>
            </li>
            <li class="nav-list-item">
              <a href="city.html"><i class="fa-solid fa-city"></i></a>
            </li>
            <li class="nav-list-item">
              <a href="team.html"><i class="fa-solid fa-basketball fa-lg"></i></a>
            </li>
            <li class="nav-list-item">
              <a href="myinterests.html"><i class="fa-solid fa-gamepad"></i></a>
            </li>
            <li class="nav-list-item">
              <a href="contact.html"><i class="fa-solid fa-envelope"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="js/praticles.js"></script>
  </body>
</html>
