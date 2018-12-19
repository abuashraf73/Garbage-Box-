<?php

include ('DatabaseConfig.php') ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 if (isset($_POST['username'])) {
 	# code...
 	$username = $_POST['username'];
 }
 if (isset($_POST['email'])) {
 	# code...
 	$email = $_POST['email'];
 }
 if (isset($_POST['password'])) {
 	# code...
 	$password=md5($_POST['password']);
 }
 
 //$email = $_POST['email'];
 


 $Sql_Query = "insert into buyer (username,email,password) values ('$username','$email','$password')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>