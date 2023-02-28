<?php

include "connexion.php";

$idmdubuttonhidden  = $_GET["id"];

                try {

                    $requete = $BD->prepare("DELETE FROM Livres WHERE `Id`=:ID");
                    $requete->bindValue(':ID', $idmdubuttonhidden);
                    $requete->execute();

                    $obj = $requete->fetch(PDO::FETCH_OBJ);

                    } catch (PDOException $e) {
                        die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
                    }
                        if (!$result) {

                        header("Location: liste-livres.php");
                    } else {

                        echo "Suppression impossible";
                    }
?>
