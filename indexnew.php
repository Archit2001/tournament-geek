    <?php

session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Tournament Geek</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body style="background-color:#F4F1F1 "> 
    
  
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" style="border: 2px solid black; background: black;">
        <div class="p-4 pt-5">
          <a href="index.php" class="img logo rounded-circle mb-5" style="background-image: url(logo2.jpeg);"></a>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sport</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#pageSubmenuBad"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Badminton</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuBad">
                      <li>
                        <a href="toubad.php">Tournament</a>
                      </li>
                      <li>
                        <a href="badminton.html">Ranking</a>
                      </li>
                     
                    </ul>
              
                    <a href="#pageSubmenuCric"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cricket</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuCric">
                      <li>
                        <a href="toucri.php ?>">Tournament</a>
                      </li>
                      <li>
                        <a href="cric.html">Ranking</a>
                      </li>
                      
                    </ul>
                    <a href="#pageSubmenuFoot"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Football</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuFoot">
                      <li>
                        <a href="toufoot.php">Tournament</a>
                      </li>
                     
                      <li>
                        <a href="football.html">Ranking</a>
                      </li>
                    </ul>
                </li>
              </ul>
            </li>
          
            <li>
                <a href="about.php">About</a>
            </li>
            
          </ul>

          

        </div>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <!-- <a class="nav-link" href="#">Home</a> -->
                  
                    <li class="nav-item active mr-2">
                   <p  style="font-size: 35px; color: gold; position: relative; right: 220px; center;"> Welcome  <?php echo $_SESSION['username'];?></p>
                </li>
                <li class="nav-item active mr-2">
                  <a href="index.php"><button type="submit" class="btn btn-primary mb-2">logout</button></a>
                </li>
                <li class="nav-item active mr-2">
                  <a href="signup.php"><button type="submit" class="btn btn-primary mb-2">Sign In</button></a>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container sports-container">
          <h2 class="mb-4" style="color: #b39800">Love For All , Hatred For None</h2>
          <div class="row">

            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="card" style="width: 18rem;">
                <div class="thumbnail">
                  <a href="foot.php"><img class="card-img-top" src="images/Foot.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                  <p class="car d-text">The most valuable player is the one who makes the most players valuable.</p>
                </a>
                </div>
              </div>
            </div>
            
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="card" style="width: 18rem;">
                <div class="thumbnail">
                 <a href="bad.php"><img class="card-img-top" src="images/lee.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                  <p class="card-text">Are you fast enough to handle a badminton shuttle?</p>
                </a>
                </div>
              </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="card" style="width: 18rem;">
                <div class="thumbnail">
                  <a href="cric.php"><img class="card-img-top" src="images/cric.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                  <p class="card-text">Cricket is a funny game, we have legends and living legends but the game doesn't stop for anyone!</p>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color:rgb(16,16,16);">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0" style="color: #ccad00">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
           <a href="#"> <i class="fa fa-facebook-f white-text mr-4"> </i></a>
          </a>
           <a class="tw-ic">
            <a href="#"><i class="fa fa-twitter white-text mr-4"> </i></a>
          </a>
      
          <!--Instagram-->
          <a class="ins-ic">
            <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram white-text"> </i></a>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold" style="color:  #ccad00">Tournament Geek</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="color:  #ccad00">Here you can view everyrhing related to above three sport . Rankings and Tournaments are updated regularly . You 
          can also get some shopping Links.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold" style="color:  #ccad00">our products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="cric.php">CRICKET</a>
        </p>
        <p>
          <a href="bad.php">BADMINTON</a>
        </p>
        <p>
          <a href="foot.php">FOOTBALL</a>
        </p>
        <p>
          <a href="">SHOPPING</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      
        
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-home mr-3"></i>KOTA,324010, INDIA</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> Tournamentgreek.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 01 234 54152</p>
        <p>
          <i class="fa fa-print mr-3"></i> + 91 6350664742</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->.

  <div class="footer-copyright text-center py-3">?? 2020 Copyright:
    <a href="index.php"> Tournament Geek.Com</a>
  </div>
  <!-- Copyright -->

</footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>