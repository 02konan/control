<?php 
 require 'selection.php';
 require 'supression.php';
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

<header>
    <h1>Tableau de Bord</h1>
    <a href="/form.php"> Ajouter </a>
</header>

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
            <a href="/control/form2.php?modif=<?= $item['id']; ?>"><button class="active">modifier</button></a>
            <a href=  "/control/?suprime=<?= $item['id']; ?>"><button class="desactiver">suprimer</button></a>
        </td>
    </tr>
    <?php endforeach ?> 
     <div class="return">
     <?php if (isset($resul['select'])) : ?>

 <marquee behavior="" direction="left">
<p><?= $resul['select'] ?></p>

 </marquee>
<?php endif ?>
     </div>
</table>

</body>
</html>
