 <?php 
 session_start();
//if(!isset($_SESSION['useradmin']))
{ 
 // header('location:login.php');
}
require("nav.php");
require("commande.php");
$etudiants=getPiece();

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

<!-- Button  modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ajouter un nouveau piece
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORMULAIRE DE RECHANGEMENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form method="post" action="ajouter.php">
    <label>Type identifiant</label><br>
      <select  name="typeId" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option >CNI</option>
                <option >Carte Etudiant</option>
                <option >passeport</option>
                <option >autre</option>
            </select>   
          <label>Numero Identifiant</label><br>
      <input  class="form-control"type="text" name="identifiant">
      <label> Telephone</label><br>
      <input class="form-control"type="number" name="telephone"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="envoyer" class="btn btn-success">enregistrer</button>
      </div>
    </form>
    </div>
  </div>
</div>

<table class="table">
  <thead class="table-dark">
  <tr>  
        <th scope="col">id</th>
       <th scope="col">typeId</th>
        <th scope="col">numero de Piece</th>
        <th scope="col">telephone</th>
        <th scope="col" colspan="3">operation</th>
      </tr>
  </thead>
  <tbody>
      <?php foreach($etudiants as $etudiant){?>   
        <tr>
          <td scope="col"><?= $etudiant['id'] ?></td>
          <td scope="col"><?= $etudiant['typePiece'] ?></td>
          <td scope="col"><?= $etudiant['numeroPiece'] ?></td>
          <td scope="col"><?= $etudiant['telephone'] ?></td>
          <td> 
            <button class="btn btn-success"name="envoyer" type="submit">
            <a href="lire.php?id=<?= $etudiant["id"]?>"> read </a> 
             </button>
          </td>
          <td> 
            <button class="btn btn-warning"name="envoyer" type="submit">
            <a href="mj.php?id=<?= $etudiant["id"]?>"> update </a> 
             </button>
          </td>
          <td>
            <button class="btn btn-danger"name="envoyer" type="submit">
            <a href="sup.php?id=<?= $etudiant["id"]?>"> delete</a></td>
          </button>
        </tr>
        
        <?php } ?> 
              
  
  </tbody>
</table>
    
</body>
</html>
