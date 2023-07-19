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

<button class="nav-toggler"> <span></span> </button> </nav> </div> </div></header></br></br></br>
<div class = "sect">
    <div id="greeting"></div>

 <img src="owner.jpg"style="width:450px;height:550px;">
   
</div>

 </br></br> 
 <div class = "sect" style="color:#55c1ff;">
 </br></br>
 <?php
  $selectdb=mysqli_select_db($con,"my_portfolio");
  $query="SELECT*FROM Home";
  $result=mysqli_query($con,$query);

while($row=mysqli_fetch_row($result)){
 echo $row[1]."</br>";
}
?>

  
</div>
     
  
<div class = "sect"style="float:right;">
       </br>
      <h3>Featured Projects</h3>
      <div class="slideshow-container">
      <div class="mySlides fade">
      <img src="mobile.png"style="width:100%"></div>

      <div class="mySlides fade">
    <img src="profile.png"style="width:100%"></div>

      <div class="mySlides fade">
      <img src="cap.png"style="width:100%"></div>

      <div class="mySlides fade">
      <img src="tube.jpg"style="width:100%">
      </div> </div></br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div></br></br>

  
 <div class = "sect"style="float:left;">

<div class="top">
   <span>WANT TO REGISTER?<a href="#" onclick="login()">login</a></span>
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
$selectdb=mysqli_select_db($con,"portfolio");
$query = "INSERT INTO contact(First_name,Last_name,Email,Phone)values('$name','$namee','$mail','$phon')";
			$result = mysqli_query($con,$query);
			
		}else{
			
		}
	?>


</div>
</br></b></br>

<script src = "jscript.js"></script>
</br></br></br></br>

<footer>
     <h3>About Us</h3>
    <p> Grace Web Design she is a programmer and web designer dedicated to design user applications and websites to meet user needs</p>
     
        <p>Grace web design, copy right © 2023</p>
     
</footer> 
