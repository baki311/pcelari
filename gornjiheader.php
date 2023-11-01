  <!-- Start Main Top -->
  <div class="main-top">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                  <div class="right-phone-box">
                      <p>Pozovite nas:- <a href="#"> +381 60 800 100</a></p>
                  </div>
                  <div class="our-link">
                      <ul>
                          <li><a href="#"><i class="fa fa-user s_color"></i> Moj nalog</a></li>
                          <li><a href="#"><i class="fas fa-location-arrow"></i> Lokacija</a></li>
                          <li><a href="kontakt.php"><i class="fas fa-headset"></i> Kontaktiraj nas</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="login-box">

                      <?php  if(is_user_logged_in()): ?>
                      <a style="color: #fff;" href="">
                          <?php echo $_SESSION['email'] ?></a>
                      <a style="color: #fff;" href="dashboard.php">
                          Kontrolna tabla</a>
                      <form action="php/autentifikacija.php" method="post">
                          <button type="submit" name="logout"
                              style="border: none; background: none; color: #fff; cursor: pointer;">Odjavi
                              se</button>
                      </form>
                      <?php else: ?>
                      <a style="color: #fff;" href="loginforma.php">Registrujte se ovde</a>
                      <a style="color: #fff;" href="loginforma.php">Prijavi se</a>
                      <?php  endif; ?>

                  </div>
                  <div class="text-slid-box">
                      <div id="offer-box" class="carouselTicker">
                          <ul class="offer-box">
                              <li>
                                  <i class="fab fa-opencart"></i> 20% popusta na ramove Promo code: RAMT80
                              </li>
                              <li>
                                  <i class="fab fa-opencart"></i> 20% popusta na saće
                              </li>
                              <li>
                                  <i class="fab fa-opencart"></i> 10% popusta za korita
                              </li>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Main Top -->