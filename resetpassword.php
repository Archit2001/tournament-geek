<?php



$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con ,'userregistraion');
include("config.php");


if (!isset($_GET["code"])) {
	exit("cant find page");
}

$code=$_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM code WHERE code ='$code'");
if (mysqli_num_rows($getEmailQuery) == 0 )
 {
	exit("cant find page");
}
    if (isset($_POST["password"])) {
    	

    	$pw=$_POST["password"];
    	
    	$row=mysqli_fetch_array($getEmailQuery);

    	$email= $row["email"];

    	
    
                  
                   $query= mysqli_query($con,"UPDATE signup SET password = '$pw' WHERE email ='$email'");	             		
    

    	if ($query) {
    	   
             
    	$query= mysqli_query($con,"DELETE FROM code WHERE code = '$code'");
    	header('location:login2.php');
       

    	}
    	
    	else{

    		exit("something went wrong");
    	}
    }

  ?>
  <!DOCTYPE html>
  <html>
  <head>
      <title>Reset Password</title>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

  <form method="POST">
    <input type="password" name="password" placeholder="new password">
    <br>
    <input type="submit" name="submit" value="update password  ">
    
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

  <div class="footer-copyright text-center py-3">© 2020 Copyright:
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


</form>


 

