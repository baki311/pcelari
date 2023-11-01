<?php require 'php/app.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Placanje</title>
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
include 'gornjiheader.php';
include 'header.php'; 
?>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Korpa</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Prodavnica</a></li>
                        <li class="breadcrumb-item active">Korpa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <?php if(isset($_SESSION['success'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Uspeh!</strong> <?php echo $_SESSION['success']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif ?>
    <?php unset($_SESSION['success']); ?>

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <!-- <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Ovde se možete prijaviti</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Klikni za
                            prijavu</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">Email adresa</label>
                                <input type="email" class="form-control" id="InputEmail"
                                    placeholder="Unesite Email adresu"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Šifra</label>
                                <input type="password" class="form-control" id="InputPassword"
                                    placeholder="Unesite vašu šifru"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Prijava</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Kreirajte nalog</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Klikni ovde
                            da se registruješ</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">Ime</label>
                                <input type="text" class="form-control" id="InputName" placeholder="Unesite vaše ime">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Prezime</label>
                                <input type="text" class="form-control" id="InputLastname"
                                    placeholder="Unesite vaše prezime"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email adresa</label>
                                <input type="email" class="form-control" id="InputEmail1"
                                    placeholder="Unesite vašu Email adresu"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Šifra</label>
                                <input type="password" class="form-control" id="InputPassword1"
                                    placeholder=" Unesite vašu šifru"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Registruj se</button>
                    </form>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Podaci za dostavu</h3>
                        </div>
                        <form id="forma" class="needs-validation" action="php/placanje.php" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Ime *</label>
                                    <input name="ime" type="text" class="form-control" id="firstName" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Prezime *</label>
                                    <input name="prezime" type="text" class="form-control" id="lastName" placeholder=""
                                        value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email adresa *</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Adresa *</label>
                                <input name="adresa" type="text" class="form-control" id="address" placeholder=""
                                    required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Država *</label>
                                    <select name="drzava" class="wide w-100" id="country">
                                        <option value="Choose..." data-display="Select">Odaberi...</option>
                                        <option value="Srbija">Srbija</option>
                                        <option value="Rusija">Rusija</option>
                                    </select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="zip">Poštanski broj *</label>
                                    <input name="zip" type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                    </select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>

                            </div>
                            <hr class="mb-4">
                            <!-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Adresa za dostavu je ista adresa
                                    kao i za naplatu</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">Sačuvaj ove informacije za sledeće
                                    naručivanje</label>
                            </div> -->
                            <!-- <hr class="mb-4"> -->
                            <div class="title"> <span>Način plaćanja</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                        checked required>
                                    <label class="custom-control-label" for="credit">Kreditna kartica </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="debit">Pouzećem</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                        required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Ime na kartici</label>
                                    <input type="text" class="form-control" id="cc-name"
                                        placeholder="Unesite vaše ime na kartici" required> <small
                                        class="text-muted">Puno ime i prezime na vašoj kartici</small>
                                    <div class="invalid-feedback"> Name on card is required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Broj kartice</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Važi do</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV kod</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1">

                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Način dostave</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="dostava" class="custom-control-input"
                                            value="0" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Standardna
                                            dostava</label> <span class="float-right font-weight-bold">Besplatna</span>
                                    </div>
                                    <div class="ml-4 mb-2 small">(3-7 radnih dana)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="dostava" class="custom-control-input"
                                            type="radio" value="500">
                                        <label class="custom-control-label" for="shippingOption2">Brza dostava</label>
                                        <span class="float-right font-weight-bold">500din</span> </div>
                                    <div class="ml-4 mb-2 small">(2-4 radnih dana)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="dostava" class="custom-control-input"
                                            type="radio" value="1000">
                                        <label class="custom-control-label" for="shippingOption3">Dostava u toku dana
                                            ili sutra</label> <span class="float-right font-weight-bold">1000din</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Konačan pregled korpe</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <?php if(isset($_SESSION['cart'])): ?>
                                    <?php foreach($_SESSION['cart'] as $product): ?>
                                    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                                    <div class="media mb-2 border-bottom">
                                        <div class="media-body"> <a href="#"> <?php echo $product['name']?></a>
                                            <div class="small text-muted">Cena: <?php echo $product['price']?> <span
                                                    class="mx-2">|</span> Količina:
                                                <?php echo $product['quantity']?> <span class="mx-2">|</span> Ukupno:
                                                <?php echo ($product['price'] * $product['quantity'])?></div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                    <?php else: ?>
                                    <h4>Korpa je prazna.</h4>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Pregled računa</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Proizvodi</div>
                                    <div class="ml-auto font-weight-bold">Ukupno</div>
                                </div>
                                <hr class="my-1">
                                <!-- <div class="d-flex">
                                    <h4>Za plaćanje</h4>
                                    <div class="ml-auto font-weight-bold"> $ 440 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Popust</h4>
                                    <div class="ml-auto font-weight-bold"> $ 40 </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Poklon kupon</h4>
                                    <div class="ml-auto font-weight-bold"> $ 10 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Taksa</h4>
                                    <div class="ml-auto font-weight-bold"> $ 2 </div>
                                </div> -->
                                <div class="d-flex">
                                    <h4>Cena dostave</h4>
                                    <div class="ml-auto font-weight-bold" id="dostava_polje"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <input type="hidden" name="cena" value="<?php echo get_cart_total_price();?>"
                                        id="skrivena_cena">
                                    <h5>Ukupno za plaćanje</h5>
                                    <div class="ml-auto h5" id="cena_polje">
                                        <?php echo get_cart_total_price();?><span>rsd</span></div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> <a onclick="submitFormPay()"
                                class="ml-auto btn hvr-hover">Poruči</a> </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <?php
include 'footerslajder.php';

?>


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script>
        var dostavaPolje = document.getElementById('dostava_polje');
        var cenaPolje = document.getElementById('cena_polje');
        var cena = document.getElementById('skrivena_cena');
        var staraCena = cenaPolje.innerHTML;

        document.querySelectorAll('input[name="dostava"]').forEach(function (radio) {
            radio.addEventListener('change', function () {
                var novaCena = staraCena;
                cenaPolje.innerHTML = parseInt(novaCena) + parseInt(this.value) + "rsd";
                dostavaPolje.innerHTML = parseInt(this.value) + "rsd";
                cena.value = cenaPolje.innerHTML;
            });
        });

        function submitFormPay() {
            document.getElementById('forma').submit();
        }
    </script>
</body>

</html>