<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php


session_start();


if (isset($_POST['action']) && $_POST['action']=="remove"){

	if(!empty($_SESSION["shopping_cart"])) {

/*
		foreach($_SESSION["shopping_cart"] as $key => $value) {

			if($_POST["code"] == $key){
				unset($_SESSION["shopping_cart"][$key]);
				$status = "<div class='box' style='color:red;'>
				Product is removed from your cart!</div>";
				*/ //loop thorugh to find the item not effective 
				unset($_SESSION["shopping_cart"][$_POST['code']]);
			}

			if(empty($_SESSION["shopping_cart"])) unset($_SESSION["shopping_cart"]);
		}
	/*}*/
//} // will remove the item if its in the cart if the cart is empty will delete the cart session


/*
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
} // WILL CHANGE THE THE QUANTITY VALUE decided not to impelment this to many bugs
  	
} */
?>

<html>
<head>
<title>Cart</title>
<link rel='stylesheet' href='../css/order-cart.css' type='text/css' media='all' />
</head>
<body>

<div style="width:50vw; margin:50 auto;">

   

<?php

if(!empty($_SESSION["shopping_cart"])) {
	$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<div class="cart_div">

<a href="cart.php">
<img src="../images/cart-icon.png" /> 
<span><?php echo $cart_count; ?></span></a>

</div>

<?php
}
?>

<div class="cart">

<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>

<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEM TOTAL</td>
</tr>	

<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>

<tr>

<td>
	<img src='<?php echo $product["image"]; ?>' width="50" height="50" />
</td>

<td>
	<?php echo $product["name"]; ?><br />

<form method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>

<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>

</form>
</td>

<td>
	<?php echo $product["quantity"]; ?>	
</td>

<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".(float)$product["price"]*(int)$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ((float)$product["price"]*(float)$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		

<?php
}
else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>
</div>
<div class = "cart-to-order">
	
        <button class="btn" onclick="window.location.href = 'order.php';">
            Add Items
        </button>
   
        <button class="btn" onclick="window.location.href = 'payment.php';">
            Order Now
        </button>
    
</div>
</body>
</html>