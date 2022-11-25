<?php
//session_start();
//if(!isset($_SESSION['userId'])){ header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>

	<title>RECHERCHE DE PIECE</title>
</head>
<body>
  
  <header class= "header">
    <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/logo-ucad.png" alt="" width="30" height="30"class="d-inline-block align-text-top">
      UCAD
    </a>
    <a class="navbar-brand" href="index.php">accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inscription.php">s'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="piece.php">space des piece</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="restaut.php" tabindex="-1">restaurat</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div><br><br>
<nav class="nav bg-light" id="navpiece">
 <h5> <a class="nav-link"id="navpiece" href="declaration.php">declarer une piece</a></h5>
  <h5><a class="nav-link"id="navpiece" href="rech.php">rechercher une piece</a></h5>
  <h5><a class="nav-link"id="navpiece" href="annonce.php">annoncer</a></h5>
</nav>
  </header><br>
  <div class="titreindex">
  <h3 class="bienindex">
    Bienvenue dans votre space de recherche de piece
  </h3>
    <h4>Vous pouvez declarer et rechercher vos pieces</h4>
    <h5>Une consultation de temps en temps pour retrouvez vos pieces<br>
        car une declaration peut se faire a n'importe quel mement</h5>
</div><br>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/cni.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h3>RECHERCHE</h3>
    <h5><p>CARTE D'IDENTITE </p></h5>
  </div>
    </div>
    <div class="carousel-item">
      <img src="image/carte.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h3>RECHERCHE</h3>
    <h5><p>CARTE ETUDIANT</p>
  </div>
    </div>
    
  </div>

<footer class="bd-footermt-5 bg-secondary">
  <div class="container  px-4 px-md-3">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none"> 
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h3> MENU</h3>
        <ul class="list-unstyled">
          <h5><li class="mb-2"><a href="index.php">Home</a></li></h5>
          <h5><li class="mb-2"><a href="inscription.php">inscription</a></li></h5>
          <h5><li class="mb-2"><a href="piece.php">space des piece</a></li></h5>
          <h5><li class="mb-2"><a href="restaut.php">restaurat</a></li></h5>
        </ul>
      </div>

      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h3>A Propos</h3>
        <ul class="list-unstyled">
          <h5><li class="mb-2">universite</li>une etude supérieure qui œuvre dans le cadre de savoir faire</h5>
        </ul>
      </div>

    </div>
  </div>

</footer> 
<div class="footer-bottom bg-light">
  <div class="container">
    <div class="row y-middle">
      <div class="col-lg-12">
        <div class="copyright text-center"id="copy">
        <h5><p>Produit par<a href="#" target="_blank"> cheikh seye </a> </p></h5>                             
         </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

