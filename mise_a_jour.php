<?php
require 'config.php';
require 'modification.php';
require 'selection.php';

if (isset($_GET['modif']) && !empty($_POST['modif'])) {
     
    $id = $_GET['modif'];
    $image = $_POST['image'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['numerO'];
    $sexe = $_POST['sexe'];
    $fonction = $_POST['fonction'];

    $requete = "UPDATE utilisateur SET image = :image, nom = :nom, prenom = :prenom, numero = :numero, sexe = :sexe, fonction = :fonction WHERE id = :id";

    $st = $con->prepare($requete);

    $st->bindParam(':id', $id, PDO::PARAM_INT);
    $st->bindParam(':image', $image);
    $st->bindParam(':nom', $nom);
    $st->bindParam(':prenom', $prenom);
    $st->bindParam(':numero', $numero);
    $st->bindParam(':sexe', $sexe);
    $st->bindParam(':fonction', $fonction);

    try {
        $st->execute();
        echo 'mise à jour réussie';
    } catch (PDOException $e) {
        echo 'une erreur s\'est produite' . $e->getMessage();
    }
}
?>
