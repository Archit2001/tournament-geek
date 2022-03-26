<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
 
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
                        <a href="#pageSub">Ranking</a>
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
                    <form class="form-inline mr-5">
                      
                    </form>
                </li>
                <li class="nav-item active mr-2">
                  <a href="login.php"><button type="submit" class="btn btn-primary mb-2">Login Now</button></a>
                </li>
                <li class="nav-item active mr-2">
                  <a href="signup.php"><button type="submit" class="btn btn-primary mb-2">Sign In</button></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container sports-container"></div>

        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Please Login or Sign up To Visit This Page</h5>
              <p class="card-text"></p>
              <a href="index.php" class="btn btn-primary">HOME</a>
            </div>
          </div>
      
        
               
</div>
 

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>