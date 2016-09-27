<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once("conf.php");

  $conn = mysqli_connect($db_host,$db_user,$db_password, $db_db);
  $retour=$conn->query("SELECT Nom, Duree, Tarif FROM livraisons ");




?>
