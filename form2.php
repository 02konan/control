<?php
require 'insertion.php';
require 'config.php';
require 'modification.php'; 
require 'mise_a_jour.php';  
require 'selection.php';

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
     
    <form action=""  method="POST" > 
<label for="image">Image :</label>
    <input type="file" id="image" name="image" value=" <?= $image_modif ?? "" ?>" ><br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" value=" <?= $nom_modif ?? "" ?>"><br> 
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" value=" <?= $prenom_modif ?? "" ?>" ><br> 
    <label for="numero">Numero :</label>
    <input type="text" id="num" name="numero" value=" <?= $numero_modif ?? "" ?>" ><br>
     <label for="pass">Acien mot de passe : </label>
    <input type="password" id="mot_pass" name="#" ><br>
    <label for="pass">nouveau mot de pass :</label>
    <input type="password" id="mot_pass" name="mot_pass" ><br>
    <label for="sexe">sexe :</label>
    <select name="sexe" id="sexe">
    <option value="homme" <?= ($sexe_modif === 'homme') ? 'selected' : '' ?>>Homme</option>
    <option value="femme" <?= ($sexe_modif === 'femme') ? 'selected' : '' ?>>femme</option>
    </select>

    <label for="fonction">Fonction :</label>
  <select name="fonction" id="fonction">
    <option value="aucune">aucune</option>
    <option value="1" <?= ($fonction_modif === '1') ? 'selected' : '' ?>>1</option>
    <option value="2" <?= ($fonction_modif === '2') ? 'selected' : '' ?>>2</option>
    <option value="3" <?= ($fonction_modif === '3') ? 'selected' : '' ?>>3</option>
   </select>

    <br> 
    <input type="submit" name="submit" value="Envoyer">
</form>
    </div>
</body>
</html>
