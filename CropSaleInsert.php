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

// if(isset($saleID) and isset($holdingID) and isset($saleDate) and isset($year) and isset($desc) and isset($Price))){

	$saleID = $_POST["saleID"]; 
	$holdingID = $_POST["holdingID"]; 
	$saleDate = $_POST["saleDate"];
	// $year = $_POST["year"];
	$desc = $_POST["desc"];
	$Price = $_POST["Price"];

	$checkComm1 = "SELECT * FROM Crop_Sale WHERE Sale_ID = \"$saleID\";";

	echo "\n$checkComm1";

	$connCheck = $conn -> query($checkComm1);

	if($connCheck){
		$row_cnt = $connCheck -> num_rows;
		if($row_cnt == 0){

			echo "getting somewhere...";

			$insertQuery = "INSERT INTO Crop_Sale VALUES (\"$saleID\", \"$holdingID\", \"$saleDate\", \"$desc\", \"$Price\");";

			echo "\n$insertQuery";

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
