<?php
    try{
	    $bdd = new PDO('mysql:host=localhost;dbname=b-e-p-form;charset=utf8', 'root', '');
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();

    // if (isset($_GET['idf'])) {
    //     echo $_GET['idf'];
    // }
   
    if (isset($_GET['idf'])) {
        $recherche = $bdd->query("SELECT * FROM superdata s WHERE s.mandataire_id = '{$_SESSION['id']}' AND s.id = {$_GET['idf']}");
        $donnees = $recherche->fetch();
        echo $donnees['id'];
    }

    // $recherche = $bdd->query("SELECT * FROM superdata s WHERE s.mandataire_id = '{$_SESSION['id']}' AND s.id = {$_GET['idf']}");
    // $donnees = $recherche->fetch();

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


                $majData = $bdd->prepare('UPDATE supersata SET typeDeMandat = :typeDeMandat, nMandat = :nMandat, nDeReference = :nDeReference, natureDuBien = :natureDuBien, adressseDuBien = :adressseDuBien, prixVenteNet = :prixVenteNet, honorairesTTC = :honorairesTTC, chargeHonoraire = :chargeHonoraire, gesteCommercial = :gesteCommercial, nomVendeur = :nomVendeur, prenomVendeur = :prenomVendeur, adresseVendeur = :adresseVendeur, nomVendeur2 = :nomVendeur2, prenomVendeur2 = :prenomVendeur2, adresseVendeur2 = :adresseVendeur2, typeSocieteVendeur = :typeSocieteVendeur, nomSocieteVendeur = :nomSocieteVendeur, nomRepresentantVendeur = :nomRepresentantVendeur, nomNotaireVendeur = :nomNotaireVendeur, adresseNotaireVendeur = :adresseNotaireVendeur, nomAcquereur = :nomAcquereur, prenomAcquereur = :prenomAcquereur, adresseAcquereur = :adresseAcquereur, typeSocieteAcquereur = :typeSocieteAcquereur, nomSocieteAcquereur = :nomSocieteAcquereur, nomRepresentantAcquereur = :nomRepresentantAcquereur, nomNotaireAcquereur = :nomNotaireAcquereur, adresseNotaireAcquereur = :adresseNotaireAcquereur WHERE id = '.$donnees['id'].'');
                $req->execute(array(
                    'typeDeMandat' => $typeDeMandat,
                    'nMandat' => $nMandat,
                    'nDeReference' => $nDeReference,
                    'natureDuBien' => $natureDuBien,
                    'natureDuBien' => $natureDuBien,
                    'adressseDuBien' => $adressseDuBien,
                    'prixVenteNet' => $prixVenteNet,
                    'honorairesTTC' => $honorairesTTC,
                    'chargeHonoraire' => $chargeHonoraire,
                    'gesteCommercial' => $gesteCommercial,
                    'nomVendeur' => $nomVendeur,
                    'prenomVendeur' => $prenomVendeur,
                    'adresseVendeur' => $adresseVendeur,
                    'nomVendeur2' => $nomVendeur2,
                    'prenomVendeur2' => $prenomVendeur2,
                    'adresseVendeur2' => $adresseVendeur2,
                    'typeSocieteVendeur' => $typeSocieteVendeur,
                    'nomSocieteVendeur' => $nomSocieteVendeur,
                    'nomRepresentantVendeur' => $nomRepresentantVendeur,
                    'nomNotaireVendeur' => $nomNotaireVendeur,
                    'adresseNotaireVendeur' => $adresseNotaireVendeur,
                    'nomAcquereur' => $nomAcquereur,
                    'prenomAcquereur' => $prenomAcquereur,
                    'adresseAcquereur' => $adresseAcquereur,
                    'typeSocieteAcquereur' => $typeSocieteAcquereur,
                    'nomSocieteAcquereur' => $nomSocieteAcquereur,
                    'nomRepresentantAcquereur' => $nomRepresentantAcquereur,
                    'nomNotaireAcquereur' => $nomNotaireAcquereur,
                    'adresseNotaireAcquereur' => $adresseNotaireAcquereur
                ));
                    
            }else{
              
$majData = $bdd->prepare('UPDATE supersata SET typeDeMandat = :typeDeMandat, nMandat = :nMandat, nDeReference = :nDeReference, natureDuBien = :natureDuBien, adressseDuBien = :adressseDuBien, prixVenteNet = :prixVenteNet, honorairesTTC = :honorairesTTC, chargeHonoraire = :chargeHonoraire, gesteCommercial = :gesteCommercial, nomVendeur = :nomVendeur, prenomVendeur = :prenomVendeur, adresseVendeur = :adresseVendeur, nomVendeur2 = :nomVendeur2, prenomVendeur2 = :prenomVendeur2, adresseVendeur2 = :adresseVendeur2, typeSocieteVendeur = :typeSocieteVendeur, nomSocieteVendeur = :nomSocieteVendeur, nomRepresentantVendeur = :nomRepresentantVendeur, nomNotaireVendeur = :nomNotaireVendeur, adresseNotaireVendeur = :adresseNotaireVendeur, nomAcquereur = :nomAcquereur, prenomAcquereur = :prenomAcquereur, adresseAcquereur = :adresseAcquereur, typeSocieteAcquereur = :typeSocieteAcquereur, nomSocieteAcquereur = :nomSocieteAcquereur, nomRepresentantAcquereur = :nomRepresentantAcquereur, nomNotaireAcquereur = :nomNotaireAcquereur, adresseNotaireAcquereur = :adresseNotaireAcquereur WHERE id = '.$donnees['id'].'');
$req->execute(array(
    'typeDeMandat' => $typeDeMandat,
    'nMandat' => $nMandat,
    'nDeReference' => $nDeReference,
    'natureDuBien' => $natureDuBien,
    'natureDuBien' => $natureDuBien,
    'adressseDuBien' => $adressseDuBien,
    'prixVenteNet' => $prixVenteNet,
    'honorairesTTC' => $honorairesTTC,
    'chargeHonoraire' => $chargeHonoraire,
    'gesteCommercial' => $gesteCommercial,
    'nomVendeur' => $nomVendeur,
    'prenomVendeur' => $prenomVendeur,
    'adresseVendeur' => $adresseVendeur,
    'nomVendeur2' => $nomVendeur2,
    'prenomVendeur2' => $prenomVendeur2,
    'adresseVendeur2' => $adresseVendeur2,
    'typeSocieteVendeur' => $typeSocieteVendeur,
    'nomSocieteVendeur' => $nomSocieteVendeur,
    'nomRepresentantVendeur' => $nomRepresentantVendeur,
    'nomNotaireVendeur' => $nomNotaireVendeur,
    'adresseNotaireVendeur' => $adresseNotaireVendeur,
    'nomAcquereur' => $nomAcquereur,
    'prenomAcquereur' => $prenomAcquereur,
    'adresseAcquereur' => $adresseAcquereur,
    'typeSocieteAcquereur' => $typeSocieteAcquereur,
    'nomSocieteAcquereur' => $nomSocieteAcquereur,
    'nomRepresentantAcquereur' => $nomRepresentantAcquereur,
    'nomNotaireAcquereur' => $nomNotaireAcquereur,
    'adresseNotaireAcquereur' => $adresseNotaireAcquereur
));
    
            }
        }else{

            $majData = $bdd->prepare('UPDATE supersata SET typeDeMandat = :typeDeMandat, nMandat = :nMandat, nDeReference = :nDeReference, natureDuBien = :natureDuBien, adressseDuBien = :adressseDuBien, prixVenteNet = :prixVenteNet, honorairesTTC = :honorairesTTC, chargeHonoraire = :chargeHonoraire, gesteCommercial = :gesteCommercial, nomVendeur = :nomVendeur, prenomVendeur = :prenomVendeur, adresseVendeur = :adresseVendeur, nomVendeur2 = :nomVendeur2, prenomVendeur2 = :prenomVendeur2, adresseVendeur2 = :adresseVendeur2, typeSocieteVendeur = :typeSocieteVendeur, nomSocieteVendeur = :nomSocieteVendeur, nomRepresentantVendeur = :nomRepresentantVendeur, nomNotaireVendeur = :nomNotaireVendeur, adresseNotaireVendeur = :adresseNotaireVendeur, nomAcquereur = :nomAcquereur, prenomAcquereur = :prenomAcquereur, adresseAcquereur = :adresseAcquereur, typeSocieteAcquereur = :typeSocieteAcquereur, nomSocieteAcquereur = :nomSocieteAcquereur, nomRepresentantAcquereur = :nomRepresentantAcquereur, nomNotaireAcquereur = :nomNotaireAcquereur, adresseNotaireAcquereur = :adresseNotaireAcquereur WHERE id = '.$donnees['id'].'');
            $req->execute(array(
                'typeDeMandat' => $typeDeMandat,
                'nMandat' => $nMandat,
                'nDeReference' => $nDeReference,
                'natureDuBien' => $natureDuBien,
                'natureDuBien' => $natureDuBien,
                'adressseDuBien' => $adressseDuBien,
                'prixVenteNet' => $prixVenteNet,
                'honorairesTTC' => $honorairesTTC,
                'chargeHonoraire' => $chargeHonoraire,
                'gesteCommercial' => $gesteCommercial,
                'nomVendeur' => $nomVendeur,
                'prenomVendeur' => $prenomVendeur,
                'adresseVendeur' => $adresseVendeur,
                'nomVendeur2' => $nomVendeur2,
                'prenomVendeur2' => $prenomVendeur2,
                'adresseVendeur2' => $adresseVendeur2,
                'typeSocieteVendeur' => $typeSocieteVendeur,
                'nomSocieteVendeur' => $nomSocieteVendeur,
                'nomRepresentantVendeur' => $nomRepresentantVendeur,
                'nomNotaireVendeur' => $nomNotaireVendeur,
                'adresseNotaireVendeur' => $adresseNotaireVendeur,
                'nomAcquereur' => $nomAcquereur,
                'prenomAcquereur' => $prenomAcquereur,
                'adresseAcquereur' => $adresseAcquereur,
                'typeSocieteAcquereur' => $typeSocieteAcquereur,
                'nomSocieteAcquereur' => $nomSocieteAcquereur,
                'nomRepresentantAcquereur' => $nomRepresentantAcquereur,
                'nomNotaireAcquereur' => $nomNotaireAcquereur,
                'adresseNotaireAcquereur' => $adresseNotaireAcquereur
            ));
                
        }
        
$majData = $bdd->prepare('UPDATE supersata SET typeDeMandat = :typeDeMandat, nMandat = :nMandat, nDeReference = :nDeReference, natureDuBien = :natureDuBien, adressseDuBien = :adressseDuBien, prixVenteNet = :prixVenteNet, honorairesTTC = :honorairesTTC, chargeHonoraire = :chargeHonoraire, gesteCommercial = :gesteCommercial, nomVendeur = :nomVendeur, prenomVendeur = :prenomVendeur, adresseVendeur = :adresseVendeur, nomVendeur2 = :nomVendeur2, prenomVendeur2 = :prenomVendeur2, adresseVendeur2 = :adresseVendeur2, typeSocieteVendeur = :typeSocieteVendeur, nomSocieteVendeur = :nomSocieteVendeur, nomRepresentantVendeur = :nomRepresentantVendeur, nomNotaireVendeur = :nomNotaireVendeur, adresseNotaireVendeur = :adresseNotaireVendeur, nomAcquereur = :nomAcquereur, prenomAcquereur = :prenomAcquereur, adresseAcquereur = :adresseAcquereur, typeSocieteAcquereur = :typeSocieteAcquereur, nomSocieteAcquereur = :nomSocieteAcquereur, nomRepresentantAcquereur = :nomRepresentantAcquereur, nomNotaireAcquereur = :nomNotaireAcquereur, adresseNotaireAcquereur = :adresseNotaireAcquereur WHERE id = '.$donnees['id'].'');
$req->execute(array(
    'typeDeMandat' => $typeDeMandat,
    'nMandat' => $nMandat,
    'nDeReference' => $nDeReference,
    'natureDuBien' => $natureDuBien,
    'natureDuBien' => $natureDuBien,
    'adressseDuBien' => $adressseDuBien,
    'prixVenteNet' => $prixVenteNet,
    'honorairesTTC' => $honorairesTTC,
    'chargeHonoraire' => $chargeHonoraire,
    'gesteCommercial' => $gesteCommercial,
    'nomVendeur' => $nomVendeur,
    'prenomVendeur' => $prenomVendeur,
    'adresseVendeur' => $adresseVendeur,
    'nomVendeur2' => $nomVendeur2,
    'prenomVendeur2' => $prenomVendeur2,
    'adresseVendeur2' => $adresseVendeur2,
    'typeSocieteVendeur' => $typeSocieteVendeur,
    'nomSocieteVendeur' => $nomSocieteVendeur,
    'nomRepresentantVendeur' => $nomRepresentantVendeur,
    'nomNotaireVendeur' => $nomNotaireVendeur,
    'adresseNotaireVendeur' => $adresseNotaireVendeur,
    'nomAcquereur' => $nomAcquereur,
    'prenomAcquereur' => $prenomAcquereur,
    'adresseAcquereur' => $adresseAcquereur,
    'typeSocieteAcquereur' => $typeSocieteAcquereur,
    'nomSocieteAcquereur' => $nomSocieteAcquereur,
    'nomRepresentantAcquereur' => $nomRepresentantAcquereur,
    'nomNotaireAcquereur' => $nomNotaireAcquereur,
    'adresseNotaireAcquereur' => $adresseNotaireAcquereur
));
    
    }


//  $insertmbr = $bdd->prepare("UPDATE supersata SET mandataire_id = ?, mail = ?NON NEED, typeDeMandat = ?, nMandat = ?, nDeReference = ?, natureDuBien = ?, adressseDuBien = ?, prixVenteNet = ?, honorairesTTC = ?, 
//  chargeHonoraire = ?, gesteCommercial = ?, nomVendeur = ?, prenomVendeur = ?, adresseVendeur = ?, nomVendeur2 = ?, prenomVendeur2 = ?, adresseVendeur2 = ?, typeSocieteVendeur = ?, nomSocieteVendeur = ?, 
//  nomRepresentantVendeur = ?, nomNotaireVendeur = ?, adresseNotaireVendeur = ?, nomAcquereur = ?, prenomAcquereur = ?, adresseAcquereur = ?, typeSocieteAcquereur = ?, nomSocieteAcquereur = ?, 
//  nomRepresentantAcquereur = ?, nomNotaireAcquereur = ?, adresseNotaireAcquereur = ? WHERE mandataire_id = '{$_SESSION['id']}' AND id = {$_GET['idf']}");
//  $insertmbr->execute(array($mandataire_id, $mail, $typeDeMandat, $nMandat, $nDeReference, $natureDuBien, $adressseDuBien, $prixVenteNet, $honorairesTTC, $chargeHonoraire, $gesteCommercial, $nomVendeur, 
//  $prenomVendeur, $adresseVendeur, $nomVendeur2, $prenomVendeur2, $adresseVendeur2, $typeSocieteVendeur, $nomSocieteVendeur, $nomRepresentantVendeur, $nomNotaireVendeur, $adresseNotaireVendeur, $nomAcquereur, 
//  $prenomAcquereur, $adresseAcquereur, $typeSocieteAcquereur, $nomSocieteAcquereur, $nomRepresentantAcquereur, $nomNotaireAcquereur, $adresseNotaireAcquereur));    

// $bdd->exec('UPDATE supersata SET typeDeMandat = '.$typeDeMandat.', nMandat = '.$nMandat.', nDeReference = '.$nDeReference.', natureDuBien = '.$natureDuBien.', adressseDuBien = '.$adressseDuBien.',
// prixVenteNet = '.$prixVenteNet.', honorairesTTC = '.$honorairesTTC.', chargeHonoraire = '.$chargeHonoraire.', gesteCommercial = '.$gesteCommercial.', nomVendeur = '.$nomVendeur.', prenomVendeur = '.$prenomVendeur.',
// adresseVendeur = '.$adresseVendeur.', nomVendeur2 = '.$nomVendeur2.', prenomVendeur2 = '.$prenomVendeur2.', adresseVendeur2 = '.$adresseVendeur2.', typeSocieteVendeur = '.$typeSocieteVendeur.', nomSocieteVendeur = '.$nomSocieteVendeur.',
// nomRepresentantVendeur = '.$nomRepresentantVendeur.', nomNotaireVendeur = '.$nomNotaireVendeur.', adresseNotaireVendeur = '.$adresseNotaireVendeur.', nomAcquereur = '.$nomAcquereur.', prenomAcquereur = '.$prenomAcquereur.', adresseAcquereur = '.$adresseAcquereur.',
// typeSocieteAcquereur = '.$typeSocieteAcquereur.', nomSocieteAcquereur = '.$nomSocieteAcquereur.', nomRepresentantAcquereur = '.$nomRepresentantAcquereur.', nomNotaireAcquereur = '.$nomNotaireAcquereur.', adresseNotaireAcquereur = '.$adresseNotaireAcquereur.'
// WHERE mandataire_id = '.$_SESSION['id'].' AND id = '.$_GET['idf'].'');

// $bdd->exec('UPDATE supersata SET typeDeMandat = '.$typeDeMandat.', nMandat = '.$nMandat.', nDeReference = '.$nDeReference.', natureDuBien = '.$natureDuBien.', adressseDuBien = '.$adressseDuBien.', prixVenteNet = '.$prixVenteNet.', honorairesTTC = '.$honorairesTTC.', chargeHonoraire = '.$chargeHonoraire.', gesteCommercial = '.$gesteCommercial.', nomVendeur = '.$nomVendeur.', prenomVendeur = '.$prenomVendeur.', adresseVendeur = '.$adresseVendeur.', nomVendeur2 = '.$nomVendeur2.', prenomVendeur2 = '.$prenomVendeur2.', adresseVendeur2 = '.$adresseVendeur2.', typeSocieteVendeur = '.$typeSocieteVendeur.', nomSocieteVendeur = '.$nomSocieteVendeur.', nomRepresentantVendeur = '.$nomRepresentantVendeur.', nomNotaireVendeur = '.$nomNotaireVendeur.', adresseNotaireVendeur = '.$adresseNotaireVendeur.', nomAcquereur = '.$nomAcquereur.', prenomAcquereur = '.$prenomAcquereur.', adresseAcquereur = '.$adresseAcquereur.', typeSocieteAcquereur = '.$typeSocieteAcquereur.', nomSocieteAcquereur = '.$nomSocieteAcquereur.', nomRepresentantAcquereur = '.$nomRepresentantAcquereur.', nomNotaireAcquereur = '.$nomNotaireAcquereur.', adresseNotaireAcquereur = '.$adresseNotaireAcquereur.' WHERE mandataire_id = '.$_SESSION['id'].' AND id = '.$_GET['idf'].'');

 //requete update sql
// $insertmbr = query('UPDATE supersata SET typeDeMandat ="' . $typeDeMandat . '", nMandat ="' . $nMandat .'", nDeReference ="' . $nDeReference .'", natureDuBien ="' . $natureDuBien .'", adressseDuBien ="' . $adressseDuBien .'", prixVenteNet ="' . $prixVenteNet .'", honorairesTTC ="' . $honorairesTTC .'", chargeHonoraire ="' . $chargeHonoraire .'", gesteCommercial ="' . $gesteCommercial .'", nomVendeur ="' . $nomVendeur .'", prenomVendeur ="' . $prenomVendeur .'", adresseVendeur ="' . $adresseVendeur .'", nomVendeur2 ="' . $nomVendeur2 .'", prenomVendeur2 ="' . $prenomVendeur2 .'", adresseVendeur2 ="' . $adresseVendeur2 .'", typeSocieteVendeur ="' . $typeSocieteVendeur .'", nomSocieteVendeur ="' . $nomSocieteVendeur .'", nomRepresentantVendeur ="' . $nomRepresentantVendeur .'", nomNotaireVendeur ="' . $nomNotaireVendeur .'", adresseNotaireVendeur ="' . $adresseNotaireVendeur .'", nomAcquereur ="' . $nomAcquereur .'", prenomAcquereur ="' . $prenomAcquereur .'", adresseAcquereur ="' . $adresseAcquereur .'", typeSocieteAcquereur ="' . $typeSocieteAcquereur .'", nomSocieteAcquereur ="' . $nomSocieteAcquereur .'", nomRepresentantAcquereur ="' . $nomRepresentantAcquereur .'", nomNotaireAcquereur ="' . $nomNotaireAcquereur .'", adresseNotaireAcquereur ="' . $adresseNotaireAcquereur .'" WHERE mandataire_id="' . {$_SESSION['id']} . '" AND id = "'.{$_GET['idf']}.'');


// $majData = $bdd->prepare('UPDATE supersata SET typeDeMandat = :typeDeMandat, nMandat = :nMandat, nDeReference = :nDeReference, natureDuBien = :natureDuBien, adressseDuBien = :adressseDuBien, prixVenteNet = :prixVenteNet, honorairesTTC = :honorairesTTC, chargeHonoraire = :chargeHonoraire, gesteCommercial = :gesteCommercial, nomVendeur = :nomVendeur, prenomVendeur = :prenomVendeur, adresseVendeur = :adresseVendeur, nomVendeur2 = :nomVendeur2, prenomVendeur2 = :prenomVendeur2, adresseVendeur2 = :adresseVendeur2, typeSocieteVendeur = :typeSocieteVendeur, nomSocieteVendeur = :nomSocieteVendeur, nomRepresentantVendeur = :nomRepresentantVendeur, nomNotaireVendeur = :nomNotaireVendeur, adresseNotaireVendeur = :adresseNotaireVendeur, nomAcquereur = :nomAcquereur, prenomAcquereur = :prenomAcquereur, adresseAcquereur = :adresseAcquereur, typeSocieteAcquereur = :typeSocieteAcquereur, nomSocieteAcquereur = :nomSocieteAcquereur, nomRepresentantAcquereur = :nomRepresentantAcquereur, nomNotaireAcquereur = :nomNotaireAcquereur, adresseNotaireAcquereur = :adresseNotaireAcquereur WHERE id = '.$donnees['id'].'');
// $req->execute(array(
//     'typeDeMandat' => $typeDeMandat,
//     'nMandat' => $nMandat,
//     'nDeReference' => $nDeReference,
//     'natureDuBien' => $natureDuBien,
//     'natureDuBien' => $natureDuBien,
//     'adressseDuBien' => $adressseDuBien,
//     'prixVenteNet' => $prixVenteNet,
//     'honorairesTTC' => $honorairesTTC,
//     'chargeHonoraire' => $chargeHonoraire,
//     'gesteCommercial' => $gesteCommercial,
//     'nomVendeur' => $nomVendeur,
//     'prenomVendeur' => $prenomVendeur,
//     'adresseVendeur' => $adresseVendeur,
//     'nomVendeur2' => $nomVendeur2,
//     'prenomVendeur2' => $prenomVendeur2,
//     'adresseVendeur2' => $adresseVendeur2,
//     'typeSocieteVendeur' => $typeSocieteVendeur,
//     'nomSocieteVendeur' => $nomSocieteVendeur,
//     'nomRepresentantVendeur' => $nomRepresentantVendeur,
//     'nomNotaireVendeur' => $nomNotaireVendeur,
//     'adresseNotaireVendeur' => $adresseNotaireVendeur,
//     'nomAcquereur' => $nomAcquereur,
//     'prenomAcquereur' => $prenomAcquereur,
//     'adresseAcquereur' => $adresseAcquereur,
//     'typeSocieteAcquereur' => $typeSocieteAcquereur,
//     'nomSocieteAcquereur' => $nomSocieteAcquereur,
//     'nomRepresentantAcquereur' => $nomRepresentantAcquereur,
//     'nomNotaireAcquereur' => $nomNotaireAcquereur,
//     'adresseNotaireAcquereur' => $adresseNotaireAcquereur
// ));
    

// $req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
// $req->execute(array(
// 	'nvprix' => $nvprix,
// 	'nv_nb_joueurs' => $nv_nb_joueurs,
// 	'nom_jeu' => $nom_jeu
// 	));


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
        <form action="list.php" method="post">
            <input type="text" readonly value="<?php echo $donnees['mail']; ?>">
            <select type="text" name="typeDeMandat" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>Vente</option>
                <option>Recherche</option>
                <option>Location</option>
                <option>Estimation</option>
                <option>Expertise</option>
            </select>
            <input type="number" placeholder="nMandat" name="nMandat" value="<?php echo $donnees['nMandat']; ?>" required>
            <input type="number" placeholder="nDeReference" name="nDeReference" value="<?php echo $donnees['nDeReference']; ?>" required>
            <select type="text" name="natureDuBien" value="<?php echo $donnees['natureDuBien']; ?>" required>
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
            <input type="text" placeholder="adressseDuBien" name="adressseDuBien" value="<?php echo $donnees['adressseDuBien']; ?>" required>
            <input type="number" placeholder="prixVenteNet" name="prixVenteNet" value="<?php echo $donnees['prixVenteNet']; ?>" required>
            <input type="number" placeholder="honorairesTTC" name="honorairesTTC" value="<?php echo $donnees['honorairesTTC']; ?>" required>
            <select type="text" name="chargeHonoraire" value="<?php echo $donnees['chargeHonoraire']; ?>" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>Vendeur</option>
                <option>Acquéreur</option>
                <option>50% Vendeur - 50% Acquéreur</option>
            </select>
            <input type="number" placeholder="gesteCommercial" name="gesteCommercial" value="<?php echo $donnees['gesteCommercial']; ?>" required>
            <input type="text" placeholder="nomVendeur" name="nomVendeur" value="<?php echo $donnees['nomVendeur']; ?>" required>
            <input type="text" placeholder="prenomVendeur" name="prenomVendeur" value="<?php echo $donnees['prenomVendeur']; ?>" required>
            <input type="text" placeholder="adresseVendeur" name="adresseVendeur" value="<?php echo $donnees['adresseVendeur']; ?>" required>
            <input type="text" placeholder="nomVendeur2" name="nomVendeur2" value="<?php echo $donnees['nomVendeur2']; ?>">
            <input type="text" placeholder="prenomVendeur2" name="prenomVendeur2" value="<?php echo $donnees['prenomVendeur2']; ?>">
            <input type="text" placeholder="adresseVendeur2" name="adresseVendeur2" value="<?php echo $donnees['adresseVendeur2']; ?>">
            <select type="text" name="typeSocieteVendeur" value="<?php echo $donnees['typeSocieteVendeur']; ?>" required>
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
            <input type="text" placeholder="nomSocieteVendeur" name="nomSocieteVendeur" value="<?php echo $donnees['nomSocieteVendeur']; ?>">
            <input type="text" placeholder="nomRepresentantVendeur" name="nomRepresentantVendeur" value="<?php echo $donnees['nomRepresentantVendeur']; ?>">
            <input type="text" placeholder="nomNotaireVendeur" name="nomNotaireVendeur" value="<?php echo $donnees['nomNotaireVendeur']; ?>" require>
            <input type="text" placeholder="adresseNotaireVendeur" name="adresseNotaireVendeur" value="<?php echo $donnees['adresseNotaireVendeur']; ?>" require>
            <input type="text" placeholder="nomAcquereur" name="nomAcquereur" value="<?php echo $donnees['nomAcquereur']; ?>" require>
            <input type="text" placeholder="prenomAcquereur" name="prenomAcquereur" value="<?php echo $donnees['prenomAcquereur']; ?>" require>
            <input type="text" placeholder="adresseAcquereur" name="adresseAcquereur" value="<?php echo $donnees['adresseAcquereur']; ?>" require>
            <select type="text" name="typeSocieteAcquereur" value="<?php echo $donnees['typeSocieteAcquereur']; ?>" required>
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
            <input type="text" placeholder="nomSocieteAcquereur" name="nomSocieteAcquereur" value="<?php echo $donnees['nomSocieteAcquereur']; ?>">
            <input type="text" placeholder="nomRepresentantAcquereur" name="nomRepresentantAcquereur" value="<?php echo $donnees['nomRepresentantAcquereur']; ?>">
            <input type="text" placeholder="nomNotaireAcquereur" name="nomNotaireAcquereur" value="<?php echo $donnees['nomNotaireAcquereur']; ?>" require>
            <input type="text" placeholder="adresseNotaireAcquereur" name="adresseNotaireAcquereur" value="<?php echo $donnees['adresseNotaireAcquereur']; ?>" require>
           
            <input class="submit" type="submit" name="submit" value="Envoyer" />
        </form>
    </body>
</html>
