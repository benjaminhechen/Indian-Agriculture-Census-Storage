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

	$checkComm1 = "SELECT * FROM Family WHERE Aadhar = \"$aadhar\";";

	echo "\n$checkComm1";

	$connCheck = $conn -> query($checkComm1);

	echo $connCheck;

	if($connCheck){
		$row_cnt = $connCheck -> num_rows;
		if($row_cnt == 0){

			$insertQuery = "INSERT INTO Family VALUES (\"$aadhar\", \"$lastName\", \"$group\", \"$people\");";

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

