<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->	
<link href="Signupp.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="SUBMIT" value="SIGNUP" name="SUBMIT">
				</form>
				<p> <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		
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
    <!-- //main -->
</body>
</html>
<?php
include('connect2.php');

$Username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql1= "SELECT* FROM 'person' WHERE 'Username'='$Username'"; 
$res1= mysqli_query($connect,$sql1);
if (mysqli_num_rows($res1)>0) {
    echo("Username already exist");

    if (empty($Username)) {
        echo("enter your username");
    } elseif (empty($email)) {
        echo("enter your email");
    } elseif (empty($password)) {
        echo("enter your password");
    }
    /*elseif (empty($ConfirmPassword))
    echo("confirm your password"); */
    else {
        $sql="INSERT INTO `person`( `Username`, `email`, `password`) VALUES ('".$Username."','".$email."','".$password."')";
        if (mysqli_query($connect, $sql)) {
            echo("add successfully");
        }
    }
    $connect->close();
}
?>