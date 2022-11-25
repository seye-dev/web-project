
<?php 

session_start();
require('nav.php');
require("../php/info.php");

@$connexion=$_POST['connexion'];


if (isset($connexion))
 {

	require("connexion.php");

	$req = $con->prepare("SELECT * FROM etudiant where identifiant = ? and password =? limit 1 ");
	$req->execute(array($login,md5($mdp)));
	$reponse=$req->fetchAll();
	if (count($reponse) == 0)
	{
		$info = "<div class='alert alert-danger'>
            login ou mot de passe incorrect
          </div>";	
     $_SESSION["info"]= $info;
		header("Location: login.php");
	}

	else
	{
    $info = "<div class='alert alert-success'>
    connecté
  </div>";
		$_SESSION["useradmin"] = $reponse["identifiant"];
    $_SESSION["passe"] = $reponse["password"];
		header("Location:index.php");
	 
	}

}

		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
	<title>connexion</title>
</head>
<body><br>
<div class="alert alert-light" role="alert">
  <?php  echo $_SESSION["info"] ?>
</div>

	<div class="container">
    <div class="col">
    <div class="card-body">
	<div class="form">
		<form class="inscrire" method="post" >
			<label>nom d'utilisateur</label><br>
			<input  class="form-control" type="text" name="login" >
			<label> mot de passe</label><br>
			<input  class="form-control" type="text" name="mdp" ></br>
			<button class="btn btn-success" name="connexion"  >connexion</button>

		</form>
	</div>
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
