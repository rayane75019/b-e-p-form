<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de vente</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h2>Formulaire de vente</h2>
        <br>
        <form methode="POST" class="needs-validation" novalidate>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="mail" >Votre e-mail</span>
                        <input type="text" class="form-control " id="mail" disabled value="coco" name="mail" required> <!-- "<?php //if(isset($mail)) { echo $mail; } ?>" Dans value -->
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="typeDeMandat" >Type de mandat</span>
                        <select class="custom-select" class="form-control " id="typeDeMandat" name="typeDeMandat">
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
                        <input type="text" class="form-control " id="nDeReference" name="nDeReference" required>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for="natureDuBien" >Nature du bien</span>
                        <select class="custom-select" class="form-control " id="natureDuBien" name="natureDuBien">
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
                        <span class="input-group-text" for="typeDeMandat" >Charge honoraire</span>
                        <select class="custom-select" class="form-control " id="typeDeMandat" name="typeDeMandat">
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
                
                <div class="col-md-8 mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Mon Doc</span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choisir un fichier</label>
                        </div>
                    </div>
                </div>
            </div>                        
    </form>
            <?php
                // if(isset($erreur)) {
                //     echo '<font color="red">'.$erreur."</font>";
                // }
            ?>
        
    </body>
</html>
