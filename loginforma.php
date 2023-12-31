<?php
session_start();
require 'php/app.php';
?>
<html>
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
<script src="js/validation.js" defer></script>


<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>
    .bee {
      width: 80px;
      height: 50px;
      background: url('images/pcelaanimacija.jpg') no-repeat;
      background-size: cover;
      position: absolute;
      top: 5%;
      left: 0;
      transform: translate(0, -10%);
      transition: transform 5s linear;
    }
  </style>
</head>

<body>
  <div class="bee" id="bee" style="transform: translate(165.409px, -50%);"></div>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Site Metas -->
  <title>Prodaja pčelinjih proizvoda</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Site CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">
  <script src="scriptpcela.js"></script>
  <div class="container py-4 py-lg-5 my-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card border-0 shadow">
          <div class="card-body">
            <h2 class="h4 mb-1">Prijavite se<img src="images/pcelaanimacija.jpg"> </h2>
            <h4><a href="index.php">Nazad na početnu stranicu</a></h4>
            <hr>

            <?php if(isset($_SESSION['error'])):?>
            <span class="text-danger">
              <?php echo htmlspecialchars($_SESSION['error'])  ?></span>
            <?php endif ?>
            <?php clear_session_error();?>


            <h3 class="fs-base pt-4 pb-2">Unesite email i lozinku</h3>

            <!-- login pocetak -->
            <form id="login_form" class="needs-validation" action="php/autentifikacija.php" method="post">
              <div class="input-group mb-3"><i
                  class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <input id="email" name="email" class="form-control rounded-start" type="email" placeholder="Email"
                  required value="">
              </div>
              <div class="input-group mb-3"><i
                  class="ci-locked position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <div class="password-toggle w-100">
                  <input id="lozinka" class="form-control" name="lozinka" type="password" placeholder="Lozinka"
                    required>
                  <input type="hidden" name="prijava">
                  <!-- <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label> -->
                </div>
              </div>
              <!-- <div class="d-flex flex-wrap justify-content-between">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" checked="" id="remember_me">
                  <label class="form-check-label" for="remember_me">Zapamti me</label>
                </div><a class="nav-link-inline fs-sm" href="account-password-recovery.html">Zaboravljena lozinka</a>
              </div> -->
              <hr class="mt-4">
              <div class="text-end pt-4">
                <button class="btn btn-primary" type="submit"><i class="ci-sign-in me-2 ms-n21"></i>Prijava</button>
              </div>
            </form>
            <!-- login kraj -->
          </div>
        </div>
      </div>
      <div class="col-md-6 pt-4 mt-3 mt-md-0">
        <h2 class="h4 mb-3">Nemate nalog? Registrujte se..</h2>
        <p class="fs-sm text-muted mb-4">Ovde se možete registrovati..</p>

        <!-- registracija pocetak -->
        <form id="register_form" action="php/autentifikacija.php" method="post">
          <div class="row gx-4 gy-3">
            <div class="col-sm-6">
              <label class="form-label" for="ime">Ime</label>
              <input class="form-control" name="Ime" type="text" required="" id="ime">
              <div class="invalid-feedback">Molim Vas unesite vaše ime!</div>
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="prezime">Prezime</label>
              <input class="form-control" name="Prezime" type="text" required="" id="prezime">
              <div class="invalid-feedback">Molim Vas unesite vaše prezime!</div>
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="reg-email">E-mail adresa</label>
              <input class="form-control" name="Email" type="email" required="" id="reg-email">
              <div class="invalid-feedback">Molim Vas unesite vašu email adresu!!</div>
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="telefon">Broj telefona</label>
              <input class="form-control" name="Telefon" type="text" required="" id="telefon">
              <div class="invalid-feedback">Molim Vas unesite vaš broj telefona!!</div>
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="adresa">Adresa</label>
              <input class="form-control" name="Adresa" type="text" required="" id="adresa">
              <div class="invalid-feedback">Molim Vas unesite vašu adresu!!</div>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="reg-lozinka">Šifra</label>
              <input class="form-control" name="Sifra" type="password" required="" id="reg-lozinka">
              <div class="invalid-feedback">Molim Vas unesite vašu šifru!</div>
            </div>
            <input type="hidden" name="registracija">
            <div class="text-end pt-4">
              <button class="btn btn-primary" type="submit"><i class="ci-sign-in me-2 ms-n21"></i>Registracija</button>
            </div>
          </div>
        </form>
        <!-- registracija kraj -->
      </div>
    </div>
  </div>

</body>

</html>