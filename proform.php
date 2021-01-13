<!DOCTYPE html>
<html>

<?php
$service=$_POST["service"];
$cname=$_POST["cname"];
$zip=$_POST["zip"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$cont=$_POST["cont"];
$email=$_POST["email"];


$servername="localhost";
$username="root";
$password="";
$database="test";

$conn = mysqli_connect("localhost","root","","test");
//echo "sql connected";

$sql="INSERT INTO signupprodata(service,cname,zip,fname,lname,cont,email)VALUES('$service','$cname','$zip','$fname','$lname','$cont','$email')";
mysqli_query($conn,$sql);

mysqli_close($conn);
 //echo "sql connected";
?>

<header>
	<?php
	require "header1.php";	
	?>
</header>
<style>
	div{
	  background-color: #000033;
	  width: 50%;  		
   	  border-radius: 12px;
   	  border: 1px solid #000033; 

	}
	input{
		width: 250px;
		height:40px;
	}
</style>
<center>
<br>
<h3> Create your free account </h3>
<h6> This is how homeowners will contact you </h6><br>
<div>

	<form action="proformdata.php" method="post">
		<br>
		<input type="text" name="name" placeholder="Full Name"><br><br>
		<input type="text" name="cont" placeholder="Phone Number"><br><br>
		<input type="email" name="email" placeholder="Email"><br><br>
		<h6 style="color:white">By clicking Next, you affirm you have read, understand, and agree to the HomeAdvisor Terms and Privacy Policy, and you agree and authorize HomeAdvisor and its affiliates, using automated technology, to deliver marketing emails, calls and texts to the number and email address you provided above. Consent is not a condition of purchase.</h6>
		<input type="submit" name="save">
		<br>
		<br>
	</form>
</center>
</div>
</center>
<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		



<footer>
	<?php 
		require "footer.php";
	?>
</footer>
</html>