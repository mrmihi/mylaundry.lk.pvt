<?php 
require '../php/config.php' 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<table border="4">

<?php 
	$sql = "SELECT * FROM inquiry";
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["message"]."</td>";
			echo "<td>".$row["date"]."</td>";
			echo "<td>".$row["respond"]."</td>";
			echo "<td>"."Delete"."</td>";
			echo "</tr>";
		}
	}
	else{
		echo "No results";
	}


?>
</table>





</body>
</html>