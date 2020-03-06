<?php
    try{
	    $bdd = new PDO('mysql:host=localhost;dbname=b-e-p-form;charset=utf8', 'root', '');
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();
    
    $recherche = $bdd->query("SELECT id FROM superdata s WHERE s.mandataire_id = '{$_SESSION['id']}' ORDER BY s.id DESC");

     echo $_SESSION['nom']; ?><br/>
        <a href="deco.php">  Se déconnecter</a><br/>
        <a href="formData.php">  Formulaire</a><br/>
        <?php

    while($donnees = $recherche->fetch()){
        ?>
        <ul>
            <li><?php $idf = $donnees['id']; ?>
                <a href="formReData.php?idf=<?php echo $idf;?>"><?php echo $donnees['id']; ?></a>
            </li>
        </ul>
        <?php
    }

    $recherche->closeCursor(); // Termine le traitement de la requête

?>
