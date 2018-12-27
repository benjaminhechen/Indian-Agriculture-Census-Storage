<!doctype html>
<html lang="en">
	<head>
	     <meta charset="utf-8">
	     <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	     <title>Sign Up</title>
	     <link rel="stylesheet" href="styles.css">
	</head>
	<body>

<?php
require_once('db_setup.php');

// if(isset($holdingID) and isset($state) and isset($area) and isset($sizeCat))){

	$holdingID = $_POST["holdingID"]; 
	$state = $_POST["state"]; 
	$area = $_POST["area"];
	// $sizeCat = $_POST["sizeCat"];

	$checkComm1 = "SELECT * FROM Farmland WHERE Holding_ID = \"$holdingID\";";

	$connCheck = $conn -> query($checkComm1);

	if($connCheck){

		echo "getting somewhere...";

		$updateQuery = "UPDATE Farmland SET State = \"$state\", Area = \"$area\" WHERE Holding_ID = \"$holdingID\";";

		echo "\n$updateQuery";

		$updateCheck = $conn -> query($updateQuery);

		if($updateCheck){
			echo "success";
		}
	}
	else{
		echo "something broke";
	}
// }

?>

	</body>
</html>

