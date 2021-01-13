<html>
<body background="image/logo/loginlogo.jpg">
	<center>
	<style >
		div{
			color :black;
		}
	</style>

<div>
<?php
$id=$_POST["id"];
$pass=$_POST["pass"];
if($id=="nishant" && $pass=="hawaliya" )
{
	echo "welcome to registration";
	header ("location:home.php");
}
else {
	echo "<br>";
	echo "Enter Valid ID or Password";
	echo "<a  href='login.php'> <br><br>click here to login again";
}
?>
</div>
</center>
</body>
</html>