<?php 
            include 'connexion.php';
            $typePiece = $_POST['typePiece']; 
            $numeroPiece = $_POST['numeroPiece'];
            $telephone = $_POST['telephone']; 
            $id = $_POST['id']; 

            // requete pour modifier
            $sql = 'UPDATE etudiant SET typePiece=:typePiece,numeroPiece=:numeroPiece,telephone = :telephone WHERE id = :id';
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":typePiece", $typePiece);
            $stmt->bindParam(":numeroPiece", $numeroPiece);
            $stmt->bindParam(":telephone", $telephone);
             $update=$stmt->execute();
            if($update)
            {
                header("Location: spacePiece.php");
                echo "succes";
            }else
            {
                $message = "error";
            }
       