<?php


require 'config.php';
require 'insertion.php';
require 'selection.php';
require 'supression.php';
require 'modification.php'; 
require 'supression.php';
require 'mise_a_jour.php';


 
 
?> 

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Tableau de Bord</title>
    
</head>
<body>

<h1>Tableau de Bord</h1>

<table>
    <tr>
        <th>ID</th>  
        <th>Image</th> 
        <th>Nom</th>
        <th>Prénom</th> 
        <th>Numéro</th>
        <th>Sexe</th>
        <th>Fonction</th>
        <th>Action</th> 
        
    </tr>
    <tr> 
        <?php foreach ($data as $item) :?> 
     
        <td><?= $item['id'] ?></td> 
        <td><img src="<?= $item['image'] ?>" alt=""></td>
        <td><?= $item['nom'] ?></td>
        <td><?= $item['prenom'] ?></td>
        <td><?= $item[ 'numero'] ?></td> 
        <td><?= $item['sexe'] ?></td>
        <td><?= $item['fonction'] ?></td> 
        <td> 
            <a href="http://localhost/control/form2.php?modif=<?= $item['id']; ?>"><button class="active">modifier</button></a>
            <a href= "http://localhost/control/?suprime=<?= $item['id']; ?>"><button class="desactiver">suprimer</button></a>
        </td>
    </tr>
    <?php endforeach ?> 
     <div class="return">
     <?php if (isset($resul['select'])): ?>

<p><?= $resul['select'] ?></p>

<?php endif ?>
     </div>
</table>

</body>
</html>
