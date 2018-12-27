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
	$sizeCat = $_POST["sizeCat"];

	$checkComm1 = "SELECT * FROM Farmland WHERE Holding_ID = \"$holdingID\";";

	$connCheck = $conn -> query($checkComm1);

	if($connCheck){
		$row_cnt = $connCheck -> num_rows;
		if($row_cnt == 0){
			$insertQuery = "INSERT INTO Farmland VALUES (\"$holdingID\", \"$state\", \"$area\");";
			$insertCheck = $conn -> query($insertQuery);

			if($insertCheck){
				echo "success";
			}
		}
		else{
			echo 'keyvals already exist';
		}
	}
	else{
		echo "something broke";
	}
// }

?>


	</body>
</html>

