
<!DOCTYPE html>
<html>
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
<body background="image/logo/loginlogo.jpg">
	<center>
		<h1>Grow your Business</h1>
		<div>
			<left>
			
		<form action="proform.php" style="color:white"action="" method="post" enctype="multipart/form-data">
			Services:
			<br>
			<input list="service" name="service" placeholder="What Service do you provide? ">
			<datalist id="service">
				<list>Most popular services</list>
				<option value="Fencing Pro">
				<option value="Flooring Pro">
				<option value="Gutter Contractor">	
				<option value="HVAC Pro">
				<option value="Insulation Pro">
				<option value="Mason/Concrete Pro">
				<option value="Plumber">	
				<option value="Remodeler">
				<option value="Roofing Pro">
				<option value="Siding Pro">
				<option value="Tree Service Pro">
				<option value="Window/Door Pro">
				<option value="Architect">
				<option value="Cabinets/Countertops Pro">
				<option value="Carpenter">
				<option value="Cleaning Pro-Exterior">
				<option value="Cleaning Pro-Interior/Maid Service">
				<option value="Desiner/Plaster Pro">
				<option value="Electrican"></option>
				<option value="Garage Door Pro"></option>
				<option value="Handyman"></option>
				<option value="Home Inspector"></option>	
				<option value="Home Media Pro "></option>
				<option value="Landscaper">
				<option value="Painter">
				<option value="Pools Pro">
				<option value="Solar Pro">
				<option value="Tile Pro">
				<option value="Other">	
				</datalist><br>
				<br>
				Company Name:
				<br>
				<input type="text" name="cname" placeholder="" required="required">
				<br>
				Zip Code:
				<br>
				<input type="text" name="zip" placeholder="" required="required">
				<br>			Contact's First Name:
				<br>
				<input type="text" name="fname" placeholder="" required="required">
				<br>
				Contact's Last Name:
				<br>
				<input type="text" name="lname" placeholder="" required="required">
				<br>
				Telepone Number:
				<br>
				<input type="text" name="cont" placeholder="" required="required">
				<br>
				Email Address:
				<br>
				<input type="text" name="email" placeholder="" required="required">
				<br>			
					
					<br>
					<br>
				<input type="submit" name="save">
				<br>
				<br>
			</form>
		</div>
		<br>
		<br>
		<br><br>
		<br>
		<br><br>
		<br>
		<br>


<footer>
	<?php 
		require "footer.php";
	?>
</footer>
</body>