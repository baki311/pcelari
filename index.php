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
    <title>Prodaja pcelinjih proizvoda</title>
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
  <!--
    <?php
    try {  
       $sql = "INSERT INTO role (RolaID, NazivRole)
       VALUES ('3', 'Radnik2')";

       $conn->exec($sql);
       echo "New record created successfully";
   } 

   catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null; 

  ?>
-->

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

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="images/sace.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Dobro došli u  <br> PČELA-RADILICA PRODAVNICU</strong></h1>
                        <p class="m-b-40">Ovde možete videti širok asortiman naših proivoda <br> za pčele i od pčela. Krenimo odmah!!!</p>
                        <p><a class="btn hvr-hover" href="pcelinjiproizvod.php">Kupovina</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="images/sace2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Dobro došli u  <br> PČELA-RADILICA PRODAVNICU</strong></h1>
                        <p class="m-b-40">Saznajte kako gajimo naše pčele, kako se proizvodi med i koje sve vrste meda postoje. <br>Krenimo u obilazak!! </p>
                        <p><a class="btn hvr-hover" href="Onama.php">Obilazak</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="images/cedjenje.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <h1 class="m-b-20"><strong>Dobro došli u  <br> PČELA-RADILICA PRODAVNICU</strong></h1>
                       <p class="m-b-40">Naučite postupak cedjenja meda i kako se skladišti.<br> Cedi med sa nama.</p>
                       <p><a class="btn hvr-hover" href="galerija.php">Cedjenje meda</a></p>
                   </div>
               </div>
           </div>
       </li>
   </ul>
   <div class="slides-navigation">
    <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
</div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/bagrem.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Bagremov med</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/livadski.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Livadski med</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/sumski.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Šumski med</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/suncokretov.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Suncokretov med</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/lavanda3.jpeg" alt="" />
                    <a class="btn hvr-hover" href="#">Lavandin med</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/kesten.jpg"  alt="" />
                    <a class="btn hvr-hover" href="#">Med od kestena</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class="box-add-products">

  <div class="container">
   <h1>Premium proizvodi</h1>
   <div class="row">

    <div class="col-lg-6 col-md-6 col-sm-12">

     <div class="offer-box-products">
      <img class="img-fluid" src="images/kamion.jpg" alt="" />
      <div class="mask-icon">

        <a class="cart" href="about.html">Pozovite nas putem telefona</a>
    </div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
 <div class="offer-box-products">
  <img class="img-fluid" src="images/prikolica.jpg" alt="" />
  <div class="mask-icon">

    <a class="cart" href="about.html">Pozovite nas putem telefona</a>
</div>
</div>
</div>
</div>
</div>
</div>



<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Naša preporuka</h1>
                    <p>Ovo je naša preporuka opreme koju morate imati na vašem pčelinjaku.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">Svi proizvodi</button>
                        <button data-filter=".top-featured">Najprodavaniji</button>
                        <button data-filter=".best-seller">Najpovoljniji</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Povoljno</p>
                        </div>
                        <img src="images/dimilica.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Opširnije"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Uporedi"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Dodaj na listu želja"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Dodaj u korpu</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Dimilica za pčele</h4>
                        <h5> 1500 din</h5>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">Novo</p>
                        </div>
                        <img src="images/podnjaca3.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Opširnije"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Uporedi"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Dodaj na listu želja"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Dodaj u korpu</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Podnjača</h4>
                        <h5> 3250 din</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Povoljno</p>
                        </div>
                        <img src="images/hranilica.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Opširnije"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Uporedi"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Dodaj na listu želja"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Dodaj u korpu</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Hranilica za pčele</h4>
                        <h5> 600 din</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Povoljno</p>
                        </div>
                        <img src="images/sto2.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Opširnije"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Uporedi"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Dodaj na listu želja"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Dodaj u korpu</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Sto za otklapanje poklopaca</h4>
                        <h5> 30 000 din</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->

<!-- Start Blog  -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <h1>Zanimljivosti o pčelama</h1>
                <p>Ovde ćemo podeliti sa Vama par zanimljivosti o pčelama.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-fluid" src="images/vrste2.jpg" alt="" />
                </div>
                <div class="blog-content">
                    <div class="title-blog">
                        <h3>ZNAŠ LI?</h3>
                        <p>Na svetu postoji više od 20.000 vrsta pčela, a u našem regionu ih ima 1000. Samo je sedam vrsta medonosnih pčela, a ostale nazivamo solitarnim: ne žive u košnicama, već grade gnezda za sebe i svoje potomke. Nisu opasne za ljude pa se preporučuje da na svoje balkone ili u svoje vrtove posadimo medonosno cveće i začinsko bilje. Možemo da izgradimo i mali hotel za pčele od bambusa ili trske kojim ćemo pomoći da osiguramo njihovu budućnost.                                  </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-fluid" src="images/pcelica.jpg" alt="" />
                </div>
                <div class="blog-content">
                    <div class="title-blog">
                        <h3>ZANIMLJIVOST!</h3>
                        <p>Najmanja pčela na svetu je patuljasta pčela (Trigona minima). Dugačka je oko 2,1 mm. Himalajska medonosna pčela (Apis dorsata laboriosa) je najveća medonosna pčela na svetu. Odrasle jedinke mogu dostići dužinu do 3cm. Najveća pčela je ( Megachile pluto) koja može narasti do dužine od 39 mm. Pčela se kreće se brzinom od 20-28km/h, a ako je prazna može se kretati u do 60km/h. Pčela se kreće se brzinom od 20-28km/h, a ako je prazna može se kretati u do 60km/h .</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-fluid" src="images/matica.jpg" alt="" />
                </div>
                <div class="blog-content">
                    <div class="title-blog">
                        <h3>PČELINJA MATICA</h3>
                        <p>Osnovni i jedini zadatak matice u pčelinjoj zajednici je polaganje jaja. Obavljanje ove funkcije zavisi od spoljašnjih uslova, jačine pčelinje zajednica, rezervi hrane i starosti matice.Matice se razlikuju od trutova i pčela radilica po tome što imaju izdužen zadnji deo tela, pa su joj krila primetno kraća u odnosu na telo. Poseduje žaoku, ali je gotovo nikada ne upotrebljava da ubode pčelara, već joj služi za borbu sa drugim maticama. U košnici opstaje samo jedna matica. </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Blog  -->

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