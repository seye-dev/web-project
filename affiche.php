
<?php
	require("php/commande.php");
	require("php/header.php");
	require("php/connexion.php");
if(isset($_POST))
{
    if(isset($_POST['typePiece']) && !empty($_POST['typePiece']) && isset($_POST['numero']) && !empty($_POST['numero']) && isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['telephone']) && !empty($_POST['telephone']) && isset($_POST['addresse']) && !empty($_POST['addresse']))
    {
    	$typePiece=$_POST['typePiece'];
        $numero=$_POST['numero'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $telephone=$_POST['telephone'];
        $addresse=$_POST['addresse'];
        $req="UPDATE piece set
        $typePiece=?
        nom=?,
        prenom=?,
        telephone=?,
        addresse=? WHERE numero=? ";
        $row = $con->query($req);
        $row->execute();
        //header("Location:index.php");
        
    }
    if(isset($_GET['numero']) && !empty($_GET['numero']))
    {
        $numero=$_GET['numero'];
        $affiche="SELECT * FROM piece WHERE numero= $numero";
        $row = $con->query($affiche);
        $row->execute();
        $etudiant= $row->fetch();

    }
}
?>
     <div class="container">
    <div class="col">
       <div class="card shadow-sm">
       <div class="card-body">
      	<form method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="piece">Type piece</label> 
              <select  name="typePiece" value="<?= $etudiant['typePiece']; ?>"class="form-select" aria-label="Default select example">
                <option selected>selectionner </option>
                <option >CNI</option>
                <option >Carte Etudiant</option>
                <option >passeport</option>
                <option >autre</option>
              </select>
          </div>    
          <div class="form-group">
              <label for="numero">Numero piece</label>
              <input type="text"
                class="form-control"name ="numero" value="<?= $etudiant['numero']; ?>" placeholder="nunero de piece" >
          </div>
          <div class="form-group">
              <label for="nom">nom</label>
              <input type="text"
                class="form-control" value="<?= $etudiant['nom']; ?>"name="nom" placeholder="nom du ramasseur " required>
          </div>
          <div class="form-group">
              <label for="prenom">prenom</label>
              <input type="text"
                class="form-control"value="<?= $etudiant['prenom']; ?>" name="prenom" placeholder="prenom du ramasseur" required>
          </div> 
            <div class="form-group">
              <label for="telephone">telephone</label>
              <input type="number"
                class="form-control"value="<?= $etudiant['telephone']; ?>" name="telephone" placeholder="numero telephene du ramasseur"required>
            </div>
            <div class="form-group">
              <label for="prix">addresse</label>
              <input type="number"
                class="form-control"value="<?= $etudiant['addresse']; ?>" name="addresse"  placeholder="addresse du ramasseur" required>
            </div><br>
           
        </form>
      </div>
    </div>
  </div>