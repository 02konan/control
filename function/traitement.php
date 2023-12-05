<?php

require_once 'model.php';
//creat
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    if (isset($_POST['submit'])) {

        $pwd = MD5($_POST['mot_pass']);
        $data = [
            "nom" => $_POST['nom'],
            "prenom" => $_POST['prenom'],
            "mot_de_pass" => $pwd,
            "num" => $_POST['numero'],
            "sexe" => $_POST['sexe'],
            "fonction" => $_POST['fonction'],
            "image" => $_POST['image'],
        ];

        $inser = Insertion("utilisateur", $data);

        if ($inser) {
            $msg['insert'] = "enregistrement effectuer ";
            //toujour rediriger àla fin du processus
            header("location:/");
            exit();
        } else {
            $msg['insert'] = "echec d'enregistrement ";
        }

    }
}
//select
include 'config.php';

$data = $con->query("SELECT * FROM utilisateur")->fetchAll();

if (empty($data)) {
    $resul['select'] = 'aucune data disponible pour l\'instant';
}


//edit
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

//update
if (!empty($_POST['submit'])) {

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


//delete
if (isset($_GET['suprime']) && is_numeric($_GET['suprime'])) {

    $id = $_GET['suprime'];

    $rqt = Delete("utilisateur", $id);

    header("location:/");
}