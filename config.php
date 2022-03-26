<?php

session_start();
$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con ,'userregistraion');

if (mysqli_connect_errno()) {
	echo "faliled to connect" . mysqli_connect_errno() ;
}


   

  ?>