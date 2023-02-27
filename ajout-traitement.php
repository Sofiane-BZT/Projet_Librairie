<?php

include "connexion.php";

      
            if (isset($_POST["nom_livre"]) AND isset($_POST["nom_auteur"]) AND isset($_POST["nom_editeur"])
            AND isset($_POST["annee_parrution"]) AND isset($_POST["nombre_pages"]))
            {
               
                if (!empty($_POST["nom_livre"]) AND !empty($_POST["nom_auteur"]) AND !empty($_POST["nom_editeur"]) 
                AND !empty($_POST["annee_parrution"]) AND !empty($_POST["nombre_pages"]))
                {

                    $nom = $_POST["nom_livre"];
                    echo "$nom<BR>";
                    $auteur = $_POST["nom_auteur"];
                    echo "$auteur<BR>";
                    $editeur = $_POST["nom_editeur"]; 
                    echo "$editeur<BR>";
                    $annee = $_POST["annee_parrution"];
                    echo "$annee<BR>";
                    $nbPages = $_POST["nombre_pages"]; 
                    echo "$nbPages<BR>";

                    try {
                        $requete= $BD->prepare("INSERT INTO `Livres` (Nom, Auteur, Editeur, Annee, Nb_pages )
                        VALUE (:nom_livre, :auteur_livre, :editeur_livre , :annee_livre, :nombre_page_livre)");
                        $requete->bindValue(':nom_livre', $nom);
                        $requete->bindValue(':auteur_livre', $auteur);
                        $requete->bindValue(':editeur_livre', $editeur);
                        $requete->bindValue(':annee_livre', $annee);
                        $requete->bindValue(':nombre_page_livre', $nbPages);
                        $requete->execute();

                        echo "inscription réussi  <BR>";
                        // echo "$nom_utilisateur <BR>";
                        // echo "$prenom_utlisateur <BR>";
                        // echo "$mdp_utilisateur <BR>";
                        // echo "$confirm_mdp <BR>";

                        }  catch (PDOException $e){
                            die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
                        } 
                }
               }

            header("Location: liste-livres.php" );
            echo "<script type=\"text/javascript\">";
            echo "window.history.back();";
            echo "</script>";
 
?>