<?php
include  'config.php';
include  'insertion.php';

$data = $con->query("SELECT * FROM utilisateur")->fetchAll();

if (empty($data)) {
    $resul['select'] = 'aucune data';
}


?> 