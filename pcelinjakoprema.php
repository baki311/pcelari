<?php require 'php/app.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['kategorija'])) {    
    $products = get_all_products_by_categoryid($_GET['kategorija'], $conn);   
    print_r($products);
}

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
    <title>Oprema za košnice</title>
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
                    <h2>Oprema za pčelinjak</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Početna stranica</a></li>
                        <li class="breadcrumb-item active">Oprema za pčelinjak </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sortiraj </span>
                                    <select id="basic" class="selectpicker show-tick form-control"
                                        data-placeholder="$ USD">
                                        <option data-display="Select">Ništa</option>
                                        <option value="1">Med</option>
                                        <option value="2">Med sa saćem</option>
                                        <option value="3">Saće</option>
                                        <option value="4">Propolis</option>
                                    </select>
                                </div>
                                <p>Prikaži samo 4 rezultata</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                                class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i
                                                class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Košnica 10101</p>
                                                    </div>
                                                    <img src="images/kosnica.png" class="img-pcelinji" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Košnica 10101 bez zaštitne farbe</h4>
                                                    <h5> 8.100din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Košnica 10100</p>
                                                    </div>
                                                    <img src="images/kosnice-2.jpg" class="img-pcelinji" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Košnica 10100 bez zaštitne farbe</h4>
                                                    <h5> 8.500din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">SUD ZA PARAFINISANJE</p>
                                                    </div>
                                                    <img src="images/parafin.webp" class="img-pcelinji" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Sud za parafinisanje nastavaka</h4>
                                                    <h5> 55.150din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">Novo</p>
                                                    </div>
                                                    <img src="images/sonda.jpg" class="img-mlec" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Digitalni termometar - higrometar sa sondom</h4>
                                                    <h5> 500din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">KOŠNICA SA ZAŠTITOM</p>
                                                    </div>
                                                    <img src="images/kosnicafarba.jpeg" class="img-mlec" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Košnica sa zaštitnom farbom</h4>
                                                    <h5> 10.500din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Nosač za ramove</p>
                                                    </div>
                                                    <img src="images/dryacjpg.jpg" class="img-mlec" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Nosač za ramove, jednodelni</h4>
                                                    <h5> 650din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Matična rešetka</p>
                                                    </div>
                                                    <img src="images/maticnaresetka.jpg" class="img-mlec" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Matična rešetka</h4>
                                                    <h5> 1.700din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Vrcaljka</p>
                                                    </div>
                                                    <img src="images/vrcaljka.jpg" class="img-mlec" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Tangencijalna vrcaljka</h4>
                                                    <h5> 28.000din</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sakupljač polena</p>
                                                    </div>
                                                    <img src="images/sakupljac.jpg" class="img-mlec" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Opširnije"><i class="fas fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Dodaj na listu želja"><i
                                                                        class="far fa-heart"></i>
                                                        </ul>
                                                        <a class="cart" href="#">Dodaj u korpu</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Sakupljać polena</h4>
                                                    <h5> 730din</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Pretraži ovde..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Kategorija</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree"
                                id="list-group-men" data-children=".sub-men">

                                <a href="#" class="list-group-item list-group-item-action"> Košnice <small
                                        class="text-muted">(1) </small></a>
                                <a href="#" class="list-group-item list-group-item-action"> Oprema za pčelinjak <small
                                        class="text-muted">(1)</small></a>
                                <a href="#" class="list-group-item list-group-item-action"> Cediljke <small
                                        class="text-muted">(1) </small></a>
                                <a href="#" class="list-group-item list-group-item-action"> Pčelinji nastavci <small
                                        class="text-muted">(1)</small></a>

                            </div>
                        </div>
                        <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Cena</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly
                                        style="border:0; color:#fbb714; font-weight:bold;">
                                    <button class="btn hvr-hover" type="submit">Primeni</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

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
</body>

</html>