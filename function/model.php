<?php
    function db_connect()
    {
        try {

            $nom_utilisateur='root';
            $mot_pass= 'password';
            return new PDO("mysql:host=localhost;dbname=controleur", $nom_utilisateur, $mot_pass);

        } catch (PDOException $e) {
            echo $e->getMessag();
        }
    }

    function Insertion($table, $data)
    {
        //die(var_dump($data));
        $sql = "INSERT INTO $table (nom, prenom, mot_de_pass, numero,sexe,fonction,image)
                VALUES (:nom, :prenom, :mot_de_pass , :numero, :sexe, :fonction,:image)";

        $con = db_connect();

        $stmt=$con->prepare($sql);

        $stmt->bindValue(':nom', $data['nom']);
        $stmt->bindValue(':prenom', $data['prenom']);
        $stmt->bindValue(':mot_de_pass',$data['mot_de_pass'] );
        $stmt->bindValue(':numero', $data['num']);
        $stmt->bindValue(':sexe', $data['sexe']);
        $stmt->bindValue(':fonction', $data['fonction']);
        $stmt->bindValue(':image', $data['image']);


       return $stmt->execute();
    }
    function Delete($table, $id)
    {
        $con = db_connect();

        $rqt = $con->prepare("DELETE FROM utilisateur WHERE id = :id");

        $rqt->bindValue(':id', $id, PDO::PARAM_INT);

        return $rqt->execute();
    }