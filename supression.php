:<?php
include 'config.php';
include 'selection.php';

if (isset($_GET['suprime']) && is_numeric($_GET['suprime']))   {
    
    $id= $_GET['suprime'];
   
    $rqt= $con->prepare("DELETE FROM utilisateur WHERE id =:id");  

    $rqt->bindValue(':id', $id, PDO::PARAM_INT);

    $suprime= $rqt->execute();
}





?>  