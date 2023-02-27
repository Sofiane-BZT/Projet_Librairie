<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Ajouter livre</title>
</head>
<body class="bg-secondary">


<?php
include "header-connecte.php";
include "connexion.php";
?>

<form class="container w-50 border p-2 bg-light-subtle  rounded-2 mt-5" action="rech-livre-ed-trait.php" method="post">
     
        <p class="mb-7 fs-5 my-3 fs-2">Rechercher livre par éditeur</p>

        
        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Editeur du livre</label>
            </div>
            <div class="col-sm-9 d-flex">
            <select type="text" name ="nom_editeur" class="form-control " id="exampleInputPassword1" required>
            </div>

           <?php
    $requete = $BD->prepare("SELECT DISTINCT Editeur
 FROM Livres");
        try{
           
            $requete->execute();
          
        } catch (PDOException $e){

        die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
        }
             while($obj = $requete->fetch(PDO::FETCH_OBJ)){
        ?>
             <option value="<?=$obj->Editeur ?>"><?=$obj->Editeur ?></option>;
        <?php
             }
?>
        </select>

        <div class="p-2 justify-content-center align-items-center">
            <div class="mx-1">
              <button type="submit" class="btn btn-primary">Valider</button>
            </div>
          </div>
        </div>
      </form>
 </body>
</html>