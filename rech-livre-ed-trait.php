<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <title>Livres Selon Auteur</title>
</head>
<body class="bg-secondary">


<?php
include "header-connecte.php";
include "connexion.php";
?>

<?php
$editeurDuLivre = $_POST["nom_editeur"]
?>

<div class="table-responsive-md w-90 border-primary bg-primary-subtle m-5 rounded">
  <table class="table">

<tbody  >
        <tr>
            <th scope=col>ID</th>
            <th scope=col>Nom</th>
            <th scope=col>Auteur</th> 
            <th scope=col>Editeur</th>
            <th scope=col>Année</th>
            <th scope=col>Nb_pages</th>
            
        </tr><BR>
      <?php

            try{
                  $requete = $BD->prepare("SELECT * FROM Livres WHERE `Editeur`=:editeur_Du_Livre");
                  $requete->bindValue(':editeur_Du_Livre', $editeurDuLivre);
                  $requete->execute();

                  while($obj = $requete->fetch(PDO::FETCH_OBJ)){
      ?>
                  <tr>
                     <th scope=row><?=$obj->Id?></th>
                      <td><?=$obj->Nom ?></td>
                      <td><?=$obj->Auteur ?></td>
                      <td><?=$obj->Editeur ?></td>
                      <td><?=$obj->Annee ?></td>
                      <td><?=$obj->Nb_pages ?></td>
                     
      <?php
                }
            } catch (PDOException $e){

              die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");

            }
      ?>


            </tbody> 
            </table>
          </div>
        </body>
      </html>