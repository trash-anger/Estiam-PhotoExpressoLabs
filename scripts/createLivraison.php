<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once("./conf.php");

  $conn = mysqli_connect($db_host,$db_user,$db_password, $db_db);

	$nameLivraison = $_POST['nameLivraison'];
	$timeLivraison = $_POST['timeLivraison'];
	$tarifLivraison = $_POST['tarifLivraison'];

  $stmt = $conn->prepare("INSERT INTO livraisons (Nom, Duree, Tarif) VALUES (?, ?, ?)");
  $stmt->bind_param('ssd', $nameLivraison, $timeLivraison, $tarifLivraison);

  if($stmt->execute() == 1){
    echo "New record created successfully";
  } else {
    echo 'ERROR';
  }




?>