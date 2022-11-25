<?php 
require("/php/connexion.php");

if(isset($_POST['connexion']))
{
	if (isset($_POST['login']) && !empty($_POST["login"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"]))
	{
		echo"<p>";
		print_r($_POST);
		echo"<p>";
		
	}
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/styl.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
	<title>connexion</title>
</head>
<body>
	<header class= "header">
		<a class="inscrire" href="inscription.html">s'inscrire</a>
		<a class="identifier" href="login.html">s'identifier</a>
		<a class="inscrire" href="piece.php.php">recherche de piece</a>
		<a class="identifier" href="restaurat.php">Etat des restaurats </a>
	</header>
	<h1>
	 <?php 
	 require("/php/session.php");
	 connecter();
	 ?>
	</h1>
	 <div class="container">
    <div class="col">
    <div class="card shadow-sm">
    <div class="card-body">
	<div class="form">
		<form class="inscrire" method="post" action="login.php" >
			<label>LOGIN</label><br>
			<input type="text" name="login" ><br>
			<label> PASSWORD</label><br>
			<input type="text" name="mdp" ><br>
			<button class="btn btn-primary" name="connexion"  >connexion</button>
		</form>
	</div>
	</div>
	</div>
	</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>

// navbar

<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
</nav>

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>

<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>

</body>
</html>