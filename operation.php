<?php
session_start();
  require('php/connexion.php');
  //$id = $_SESSION["id"] ;

  //$req = 'SELECT * FROM piece WHERE id =$id';
 // $row = $con->query($req);
  // $appel = $row->execute();

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
      <img src="image/logo-ucad.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
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
</nav><br><br><br><br>
</div>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <img src="image/im.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
   
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  </div>
</div>
   <a href="declaration.php">declaration de piece</a>
      <a href="rech.php">recheche de piece</a>
      <a class="1" href="universite.php">Retour</a>
  </div>
</nav>

<nav class="nav bg-light">
  <h4><a class="nav-link" href="declaration.php">declarer une piece</a></h4>
  <h4><a class="nav-link" href="rech.php">rechercher une piece</a></h4>
  
</nav>
</header><br> 
<!-- we create card in order to call or to send sms -->

<div class="vote">

    <div class="card " style="width: 300px;">
      <div class="col-12 mt-4">
        <h5 class="card-title text-center">Infos</h5>
        <img src="image/appel.jpg" class="card-img-top" alt="...">
        <p class="card-text">Pour retrouver piece, nous avons prions de cliquer sur le bouton ci dessous afin d'envoyer une sms à ce qui a ramassé votre piece</p>
        <a href="<?= $appel["telephone"] ?>"class="btn btn-primary">Appeler</a> 
      </div>
    </div>

    <div class="card " style="width: 300px;">
      <div class="col-12 mt-4">
        <h5 class="card-title text-center">Infos</h5>
        <img src="image/sms.jpg" class="card-img-top" alt="...">
        <p class="card-text">Pour retrouver piece, nous avons prions de cliquer sur le bouton ci dessous afin d'envoyer une sms à ce qui a ramassé votre piece</p>
        <a href="#" class="btn btn-primary">envoyer un message</a>       
      </div>
    </div>

</div>

<!--un footer de ntre page-->
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

