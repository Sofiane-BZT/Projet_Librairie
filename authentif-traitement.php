
<?php
session_start();
include "connexion.php";

            if (isset($_POST["login"]) AND isset($_POST["login"]))
            {
                if (!empty($_POST["login"]) AND !empty($_POST["login"]))
                {

                    $nameUtilisateur = trim(($_POST["login"][0]));
                    $passwordUtilisateur =trim(($_POST["login"][1]));

                    try{
                        $requete = $BD->prepare("SELECT * FROM users WHERE nom=:nomutilisateur And mdp=:mdputilisateur");
                        $requete->bindValue(':nomutilisateur', $nameUtilisateur);
                        $requete->bindValue(':mdputilisateur', $passwordUtilisateur);
                        $requete->execute();

                        $obj = $requete->fetch(PDO::FETCH_OBJ);

                    } catch (PDOException $e){
                        die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
                    } 

                    if ((strcmp($nameUtilisateur,trim($obj->nom)) == 0 ) && strcmp($passwordUtilisateur,trim($obj->mdp)) == 0){


                    $_SESSION['nom'] = $obj->nom;
                    $_SESSION['prenom']= $obj->prenom;
                    $_SESSION['statut']= $obj->statut;

                    header("Location: Acceuil-connecte.php");

                    } else {

                        echo "utilisateur introuvable veuillez essayer de nouveau ou inscrivez vous";
                    }
                }
            }
?>






