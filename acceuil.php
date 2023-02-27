<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <title>Acceuil Librairie</title>
</head>
<body class="bg-secondary">

<?php
 include "header.php";
?>
    <h1 class="container d-flex justify-content-center py-5">Consultation</h1>
      <form class="container w-50 border p-2 bg-light-subtle  rounded-2 mt-5" action="authentif-traitement.php" method="post">
        <p class="mb-7 fs-5 text">Veuillez vous authentifiez</p>
        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Nom</label>
            </div>
            <div class="col-sm-9">
            <input type="texte" name="login[]" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

        <div class="row g-2 align-items-cente my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-sm-9">
            <input type="password" name="login[]" class="form-control " id="exampleInputPassword1" required>
            </div>
        </div>

       <div class='invisible d-flex p-2 justify-content-center align-items-center' name='msg_pb_connex'> <p>Connexion impossible </p></div>
       
       <div class='d-flex p-2 justify-content-center align-items-center'>

            <div class="mx-1">
              <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
            <div class="mx-1"> 
              <a class="btn btn-outline-primary" href="inscription.php">S'inscrire</a>
            </div>
          </div>
      </form>
</body>
</html>