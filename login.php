<html>
<head>
	<body background="image/logo/loginlogo.jpg" width="100px" height="100px">
		<br>

		<center><h1 style="color: white;">
                    
                    </h1>

                <img src="image/logo/homelogo.jpg"  width="250" height="100" ></center>
                </head>
<style>
		img {
  border-radius:0px;
}
div {
  background-color: 100100100;
  width: 200px;
  padding: 50px;
   border-radius: 12px;
  
}
.button {
  background-color: limegreen; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   border-radius: 12px;
}

.button1 {padding: 6px 60px;
 			border-radius: 38px;
 			}
.button2{padding: 6px 60px;
 			border-radius: 12px;
 			 background-color: red;
 			}
</style>
<tittle> <center>  
</tittle>
</head>


	<br>
	<br>
	<div style="background-color: #FCCDC2">
	<form action="sign.php" method ="post"><center>

		USER NAME*:<br> <input type="text" name="id" placeholder="User Name"><br><br>
	 	PASSWORD*:<br> <input type="password" name="pass" placeholder="Password"><br><br>
		
		<div style="padding:10px 10px;">
									<input type="checkbox" onclick=" ">&nbsp;Show Password
								</div>
		<button class="button button1" type="submit" name="submit" >Sign In</button><br>
		
	
	</form>

</body>

</div>
<p style="color:white"> New to E-store? Sing Up*</p>

<button  onclick="document.location='http://localhost/php/HomeAdvisor/signup.php'"class="button button2" >Sign Up</button>
</html>
