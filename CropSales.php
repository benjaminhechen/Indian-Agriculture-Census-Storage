<!--
CS 461 Project 1 Milestone 3
Task D
#23 Mounica Kota
#4 Benjamin Chen
#31 Susan Schleede
-->

<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "use sschleed;";
if ($conn->query($sql) === TRUE) {
//  echo "using Database sschleed";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$id = $_POST['id'];
$sql = "select * from Crop_Sale;";
$result = $conn->query($sql);

if($result->num_rows > 0){
?>
   <table class="table table-striped">
      <tr>
         <th>Sale ID</th>
         <th>Holding ID</th>
         <th>Sale Date</th>
         <th>Description</th>
	 <th>Price</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['Sale_ID']?></td>
          <td><?php echo $row['Holding_ID']?></td>
          <td><?php echo $row['Sale_Date']?></td>
          <td><?php echo $row['Description']?></td>
	  <td><?php echo $row['Price']?></td>
      </tr>

<?php
}
}
else {
echo "Item not found";
}
?>

    </table>

<?php
$conn->close();
?>  

</body>
</html>
