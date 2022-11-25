<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ccs/bootstrap.css">
  <link rel="stylesheet" href="css/login.css">
  <title>banque universite</title>
</head>
<body class="body">
    <div class="init">
      <h1>Bienvenue à l'université Cheikh Anta Diop  UCAD</h1>
    </div><br>
    <div class='log' >
      <div class="container" id="container">
      <form id="form" method="post" >
        <label for="username">mon d'utilisateur</label><br>
          <input type="text"class="form-control" name="login"  placeholder="votre mot de passe"><br>
          <label for="username">mot de passe</label><br>
          <input type="text"class="form-control" name="mdp"  placeholder="votre mot de passe"><br><br>
            <button type="submit" class="button" name="connexion">connexion</button>
      </form>
      </div>
    </div>
</body>
</html>
<?php 

session_start();
//require('nav.php');
//require("../php/info.php");

@$connexion=$_POST['connexion'];


if (isset($_POST['connexion']))
{
  $login=$_POST['login'];
  $mdp=$_POST['mdp'];

  require("php/connexion.php");

  $req = $con->prepare("SELECT * FROM etudiant where identifiant = ? and password =? limit 1 ");
  $req->execute(array($login,md5($mdp)));
  $reponse=$req->fetchAll();
  if (count($reponse) == 0)
  {
    $info = "<div class='alert alert-danger'>
            login ou mot de passe incorrect
          </div>";  
      header("Location: login.php");
     $_SESSION["info"]= $info;
  }

  else
  {
    $info = "<div class='alert alert-success'>
    connecté
  </div>";
    $_SESSION["userId"] = $reponse["id"];
    $_SESSION["user"] = $reponse;
    header("Location:index.php");
   
  }

}

    
?>