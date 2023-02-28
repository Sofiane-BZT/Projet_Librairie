<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <title>Affichage Liste Fournisseurs</title>
</head>
<body class="bg-secondary">


<?php
include "header-connecte.php";
include "connexion.php";
?>

<?php
$paysDuFournisseur = $_POST["pays_du_f"]
?>

<div class="table-responsive-md w-90 border-primary bg-primary-subtle m-5 rounded">
  <table class="table">

<tbody  >
        <tr>
            <th scope=col>ID</th>
            <th scope=col>Nom</th>
            <th scope=col>Code</th> 
            <th scope=col>Raison_S</th>
            <th scope=col>Rue</th>
            <th scope=col>CP</th>
            <th scope=col>Localité</th>
            <th scope=col>Pays</th>
            <th scope=col>Tél</th>
            <th scope=col>Url</th>
            <th scope=col>E-mail</th>
            <th scope=col>Fax</th>
        </tr><BR>
      <?php

            try{
                $requete = $BD->prepare("SELECT * FROM Fournisseur WHERE `Pays`=:paysDuFournisseur");
                $requete->bindValue(':paysDuFournisseur',$paysDuFournisseur);
                $requete->execute();

                  while($obj = $requete->fetch(PDO::FETCH_OBJ)){

      ?>
                  <tr>
                     <th scope=row><?= $obj->Id_fournisseur ?></th>
                     <td><?=$obj->Nom_fournisseur ?></td>
                      <td><?=$obj->Code_fournisseur ?></td>
                      <td><?=$obj->Raison_sociale ?></td>
                      <td><?=$obj->Rue_fournisseur ?></td>
                      <td><?=$obj->Code_postal ?></td>
                      <td><?=$obj->Localite ?></td>
                      <td><?=$obj->Pays ?></td>
                      <td><?=$obj->Tel_fournisseur ?></td>
                      <td><?=$obj->Url_fournisseur ?></td>
                      <td><?=$obj->Email_fournisseur?></td>
                      <td><?=$obj->Fax_fournisseur ?></td>
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