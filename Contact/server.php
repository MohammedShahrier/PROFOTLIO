<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name="portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);







 $name = $_POST["name"];
 $email = $_POST["email"];
 $message= $_POST["message"];

   


 $sql = 'INSERT INTO `contact_records`(`name`, `email`, `message`) VALUES ("'.$name.'","'.$email.'","'.$message.'")';
$insert=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($insert){
	echo "Data submitted successfully";
}




 ?>