<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<div class = "invoice">

<?php
	
	echo "Name = ".$_SESSION['name']."<br>";
	echo "Card Number = ".$_SESSION['card']."<br>";
	echo "Amount= ".$_SESSION['total_price']."<br>";

	unset($_SESSION['name']);
	unset($_SESSION['card']);
	unset($_SESSION['total_price']);
  ?>
	
</div>

</body>
</html>