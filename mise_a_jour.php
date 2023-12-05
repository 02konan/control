<?php
require 'config.php';
 
 
if ( !empty($_POST['submit']) ) {
    
    $id = $_POST['modif'];
    $image = $_POST['image'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['numero'];
    $mot_de_pass = $_POST['mot_pass'];
    $sexe = $_POST['sexe'];
    $fonction = $_POST['fonction'];

    $requete = "UPDATE utilisateur SET  image = :image, nom = :nom, prenom = :prenom, numero = :numero, sexe = :sexe, fonction = :fonction,mot_de_pass =:mot_pass WHERE id = :id";

    $st = $con->prepare($requete);

    $st->bindParam(':id', $id, PDO::PARAM_INT);
    $st->bindParam(':image', $image);
    $st->bindParam(':nom', $nom);
    $st->bindParam(':prenom', $prenom);
    $st->bindParam(':numero', $numero);
    $st->bindParam(':sexe', $sexe);
    $st->bindParam(':fonction', $fonction);
     $st->bindParam(':mot_pass', $mot_de_pass);
    
    
 $st->execute();
    
} 
?>
