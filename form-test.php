<?php
    try{
	    $bdd = new PDO('mysql:host=localhost;dbname=b-e-p-form;charset=utf8', 'root', '');
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    session_start();

    if(isset($_POST['submit'])){
        $nom = $_SESSION['mail'];
		// $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        
        $insertmbr = $bdd->prepare("INSERT INTO test(nom, prix, quantite) VALUES(?, ?, ?)");
	    $insertmbr->execute(array($nom, $prix, $quantite));
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
        <?php echo $_SESSION['nom']; ?>
        <a href="deco.php">  Se déconnecter</a>
        <form action="form-test.php" method="post">
            <input type="text" readonly value="<?php echo $_SESSION['mail']; ?>">
            <select  name="prix" required>
                <option disabled selected value hidden> -- Selectionnez une option -- </option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
             </select>
             <input type="text" name="quantite">
             <input class="submit" type="submit" name="submit" value="Envoyer" />
        </form>
    </body>
</html>
