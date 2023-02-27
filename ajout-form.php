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
?>

<form class="container w-50 border p-2 bg-light-subtle  rounded-2 mt-5" action="ajout-traitement.php" method="post">
     
        <p class="mb-7 fs-5 my-3 fs-2">Ajouter un livre</p>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Nom</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom_livre" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Auteur</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom_auteur" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">editeur</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom_editeur" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Année</label>
            </div>
            <div class="col-sm-9">
            <input type="number" name ="annee_parrution" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Nb_pages</label>
            </div>
            <div class="col-sm-9">
            <input type="number" name="nombre_pages" class="form-control" id="exampleInputPassword1" required>
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