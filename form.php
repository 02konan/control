<?php
require 'insertion.php';
require 'config.php';
require 'modification.php'; 
require 'mise_a_jour.php';  

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulaire</title>
</head>
<body> 
    <div class="formulaire">
    <div class="return">
        <?php if (isset($msg['insert'])) : ?>

            <p><?= $msg['insert'] ?></p>

        <?php endif ?>
    </div>
    <form action=""  method="POST" > 
<label for="image">Image :</label>
    <input type="file" id="image" name="image" ><br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" ><br> 
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" ><br> 
    <label for="numero">Numero :</label>
    <input type="text" id="num" name="numero"   ><br>
     <label for="pass">mot de passe:</label>
    <input type="password" id="mot_pass" name="mot_pass" ><br>
    <label for="sexe">sexe :</label>
    <select name="sexe" id="sexe">
        <option value="homme" >Homme</option>
        <option value="femme" >femme</option>
    </select>
    <label for="fonction">Fonction :</label>
    <select name="fonction" id="fonction">
        <option value="aucune">aucune</option>
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
    </select>
    <br> 
    <input type="submit" name="submit" value="Envoyer">
</form>
    </div>
</body>
</html>
