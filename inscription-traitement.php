<?php

include "connexion.php";

            if (isset($_POST["nom-utilisateur"]) AND isset($_POST["prenom-utilisateur"]) AND isset($_POST["mot-de-passe"])
            AND isset($_POST["mot-de-passe-confirm"]) AND isset($_POST["statut"]))
            {

                if (!empty($_POST["nom-utilisateur"]) AND !empty($_POST["prenom-utilisateur"]) AND !empty($_POST["mot-de-passe"]) 
                AND !empty($_POST["mot-de-passe-confirm"]) AND ($_POST["statut"] >= 0))
                {

                    $nom_utilisateur = trim($_POST["nom-utilisateur"]);
                    // echo "$nom_utilisateur<BR>";
                    $prenom_utlisateur = trim($_POST["prenom-utilisateur"]);
                    // echo "$prenom_utlisateur<BR>";
                    $mdp_utilisateur = trim($_POST["mot-de-passe"]); 
                    // echo "$mdp_utilisateur<BR>";
                    $confirm_mdp = trim($_POST["mot-de-passe-confirm"]);
                    // echo "$confirm_mdp <BR>";
                    $statut_personne = trim($_POST["statut"]);

                    if ($mdp_utilisateur == $confirm_mdp ) {

                        try {
                            $requete= $BD->prepare("INSERT INTO `users` (nom, prenom, mdp, confirm_mdp, statut)
                            VALUE (:Nom, :Prenom, :Mdp , :Confirm_mdp, :Statut)");
                            $requete->bindValue(':Nom', $nom_utilisateur);
                            $requete->bindValue(':Prenom', $prenom_utlisateur);
                            $requete->bindValue(':Mdp', $mdp_utilisateur);
                            $requete->bindValue(':Confirm_mdp', $confirm_mdp);
                            $requete->bindValue(':Statut', $statut_personne);
                            $requete->execute();
        
                            }  catch (PDOException $e){
                                die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
                            } 
        
                            echo "<script type=\"text/javascript\">";
                            echo "window.location.href='acceuil.php'";
                            echo "</script>";
                    } else {
                        echo "le mots mot de passe ne sont pas identiques";
                    }
                }
            }
