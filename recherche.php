<?php
require("php/connexion.php");
require("php/commande.php");

    
    if(isset($_POST['numero']) && !empty($_POST['numero']))
    {
        $numero=$_POST['numero'];
        $update="SELECT * FROM piece WHERE numero= $numero";
        $row = $con->prepare($update);
        $row->execute();
        $etudiant= $row->fetch();
        if(count(array($etudiant))!=0)
        {
            echo "succes";

        }
        else
        {
            echo "ehec";
        }

    }

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>recherche</title> 
</head>
<body>
<div class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
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
</div>  
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/im.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      IPM-IPSA
    </a>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
creer un copmte
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form>
          <div class="form-group">
            <label>nom</label>
            <input class="form-control" type="text" name="nom">
          </div>
          <div class="form-group">
            <label>prenom</label>
            <input class="form-control" type="text" name="prenom">
          </div>
          <div class="form-group">
            <label>mail</label>
            <input class="form-control" type="text" name="mail">
          </div>
          <div class="form-group">
            <label>numero</label>
            <input class="form-control" type="text" name="numero">
          </div>        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="type"name="valider" class="btn btn-primary">valider </button>
      </div>
    </form>
    </div>
  </div>
</div>
   <a href="declaration.php">declaration de piece</a>
      <a href="rech.php">recheche de piece</a>
      <a class="1" href="universite.php">Retour</a>
      
  </div>
</nav>

         <div class="container">
        <div class="col">
         <div class="card-body">
            
      <form class="d-flex" role="search" method="post">
        <input  name='numero'class="form-control me-2" type="search" placeholder="rechercher" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">recherche</button>
      </form>
 </div>
 </div>
 </div>
</body>
</html>


