<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");} // if the user is not logged in this will redirect the user to login

require'../php/config.php';


if (isset($_POST['code']) && $_POST['code']!=""){

	$code = $_POST['code'];
	$sql = "SELECT * FROM products WHERE code ='$code'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$name = $row['name'];
	$code = $row['code'];
	$price = $row['price'];
	$image = $row['image'];

	$cartArray = array(
		$code=>array(
		'name'=>$name,
		'code'=>$code,
		'price'=>$price,
		'quantity'=>1,
		'image'=>$image)
); /*if a form is submitted with the "code" value then this will get the db row which has code as the PK then add the code into
	into array of array (code1(other rows),code2(other rows),....)
	*/

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	
} //if the cart is empty this will make a new session, and add the cartarray as a value which will have the first item in it

else{
	$array_keys = array_keys($_SESSION["shopping_cart"]); //get array keys

	if(in_array($code,$array_keys)) {
		$quan = $_SESSION["shopping_cart"][$code]['quantity'];
		$_SESSION["shopping_cart"][$code]['quantity'] = ++$quan;
	} // this will increase a quantity by 1 if the item exists in the cart

	else {
		$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	}




	/*
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} 

	else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}
	*/ // This commented code segments will make show that a product is already inside the cart allowing only one item to be in it

	} // if the cart all ready has items in it
} // This whole php code will only excute if code is sent.
if (isset($_GET['type']) and $_GET['type'] == "showAll") {
  $type = $_GET['type'];
  header("location: ../html/order.php?type=$type");
  exit();
  }

 
header("location: ../html/order.php");
exit();
?>

