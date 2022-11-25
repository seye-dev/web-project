<?php

session_start();
if($_SESSION['connecter'] != "yes"){
	header("Location: ../login.php");
	exit();
}
if (date("H")< 18) {
	echo "bonjour et bienvenue";
	$_SESSION["nomPrenom"];
}
else{
	echo"bonsoir et bienvenue";
	$_SESSION["nomPrenom"];

}
	//session_start();
	//session_destroy();
	//header("location:../universite.php");


 ?>
