<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Forma dodavanje</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body class="sidebar-main-active right-column-fixed">
    
       <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="dashboard.php" class="header-logo">
               <img src="" class="img-fluid rounded" alt="">
               <span>Pčela radilica</span>
               </a>
               
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active">
                        <a href="" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard pčela</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href=""><i class="las la-laptop-code"></i>Pčela Dashboard</a></li>
                           
                        </ul>
                     </li>
                   
                     
                     <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>Radnik</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                           <li><a href="profil.php"><i class="las la-id-card-alt"></i>Moj profil</a></li>

                        </ul>
                     </li>
                    
                    
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms iq-arrow-left"></i><span>Zove te Pčela</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
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
             
              
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                
                  
               </nav>
            </div>
         </div>

         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-6">
                   
                    
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Unesi zahtev</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Ovde unosiš zahtev za klijente putem telefona</p>
                           <form>
                              <div class="form-group">
                                 <label for="exampleInputText1">Ime i prezime </label>
                                 <input type="text" class="form-control" id="exampleInputText1" value="" placeholder="Enter Name">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail3">Email klijenta</label>
                                 <input type="email" class="form-control" id="exampleInputEmail3" value="uovojformimejl@gmail.com" placeholder="Enter Email">
                              </div>
                             
                              <div class="form-group">
                                 <label for="exampleInputphone">Telefon klijenta</label>
                                 <input type="tel" class="form-control" id="exampleInputphone" value="(060)-123-2145">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputNumber1">Lokacija</label>
                                 <input type="Lokacija" class="form-control" id="" value="Šabac">
                              </div>
                              
                              <div class="form-group">
                                 <label for="exampleInputdate">Datum zahteva</label>
                                 <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                              </div>
                              
                             
                              
                             
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Dodatne informacije</label>
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Potvrdi</button>
          
                           </form>
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
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>