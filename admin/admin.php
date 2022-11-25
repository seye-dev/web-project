<?php

session_start();

require("../verif.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/styl.css">
	<title></title>
</head>
<body>
	<header class= "header">
		<a class="inscrire" href="inscription.html">s'inscrire</a>
		<a class="identifier" href="login.html">s'identifier</a>
		<a class="inscrire" href="piece.php.php">recherche de piece</a>
		<a class="identifier" href="restaurat.php">Etat des restaurats </a>
	</header>
	<div class="form">
		<div>
		</div>
		<form class="inscrire" method="post" >
			<label>LOGIN</label><br>
			<input type="text" name="login"><br>
			<label> PASSWORD</label><br>
			<input type="text" name="mdp"><br>
			<button name="connexion" >connexion</button>

		</form>
	</div>
	<footer>
		travail+discipline=reussite
	</footer>
</body>
</html>
<?php

$admin=getAdmin($mail,$password);


if ($admin) {

	$_SESSION['fgghjhjj']=$admin;

	header("index.php");
}
else{
	echo "probleme de connexion";
}


?>


<!--administrateur-->
<?php 
session_start();

@$typeId=$_POST['typeId'];
@$identifiant=$_POST['identifiant'];
@$nom=$_POST['nom'];
@$prenom=$_POST['prenom'];
@$password=$_POST['password'];
@$naissance=$_POST['naissance'];
@$lieu=$_POST['lieu'];
@$mail=$_POST['mail'];
@$telephone=$_POST['telephone'];
@$envoyer=$_POST['envoyer'];

if($envoyer)
{
require("../php/connexion.php");

    $req1= $con->prepare('INSERT INTO etudiant VALUES(null,:typeId,:identifiant,:nom,:prenom,:password,:naissance,:lieu,:mail,:telephone)');   
    $req1->bindvalue(':typeId',$_POST['typeId'],PDO::PARAM_STR);
    $req1->bindvalue(':identifiant',$_POST['identifiant'],PDO::PARAM_STR);
    $req1->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);        
    $req1->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
    $req1->bindvalue(':password',md5($_POST['password']),PDO::PARAM_STR);  
    $req1->bindvalue(':naissance',$_POST['naissance'],PDO::PARAM_STR);
    $req1->bindvalue(':lieu',$_POST['lieu'],PDO::PARAM_STR);
    $req1->bindvalue(':mail',$_POST['mail'],PDO::PARAM_STR);
    $req1->bindvalue(':telephone',$_POST['telephone'],PDO::PARAM_STR);
    $reponse1=$req1->execute();       

    echo"enregisment effectuer avec succes";

}
?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>affichage</title>
 </head>
 <body>
    <table>
        <tr>
            <td>typeId</td>
            <td><?php echo($typeId); ?></td>
        </tr>
         <tr>
            <td>identifiant</td>
            <td><?php echo($identifiant); ?></td>
        </tr>
        <tr>
            <td>nom</td>
            <td><?php echo($nom); ?></td>
        </tr>
        <tr>
            <td>prenom</td>
            <td><?php echo($prenom); ?></td>
        </tr>
        <tr>
            <td>password</td>
            <td><?php echo($password); ?></td>

        </tr>
        <tr>
            <td>date naissnce</td>
            <td><?php echo($naissance); ?></td>
        </tr>
        <tr>
            <td>lieu naissance</td>
            <td><?php echo($lieu); ?></td>
        </tr>
        <tr>
            <td>mail</td>
            <td><?php echo($mail); ?></td>
        </tr>
        <tr>
            <td>telephone</td>
            <td><?php echo($telephone); ?></td>
        </tr>
    </table>
 
 </body>
 </html>