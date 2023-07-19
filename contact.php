<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Grace Web Design</title>
    <meta name="viewport"
    content="width-device-width, initial-scale=1">
    <link rel="stylesheet"href="cstyle.css"/>
</head>
<body>
      <header class="header-area"> 
   <div class="navbar-area"> <div class="container"> <nav class="site-navbar">  <a href="#home" class="site-logo">Grace Web Design</a> 
 <ul> <li><a href="index.php">Home</a></li>
  <li><a href="project.php">Projects</a></li> <li><a href="skills.php">Skills</a></li> <li><a href="contact.php">Contact</a></li> 
 <li><a href="#">Settings</a></li> 
</ul> 

<button class="nav-toggler"> <span></span> </button> </nav> </div> </div></header>  

<button class="nav-toggler"> <span></span> </button> </nav> </div> </div></header></br></br>
 
    
<h3>Contacts</h3>
<p>Current i am available for any freelance work,</p>
<h2>Hotlines</h2>
    <ol>
      <li>+265 999 33 16 282</li>
    </ol>
     <h2>Physical Address</h2>
    <ol>
      <li>Corparate Mall</li>
      <li>P.O. Box 30311</li>
      <li>lilongwe 3</li>
    </ol>
 
 <div class="top">
   <span>WANT TO CONTACT?<a href="#" onclick="login()">register</a></span>
   </div>
   <h2>SUBSCRIBE</h2>
   <div class="two-forms">
   <div class="input-box">
    <form action= "" method="post"name="myForm"
 onsubmit="return validateForm()">    
   <input type="text" class="input-field" name="first_name"placeholder="Firstname"></div></br>
   
   <div class="input-box">
   <input type="text" class="input-field" name="last_name" placeholder="Lastname"></div></br>
   
   <div class="input-box">
   <input type="email" class="input-field" name="email"placeholder="Email"></div></br>
 
   <div class="input-box">
   <input type="text" class="input-field" name="phone" placeholder="PhoneNumber"></div></br>
   <div class="input-box">
   <input type="submit" name="submit"class="submit" value="REGISTER"></div>
  
   <div class="two">
   <label><a href="#">Terms & Conditions</label></div></div></div></div></div>
   </form>
<?php
if(isset($_POST["submit"])){
$name = $_POST['first_name'];
$namee = $_POST['last_name'];
$mail = $_POST['email'];
$phon = $_POST['phone'];

			//selecting a database
$selectdb=mysqli_select_db($con,"my_portfolio");
$query = "INSERT INTO contacts(first_name,last_name,email,phone)values('$name','$namee','$mail','$phon')";
			$result = mysqli_query($con,$query);
			echo "data sent to the database";
		}else{
			echo "data not sent to the database";
		}
	?>

<script src="jscript.js"></script>
<footer>
     <h3>About Us</h3>
    <p> Grace Web Design she is a programmer and web designer dedicated to design user applications and websites to meet user needs</p>
     
        <p>Grace web design, copy right © 2023</p>
     
</footer> 

</body>
</html>
