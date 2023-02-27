<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <title>Inscription nouvelle utilisateur</title>
</head>
<body class="bg-secondary">

<?php
 include "header.php";
?>

    <h1 class="container d-flex justify-content-center py-5">Inscription</h1>
      <form class="container w-50 border p-2 bg-light-subtle  rounded-2 mt-3" action="inscription-traitement.php" method="post">
        <p class="mb-7 fs-5 text">Formulaire d'inscription</p>

        <div class="row g-2 align-items-center">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Nom</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="nom-utilisateur" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Prenom</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name ="prenom-utilisateur" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>
        <div class="row g-2 align-items-center  my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">password</label>
            </div>
            <div class="col-sm-9">
            <input type="password" name ="mot-de-passe" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>
        <div class="row g-2 align-items-center  my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">confirmer pwd</label>
            </div>
            <div class="col-sm-9">
            <input type="password" name="mot-de-passe-confirm" class="form-control" id="exampleInputPassword1" required>
            </div>
        </div>
        <div class="form-check form-check-inline mt-3  my-1">
              <input class="form-check-input" type="radio" name="statut" id="inlineRadio1" value="0" required>
              <label class="form-check-label" for="inlineRadio1">Utilisateur</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="statut" id="inlineRadio2" value="1" required>
              <label class="form-check-label" for="inlineRadio2">Administrateur</label>
        </div>
        <div>
          <button type="submit" class="btn btn-primary mt-3" value="Valider">Valider</button>
        </div>
      </form>
 </body>
</html>