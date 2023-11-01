<?php 
session_start();
require 'php/app.php';


?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Pčela radilica</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="css/styledashboard.css">

   <!-- Full calendar -->
   <link href='fullcalendar/core/main.css' rel='stylesheet' />
   <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
   <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
   <link href='fullcalendar/list/main.css' rel='stylesheet' />

   <link rel="stylesheet" href="css/flatpickr.min.css">

</head>

<body>

   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-navbar-logo d-flex justify-content-between">
            <a href="" class="header-logo">
               <img src="" class="img-fluid rounded" alt="">
               <span>Pčela radilica</span>
            </a>

         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active">
                     <a href="" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span
                           class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard
                           pčela</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        <li class="active"><a href=""><i class="las la-laptop-code"></i>Pčela Dashboard</a></li>

                     </ul>
                  </li>


                  <li>
                     <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                           class="ripple rippleEffect"></span><i
                           class="las la-user-tie iq-arrow-left"></i><span>Radnik</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="profil.php"><i class="las la-id-card-alt"></i>Moj profil</a></li>

                     </ul>
                  </li>


                  <li>
                     <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                           class="lab la-wpforms iq-arrow-left"></i><span>Zove te Pčela</span><i
                           class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="poziv.php"><i class="las la-book"></i>Pribeleži poziv</a></li>

                     </ul>
                  </li>





               </ul>
            </nav>
            <div class="p-3"></div>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-menu-line"></i></div>
                     <div class="hover-circle"><i class="ri-close-fill"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                     <a href="index.html" class="header-logo">
                        <img src="images/pcelica.jpg" class="img-fluid rounded" alt="">
                        <span>Pčela radilica</span>
                     </a>
                  </div>
               </div>


               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>


            </nav>
         </div>
      </div>


      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
                           <i class="ri-focus-2-line"></i>
                        </div>
                        <p class="text-secondary">Ukupna prodaja</p>
                        <div class="d-flex align-items-center justify-content-between">
                           <h4><b>89.450din</b></h4>
                           <div id="iq-chart-box1"></div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">
                           <i class="ri-pantone-line"></i>
                        </div>
                        <p class="text-secondary">Prodaja danas</p>
                        <div class="d-flex align-items-center justify-content-between">
                           <h4><b>25.500din</b></h4>
                           <div id="iq-chart-box2"></div>

                        </div>
                     </div>
                  </div>
               </div>

            </div>


            <div class="col-lg-8">
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Aktivne porudzbine</h4>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">

                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead class="thead-light">
                              <tr>
                                 <th scope="col">Kupac</th>
                                 <th scope="col">Datum kupovanja</th>
                                 <th scope="col">Invoice</th>
                                 <th scope="col">Cena</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Prikaz</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach(get_all_orders($conn) as $order): ?>
                              <form action="php/kontrolnaTabla.php" method="post"
                                 id="forma<?php $order['PorudzbinaID'];?>">
                                 <tr>
                                    <?php $user =  get_user_by_id($order['KorisnikID'],$conn); ?>
                                    <td><?php echo ($user['Ime'] . ' ' . $user['Prezime']); ?></td>
                                    <td> <?php echo $order['Kreirano'] ?></td>
                                    <td><?php echo $order['PorudzbinaID'] ?></td>
                                    <td><?php echo random_int(2000, 7000);?></td>
                                    <td>
                                       <input type="checkbox" name="status" value="1"
                                          <?php echo $order['Status'] == "Isporučeno" ? 'checked' : ''; ?>>
                                       <input type="hidden" name="id" value="<?php echo $order['PorudzbinaID'] ?>">
                                    </td>
                                    <td><?php echo $order['Status'] ?></td>
                                 </tr>
                                 <?php endforeach ?>
                                 <td><input type="submit" value="Potvrdi"></td>
                                 <form>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
      <!-- Wrapper END -->


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="js/worldLow.js"></script>
      <!-- Raphael-min JavaScript -->
      <script src="js/raphael-min.js"></script>
      <!-- Morris JavaScript -->
      <script src="js/morris.js"></script>
      <!-- Morris min JavaScript -->
      <script src="js/morris.min.js"></script>
      <!-- Flatpicker Js -->
      <script src="js/flatpickr.js"></script>
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
</body>

</html>