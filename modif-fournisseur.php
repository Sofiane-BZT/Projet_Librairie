<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Modifier Fournisseur</title>
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

  $requete = $BD->prepare("SELECT * FROM Fournisseur WHERE `Id_fournisseur`=:ID");
  $requete->bindValue(':ID', $ID);
  $requete->execute();

  $obj = $requete->fetch(PDO::FETCH_OBJ);

    } catch (PDOException $e){
      die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
    }
?>

<form class="container w-50 border p-2 bg-light-subtle  rounded-2 mt-5" action="modif-four-traitement.php?id=<?= $ID ?>" method="post">
    <input  type="hidden" name="idmHidden"  value="<?php echo $ID ?> ">
        <p class="mb-7 fs-5 my-3 fs-2">Mofidier fournisseur</p>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Nom_F</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom_fournisseur" value="<?= $obj->Nom_fournisseur?>" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Code_F</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="code_fournisseur" value="<?= $obj->Code_fournisseur?>" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Raison sociale</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="raison_soc_fournisseur" value="<?= $obj->Raison_sociale?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Rue_F</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="rue_fournisseur" value="<?= $obj->Rue_fournisseur?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Code postale</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="code_P_fournisseur" value="<?= $obj->Code_postal?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Localité</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="localite_fournisseur" value="<?= $obj->Localite?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Pays</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="pays_fournisseur" value="<?= $obj->Pays?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Tel_F</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="tel_fournisseur" value="<?= $obj->Tel_fournisseur?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">URL_F</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="url_fournisseur" value="<?= $obj->Url_fournisseur?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Email_F</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="email_fournisseur" value="<?= $obj->Email_fournisseur ?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Fax_F</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="fax_fournisseur" value="<?= $obj->Fax_fournisseur?>" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

          <div class="d-flex p-2 justify-content-center align-items-center">
            <div class="mx-1">
              <button type="submit" class="btn btn-primary">Valider</button>
            </div>
          </div>
      </form>
</body>
</html>