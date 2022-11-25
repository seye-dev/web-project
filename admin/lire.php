<?php
session_start();
require("connexion.php");
require("commande.php");
if(isset($_POST))
{
     
    if(isset($_GET['id']) && !empty($_GET['id']))
    {
        $id=$_GET['id'];
        $req="SELECT * FROM piece WHERE id= $id";
        $row = $con->query($req);
        $row->execute();

        $etudiant=$row->fetch();
     
    }
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
     <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap.bundle.min.js"></script>
    <title>Piece</title>
</head>
<body>
<form method="post" >
    <label>Type identifiant</label><br>
      <select  name="typePiece"value='<?= $etudiant['typePiece'] ?>' class="form-select" aria-label="Default select example">
                <option selected>selectionner le type de piece</option>
                <option >CNI</option>
                <option >Carte Etudiant</option>
                <option >passeport</option>
                <option >autre</option>
            </select>   
          <label>Numero Identifiant</label><br>
      <input  class="form-control"value='<?= $etudiant['numeroPiece'] ?>'type="text" name="numeroPiece">
      <label> Telephone</label><br>
      <input class="form-control"value='<?= $etudiant['telephone'] ?>'type="number" name="telephone"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
            <a href="spacePiece.php">Close</a>
        </button>
      </div>
    </form>
    </div>
  </div>
</div>
</body>
</html>




