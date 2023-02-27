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

<form class="container w-50 p-2 bg-light-subtle rounded-top-2 mt-5" action="rech-four-rais-s-trait.php" method="post">
     
        <p class="mb-7 fs-5 my-3 fs-2">Rechercher fournisseur</p>

        <div class="row g-2 align-items-center my-1">
            <div class="col-sm-3">
              <label for="inputPassword6" class="col-form-label">Raison sociale F</label>
            </div>
            <div class="col-sm-9 d-flex">
            <select type="text" name ="raison_soc_f" class="form-control" id="exampleInputPassword1" required>
                
<?php
        try{
            $requete = $BD->prepare("SELECT DISTINCT Raison_sociale
            FROM Fournisseur");
            $requete->execute();

             while($obj = $requete->fetch(PDO::FETCH_OBJ)){
        ?>
             <option value="<?=$obj->Raison_sociale ?>"><?=$obj->Raison_sociale ?></option>;
        <?php
             }
            } catch (PDOException $e){

            die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
            }
?>
    </select>
    <div class="p-2 justify-content-center align-items-center">
                <div class="mx-1">
              <button type="submit" class="btn btn-primary">Valider</button>
            </div>
          </div>
            </div>
          </div>
        </div>
      </form>




      
      <form class="container w-50 p-2 bg-light-subtle" action="rech-four-local-trait.php" method="post">

     <div class="row g-2 align-items-center my-1">
         <div class="col-sm-3">
           <label for="inputPassword6" class="col-form-label">Localité F</label>
         </div>
         <div class="col-sm-9 d-flex">
         <select type="text" name ="localite_du_f" class="form-control" id="exampleInputPassword1" required>
 
<?php
     try{
         $requete = $BD->prepare("SELECT DISTINCT Localite
         FROM Fournisseur");
         $requete->execute();

          while($obj = $requete->fetch(PDO::FETCH_OBJ)){
     ?>
          <option value="<?=$obj->Localite ?>"><?=$obj->Localite ?></option>;
     <?php
          }
         } catch (PDOException $e){

         die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
         }
?>
 </select>
 <div class="p-2 justify-content-center align-items-center">
                     <div class="mx-1">
                <button type="submit" class="btn btn-primary">Valider</button>
                </div>
         </div>
         </div> 
            </div>
     </div>
   </form>

   <form class="container w-50 p-2 bg-light-subtle rounded-bottom-2" action="rech-four-pays-trait.php" method="post">

     <div class="row g-2 align-items-center my-1">
         <div class="col-sm-3">
           <label for="inputPassword6" class="col-form-label">Pays F</label>
         </div>
         <div class="col-sm-9 d-flex">
         <select type="text" name ="pays_du_f" class="form-control" id="exampleInputPassword1" required>
 
<?php
     try{
         $requete = $BD->prepare("SELECT DISTINCT Pays
         FROM Fournisseur");
         $requete->execute();

          while($obj = $requete->fetch(PDO::FETCH_OBJ)){
     ?>
          <option value="<?=$obj->Pays ?>"><?=$obj->Pays?></option>;
     <?php
          }
         } catch (PDOException $e){

         die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
         }
?>
 </select>
 <div class="p-2 justify-content-center align-items-center">
             <div class="mx-1">
           <button type="submit" class="btn btn-primary">Valider</button>
         </div>
         </div>
       </div>
     </div>
   </form>
 </body>
</html>