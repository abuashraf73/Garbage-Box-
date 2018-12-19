<?php

include ('DatabaseConfig.php') ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 if (isset($_POST['buyer_id'])) {
 	# code...
 	$buyer_id = $_POST['buyer_id'];
 }
 if (isset($_POST['product_id'])) {
 	# code...
 	$product_id = $_POST['product_id'];
 }
 if (isset($_POST['quantity'])) {
 	# code...
 	$quantity = $_POST['quantity'];
 }
  if (isset($_POST['price'])) {
 	# code...
 	$price = $_POST['price'];
 }
 if (isset($_POST['phone'])) {
 	# code...
 	$phone = $_POST['phone'];
 }
  if (isset($_POST['address'])) {
 	# code...
 	$address = $_POST['address'];
 }
 
 //$email = $_POST['email'];
 


 $Sql_Query = "insert into buy_request (buyer_id,product_id,quantity,price,phone,address) values ('$buyer_id','$product_id','$quantity','$price','$phone','$address')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Submit Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>