<?php
    try{
	    $bdd = new PDO('mysql:host=localhost;dbname=b-e-p-form;charset=utf8', 'root', '');
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();

    if(isset($_POST['submit'])){
        $mandataire_id = $_SESSION['id'];
		$mail = $_SESSION['mail'];
        $typeDeMandat = $_POST['typeDeMandat'];
        $nMandat = $_POST['nMandat'];
        $nDeReference = $_POST['nDeReference'];
        $natureDuBien = $_POST['natureDuBien'];
        $adressseDuBien = $_POST['adressseDuBien'];
        $prixVenteNet = $_POST['prixVenteNet'];
        $honorairesTTC = $_POST['honorairesTTC'];
        $chargeHonoraire = $_POST['chargeHonoraire'];
        $gesteCommercial = $_POST['gesteCommercial'];
        $nomVendeur = $_POST['nomVendeur'];
        $prenomVendeur = $_POST['prenomVendeur'];
        $adresseVendeur = $_POST['adresseVendeur'];
        $nomVendeur2 = $_POST['nomVendeur2'];
        $prenomVendeur2 = $_POST['prenomVendeur2'];
        $adresseVendeur2 = $_POST['adresseVendeur2'];
        $typeSocieteVendeur = $_POST['typeSocieteVendeur'];
        $nomSocieteVendeur = $_POST['nomSocieteVendeur'];
        $nomRepresentantVendeur = $_POST['nomRepresentantVendeur'];
        $nomNotaireVendeur = $_POST['nomNotaireVendeur'];
        $adresseNotaireVendeur = $_POST['adresseNotaireVendeur'];
        $nomAcquereur = $_POST['nomAcquereur'];
        $prenomAcquereur = $_POST['prenomAcquereur'];
        $adresseAcquereur = $_POST['adresseAcquereur'];
        $typeSocieteAcquereur = $_POST['typeSocieteAcquereur'];
        $nomSocieteAcquereur = $_POST['nomSocieteAcquereur'];
        $nomRepresentantAcquereur = $_POST['nomRepresentantAcquereur'];
        $nomNotaireAcquereur = $_POST['nomNotaireAcquereur'];
        $adresseNotaireAcquereur = $_POST['adresseNotaireAcquereur'];
        
        if($nomSocieteVendeur == ""){
            $nomSocieteVendeur = "aucun";
            $nomRepresentantVendeur = "aucun";

            if($nomSocieteAcquereur == ""){
                $nomSocieteAcquereur = "aucun";
                $nomRepresentantAcquereur = "aucun";

                $insertmbr = $bdd->prepare("INSERT INTO superData(mandataire_id, mail, typeDeMandat, nMandat, nDeReference, natureDuBien, adressseDuBien, prixVenteNet, honorairesTTC, chargeHonoraire, gesteCommercial, nomVendeur, prenomVendeur, adresseVendeur, nomVendeur2, prenomVendeur2, adresseVendeur2, typeSocieteVendeur, nomSocieteVendeur, nomRepresentantVendeur, nomNotaireVendeur, adresseNotaireVendeur, nomAcquereur, prenomAcquereur, adresseAcquereur, typeSocieteAcquereur, nomSocieteAcquereur, nomRepresentantAcquereur, nomNotaireAcquereur, adresseNotaireAcquereur) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $insertmbr->execute(array($mandataire_id, $mail, $typeDeMandat, $nMandat, $nDeReference, $natureDuBien, $adressseDuBien, $prixVenteNet, $honorairesTTC, $chargeHonoraire, $gesteCommercial, $nomVendeur, $prenomVendeur, $adresseVendeur, $nomVendeur2, $prenomVendeur2, $adresseVendeur2, $typeSocieteVendeur, $nomSocieteVendeur, $nomRepresentantVendeur, $nomNotaireVendeur, $adresseNotaireVendeur, $nomAcquereur, $prenomAcquereur, $adresseAcquereur, $typeSocieteAcquereur, $nomSocieteAcquereur, $nomRepresentantAcquereur, $nomNotaireAcquereur, $adresseNotaireAcquereur));
            
            }else{
                $insertmbr = $bdd->prepare("INSERT INTO superData(mandataire_id, mail, typeDeMandat, nMandat, nDeReference, natureDuBien, adressseDuBien, prixVenteNet, honorairesTTC, chargeHonoraire, gesteCommercial, nomVendeur, prenomVendeur, adresseVendeur, nomVendeur2, prenomVendeur2, adresseVendeur2, typeSocieteVendeur, nomSocieteVendeur, nomRepresentantVendeur, nomNotaireVendeur, adresseNotaireVendeur, nomAcquereur, prenomAcquereur, adresseAcquereur, typeSocieteAcquereur, nomSocieteAcquereur, nomRepresentantAcquereur, nomNotaireAcquereur, adresseNotaireAcquereur) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $insertmbr->execute(array($mandataire_id, $mail, $typeDeMandat, $nMandat, $nDeReference, $natureDuBien, $adressseDuBien, $prixVenteNet, $honorairesTTC, $chargeHonoraire, $gesteCommercial, $nomVendeur, $prenomVendeur, $adresseVendeur, $nomVendeur2, $prenomVendeur2, $adresseVendeur2, $typeSocieteVendeur, $nomSocieteVendeur, $nomRepresentantVendeur, $nomNotaireVendeur, $adresseNotaireVendeur, $nomAcquereur, $prenomAcquereur, $adresseAcquereur, $typeSocieteAcquereur, $nomSocieteAcquereur, $nomRepresentantAcquereur, $nomNotaireAcquereur, $adresseNotaireAcquereur));
            
            }
        }else{
            $insertmbr = $bdd->prepare("INSERT INTO superData(mandataire_id, mail, typeDeMandat, nMandat, nDeReference, natureDuBien, adressseDuBien, prixVenteNet, honorairesTTC, chargeHonoraire, gesteCommercial, nomVendeur, prenomVendeur, adresseVendeur, nomVendeur2, prenomVendeur2, adresseVendeur2, typeSocieteVendeur, nomSocieteVendeur, nomRepresentantVendeur, nomNotaireVendeur, adresseNotaireVendeur, nomAcquereur, prenomAcquereur, adresseAcquereur, typeSocieteAcquereur, nomSocieteAcquereur, nomRepresentantAcquereur, nomNotaireAcquereur, adresseNotaireAcquereur) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $insertmbr->execute(array($mandataire_id, $mail, $typeDeMandat, $nMandat, $nDeReference, $natureDuBien, $adressseDuBien, $prixVenteNet, $honorairesTTC, $chargeHonoraire, $gesteCommercial, $nomVendeur, $prenomVendeur, $adresseVendeur, $nomVendeur2, $prenomVendeur2, $adresseVendeur2, $typeSocieteVendeur, $nomSocieteVendeur, $nomRepresentantVendeur, $nomNotaireVendeur, $adresseNotaireVendeur, $nomAcquereur, $prenomAcquereur, $adresseAcquereur, $typeSocieteAcquereur, $nomSocieteAcquereur, $nomRepresentantAcquereur, $nomNotaireAcquereur, $adresseNotaireAcquereur));    
        
        }

        // $insertmbr = $bdd->prepare("INSERT INTO superData(mandataire_id, mail, typeDeMandat, nMandat, nDeReference, natureDuBien, adressseDuBien, prixVenteNet, honorairesTTC, chargeHonoraire, gesteCommercial, nomVendeur, prenomVendeur, adresseVendeur, nomVendeur2, prenomVendeur2, adresseVendeur2, typeSocieteVendeur, nomSocieteVendeur, nomRepresentantVendeur, nomNotaireVendeur, adresseNotaireVendeur, nomAcquereur, prenomAcquereur, adresseAcquereur, typeSocieteAcquereur, nomSocieteAcquereur, nomRepresentantAcquereur, nomNotaireAcquereur, adresseNotaireAcquereur) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        // $insertmbr->execute(array($mandataire_id, $mail, $typeDeMandat, $nMandat, $nDeReference, $natureDuBien, $adressseDuBien, $prixVenteNet, $honorairesTTC, $chargeHonoraire, $gesteCommercial, $nomVendeur, $prenomVendeur, $adresseVendeur, $nomVendeur2, $prenomVendeur2, $adresseVendeur2, $typeSocieteVendeur, $nomSocieteVendeur, $nomRepresentantVendeur, $nomNotaireVendeur, $adresseNotaireVendeur, $nomAcquereur, $prenomAcquereur, $adresseAcquereur, $typeSocieteAcquereur, $nomSocieteAcquereur, $nomRepresentantAcquereur, $nomNotaireAcquereur, $adresseNotaireAcquereur));    
        
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>test</title>
    </head>
    <body>
        <?php echo $_SESSION['nom']; ?><br/>
        <a href="deco.php">  Se déconnecter</a><br/>
        <a href="list.php">  liste</a><br/>
        <form action="formData.php" method="post">
            <input type="text" readonly value="<?php echo $_SESSION['mail']; ?>">
            <select type="text" name="typeDeMandat" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>Vente</option>
                <option>Recherche</option>
                <option>Location</option>
                <option>Estimation</option>
                <option>Expertise</option>
            </select>
            <input type="number" placeholder="nMandat" name="nMandat" required>
            <input type="number" placeholder="nDeReference" name="nDeReference" required>
            <select type="text" name="natureDuBien" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>Appartement</option>
                <option>Autre</option>
                <option>Bureau / Commerce</option>
                <option>Chalet</option>
                <option>Château</option>
                <option>Ferme</option>
                <option>Hôtel particulier</option>
                <option>Immeuble</option>
                <option>Loft / Atelier</option>
                <option>Maison</option>
                <option>Parking</option>
                <option>Propriété</option>
                <option>Terrain</option>
                <option>Viager</option>
                <option>Villa</option>
            </select>
            <input type="text" placeholder="adressseDuBien" name="adressseDuBien" required>
            <input type="number" placeholder="prixVenteNet" name="prixVenteNet" required>
            <input type="number" placeholder="honorairesTTC" name="honorairesTTC" required>
            <select type="text" name="chargeHonoraire" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>Vendeur</option>
                <option>Acquéreur</option>
                <option>50% Vendeur - 50% Acquéreur</option>
            </select>
            <input type="number" placeholder="gesteCommercial" name="gesteCommercial" required>
            <input type="text" placeholder="nomVendeur" name="nomVendeur" required>
            <input type="text" placeholder="prenomVendeur" name="prenomVendeur" required>
            <input type="text" placeholder="adresseVendeur" name="adresseVendeur" required>
            <input type="text" placeholder="nomVendeur2" name="nomVendeur2">
            <input type="text" placeholder="prenomVendeur2" name="prenomVendeur2">
            <input type="text" placeholder="adresseVendeur2" name="adresseVendeur2">
            <select type="text" name="typeSocieteVendeur" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>Aucune</option>
                <option>INDIVISION</option>
                <option>S.C.I</option>
                <option>COLLECTIVITE</option>
                <option>E.U.R.L</option>
                <option>G.I.E</option>
                <option>S.A</option>
                <option>S.A.R.L</option>
                <option>S.A.S.U</option>
                <option>S.C.A</option>
                <option>S.C.C.V</option>
                <option>S.C.I de Gestion</option>
                <option>S.C.M</option>
                <option>S.C.P</option>
                <option>S.C.S</option>
                <option>S.E.L</option>
                <option>S.E.M</option>
                <option>S.N.C</option>
                <option>SOCIÉTÉ</option>
            </select>
            <input type="text" placeholder="nomSocieteVendeur" name="nomSocieteVendeur">
            <input type="text" placeholder="nomRepresentantVendeur" name="nomRepresentantVendeur">
            <input type="text" placeholder="nomNotaireVendeur" name="nomNotaireVendeur" require>
            <input type="text" placeholder="adresseNotaireVendeur" name="adresseNotaireVendeur" require>
            <input type="text" placeholder="nomAcquereur" name="nomAcquereur" require>
            <input type="text" placeholder="prenomAcquereur" name="prenomAcquereur" require>
            <input type="text" placeholder="adresseAcquereur" name="adresseAcquereur" require>
            <select type="text" name="typeSocieteAcquereur" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>Aucune</option>
                <option>INDIVISION</option>
                <option>S.C.I</option>
                <option>COLLECTIVITE</option>
                <option>E.U.R.L</option>
                <option>G.I.E</option>
                <option>S.A</option>
                <option>S.A.R.L</option>
                <option>S.A.S.U</option>
                <option>S.C.A</option>
                <option>S.C.C.V</option>
                <option>S.C.I de Gestion</option>
                <option>S.C.M</option>
                <option>S.C.P</option>
                <option>S.C.S</option>
                <option>S.E.L</option>
                <option>S.E.M</option>
                <option>S.N.C</option>
                <option>SOCIÉTÉ</option>
            </select>
            <input type="text" placeholder="nomSocieteAcquereur" name="nomSocieteAcquereur">
            <input type="text" placeholder="nomRepresentantAcquereur" name="nomRepresentantAcquereur">
            <input type="text" placeholder="nomNotaireAcquereur" name="nomNotaireAcquereur" require>
            <input type="text" placeholder="adresseNotaireAcquereur" name="adresseNotaireAcquereur" require>

            <input class="submit" type="submit" name="submit" value="Envoyer" />
        </form>
    </body>
</html>
