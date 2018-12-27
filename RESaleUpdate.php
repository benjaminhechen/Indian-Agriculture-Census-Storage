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

	$checkComm1 = "SELECT * FROM Real_Estate_Sale WHERE Holding_ID = \"$holdingID\" AND Date_Sold= \"$date\";"; 

	$connCheck = $conn -> query($checkComm1);

	if($connCheck){

		echo "getting somewhere...";

		$updateQuery = "UPDATE Real_Estate_Sale SET Buyer = \"$buyer\", Seller = \"$seller\" WHERE Holding_ID = \"$holdingID\" AND Date_Sold= \"$date\";";

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

