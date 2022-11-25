<?php
session_start();
require("php/connexion.php");

$message1="";
if(!empty($_POST['typePiece']) and !empty($_POST['numeroPiece']) and !empty($_POST['telephone']))
{
          
    $req= $con->prepare('INSERT INTO piece VALUES(null,:typePiece,:numeroPiece,:telephone)');   

     $req->bindvalue('typePiece',$_POST['typePiece'],PDO::PARAM_STR);
     $req->bindvalue('numeroPiece',$_POST['numeroPiece'],PDO::PARAM_STR);
     $req->bindvalue('telephone',$_POST['telephone'],PDO::PARAM_STR);
     
     $req= $req->execute();
     if ($req) 
     {

             $message1 = "<div class='alert alert-success'>
                        donnes entregistrer avec succe
                     </div>";

        $_SESSION['message1'] = $message1;
        header("Location: declaration.php");
     }
     else
     {
        $message1 = "<div class='alert alert-danger'>
                        erreur
                     </div>";
          $_SESSION['message1'] = $message1;
          header("Location:index.php");

     }
}
else
{
      $message1 = "<div class='alert alert-danger'>
                    Veuillez remplir les champs 
                 </div>";
                 $_SESSION['message1'] = $message1;
                header("Location:index.php");

}

?>

