<?php 
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="phpproject";

//create connection 
$connect=new mysqli($servername,$username,$password,$dbname);

//check connection
if(!$connect)
	die("la connexion a échoué");
else 
	echo "connecté avec succés" ; 
?> 