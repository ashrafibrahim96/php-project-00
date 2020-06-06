<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="loginAdmin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="test" src="images/test.png">
	<div class="container">
		 <div class="img">
            <!-- <img src="images/bg.svg"> --> 
            <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
            </ul>
		</div> 
		<div class="login-content">
			<form action="" method="POST">
				<img src="images/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="user" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="mdp" class="input">
            	   </div>
                </div>
                <button style="--content: 'lOGIN';">
                <div class="left"></div>
                lOGIN
                <div class="right"></div>
                </button> 
            	<!-- <input type="submit" class="btn" value="Login"> -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="loginAdmin.js"></script>
</body>
</html>

<?php
include ('connect2.php');
if(isset($_POST["mdp"]))
  if ($_POST["mdp"] == "admin") 
	header('location:admin/index.html');
  else {
	echo ' alert ("Le mot de passe entré n est pas le bon. Réessayez...")'; // fix thiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiissss
  }
?>

