<html>
<body background="image/logo/loginlogo.jpg">
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
	<br>
</body>
</html>
<?php
$id=$_POST["id"];
$pass=$_POST["pass"];
$pass1=$_POST["pass1"];
if($pass==$pass1)
    { 
      
     // header ("location:login.php");
      echo "<a  href='login.php'> <br><br>Click Here for Sign In now";
    }
    else {
     echo "<a  href='signup.php'>Password Didn't Match Click Here To Sign Up Again";
     // header ("location:signup.php");
    }
$email=$_POST["email"];
$cont=$_POST["cont"];

$servername="localhost";
$username="root";
$password="";
$database="test";
if($pass==$pass1){
$conn = mysqli_connect("localhost","root","","test");

//echo "sql connected";

$sql="INSERT INTO exchange(id,pass,pass1,email,cont)VALUES('$id','$pass','$pass1','$email','$cont')";
mysqli_query($conn,$sql);

mysqli_close($conn); 
}
?>
</center>
