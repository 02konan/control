<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/form.css">
    <title>Formulaire</title>
</head>
<body> 
    <div class="formulaire">
    <div class="return">
        <?php if (isset($msg['insert'])) : ?>

            <p><?= $msg['insert'] ?></p>

        <?php endif ?>
    </div>
    <form action="../index.php" method="POST">
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
            <option value="Directeur" >Directeur</option>
            <option value="Professeur" >Professeur</option>
            <option value="Educateur" >Educateur</option>
        </select>
        <br> 
        <a href="../index.php">retour</a>
        <input type="submit" name="submit" value="Envoyer">
    </form>
    </div>
</body>
</html>
