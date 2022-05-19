<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->

<?php 
require '../php/config.php' 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inquiry</title>
</head>
<body>
<!-- ------------------------------------------------------------------- -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name :<input type="text" name="cName">
	<input type="date"  id ="dateI"  name="sentDate">
	<input type="date"  id ="dateI2"  name="sentDate2">
	<input type="submit" value="Submit" name="searchSubmit">
	<input type="reset" value="Reset">
	<input type="submit" value="Show All" name ="showAll">
</form>

<!-- ------------------------------------------------------------------- -->
<table border="2" id = "inquiry">
<!-- ------------------------------------------------------------------- -->
<?php 

	if (isset($_GET['type']) and $_GET['type'] == "showAll") {
	$sql = "SELECT * FROM inquiry";
	$displayType = "showAll";
	select($sql,$displayType);	
	} //user presses show all,redirection will be handled by this

	if(isset($_POST['showAll'])){
	$sql = "SELECT * FROM inquiry";
	$displayType = "showAll";
	select($sql,$displayType);
	} // user press "show all"

	if(isset($_POST['searchSubmit'])){
	$c_Name = $_POST['cName'];
	$sDate = $_POST['sentDate'];
	$eDate = $_POST['sentDate2'];
	$sql = "SELECT * FROM inquiry WHERE (name LIKE '%$c_Name%' AND date BETWEEN '$sDate' AND '$eDate')";
	select($sql,$c_Name,$sDate,$eDate);
	} //user fills the search form 

// function select will output the * for the $sql in a table
	function select ($sql,$displayType){
		global $conn;
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			
			while($row = $result->fetch_assoc()){
				$id = $row["inquiryID"];
				echo "<tr>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["message"]."</td>";
				echo "<td>".$row["date"]."</td>";
				
				if ($row["respond"] ==  1) {
					echo "<td>"."Sent"."</td>";
				}
				else{

					echo 
					'<td> 
						<form method = POST action = "../php/updateInquiry.php?type='.$displayType.'">
					        <input type="submit" name="response" value="Respond"/>
	        				<input type="hidden" name="IID" value="'.$id.'"/>
						</form>
					</td>';
				}

				echo 
				'<td> 
					<form method = POST action = "../php/deleteInquiry.php?type='.$displayType.'">
					        <input type="submit" name="delete" value="Delete"/>
	        				<input type="hidden" name="IID" value="'.$id.'"/>
					</form>
				</td>';

				echo "</tr>";
			}
		}
		else{
			echo "No results";
		}
	}
?>
<!-- ------------------------------------------------------------------- -->
</table>

<script type="text/javascript">
	// assign an today's date to value for the date input 
	const date = formatDate(new Date()) 
	console.log(date);
	
	const dateInput = document.getElementById('dateI');
	dateInput.value = date;

	const dateInput2 = document.getElementById('dateI2');
	dateInput2.value = date;

	function pad2Digits(num) {
	  return num.toString().padStart(2, '0'); 
	}; //if num is not 2 digits this will add a 0 to the start of the string num

	function formatDate(date) {
	  return (
	    [
	      date.getFullYear(),
	      pad2Digits(date.getMonth() + 1),
	      pad2Digits(date.getDate()),
	    ].join('-') 
	  ); // create a formated date like 2022-02-09 which is a string 
	}

</script>


</body>
</html>