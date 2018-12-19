<?php 
include('../db.php');

$sql='SELECT * FROM buyer WHERE email="'.$_POST['email'].'" AND password="'.md5($_POST['password']).'"';

if ($con1=mysqli_query($con,$sql))
  {
      $result='';
	  $rowcount=mysqli_num_rows($con1);
	  if($rowcount>0){
	  	//echo json_encode('connection Established');
	  	$result="true";
	  }else{
	  	//echo json_encode('Sorry Email or Password are invalid');
	  	$result="false";
	  }
	  echo $result;
  }

mysqli_close($con);
?>