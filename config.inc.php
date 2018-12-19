<?php

$servername = "localhost";
$username = "parijatd_gb";
$password = "Gs=bAQDp[J7h";
$dbname = "parijatd_gb";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

?>