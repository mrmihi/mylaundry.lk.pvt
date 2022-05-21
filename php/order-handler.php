<?php

session_start();

$_SESSION['name'] = $_POST['cardname'];
$_SESSION['card'] = $_POST['cardnumber'];

unset($_SESSION['shopping_cart']);

header("location: ../html/invoice.php");
exit();

?>