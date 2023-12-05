 <?php
   try {

    $nom_utilisateur='root';
    $mot_pass= '';
    $con = new PDO("mysql:host=localhost;dbname=controleur", $nom_utilisateur, $mot_pass);

   } catch (PDOException $e) {
    echo $e->getMessag(); 
   }   
 ?> 