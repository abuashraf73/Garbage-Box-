<?php

include ('DatabaseConfig.php') ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 echo $Sql_Query = 'UPDATE sale_request SET status="'.$_GET["status"].'" WHERE sl_no='.$_GET["sl_no"];
 
 if(mysqli_query($con,$Sql_Query)){
    echo '1';
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>