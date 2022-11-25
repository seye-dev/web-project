<?php 
require("php/connexion.php");
session_start();
//require('ajout.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
 	<title>declaration de piece</title>

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
          <a class="nav-link" href="inscription.php">identifier</a>
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
  <h5><a class="nav-link"id="navpiece" href="declaration.php">declarer une piece</a></h5>
  <h5><a class="nav-link"id="navpiece" href="rech.php">rechercher une piece</a></h5>
</nav>

 <div class="alert alert-light" role="alert">
  <?php echo $_SESSION["message1"] ?>
</div>
  </header>
     <div class="container">
    <div class="col">
       <div class="card-body">
      	<form method="post" enctype="multipart/form-data" action="ajout.php">
          <div class="form-group">
              <label for="piece">Type piece</label> 
              <select  name="typePiece" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option >CNI</option>
                <option >Carte Etudiant</option>
                <option >passeport</option>
                <option >autre</option>
              </select>
          </div>    
          <div class="form-group">
              <label for="piece">Numero piece</label>
              <input type="text"
                class="form-control" name ="numeroPiece" placeholder="nunero de piece" >
          </div>
            <div class="form-group">
              <label for="telephone">telephone</label>
              <input type="number"
                class="form-control" name="telephone" placeholder="numero telephene du ramasseur">
            </div><br>
            <button class="btn btn-success" type="submit" name="valider">declarer</button>
            <button class="btn btn-primary" type="submit" name="valider">annuler</button>
        </form>
      </div>
    </div>
  </div>

<footer class="bd-footer  mt-5 bg-secondary">
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