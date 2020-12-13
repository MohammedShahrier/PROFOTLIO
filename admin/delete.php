<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name="portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);



$id= $_POST['id'];

$sql = "DELETE FROM `contact_records` WHERE `id`='".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}






 ?>