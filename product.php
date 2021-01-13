
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
		<h1>Fill the Details For best Service</h1>
		<div>
			<left>
			
		<form action="servicesdata.php" style="color:white"action="" method="post" enctype="multipart/form-data">
			What best describes this project?
			<br>
			<input list="project" name="project" placeholder="Service's you want ">
			<datalist id="project">
				
				<option value="General handyman"></option>
				<option value="Plumbing project"></option>
				<option value="Electrical project"></option>	
				<option value="Interior painting"></option>
				<option value="Insulation Pro"></option>
				<option value="Exterior painting"></option>
				<option value="Landscaping">	</option>
				<option value="Carpentry"></option>
				<option value="Windows"></option>
				<option value="Doors"></option>
				<option value="Air Conditioning System"></option>
				<option value="Heating system"></option>
				<option value="Architect"></option>
				<option value="Drywall"></option>
				<option value="Siding"></option>
				<option value="Cleaning Pro-Exterior"></option>
				<option value="Cleaning Pro-Interior/Maid Service"></option>
				<option value="Desiner/Plaster Pro">
				<option value="Maid"></option>
				<option value="Garage Door Pro"></option>
				<option value="Handyman"></option>
				<option value="Home Inspector"></option>	
				<option value="Home Media Pro "></option>
				<option value="Landscaper"></option>
				<option value="Painter"></option>
				<option value="Pools Pro"></option>
				<option value="Solar Pro"></option>
				<option value="Tile Pro"></option>
				<option value="Other">	</option>
				</datalist><br>
				<br>
				What is the nature of the work to be done?
				<br>
				<input list="nature" name="nature" placeholder="Repair">
			<datalist id="nature"></option>
				<option value="Repair"></option>
				<option value="Install"></option>
				<option value="Assembly">	</option>
				<option value="Maintenance"></option>
			</datalist>
				<br><br>
				Describe the amount of<br> work you need to have done:
				<br>
				
				<input list="work" name="work" placeholder="A Single project">
				<datalist id="work">
				<option value="A variety of projects"></option>
				<option value="A single project"></option>
					</datalist><br><br>
				What kind of location is this?
				<br>
				
				<input list="location" name="location" placeholder="Home/Residence">
				<datalist id="location">
				<option value="Home/Residence"></option>
				<option value="Office"></option>
				</datalist>
				<br><br>
				Is this an emergency?
				<br>
				
				<input list="emergency" name="emergency" placeholder="No">
				<datalist id="emergency">
				<option value="Yes ">
				<option value="No">
					</datalist>
				<br><br>
				Please describe the job.
				<br>
			<textarea name="des" rows="10" cols="33" placeholder="Describe your Project."></textarea><br>
				
				<br><br>
				How many hours would you like to book?
				<br>
				
				<input list="hour" name="hour" placeholder="3 hours">
				<datalist id="hour">
				<option value="1 Hour">
				<option value="2 Hours"><option value="3 Hours">
				<option value="4 Hours">
				<option value="5 Hours">
				<option value="More Than 5 Hours">
				</datalist>

				<br>
				<br>
				What is the project ZIP code?<br>
				<input type="text" name="zip" placeholder="ZIP CODE">			
					
					<br>
					<br>
				<input type="email" name="email" placeholder="EMAIL" required="required">	<br><br>
				<input type="phone" name="cont" placeholder="PHONE" required="required">	
				<br><br>
				<input type="submit" name="save" required="required">
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