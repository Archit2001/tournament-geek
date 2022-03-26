<!DOCTYPE html>
<html>
<head>
    <title>user login</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login2.css">
     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
       
     <div class="container">
     <div class="login-box">
     <div class="row">       
         <div class = "col-md-6  login-right" >
            <h3> Your Password Has been Updated ! </h3>
        <h2 style="">Login Here</h2>
        <form action="login1.php?>" method="post">
        <div class="login-group">     
            <label>USERNAME</label>
            <input type="text" name="user" class="form-control" required>
        </div>
        <div class="login-group">
            <label>PASSWORD</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <br>
         <button type="submit" class="btn btn-primary">LET ME IN</button>
         <div class="login-group">
            <br>
           <button type="submit"> <a href="resetPass.php">Forgot My Password ! Help Me To Get In</a></button>
         </div>
         <br>
         <div class="login-group">
            <br>
           <button type="submit"> <a href="signup.php">Sign in !</a></button>
         </div>
     </form>
       </div>
   </div>

</div>
</div>

  <!-- Copyright -->


  <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>