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
  background-color: red; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
  cursor: -webkit-grab; cursor: grab;
}

</style>
<body>
  <br><br>

	<button  class ="button" onclick="document.location='http://localhost/php/HomeAdvisor/services.php'">For More Service's</button><br>
   
    <h2>Check Out Information</h2>
  <h1>Thank You!</h1>
  <h3>Our Service man will contact to soon.</h3>
  <hr>
  <h3 style="color:orange;">Your Service Man Consultant:</h3>
  <h4>Kelsey Hughes</h4><hr>
   <h3 style="color:orange;">Contact Inforamation:</h3>
   <h4>+91 9636503130
    <br>
    nishant270896@gmail.com
    <br>
   Kelsey will be contacting you shortly .</h4><hr>
   <br>
   <br>
   <h1>Thank You! For Choosing Our Service's.</h1>
   <br>
<br>
<br>
<br>
</body>
</html>
<?php
$project=$_POST["project"];
$nature=$_POST["nature"];
$work=$_POST["work"];
$location=$_POST["location"];
$emergency=$_POST["emergency"];
$hour=$_POST["hour"];
$zip=$_POST["zip"];
$cont=$_POST["cont"];
$email=$_POST["email"];


$servername="localhost";
$username="root";
$password="";
$database="test";

$conn = mysqli_connect("localhost","root","","test");
//echo "sql connected";

$sql="INSERT INTO servicesdata(project,nature,work,location,emergency,hour,zip,cont,email)VALUES('$project','$nature','$work','$location','$emergency','$hour','$zip','$cont','$email')";
mysqli_query($conn,$sql);

mysqli_close($conn); 
?>
</center>
<footer>
  <?php 
    require "footer.php";
  ?>
</footer>