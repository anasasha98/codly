  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">codly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php#about">About</a></li>
          <li class="dropdown">
            <a href="ask.php#AskForHelp"><span>Ask us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="ask.php#AskForHelp">Ask For Help</a></li>
              <li><a href="ask.php#faq">Frequently Asked Questions</a></li>
            </ul>
          </li>

          <li>
            <a class="nav-link scrollto" href="team.php#team">Success stories</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="index.php#ser">Services</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="contact.php#contact">Contact</a>
          </li>
          <?php
          if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
          ?>
            <li class="dropdown">
              <a class=" scrollto" href="<?php echo $_SESSION['type'] ?>-account-details.php">
                <i class="bi bi-person-circle"></i>&nbsp;<?php echo $username; ?>
                <i class="bi bi-chevron-down"></i>
              </a>
              <!-- <a href="index.php#ser"><span>Services</span> <i class="bi bi-chevron-down"></i></a> -->
              <ul>
                <li><a href="<?php echo $_SESSION['type'] ?>-account-details.php">Profile</a></li>
                <?php
                if ($_SESSION['type'] == 'captain') {
                  echo '<li><a href="captain-about-page.php">About</a></li>';
                }
                ?>
                <li><a href="<?php echo $_SESSION['type'] ?>-security-page.php">Security</a></li>
                <li><a href="<?php echo $_SESSION['type'] ?>-purchase.php">Purchased Service</a></li>
                <?php
                if ($_SESSION['type'] == 'captain') {
                  echo '<li><a href="captain-published.php">My Service</a></li>';
                  echo '<li><a href="captain-work.php">My Work</a></li>';
                }
                ?>
                <li><a href="logout.php">Logout <i class="bi bi-box-arrow-right"></i></a></li>
              </ul>
            </li>
           

          <?php
          } else {
          ?>
            <li>
              <a class="getstarted scrollto" href="sign-in.php">Sign in</a>
            </li>

            
          <?php
          }
          ?>
           <li>
              <!-- <div class="navbar-nav"> -->
              <a href="cart.php" class="nav-item nav-link ">

                <h5 class=" cart">
                  <i class="fas fa-5x fa-shopping-cart ">
                    <sub>
                      <div class="cart-count">
                        <sub style="float: right; margin: 7px 4px 0px 2px;  font-size: 12px">
                          <?php
                          $cart_count = "SELECT COUNT(`customer-username`) AS count FROM `cart` WHERE `customer-username` = '$username' GROUP BY `customer-username` ";
                          $get_count = mysqli_query($con, $cart_count);
                          if ($get_count) {
                            $num = mysqli_fetch_array($get_count, MYSQLI_ASSOC);
                            if ($num != null) {
                              echo $num['count'];
                            } else {
                              echo 0;
                            }
                          }
                          ?>
                        </sub>
                      </div>
                    </sub>
                  </i>


                </h5>
              </a>
              <!-- </div> -->
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->