<?php


function getAllUser()
{
    try
    {
        require("connexion.php");

        $req= "SELECT * FROM etudiant";
        $row=$con->query($req);
        return $row;
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }

   
}

function getPiece()
{
    try
    {
        require("connexion.php");

        $req= "SELECT * FROM piece";
        $row=$con->query($req);
        return $row;
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }

   
}
?>


