<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php

session_start();
require'../php/config.php';
?>


<html>
<head>
<title>Order Now</title>
<link rel='stylesheet' href='../css/order-cart.css' type='text/css' media='all' />
</head>
<body>


<div style="width:70vw; margin:50 auto;">
	
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?> 
 

<div class="cart_div">
<a href="cart.php"><img src="../images/cart-icon.png" /><span><?php echo $cart_count; ?></span></a>
</div>

<?php
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
		echo "<div class='product_wrapper'>
			  <form method='post' action='../php/add-to-cart.php'>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' width = '100px' height = '100px' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }

?>



</div>
</body>
</html>