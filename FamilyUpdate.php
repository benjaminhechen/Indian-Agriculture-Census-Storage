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

// if(isset($aadhar) and isset($lastName) and isset($group) and isset($people))){

	$aadhar = $_POST["aadhar"]; 
	$lastName = $_POST["lastName"]; 
	$group = $_POST["group"];
	$people = $_POST["people"];

	$checkComm1 = "SELECT * FROM Family WHERE Aadhar = $aadhar;";

	$connCheck = $conn -> query($checkComm1);

	if($connCheck){

		echo "getting somewhere...";

		$updateQuery = "UPDATE Family SET Last_name = \"$lastName\", Grp = \"$group\", People = \"$people\" WHERE Aadhar = \"$aadhar\";";

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
