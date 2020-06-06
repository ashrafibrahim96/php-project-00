<?php
session_start();
include('connect2.php');
$Username=$_POST['Username'];
$password=$_POST['password'];
$sql="SELECT * FROM person WHERE Username='$Username' AND password='$password'";
$sql2="SELECT Username,password FROM person WHERE Username='$Username' AND password='$password'";
$resultat1=mysqli_query($connect,$sql2);
$resultat=mysqli_query($connect,$sql);

if(mysqli_num_rows($resultat)==0){
    $_SESSION["userr"]=$Username;
    $_SESSION["loggedin"]=false;
    $_SESSION["error"] = "Username ou password incorrect";
    header('location:login.php');
}
else{

    $_SESSION["loggedin"]=true;
    $row = $resultat1 -> fetch_assoc();
    $_SESSION["Username"]=$row["Username"];
    $_SESSION["password"]=$row["password"];
    header('location:home.php');
}
?>
