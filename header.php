<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <p>Pčela radilica</p> <a class="navbar-brand" href="index.php"><img src="images/pcelanaslov.jpg"
                        width="150" height="100" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Početna stranica</a></li>
                    <li class="nav-item"><a class="nav-link" href="Onama.php">O nama</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Prodavnica</a>
                        <ul class="dropdown-menu">
                            <?php foreach (get_all_categories($conn) as $category): ?>
                            <li><a
                                    href="proizvod.php?kategorija=<?php echo $category['KategorijaID']?>"><?php echo $category['NazivKategorije'] ?></a>
                            </li>
                            <?php endforeach ?>
                            <!-- <li><a href="pcelinjiproizvod.php">Pčelinji proizvodi</a></li>
                            <li><a href="pcelinjakoprema.php">Oprema za pčelinjak</a></li> -->
                            <li><a href="cedjenjemeda.php">Oprema za cedjenje meda</a></li>
                            <li><a href="transport.php">Oprema za transport košnica</a></li>
                            <li><a href="prodajamatica.php">Prodaja matica i formiranje društva</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="galerija.php">Galerija</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontaktirajte nas</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge"></span>
                            <p>Moja korpa</p> <span class="badge badge-danger"><?php echo get_cart_count(); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>








        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <?php if(isset($_SESSION['cart'])): ?>
                    <?php foreach($_SESSION['cart'] as $product): ?>
                    <li>
                        <a href="#" class="photo"><img src="<?php echo $product['image'] ?>" class="cart-thumb"
                                alt="" /></a>
                        <h6><a href="#"><?php echo $product['name'] ?> </a></h6>
                        <p><?php echo $product['quantity'] ?>x - <span class="price"><?php echo $product['price'] ?>
                                RSD</span></p>
                    </li>
                    <?php endforeach ?>
                    <?php else: ?>
                    <h4>Korpa je prazna.</h4>
                    <?php endif ?>
                    <li class="total">
                        <a href="korpa.php" class="btn btn-default hvr-hover btn-cart">Pregledaj korpu</a>
                        <span
                            class="float-right"><strong>Ukupno:</strong>:<?php echo get_cart_total_price();?>RSD</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->