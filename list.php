<?php
    try{
	    $bdd = new PDO('mysql:host=localhost;dbname=b-e-p-form;charset=utf8', 'root', '');
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();

    
        $requser = $bdd->prepare("SELECT id FROM superData s WHERE s.mandataire_id = '$_SESSION['id']'");
        $requser->execute(array($mailconnect, $mdpconnect));
        $histo = $requser->rowCount();
        if($histo == 1) {
           $histo = $requser->fetch();
           $_SESSION['id'] = $userinfo['id'];
           $_SESSION['nom'] = $userinfo['nom'];
           $_SESSION['mail'] = $userinfo['mail'];
           header("Location: formData.php?id=".$_SESSION['id']);
        } else {
           $erreur = "Mauvais mail ou mot de passe !";
        }

        foreach(ec)


        foreach ($arr as &$value) {
            $value = $value * 2;
        }

?>