<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once("conf.php");
    $id = $_GET['id'];
    $conn = mysqli_connect($db_host,$db_user,$db_password, $db_db);
    $retour=$conn->prepare("DELETE FROM livraisons WHERE ID = ?");
    $retour->bind_param('i', $id);
    $retour->execute();
 ?>
