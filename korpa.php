<?php require 'php/app.php'; 
session_start();
?>
<!DOCTYPE html>
<?php require_once 'php/konekcija.php'; ?>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
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
                        <li class="breadcrumb-item"><a href="pcelinjiproizvod.php">Prodavnica</a></li>
                        <li class="breadcrumb-item active">Korpa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Slika</th>
                                    <th>Naziv</th>
                                    <th>Cena</th>
                                    <th>Količina</th>
                                    <th>Ukupno</th>
                                    <th>Obriši</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($_SESSION['cart'])): ?>
                                <?php foreach($_SESSION['cart'] as $product): ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo $product['image'] ?>" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            <?php echo $product['name'] ?>
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $product['price'] ?>RSD</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4"
                                            value="<?php echo $product['quantity'] ?>" min="0" step="1"
                                            class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p><?php echo ($product['price'] * $product['quantity']) ?>RSD</p>
                                    </td>
                                    <form id="remove<?php echo $product['id'] ?>" action="php/korpaFunkcije.php"
                                        method="post">
                                        <input type="hidden" name="remove">
                                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                                        <td class="remove-pr">
                                            <a style="cursor: pointer;"
                                                onclick="submitDeleteForm(<?php echo $product['id'] ?>)">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </form>
                                </tr>
                                <?php endforeach ?>
                                <?php else: ?>
                                <h4>Korpa je prazna.</h4>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Unesite kod sa kupona" aria-label="Coupon code"
                                type="text">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">Dodaj kupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Dodaj karticu" type="submit">
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Pregled porudžbine</h3>
                        <div class="d-flex">
                            <h4>Ukupno</h4>
                            <div class="ml-auto font-weight-bold"> <?php echo get_cart_total_price(); ?> RSD </div>
                        </div>
                        <div class="d-flex">
                            <h4>Popust</h4>
                            <div class="ml-auto font-weight-bold"> $ 40 </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Kupon popust</h4>
                            <div class="ml-auto font-weight-bold"> $ 10 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Taksa</h4>
                            <div class="ml-auto font-weight-bold"> $ 2 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Dostava</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Ukupno za plaćanje</h5>
                            <div class="ml-auto h5"> <?php echo get_cart_total_price(); ?> RSD</div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="kupovinakorpa.php" class="ml-auto btn hvr-hover">Završi
                        kupovinu</a> </div>
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
        function submitDeleteForm(id) {
            document.getElementById('remove' + id).submit();
        }
    </script>
</body>

</html>