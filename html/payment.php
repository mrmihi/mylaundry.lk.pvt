<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php


session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");} // if the user is not logged in this will redirect the user to login


if (isset($_POST['action']) && $_POST['action']=="remove"){

    if(!empty($_SESSION["shopping_cart"])) {

                unset($_SESSION["shopping_cart"][$_POST['code']]);
            }

            if(empty($_SESSION["shopping_cart"])) unset($_SESSION["shopping_cart"]);
        }
    // will remove the item if its in the cart if the cart is empty will delete the cart session
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="../css/payment.css">
</head>
<body>

<div class ="payment">
<div class ="card-form">
<form method="POST" action="../php/order-handler.php">
    
    <label for="cname">Name on Card</label> <br>
    <input type="text" id="cname" name="cardname" placeholder="Nimesh D B W N"> <br>
    <label for="ccnum">Credit card number</label><br>
    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
    <label for="expmonth">Exp Month</label><br>
    <input type="text" id="expmonth" name="expmonth" placeholder="June"><br>
    <label for="expyear">Exp Year</label><br>
    <input type="text" id="expyear" name="expyear" placeholder="2022"><br>
    <label for="cvv">CVV</label><br>
    <input type="text" id="cvv" name="cvv" placeholder="119"><br>
    <input type="submit" value="Continue to checkout" class="btn">

</form>
</div>


<div class ="cart-main">


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

<td><?php echo "Rs.".$product["price"]; ?></td>
<td><?php echo "Rs.".(float)$product["price"]*(int)$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ((float)$product["price"]*(float)$product["quantity"]);
$_SESSION['total_price'] = $total_price; 
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs.".$total_price; ?></strong>
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
</div>
</body>
</html>