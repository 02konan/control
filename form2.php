<?php
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
     
    <form action="form2.php"  method="POST" > 
        <input type="hidden" name="modif" value="<?= isset($_GET['modif'])? $_GET['modif'] : "" ?>">
<label for="image">Image :</label>
    <input type="file" id="image" name="image" value=" <?=isset ($image_modif) ? $image_modif : "" ?>" ><br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" value=" <?= isset($nom_modif) ? ($nom_modif) : "" ?>"><br> 
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" value=" <?= isset($prenom_modif) ? $prenom_modif : "" ?>" ><br> 
    <label for="numero">Numero :</label>
    <input type="text" id="num" name="numero" value=" <?= isset($numero_modif) ?$numero_modif :"" ?>" ><br>
     <label for="pass">Acien mot de passe : </label>
    <input type="password" id="mot_pass" name="#" ><br>
    <label for="pass">nouveau mot de pass :</label>
    <input type="password" id="mot_pass" name="mot_pass" ><br>
    <label for="sexe">sexe :</label>
    <select name="sexe" id="sexe">
    <option value="homme" <?= (!empty($sexe_modif) === 'homme') ? 'selected' : '' ?>>Homme</option>
    <option value="femme" <?= (!empty($sexe_modif) === 'femme') ? 'selected' : '' ?>>femme</option>
    </select>

    <label for="fonction">Fonction :</label>
  <select name="fonction" id="fonction">
    <option value="aucune">aucune</option>
    <option value="Directeur" <?= ($fonction_modif === 'Directeur') ? 'selected' : '' ?>>Directeur</option>
    <option value="Professeur" <?= ($fonction_modif === 'Professeur') ? 'selected' : '' ?>>Professeur</option>
    <option value="Educateur" <?= ($fonction_modif === 'Educateur') ? 'selected' : '' ?>>3</option>
   </select>

    <br> 
    <a href="http://localhost/control/">initialiser</a> 
    <input type="submit" name="submit" value="Envoyer">
</form>
    </div>
</body>
</html>
