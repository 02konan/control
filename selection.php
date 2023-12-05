<?php
include  'config.php';

$data = $con->query("SELECT * FROM utilisateur")->fetchAll();

if (empty($data)) {
    $resul['select'] = 'aucune data disponible pour l\'instant';
}


?> 