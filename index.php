<?php
    $bdd = new PDO('mysql:localhost;dbname=b-e-p-form','root','');

    if(isset($_POST['FORM'])){
        $nom = htmlspecialchars($_POST['nom']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);
        if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])){
            $nomlength = strlen($nom);
            if($nomlength <= 255) {
                if($mail == $mail2) {
                    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $reqmail = $bdd->prepare("SELECT * FROM user WHERE mail = ?");
                        $reqmail->execute(array($mail));
                        $mailexist = $reqmail->rowCount();
                        if($mailexist == 0) {
                            if($mdp == $mdp2) {
                                $insertmbr = $bdd->prepare("INSERT INTO user(nom, mail, mdp) VALUES(?, ?, ?)");
                                $insertmbr->execute(array($nom, $mail, $mdp));
                                $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                            }else {
                                $erreur = "Vos mots de passes ne correspondent pas !";
                            }
                        }else {
                            $erreur = "Adresse mail déjà utilisée !";
                        }
                    }else {
                        $erreur = "Votre adresse mail n'est pas valide !";
                    }
                }else {
                    $erreur = "Vos adresses mail ne correspondent pas !";
                }
            }else {
                $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
            }
        }else {
            $erreur = "Tous les champs doivent être complétés !";
        }
    }

?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>I / C</title>
    </head>
    <body>
        <div align="center">
            <h2>Inscription</h2>
            <br>
            <form methode="POST" >
                <table>
                    <tr>
                        <td>
                            <input type="text" placeholder="Votre nom" id="nom" name="nom" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" placeholder="Votre e-mail" id="mail" name="mail" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" placeholder="Confirmez votre e-mail" id="mail2" name="mail2" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" placeholder="Confirmez votre mot de passe" id="mdp2" name="mdp2" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><br>
                            <input type="submit" name="FORM" value="Inscription" />
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($erreur)) {
                    echo '<font color="red">'.$erreur."</font>";
                }
            ?>
        </div>
    </body>
</html>
