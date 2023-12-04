<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] =='POST') { 

    if (isset($_POST['submit'])) {

        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $mot_de_pass= md5($_POST['mot_pass']);
        $num= $_POST['numero'];
        $sexe= $_POST['sexe'];
        $fonction= $_POST['fonction']; 
        $image= $_POST['image'];

        if (empty($nom) || empty($prenom) || empty($mot_de_pass) || empty($num) || empty($sexe) || empty($fonction) ) {
            $msg['insert']="veiller remplie tous les champs svp!";
        }elseif (!is_numeric($num)) {
            $msg['insert']="numero de telephone incorrect !";

        }
         else {
            $sql = "INSERT INTO utilisateur (nom, prenom, mot_de_pass, numero,sexe,fonction,image)
            VALUES (:nom, :prenom, :mot_de_pass , :numero, :sexe, :fonction,:image)";
           
        $stmt->bindValue(':nom', $nom);
        $stmt->bindValue(':prenom', $prenom);
        $stmt->bindValue(':mot_de_pass',$mot_de_pass );
        $stmt->bindValue(':numero', $num);
        $stmt->bindValue(':sexe', $sexe);
        $stmt->bindValue(':fonction', $fonction);
        $stmt->bindValue(':image', $image);
         
 
        $inser= $stmt->execute();
        if ($inser) {
            $msg['insert'] = "enregistrement effectuer ";
        } else {
            $msg['insert'] = "echec d'enregistrement ";
        }
          
        $stmt = $con->prepare($sql);
        }
         
    } 
}
?> 
