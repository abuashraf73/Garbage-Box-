<?php

include ('DatabaseConfig.php') ;
 
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 echo $Sql_Query = 'UPDATE buy_request SET bkash_number="'.$_GET["bkashNo"].'" WHERE id='.$_GET["id"];
 
 if(mysqli_query($con,$Sql_Query)){
    echo '1';
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>