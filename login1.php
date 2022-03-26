<?php

session_start();
$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con ,'userregistraion');

$username=$_POST['user'];

$pass=$_POST['password'];


$s ="select * from signup where username ='$username' && password = '$pass'";  

$result = mysqli_query($con , $s);


$num = mysqli_num_rows($result);
if ($num== 1) {

      $_SESSION['username'] = $username ;
	  header('location:indexnew.php');
}
else{
	
	header('location:error.php');
}

?>