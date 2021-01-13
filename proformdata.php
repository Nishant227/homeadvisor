<!DOCTYPE html>
<html>
<header>
  <?php
  require "header1.php";  
  ?>
</header>

<body >
	<center>
		<style>
.button {
  background-color: #707070; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: underline;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
  cursor: -webkit-grab; cursor: grab;
}

</style>
<body>
  <h1>Congratulation!</h1>
  <h3>You have taken the first step to growing your business.</h3>
  <hr>
  <h3 style="color:orange;">Your Online Marketing Consultant:</h3>
  <h4>Kelsey Hughes</h4><hr>
   <h3 style="color:orange;">Contact Inforamation:</h3>
   <h4>+91 9636503130
    <br>
    nishant270896@gmail.com
    <br>
   Kelsey will be contacting you shortly to discuss how we can help your business.</h4><hr>
   <br>
   <br>
   <h1>Thank You!</h1>
   <br>
<br>
<br>
<br>

    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
</body>
</html>
<?php
$name=$_POST["name"];
$cont=$_POST["cont"];
$email=$_POST["email"];


$servername="localhost";
$username="root";
$password="";
$database="test";

$conn = mysqli_connect("localhost","root","","test");
//echo "sql connected";

$sql="INSERT INTO proformdata(name,cont,email)VALUES('$name','$cont','$email')";
mysqli_query($conn,$sql);

mysqli_close($conn); 
?>
</center>
<footer>
  <?php 
    require "footer.php";
  ?>
</footer>