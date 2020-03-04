<?php
    // 
    session_start();
    // 
    $bdd = new PDO('mysql:localhost;dbname=b-e-p-form','root','');
    //
    if(isset($_POST['FORM'])){
        $id_user = htmlspecialchars($_SESSION['id']); // OB
        $mail = htmlspecialchars($_SESSION['mail']); // OB
        $typeDeMandat = htmlspecialchars($_POST['typeDeMandat']); // OB
        $nMandat = htmlspecialchars($_POST['nMandat']); // OB
        $nDeReference = htmlspecialchars($_POST['nDeReference']);
        $natureDuBien = htmlspecialchars($_POST['natureDuBien']); // OB
        $adressseDuBien = htmlspecialchars($_POST['adressseDuBien']); // OB
        $prixVenteNet = htmlspecialchars($_POST['prixVenteNet']); // OB
        $honorairesTTC = htmlspecialchars($_POST['honorairesTTC']); // OB
        $Charge_honoraire = htmlspecialchars($_POST['Charge_honoraire']); // OB
        $gesteCommercial = htmlspecialchars($_POST['gesteCommercial']); // OB
        $inputGroupFile01 = htmlspecialchars($_POST['inputGroupFile01']); // OB
        // Vendeur
        $Nom_du_vendeur = htmlspecialchars($_POST['Nom_du_vendeur']); // OB
        $Prenom_du_vendeur = htmlspecialchars($_POST['Prenom_du_vendeur']); // OB
        $Adresse_du_vendeur = htmlspecialchars($_POST['Adresse_du_vendeur']); // OB
        $Nom_du_vendeur_2 = htmlspecialchars($_POST['Nom_du_vendeur_2']);
        $Prenom_du_vendeur_2 = htmlspecialchars($_POST['Prenom_du_vendeur_2']);
        $Adresse_du_vendeur_2 = htmlspecialchars($_POST['Adresse_du_vendeur_2']);
        $Type_societe_vendeur = htmlspecialchars($_POST['Type_societe_vendeur']);
        $Nom_societe_vendeur = htmlspecialchars($_POST['Nom_societe_vendeur']);
        $Nom_representant_vendeur = htmlspecialchars($_POST['Nom_representant_vendeur']);
        $Nom_notaire_vendeur = htmlspecialchars($_POST['Nom_notaire_vendeur']); // OB
        $Adresse_notaire_vendeur = htmlspecialchars($_POST['Adresse_notaire_vendeur']); // OB
        // Acquereur
        $Nom_acquereur = htmlspecialchars($_POST['Nom_acquereur']); // OB
        $Prenom_acquereur = htmlspecialchars($_POST['Prenom_acquereur']); // OB
        $Adresse_acquereur = htmlspecialchars($_POST['Adresse_acquereur']); // OB
        $Type_societe_acquereur = htmlspecialchars($_POST['Type_societe_acquereur']);
        $Nom_societe_acquereur = htmlspecialchars($_POST['Nom_societe_acquereur']);
        $Nom_representant_acquereur = htmlspecialchars($_POST['Nom_representant_acquereur']);
        $Nom_notaire_acquereur = htmlspecialchars($_POST['Nom_notaire_acquereur']); // OB
        $Adresse_notaire_acquereur = htmlspecialchars($_POST['Adresse_notaire_acquereur']); // OB
        // 
        if(!empty($_POST['mail']) AND !empty($_POST['typeDeMandat']) AND !empty($_POST['nMandat']) AND !empty($_POST['nDeReference']) AND !empty($_POST['natureDuBien']) AND !empty($_POST['adressseDuBien']) AND 
        !empty($_POST['prixVenteNet']) AND !empty($_POST['honorairesTTC']) AND !empty($_POST['Charge_honoraire']) AND !empty($_POST['gesteCommercial']) AND !empty($_POST['inputGroupFile01'])
        AND !empty($_POST['Nom_du_vendeur']) AND !empty($_POST['Prenom_du_vendeur']) AND !empty($_POST['Adresse_du_vendeur']) AND !empty($_POST['Nom_notaire_vendeur'])
        AND !empty($_POST['Adresse_notaire_vendeur']) AND !empty($_POST['Nom_acquereur']) AND !empty($_POST['Prenom_acquereur']) AND !empty($_POST['Adresse_acquereur'])
        AND !empty($_POST['Nom_notaire_acquereur']) AND !empty($_POST['Adresse_notaire_acquereur'])){
            // 
            $insertmbr = $bdd->prepare("INSERT INTO form_data(id_user, mail, typeDeMandat, nMandat, nDeReference, natureDuBien, adressseDuBien, prixVenteNet, honorairesTTC, Charge_honoraire, 
            gesteCommercial, inputGroupFile01, Nom_du_vendeur, Prenom_du_vendeur, Adresse_du_vendeur, Nom_du_vendeur_2, Prenom_du_vendeur_2, Adresse_du_vendeur_2, Type_societe_vendeur, 
            Nom_societe_vendeur, Nom_representant_vendeur, Nom_notaire_vendeur, Adresse_notaire_vendeur, Nom_acquereur, Prenom_acquereur, Adresse_acquereur, Type_societe_acquereur, 
            Nom_societe_acquereur, Nom_representant_acquereur, Nom_notaire_acquereur, Adresse_notaire_acquereur) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, ?, ?)");
            // 
            $insertmbr->execute(array($id_user, $mail, $typeDeMandat, $nMandat, $nDeReference, $natureDuBien, $adressseDuBien, $prixVenteNet, $honorairesTTC, $Charge_honoraire, $gesteCommercial,
                $inputGroupFile01, $Nom_du_vendeur, $Prenom_du_vendeur, $Adresse_du_vendeur, $Nom_du_vendeur_2, $Prenom_du_vendeur_2, $Adresse_du_vendeur_2, $Type_societe_vendeur, $Nom_societe_vendeur, 
                $Nom_representant_vendeur, $Nom_notaire_vendeur, $Adresse_notaire_vendeur, $Nom_acquereur, $Prenom_acquereur, $Adresse_acquereur, $Type_societe_acquereur, $Nom_societe_acquereur, 
                $Nom_representant_acquereur, $Nom_notaire_acquereur, $Adresse_notaire_acquereur));
                $erreur = "Les donner on bien était créer enregistrer ! <a href=\"connexion.php\">Me connecter</a>";
        }else {
            $erreur = "Veulliez renplire les chanps obligatoire";
        }
    }
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de vente</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
            <br />
            <a href="deco.php">Se déconnecter</a>
            <?php echo $_SESSION['nom']; ?>
        <center>
        <h2>Formulaire de vente</h2>
        <br>
        <form methode="POST" class="needs-validation" novalidate style="width:70%">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="mail" >Votre e-mail</span>
                        <input type="text" class="form-control " id="mail" readonly value="<?php echo $_SESSION['mail']; ?>" name="mail" required>  
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="typeDeMandat" >Type de mandat</span>
                        <select class="custom-select" class="form-control " id="typeDeMandat" name="typeDeMandat" required>
                            <option disabled selected value> -- Selectionnez une option -- </option>
                            <option>Vente</option>
                            <option>Recherche</option>
                            <option>Location</option>
                            <option>Estimation</option>
                            <option>Expertise</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="nMandat" >N° de mandat</span>
                        <input type="text" class="form-control " id="nMandat" name="nMandat" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="nDeReference" >N° de référence</span>
                        <input type="text" class="form-control " id="nDeReference" name="nDeReference">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="natureDuBien" >Nature du bien</span>
                        <select class="custom-select" class="form-control " id="natureDuBien" name="natureDuBien" required>
                            <option disabled selected value> -- Selectionnez une option -- </option>
                            <option>Ancienne gare</option>
                            <option>Appartement</option>
                            <option>Bastide</option>
                            <option>Bastidon</option>
                            <option>Bergerie</option>
                            <option>Bungalow</option>
                            <option>Cabanon</option>
                            <option>Chalet</option>
                            <option>Chambre de service</option>
                            <option>Château</option>
                            <option>Corps de ferme</option>
                            <option>Demeure</option>
                            <option>Domaine</option>
                            <option>Duplex</option>
                            <option>Echope</option>
                            <option>Exploitation agricole</option>
                            <option>Exploitation viticole</option>
                            <option>Ferme</option>
                            <option>Fermette</option>
                            <option>Grange</option>
                            <option>Grotte</option>
                            <option>Hangar</option>
                            <option>Immeuble</option>
                            <option>Loft</option>
                            <option>Longère</option>
                            <option>Maison à colombages</option>
                            <option>Maison ancienne</option>
                            <option>Maison bourgeoise</option>
                            <option>Maison contemporaine</option>
                            <option>Maison d’architecte</option>
                            <option>Maison de loisirs</option>
                            <option>Maison de maître</option>
                            <option>Maison de pêcheur</option>
                            <option>Maison de village</option>
                            <option>Maison de ville</option>
                            <option>Maison d'hôte</option>
                            <option>Maison en bois</option>
                            <option>Maison en pierre</option>
                            <option>Maison jumelée</option>
                            <option>Maison traditionnelle</option>
                            <option>Maison vigneronne</option>
                            <option>Manoir</option>
                            <option>Mas</option>
                            <option>Mazet</option>
                            <option>Moulin</option>
                            <option>Pavillon</option>
                            <option>Porcherie</option>
                            <option>Propriété</option>
                            <option>Propriété équestre</option>
                            <option>Studio</option>
                            <option>Surface atypique</option>
                            <option>Triplex</option>
                            <option>Villa</option>
                            <option>Parking / Box / Garage</option>
                            <option>Terrain</option>
                            <option>Bureau / local Professionnel</option>
                            <option>Boutique / Commerce</option>
                            <option>Fonds de commerce</option>
                            <option>Murs commerciaux</option>
                            <option>VEFA</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" for="adressseDuBien" >Adresse du Bien</span>
                            <input type="text" class="form-control " id="adressseDuBien" name="adressseDuBien" required>
                        </div>
                    </div>
                </div>
            </div> 
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="prixVenteNet" >Prix de vente net</span>
                    <input type="text" class="form-control " id="prixVenteNet" name="prixVenteNet" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="honorairesTTC" >Honoraires TTC</span>
                    <input type="text" class="form-control " id="honorairesTTC" name="honorairesTTC" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="Charge_honoraire" >Charge honoraire</span>
                    <select class="custom-select" class="form-control " id="Charge_honoraire" name="Charge_honoraire" required>
                        <option disabled selected value> -- Selectionnez une option -- </option>
                        <option>Vendeur</option>
                        <option>Acquéreur</option>
                        <option>50% Vendeur - 50% Acquéreur</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="gesteCommercial" >Geste commercial consenti (en euro)</span>
                    <input type="text" class="form-control " id="gesteCommercial" name="gesteCommercial" required>
                </div>
            </div>  
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Mon Doc</span>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choisir un fichier</label>
                    </div>
                </div>
            </div>
        </div>
        -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        <br><br>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="Nom_du_vendeur" >Nom du vendeur</span>
                    <input type="text" class="form-control " id="Nom_du_vendeur" name="Nom_du_vendeur" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="Prenom_du_vendeur" >Prénom du vendeur</span>
                    <input type="text" class="form-control " id="Prenom_du_vendeur" name="Prenom_du_vendeur" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" for="Adresse_du_vendeur" >Adresse du vendeur</span>
                    <input type="text" class="form-control " id="Adresse_du_vendeur" name="Adresse_du_vendeur" required>
                </div>
            </div>
        </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_du_vendeur_2" >Nom du 2eme vendeur (si besoin)</span>
                        <input type="text" class="form-control " id="Nom_du_vendeur_2" name="Nom_du_vendeur_2">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Prenom_du_vendeur_2" >Prénom du 2eme vendeur (si besoin)</span>
                        <input type="text" class="form-control " id="Prenom_du_vendeur_2" name="Prenom_du_vendeur_2">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Adresse_du_vendeur_2" >Adresse du 2eme vendeur (si besoin)</span>
                        <input type="text" class="form-control " id="Adresse_du_vendeur_2" name="Adresse_du_vendeur_2">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Type_societe_vendeur" >Type de société côté vendeur (si besoin)</span>
                        <select class="custom-select" class="form-control " id="Type_societe_vendeur" name="Type_societe_vendeur">
                            <option disabled selected value> -- Selectionnez une option -- </option>
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
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_societe_vendeur" >Nom de la société côté vendeur (si besoin)</span>
                        <input type="text" class="form-control " id="Nom_societe_vendeur" name="Nom_societe_vendeur">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_representant_vendeur" >Nom du représentant(e) (si besoin)</span>
                        <input type="text" class="form-control " id="Nom_representant_vendeur" name="Nom_representant_vendeur">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_notaire_vendeur" >Nom du notaire côté vendeur</span>
                        <input type="text" class="form-control " id="Nom_notaire_vendeur" name="Nom_notaire_vendeur" require>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Adresse_notaire_vendeur" >Adresse du notaire côté vendeur</span>
                        <input type="text" class="form-control " id="Adresse_notaire_vendeur" name="Adresse_notaire_vendeur" require>
                    </div>
                </div>
            </div>
                            
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br><br>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_acquereur" >Nom de l'acquéreur</span>
                        <input type="text" class="form-control " id="Nom_acquereur" name="Nom_acquereur" require>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Prenom_acquereur" >Prénom de l'acquéreur</span>
                        <input type="text" class="form-control " id="Prenom_acquereur" name="Prenom_acquereur" require>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Adresse_acquereur" >Adresse acquéreur</span>
                        <input type="text" class="form-control " id="Adresse_acquereur" name="Adresse_acquereur" require>
                    </div>
                </div>
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Type_societe_acquereur" >Type de société côté acquéreur (si besoin)</span>
                        <select class="custom-select" class="form-control " id="Type_societe_acquereur" name="Type_societe_acquereur">
                            <option disabled selected value> -- Selectionnez une option -- </option>
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
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_societe_acquereur" >Nom de la société côté acquéreur (si besoin)</span>
                        <input type="text" class="form-control " id="Nom_societe_acquereur" name="Nom_societe_acquereur">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_representant_acquereur" >Nom du représentant(e) côté acquéreur (si besoin)</span>
                        <input type="text" class="form-control " id="Nom_representant_acquereur" name="Nom_representant_acquereur">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Nom_notaire_acquereur" >Nom du notaire côté acquéreur</span>
                        <input type="text" class="form-control " id="Nom_notaire_acquereur" name="Nom_notaire_acquereur" require>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="Adresse_notaire_acquereur" >Adresse du notaire côté acquéreur</span>
                        <input type="text" class="form-control " id="Adresse_notaire_acquereur" name="Adresse_notaire_acquereur" require>
                    </div>
                </div>
            </div>
            -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            <br><br>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Envoyer</button> 
            </div>

        </form>
    </center>
        <?php
            if(isset($erreur)) {
                echo '<font color="red">'.$erreur."</font>";
            }
        ?>
    </body>
</html>
