<?php
        try {

            $BD = new PDO('mysql:host=localhost;dbname=myDB3', 'root', '');
            $BD->query("SET NAMES 'utf8'");
            $BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            }
            catch (PDOException $e){
            die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
        } 
?>