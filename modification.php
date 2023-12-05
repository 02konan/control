<?php
require 'config.php';
if (isset($_GET['modif']) && is_numeric($_GET['modif'])) {
    
    $id = $_GET['modif'];

     
    if (is_numeric($id)) {
        
        $reqt = $con->prepare("SELECT * FROM utilisateur WHERE id = :id");
        $reqt->bindValue(':id', $id, PDO::PARAM_INT);
        $reqt->execute();

        $modif = $reqt->fetch(PDO::FETCH_ASSOC);

         
        if ($modif) {
            
            $nom_modif = $modif['nom'];
            $image_modif = $modif['image'];
            $prenom_modif = $modif['prenom'];
            $numero_modif = $modif['numero'];
            $mot_modif = $modif['mot_de_pass'];
            $sexe_modif = $modif['sexe'];
            $fonction_modif = $modif['fonction'];
        } else {
            
            die('Aucune donnée disponible pour cet utilisateur.');
        }
    }
}
?>
