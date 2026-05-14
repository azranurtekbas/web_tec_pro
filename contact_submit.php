<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.html");
    exit;
}

$isim       = htmlspecialchars($_POST["isim"]     ?? "");
$soyisim    = htmlspecialchars($_POST["soyisim"]  ?? "");
$mail       = htmlspecialchars($_POST["mail"]     ?? "");
$telefon    = htmlspecialchars($_POST["telefon"]  ?? "");
$yas        = htmlspecialchars($_POST["yas"]      ?? "");
$gender     = htmlspecialchars($_POST["gender"]   ?? "");
$newsletter = isset($_POST["newsletter"]) ? "Evet" : "Hayır";
$mesage     = htmlspecialchars($_POST["mesage"]   ?? "");
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <title>Form Sonucu – Ben Azra</title>
    <style>
      .submit-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 80px 20px;
      }
      .submit-section h2 {
        text-align: center;
        margin-bottom: 30px !important;
      }
      .data-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #232526;
      }
      .data-table th,
      .data-table td {
        padding: 12px 20px;
        text-align: left;
        border-bottom: 1px solid #414345;
      }
      .data-table th {
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-size: 13px;
        color: #ccc;
      }
      .data-table td:first-child {
        width: 30%;
        color: #aaa;
      }
      .back-link {
        display: block;
        text-align: center;
        margin-top: 30px;
        color: #fff !important;
        text-decoration: underline !important;
        font-size: 14px;
        letter-spacing: 1px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="maincontainer">
        <div class="header-wrapper">
          <a href="index.html">Ben <br />Azra</a>
        </div>
      </div>
    </header>

    <section class="submit-section">
      <div class="maincontainer">
        <h2>Gönderilen Form Verileri</h2>
        <table class="data-table">
          <thead>
            <tr>
              <th>Alan</th>
              <th>Değer</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>İsim</td>
              <td><?= $isim ?></td>
            </tr>
            <tr>
              <td>Soyisim</td>
              <td><?= $soyisim ?></td>
            </tr>
            <tr>
              <td>E-posta</td>
              <td><?= $mail ?></td>
            </tr>
            <tr>
              <td>Telefon</td>
              <td><?= $telefon ?></td>
            </tr>
            <tr>
              <td>Yaş</td>
              <td><?= $yas ?></td>
            </tr>
            <tr>
              <td>Cinsiyet</td>
              <td><?= $gender ?></td>
            </tr>
            <tr>
              <td>Bülten Tercihi</td>
              <td><?= $newsletter ?></td>
            </tr>
            <tr>
              <td>Mesaj</td>
              <td><?= nl2br($mesage) ?></td>
            </tr>
          </tbody>
        </table>
        <a class="back-link" href="contact.html">← Forma Geri Dön</a>
      </div>
    </section>

    <nav>
      <div class="nav-wrapper">
        <ul class="nav-list">
          <li class="nav-list-item">
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
        </ul>
      </div>
    </nav>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
