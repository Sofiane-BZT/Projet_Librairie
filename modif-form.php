<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Modifier livre</title>
</head>
<body class="bg-secondary">
<?php
 include "header-connecte.php";
?>
    <!-- ---------------------------FIN HEADER - NAV ------------------------ -->
    <!-- -------------------------------DEBUT HERO------------------------ -->
<?php


include "connexion.php";

$ID = $_GET['id'];

try {

  $requete = $BD->prepare("SELECT * FROM Livres WHERE `Id`=:ID");
  $requete->bindValue(':ID', $ID);
  $requete->execute();

  $obj = $requete->fetch(PDO::FETCH_OBJ);

    } catch (PDOException $e){
      die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
    }
?>

<form class="container w-50 border p-2 bg-light-subtle  rounded-2 mt-5" action="modif-traitement.php?id=<?= $ID ?>" method="post">
      <input type="hidden" name="idmHidden"  value="<?php echo $ID ?> ">
        <p class="mb-7 fs-5 my-3 fs-2">Modifier Livre</p>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Nom</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom_livre" value="<?= $obj->Nom?>" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Auteur</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom_auteur" value="<?= $obj->Auteur?>" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">editeur</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom_editeur" value="<?= $obj->Editeur?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Année</label>
            </div>
            <div class="col-sm-9">
            <input type="number" name ="annee_parrution" value="<?= $obj->Annee?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Nb_pages</label>
            </div>
            <div class="col-sm-9">
            <input type="number" name="nombre_pages" value="<?= $obj->Nb_pages?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

          <div class="d-flex p-2 justify-content-center align-items-center">
            <div class="mx-1">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
          </div>
      </form>
</body>
</html>