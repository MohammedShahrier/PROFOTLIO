<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <title>Gallery</title>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="../style.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <h1 style="text-align: center;">Contact forms submitted by users </h1>

  <table style="width: 80%;margin:auto;">
    <thead>
      <tr><th>Sn</th><th>Name</th><th>Email</th><th>Message</th><th>Actions</th></tr>
    </thead>
    <tbody>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name="portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

$sql = "SELECT * FROM `contact_records`";
$i=0;
$result = $conn -> query($sql);
  while ($row = $result -> fetch_row()) {   $i++; 
   ?>
       <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['1'];?></td>
        <td><?php echo $row['2'];?></td>
        <td><?php echo $row['3'];?></td>    
        <td>
          <form method="post" action="edit.php" ><input type="hidden" value="<?php echo $row[0]; ?>" name="id"><button type="submit">Edit</button></form> 
          <button onclick="DeleteFunction(<?php echo $row[0]; ?>);">Delete</a> </td>  
      </tr>
    <?php } ?>
    </tbody>
  </table>





  <br/><br/>


<footer>
        <h2>Thanks!</h2>
        <h3>Want to know more about me?</h3>
        <div class="contact-box"><h3><a href="../Contact/contact.html">Contact</a></h3></div>
        <a target="_blank" class="linkedin scl-lnk" href="https://www.linkedin.com/in/msh95/"><img alt="Mohammed Shahrier Linkedin" src="../images/linkedin.png"> </a>
        <a  target="_blank" class="github scl-lnk" href="https://github.com/MohammedShahrier"><img alt="Mohammed Shahrier Linkedin" src="../images/git.png">  </a>

        <h2> © Mohammed Shahrier</h2>
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
