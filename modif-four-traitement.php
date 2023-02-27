
<?php

include "connexion.php";
$idmdubuttonhidden  = $_POST["idmHidden"];
      
            if (isset($_POST["nom_fournisseur"]) AND isset($_POST["code_fournisseur"]) AND isset($_POST["raison_soc_fournisseur"])
            AND isset($_POST["rue_fournisseur"]) AND isset($_POST["code_P_fournisseur"]) AND isset($_POST["localite_fournisseur"]) AND isset($_POST["pays_fournisseur"]) AND isset($_POST["tel_fournisseur"])
            AND isset($_POST["url_fournisseur"]) AND isset($_POST["email_fournisseur"]) AND isset($_POST["fax_fournisseur"]))
            {
               
                if (!empty($_POST["nom_fournisseur"]) AND !empty($_POST["code_fournisseur"]) AND !empty($_POST["raison_soc_fournisseur"]) 
                AND !empty($_POST["rue_fournisseur"]) AND !empty($_POST["code_P_fournisseur"]) AND !empty($_POST["localite_fournisseur"]) AND !empty($_POST["pays_fournisseur"]) AND !empty($_POST["tel_fournisseur"])
                AND !empty($_POST["url_fournisseur"]) AND !empty($_POST["email_fournisseur"]) AND !empty($_POST["fax_fournisseur"]))
                {

                    $idmdubuttonhidden = $_POST["idmHidden"];
                    // echo "$idmdubuttonhidden <BR>";
                    $nomFournisseur = $_POST["nom_fournisseur"];
                    // echo "$nomFournisseur<BR>";
                    $codeFournisseur = $_POST["code_fournisseur"];
                    // echo "$codeFournisseur<BR>";
                    $raisonSocFournisseur = $_POST["raison_soc_fournisseur"]; 
                    // echo "$raisonSocFournisseur <BR>";
                    $rueFournisseur = $_POST["rue_fournisseur"]; 
                    // echo "$rueFournisseur<BR>";
                    $codePostalFournisseur = $_POST["code_P_fournisseur"];
                    // echo "$codePostalFournisseur<BR>";
                    $localiteFournisseur = $_POST["localite_fournisseur"]; 
                    // echo "$localiteFournisseur<BR>";
                    $paysFournisseur = $_POST["pays_fournisseur"]; 
                    // echo "$paysFournisseur <BR>";
                    $telFournisseur = $_POST["tel_fournisseur"]; 
                    // echo "$telFournisseur<BR>";
                    $urlFournisseur = $_POST["url_fournisseur"]; 
                    // echo "$urlFournisseur<BR>";
                    $emailFournisseur = $_POST["email_fournisseur"]; 
                    // echo "$emailFournisseur<BR>";
                    $faxFournisseur = $_POST["fax_fournisseur"]; 
                    // echo "$faxFournisseur<BR>";
                    

                    try {
                        $requete= $BD->prepare("UPDATE `Fournisseur` SET Nom_fournisseur=:nom_F, Code_fournisseur=:code_F, Raison_sociale=:Raison_S_F, Rue_fournisseur=:rue_F, Code_postal=:code_P_F, 
                        Localite=:localite_F, Pays=:pays_F, Tel_fournisseur=:tel_F, Url_fournisseur=:url_F, Email_fournisseur=:email_F, Fax_fournisseur=:fax_F WHERE `Id_fournisseur`= $idmdubuttonhidden");
                        $requete->bindValue(':nom_F', $nomFournisseur);
                        $requete->bindValue(':code_F', $codeFournisseur);
                        $requete->bindValue(':Raison_S_F', $raisonSocFournisseur);
                        $requete->bindValue(':rue_F', $rueFournisseur);
                        $requete->bindValue(':code_P_F', $codePostalFournisseur);
                        $requete->bindValue(':localite_F', $localiteFournisseur);
                        $requete->bindValue(':pays_F', $paysFournisseur);
                        $requete->bindValue(':tel_F', $telFournisseur);
                        $requete->bindValue(':url_F', $urlFournisseur);
                        $requete->bindValue(':email_F', $emailFournisseur);
                        $requete->bindValue(':fax_F', $faxFournisseur);
                        $requete->execute();

                        echo "inscription réussi  <BR>";
                        // echo "$nom_utilisateur <BR>";
                        // echo "$prenom_utlisateur <BR>";
                        // echo "$mdp_utilisateur <BR>";
                        // echo "$confirm_mdp <BR>";

                        }  catch (PDOException $e){
                            die("<p> Echec de la connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
                        } 
                        header("Location: liste-fournisseurs.php" );
                }
               }

            
   
 
?>