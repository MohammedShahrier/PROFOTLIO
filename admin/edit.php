<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <title>Gallery</title>
  <link rel="stylesheet" href="interests.css">
  <link rel="stylesheet" href="../style.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="interests.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style type="text/css"></style>
</head>

<body>
  <nav>
    <div class="logo">
      Mohammed Shahrier</div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a class="active" href="index.html">Interests</a></li>
      <li><a href="../About/about.html">Projects</a></li>
      <li><a href="../Resume/resume.html">Resume</a></li>
      <li><a href="../Gallery/gallery.html">Gallery</a></li>
      <li><a href="../Contact/contact.html">Contact</a></li>
    </ul>
  </nav>
  <br/>

  <h1 style="text-align: center;">Edit Contact Details submitted by users </h1>
  <?php 
  error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$db_name="portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

if(isset($_POST) && $_POST['command']=='UpdateRecord'){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $sql="UPDATE `contact_records` SET `name`='".$name."',`email`='".$email."',`message`='".$message."' WHERE `id`='".$id."'";

  if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Record updated successfully');</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

}



$sql = "SELECT * FROM `contact_records` WHERE id= '".$_POST['id']."'";
$result = mysqli_query($conn, $sql);
$row   = mysqli_fetch_row($result);


?>
<form style="text-align: center;" method="post">
  <input type="hidden" name="id" value="<?php echo $row['0'];?>">
  <input type="hidden" name="command" value="UpdateRecord">

  <table style="width: 60%; margin: auto;" >
    <tr>
      <td>Name</td>
      <td><input  style="width: 100%" required="" type="text" name="name" value="<?php echo $row['1'];?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input    style="width: 100%" required="" type="email" name="email" value="<?php echo $row['2'];?>"></td>
    </tr>
    <tr>
      <td>Message</td>
      <td><textarea   style="width: 100%" name="message" required=""><?php echo $row['3'];?></textarea></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><button type="submit">Update</button></td>
    </tr>

  </table>  
  <a style="width:50%;margin:auto;" href="index.php">Back to admin page</a>
</form>




  <br/><br/>


<footer style="text-align: center;color:#fff;background-color: #002429">
        <h2>Thanks!</h2>
        <h2>Want to know more about me?</h2>
        <div style="margin:auto; margin-top:10px; margin-bottom:10px;width: 10%;border: 2px solid #fff;padding:10px;"><a style="color: #fff;text-decoration: none;" href="../Contact/contact.html"><h3>Contact</h3></a></div>
        <a target="_blank" class="github" href="https://github.com/MohammedShahrier"><img src="../images/linkedin.png" style="width: 50px; height:auto;margin-right: 20px;"> </a>
        <a target="_blank" class="linkedin" href="https://www.linkedin.com/in/msh95/"><img src="../images/git.png" style="width: 50px; height:auto;">  </a>
        
        <h2> &copy; Mohammed Shahrier</h2>
  </footer>
</body>


<script type="text/javascript">
  function DeleteFunction(id){
    

    

    var xmlHttp = new XMLHttpRequest(); //javascipt ajax object 
data = new FormData();
data.set('id',id);


        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
                alert(xmlHttp.responseText);
                window.location.reload();
            }
        }
        xmlHttp.open("post", "delete.php");  //data sending method is post        
        xmlHttp.send(data);

  }
</script>

</html>
