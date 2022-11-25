<?php
require("commande.php");
$etudiants=getAllUser();
require("connexion.php");

	$re="";

	$re=$_POST["rechercher"];
	$req=$con->prepare("SELECT * FROM etudiant WHERE prenom like '%$re%' ");
	 $req->execute();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.min.js"></script>
    <title>crud</title>
</head>
<body>
<h1>listes des membres</h1>

<form method="post" action="rechercher.php">
  <input type="research" name="rechercher" value="<?php echo($re) ?>">
  <button type="submit" class ="btn btn-success">rechercher</button>
</form>
<table class="table">
  <thead class="table-dark">
  <tr>  
        <th scope="col">id</th>
       <th scope="col">typeId</th>
        <th scope="col">identifian</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">password</th>
        <th scope="col">naissance</th> 
        <th scope="col">lieu</th> 
        <th scope="col">mail</th>
        <th scope="col">telephone</th>
      </tr>
  </thead>
  <tbody>
      <?php foreach($etudiants as $etudiant){?>   
        <tr>
          <td scope="col"><?= $etudiant['id'] ?></td>
          <td scope="col"><?= $etudiant['typeId'] ?></td>
          <td scope="col"><?= $etudiant['identifiant'] ?></td>
          <td scope="col"><?= $etudiant['nom'] ?></td>
          <td scope="col"><?= $etudiant['prenom'] ?></td>
          <td scope="col"><?= $etudiant['password'] ?></td>
          <td scope="col"><?= $etudiant['naissance'] ?></td>
          <td scope="col"><?= $etudiant['lieu'] ?></td>
          <td scope="col"><?= $etudiant['mail'] ?></td>
          <td scope="col"><?= $etudiant['telephone'] ?></td>
          <td> 
        </tr>
        
        <?php } ?> 
              
  
  </tbody>
</table>
    
</body>
</html>
