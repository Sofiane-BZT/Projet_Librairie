<?php

include "connexion.php";
$idmdubuttonhidden  = $_POST["idmHidden"];

         if (isset($_POST["nom_livre"]) AND isset($_POST["nom_auteur"]) AND isset($_POST["nom_editeur"])
            AND isset($_POST["annee_parrution"]) AND isset($_POST["nombre_pages"]))
            {

                if (!empty($_POST["nom_livre"]) AND !empty($_POST["nom_auteur"]) AND !empty($_POST["nom_editeur"]) 
                AND !empty($_POST["annee_parrution"]) AND !empty($_POST["nombre_pages"]))
                {
                    $idmdubuttonhidden = $_POST["idmHidden"];
                    // echo "$idmdubuttonhidden<BR>";
                    $nom = $_POST["nom_livre"];
                    // echo "$nom<BR>";
                    $auteur = $_POST["nom_auteur"];
                    // echo "$auteur<BR>";
                    $editeur = $_POST["nom_editeur"]; 
                    // echo "$editeur<BR>";
                    $annee = $_POST["annee_parrution"];
                    // echo "$annee<BR>";
                    $nbPages = $_POST["nombre_pages"]; 
                    // echo "$nbPages<BR>";

                    try {
                        $requete= $BD->prepare("UPDATE `Livres` SET Nom=:nom, Auteur=:auteur, Editeur=:editeur, Annee=:annee, Nb_pages=:nb_pages WHERE `Id`= $idmdubuttonhidden");
                        $requete->bindValue(':nom', $nom);
                        $requete->bindValue(':auteur', $auteur);
                        $requete->bindValue(':editeur', $editeur );
                        $requete->bindValue(':annee', $annee);
                        $requete->bindValue(':nb_pages', $nbPages);
                        $requete->execute();

                    }  catch (PDOException $e){
                        die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
                    } 
                        header("Location: liste-livres.php");
                }
               }