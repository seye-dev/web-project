
<?php
session_start();
require("info.php");
require("connexion.php");
if(!empty($_POST['typeId']) and !empty($_POST['identifiant']) and !empty($_POST['identifiant']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['password']) and !empty($_POST['naissance']) and !empty($_POST['lieu']) and !empty($_POST['mail']) and !empty($_POST['telephone']))
	{
		/*if(isset($_POST['identifiant']) && !empty($_POST['identifiant']))
		{ 	
		$identifiant=$_POST['identifiant'];
		$req="SELECT * FROM etudiant WHERE identifiant=$identifiant";
		$row=$con->query($req);
		if(count(array($row))!=0)
		{
			echo "l'etudiant deja enregistrer";
		}
		}*/
		/*else
		{*/

			$req= $con->prepare('INSERT INTO etudiant VALUES(null,:typeId,:identifiant,:nom,:prenom,:password,:naissance,:lieu,:mail,:telephone)');   
			$req->bindvalue(':typeId',$_POST['typeId'],PDO::PARAM_STR);
			$req->bindvalue(':identifiant',$_POST['identifiant'],PDO::PARAM_STR);
			$req->bindvalue(':nom',$_POST['nom'],PDO::PARAM_STR);        
			$req->bindvalue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
			$req->bindvalue(':password',md5($_POST['password']),PDO::PARAM_STR);  
			$req->bindvalue(':naissance',$_POST['naissance'],PDO::PARAM_STR);
			$req->bindvalue(':lieu',$_POST['lieu'],PDO::PARAM_STR);
			$req->bindvalue(':mail',$_POST['mail'],PDO::PARAM_STR);
			$req->bindvalue(':telephone',$_POST['telephone'],PDO::PARAM_STR);
			$reponse1=$req->execute(); 
			 echo "succes";
			 header('Location:../index.php');

			//}
	
	}
	else
	{
		echo"veuillez remplir les champs";
	}


?>
