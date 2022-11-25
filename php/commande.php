<?php 
session_start();

function rechercher($numeroPiece)
{
	if (require("connexion.php")) 
	{
		$req=$con->prepare("SELECT * FROM piece where numero=? limit=1");
		$req->execute(array($numeroPiece));
		$reponse=$req->fetchAll();

		if (count($reponse) == 0)
		{
			echo"piece n'est pas encore vue";
		}
		
		else
		{
		
			echo"votre a ete ramacher";
		}
	
	}
}
function affichepiece()
{
	if ("connexion.php")
	 {
		$req=$con->prepare("SELECT * FROM piece");
		$req->execute();
	}
}

function afficheEtudiant()
{
	require("../php/connexion.php");
 $req= $con->prepare("SELECT * FROM etudinat");
 $req->execute();
 
}

 ?>