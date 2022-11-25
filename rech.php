<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
       <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
	<title>recherche</title> 
</head>
<body>
<div class="fixed-top">
  <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-primary">
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
</nav>
</div><br><br>
 <nav class="nav bg-light" id="navpiece">
 <h5> <a class="nav-link"id="navpiece" href="declaration.php">declarer une piece</a></h5>
  <h5><a class="nav-link"id="navpiece" href="rech.php">rechercher une piece</a></h5>  
</nav>
</nav><br>

 <div class="alert alert-light" role="alert">
  <?php echo   $_SESSION["message2"] ?>
</div>
<!--formulaire de recherche de piece-->
<div class="container">
  <div class="col">
      <div class="card-body">   
      <form role="search" method="post">
        <select  name="typePiece" class="form-select" aria-label="Default select example">
                <option selected>selectionner le type de piece</option>
                <option >CNI</option>
                <option >Carte Etudiant</option>
                <option >passeport</option>
                <option >autre</option>
            </select><br>
        <input  name='numeroPiece'class="form-control me-2" type="text" placeholder="entrer le numero de piece" ><br>
        <button class="btn btn-outline-success" type="submit">rechercher</button>
      </form>
 </div>
 </div>
 </div>

 
   <footer class="bd-footer  mt-5 bg-secondary">
  <div class="container px-4 px-md-3">
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

<?php 

require("php/connexion.php");

 $message2="";

if(isset($_POST["typePiece"]) and !empty($_POST["typePiece"])and isset($_POST["numeroPiece"]) and !empty($_POST["numeroPiece"])
  )
{


    $numeroPiece = $_POST['numeroPiece'];
    $typePiece = $_POST['typePiece'];
    $req = $con->prepare("SELECT * FROM piece where typePiece=?  and numeroPiece =?  limit 1 ");
     $data=$req->execute(array($typePiece,$numeroPiece));
    $reponse=$req->fetchAll();
    if (count($reponse) == 0)
    {
      $message2 = "<div class='alert alert-danger'>
                    votre piece n'est pas encore declaré trouver
                </div>";
      $_SESSION['message2'] = $message2;
    }
    else
    {
      //$message2 = "<div class='alert alert-success'>
                   // votre piece est retrouver
                 //</div>";
      $_SESSION['typePiece'] = $typePiece;
      $_SESSION['numeroPiece'] = $numeroPiece;
      $_SESSION["message2"] = $message2;
      header('Location:operation.php');
        
    } 

    if(isset($_GET['id']) && !empty($_GET['id']))
    {
        $id=$_GET['id'];
        $req="SELECT * FROM piece";
        $row = $con->query($req);
        $user=$row->execute();
        if($user)
        {

        $_SESSION['id'] = $id;
        $_SESSION['appel']= $user['telephone'];

        }
     
    }
}


?>