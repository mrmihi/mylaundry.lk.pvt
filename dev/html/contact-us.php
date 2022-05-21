<?php
require'../php/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
</head>
<body>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:										               </label><br>
  <input type="text" id="cname" name="name" required>			 <br>
  <label for="email">Email:										             </label><br>
  <input type="text" id="cemail" name="email" required>		 <br><br>
  <label for="massage">Message:									             </label><br>
  <textarea id="massage" name="msg" required>Enter the message...</textarea><br>
  <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST["name"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $msg = $_POST["msg"];
  
  $sql = "INSERT INTO inquiry (name,email,message) VALUES ('$name','$email','$msg')";

  if($conn->query($sql)){
    echo "<script> alert('Message sent succesfully!')</script>";
  }
  else{
  echo "<script> alert('Failed to Send the message!')</script>";
  }

  $conn->close();
}
?>

</body>
</html>