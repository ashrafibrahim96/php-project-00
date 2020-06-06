<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
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
		<h1>Login  Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
                <form action="" method="POST">              
                      <input class="text" type="text" name="Username" placeholder="Username" required="">

                    <input class="text" type="password" name="password" placeholder="Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="LOGIN">
					</form>
				<p>Don't have an Account? <a href="Signup.php"> Sign up Now!</a></p>
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
session_start();
include('connect2.php');
/* if (isset($_POST["submit"])) {
    if (!empty($_POST['Username']) && !empty($_POST['password'])) {
        $Username = $_POST['Username'];
		$password = $_POST['password']; */
		$Username=$_POST['Username'];
		$password=$_POST['password'];
      

        $sql="SELECT * FROM person WHERE Username='$Username' AND password='$password'";
        $sql2="SELECT Username,password FROM person WHERE Username='$Username' AND password='$password'";
        $resultat1=mysqli_query($connect, $sql2);
        $resultat=mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultat)==0) {
            $_SESSION["userr"]=$Username;
            $_SESSION["loggedin"]=false;
            $_SESSION["error"] = "Username ou password incorrect";
        // header('location:login.php');
        } else {
            $_SESSION["loggedin"]=true;
            $row = $resultat1 -> fetch_assoc();
            $_SESSION["Username"]=$row["Username"];
            $_SESSION["password"]=$row["password"];
            header('location:home.php');
		}
		/*if(isset($_SESSION["error"])){
			$error = $_SESSION["error"];
			 echo "<span><font color='red'><b>$error</b></font></span>";}
			 unset($_SESSION["error"]);*/
?>


