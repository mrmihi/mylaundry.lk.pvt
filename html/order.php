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
<!-- Search function css -->
<link rel="stylesheet" type="text/css" href="../css/inquiry.css">
<!-- Search function css ends-->
</head>
<body>


<!-- Search function -->
<div id="search">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	Search :<input type="text" name="cName">
	Price Range ( Rs.0 - Rs.500):
	<input type="range"  id ="dateI"  name="sentDate" min="0" max="500" step="100">
	(Rs.<span id="slider-value"></span>)

	<div id="buttons">
	<input type="submit" value="Submit" name="searchSubmit">
	<input type="reset" value="Reset">
	<input type="submit" value="Show All" name ="showAll">
	</div>

</form>
</div>

<!-- Search function ends-->

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

if (isset($_GET['type']) and $_GET['type'] == "showAll") {
	$sql = "SELECT * FROM products";
	$displayType = "showAll";
	select($sql,$displayType);	
	} //user presses show all,redirection will be handled by this

if(isset($_POST['showAll'])){
	$sql = "SELECT * FROM products";
	$displayType = "showAll";
	select($sql,$displayType);
	} // user press "show all"

	if(isset($_POST['searchSubmit'])){
	$c_Name = $_POST['cName'];
	$sDate = $_POST['sentDate'];
	$sql = "SELECT * FROM products WHERE ( name LIKE '%$c_Name%' AND price BETWEEN 100 AND $sDate)";
	select($sql,0);
	} //user fills the search form 



function select($sql,$displayType){
	global $conn;
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()){
			echo "<div class='product_wrapper'>
				  <form method='post' action='../php/add-to-cart.php?type=".$displayType."'>
				  <input type='hidden' name='code' value=".$row['code']." />
				  <div class='image'><img src='".$row['image']."' width = '100px' height = '100px' /></div>
				  <div class='name'>".$row['name']."</div>
			   	  <div class='price'>Rs.".$row['price']."</div>
				  <button type='submit' class='buy'>Add to Cart</button>
				  </form>
			   	  </div>";
	        }
}

?>



</div>

<script>
var slider = document.getElementById("dateI");
var output = document.getElementById("slider-value");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

</body>
</html>