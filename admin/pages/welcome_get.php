<html>
<body>

<!-- Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["password"]; ?> -->

<?php 
	if($_GET["name"]==admin && $_GET["password"]==admin)
	{
		header("Location: index.php");
		die();
	}

	else
	{
		header("Location: http://www.google.com");
		die();
	}
?>

</body>
</html>