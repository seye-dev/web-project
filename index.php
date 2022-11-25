<?php
session_start();
if(isset($_SESSION['userId'])){ header('location:login.php');}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title></title>
</head>
<body >
<div class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light bg-primary" id="nav">
      <a class="navbar-brand" href="#">
      <img src="image/logo-ucad.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      UCAD
    </a>

  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">accueil</a>

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
        <li class="nav-item">
          <a class="nav-link " href="php/deconnexion.php" tabindex="-1">deconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div><br><br><br>
<div class="titreindex">
  <h3 class="bienindex">
    Bienvenue à l'universite Cheikh Anta Diop
  </h3>
    <h4>un temple du savoir</h4>
</div><br>
<!--une image roulate-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/univ.png" class="d-block w-100"height="400" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/UCAD-2.jpg" class="d-block w-100" height="400" alt="...">
    </div>
</div><br>
  <div class="faculte">
      <h3>Une universite,six facultes,huit ecoles et instituts</h3>    
  </div><br>
<!-- les facultes de l'UCAD -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/FMPO.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>FMPO</h5>
        <p>Faculte de Medecine de Pharmacie et d'Odontologie</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/FLASH.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>FLAS</h5>
        <p>Faculte des Lettres et des Sciences Humaines</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/faseg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>FASEG</h5>
        <p>Faculte des Science Economiques et de Gestion</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- une footer-->
 <footer class="bd-footer mt-5 bg-secondary">
  <div class="container  px-4 px-md-3">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none"> 
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h3> MENU</h3>
        <ul class="list-unstyled">
          <h5><li class="mb-2"><a href="index.php">accueil</a></li></h5>
          <h5><li class="mb-2"><a href="inscription.php">inscription</a></li></h5>
          <h5><li class="mb-2"><a href="piece.php">space des pieces</a></li></h5>
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
<div class="footer-bottom bg-light" >
  <div class="container">
    <div class="row y-middle">
      <div class="col-lg-12">
        <div class="copyright text-center" id="copy">
        <h5>
          <p>
            Produit par
            <a href="https://fancy-trifle-d36d21.netlify.app/" target="_blank">
            cheikh seye
            </a> </p></h5>                             
         </div>
      </div>
    </div>
  </div>
</div>
</body>  
<script src='js/bootstrap.bundle.min.js'  ></script>

</html>