<!doctype html>
<html lang="en">
	<head>
	     <meta charset="utf-8">
	     <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	     <title>CropSaleUpdate</title>
	     <link rel="stylesheet" href="styles.css">
	</head>
	<body>

<?php
require_once('db_setup.php');

// if(isset($saleID) and isset($holdingID) and isset($date) and isset($year) and isset($desc) and isset($price))){

	$saleID = $_POST["saleID"]; 
	$holdingID = $_POST["holdingID"]; 
	$date = $_POST["date"];
	// $year = $_POST["year"];
	$desc = $_POST["desc"];
	$price = $_POST["price"];

	$checkComm1 = "SELECT * FROM Crop_Sale WHERE Sale_ID = $saleID;";
	// echo $checkComm1;

	$connCheck = $conn->query($checkComm1);

	if($connCheck->num_rows > 0){

		// echo "getting somewhere...";

		$updateQuery = "UPDATE Crop_Sale SET Holding_ID = \"$holdingID\", Sale_Date = \"$date\", Description = \"$desc\", Price = \"$price\" WHERE Sale_ID = \"$saleID\";";
		// echo "\n$updateQuery";
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

