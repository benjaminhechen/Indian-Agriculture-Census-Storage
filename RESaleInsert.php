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

// if(isset($holdingID) and isset($date) and isset($buyer) and isset($seller))){

	$holdingID = $_POST["holdingID"]; 
	$date = $_POST["date"]; 
	$buyer = $_POST["buyer"];
	$seller = $_POST["seller"];

	$checkComm1 = "SELECT * FROM Real_Estate_Sale WHERE Holding_ID = \"$holdingID\" AND Date_Sold = \"$date\";";

	$connCheck = $conn -> query($checkComm1);

	if($connCheck){
		$row_cnt = $connCheck -> num_rows;
		if($row_cnt == 0){
			$insertQuery = "INSERT INTO Family VALUES (\"$holdingID\", \"$date\", \"$buyer\", \"$seller\");";
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

