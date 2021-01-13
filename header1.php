<html>
<header>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Style the body */
header{
  position:left;
  top:0px;
  width:100%;
  height:30%;

}
#body {
  font-family: Arial;
  margin: 0px;
  width:100%;
}
body {
   margin:0;
   padding:0;
   height:100%;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 5px;
  overflow: hidden;
  background-color:#000033;

}

li {
  float: left;
  width:15%;
  height:30%;
  margin:20px;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 0px;
  text-decoration: none;
}

li a:hover {
  background-color:;
   border-radius:5px;
   padding:0px;
   text-decoration: underline;
}

form.example input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: 1px solid grey;
  border-radius:15px;
  float: left;
  width:55% ;
  height:20%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 30%;
  height:83%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-radius:15px;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
/* Header/Logo Title */
.header {
  position: top;
	width: 100%;
	height: 30%;
  padding: 0px;
  text-align: center;
  background-color:none;
  color: black;
  font-size: 25px;
}

/*.btn {
  background-color: #2196F3;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  outline: none;
}*/

.dropdown {
  position: center;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
 

}

.btn:hover, .dropdown:hover .btn {
  background-color: #0b7dda;
}

/* Page Content */
.content {padding:20px;}
</style>

 <div class="header">
<ul>
  <li><a href="http://localhost/php/HomeAdvisor/home.php"><img src="image/logo/homelogopro.jpg" width="220" height="70"  ></a></li>

  <li>
  <div class="dropdown">
  <a>Start project</a>

  <div class="dropdown-content">
    <a href="http://localhost/php/HomeAdvisor/services.php">Additions & Remodels</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">AC & Cooling Bathromm</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Cabinets</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Carpentry</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Carpet</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Cleaning Services</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Concrete,Brick & Stone</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Decorators</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Driveways</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Drywall</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Electrical, Telephone</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Fences</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Flooring</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Foundations</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Garages, Door</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Handyman Services</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Heating & Cooling</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Kitchen</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Landscape</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Maintenance of Lawn, Tree</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Painting</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Plumbing</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Roofing</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Swimming Pools</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Spas, Hot Tubs</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Tile & Stone</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Walls & Ceiling</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">Windows & Doors</a>
    <a href="http://localhost/php/HomeAdvisor/services.php">See All Categories</a>
    <hr>
    <h4>See your price.</h4>
    <h4>Book a time.</h4>
    <h4>Pay Online.</h4>
    <a href="http://localhost/php/HomeAdvisor/categories.php" style="background-color:#FF4500">Book Now</a>
    <br>



  </div>
</div></li>

  

  <li><a href="http://localhost/php/HomeAdvisor/login.php">Login</a></li>

  <li><form class="example" action="/action_page.php" style="margin:auto;max-width:250px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form></a></li>
  
</ul>
</div>

</header>