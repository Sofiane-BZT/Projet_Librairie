<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Header conecté</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="http://localhost/Projet_Librairie_V2_Bootstrap/Acceuil-connecte.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor " class="bi bi-book ms-4 text-white mx-3" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav w-75">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Acceuil-connecte.php">Acceuil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Livres
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="liste-livres.php">Afficher liste livres</a></a></li>
            <?php if($_SESSION['statut'] != 0){
               echo"<li><a class='dropdown-item' href='ajout-form.php'>Ajouter un livre</a></li>";
            }
            ?>
            <li><a class="dropdown-item" href="form-rech-livre-aut.php">Rech par auteur </a></li>
            <li><a class="dropdown-item" href="form-rech-livre-ed.php">Rech par editeur</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fournisseurs
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="liste-fournisseurs.php">Afficher liste fournisseurs</a></a></li>
           
           
           <?php if($_SESSION['statut'] != 0){
           
        echo "<li><a class='dropdown-item' href='ajout-fournisseur.php'>Ajouter un fournisseur</a></li>";
           }
           ?>
            <li><a class="dropdown-item" href="form-fournisseur-filtre.php">Liste filtrée</a></li>
          </ul>
        </li>
        <div class ="d-flex align-items-center justify-content-end">
        <div class="nav-item d-flex align-items-center text-white mx-3">
        <?php
        echo  $_SESSION['nom']." ". $_SESSION['prenom'];
        ?>
       </div>
       <a href="deconnex-traitement.php" class ="text-dark mx-3" >Déconnexion</a>
      </ul>
      </div>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>