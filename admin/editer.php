<?php 
            include 'connexion.php';
            $typeId = $_POST['typeId']; 
            $identifiant = $_POST['identifiant'];
            $nom = $_POST['nom'];  
            $prenom = $_POST['prenom']; 
            $password = $_POST['password']; 
            $naissance = $_POST['naissance']; 
            $lieu = $_POST['lieu'];
            $mail = $_POST['mail']; 
            $telephone = $_POST['telephone']; 
            $id = $_POST['id']; 

            // requete pour modifier
            $sql = 'UPDATE etudiant SET typeId=:typeId,identifiant=:identifiant, prenom = :prenom, nom = :nom,password=:password,naissance=:naissance,lieu=:lieu,mail=:mail, telephone = :telephone WHERE id = :id';
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":typeId", $typeId);
            $stmt->bindParam(":identifiant", $identifiant);

            $stmt->bindParam(":prenom", $prenom);
            $stmt->bindParam(":nom", $nom);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":naissance", $naissance);
            $stmt->bindParam(":lieu", $lieu);
            $stmt->bindParam(":mail", $mail);
            $stmt->bindParam(":telephone", $telephone);
             $update=$stmt->execute();
            if($update)
            {
                header("Location: index.php");
                echo "succes";
            }else
            {
                $message = "error";
            }
       