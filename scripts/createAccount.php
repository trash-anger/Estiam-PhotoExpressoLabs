<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once("./conf.php");

  session_start();

  $conn = mysqli_connect($db_host,$db_user,$db_password, $db_db);

	$mail = $_POST['mail'];
	$password = md5($_POST['password']);
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

  $stmt = $conn->prepare("INSERT INTO users (mail, password, firstname, lastname) VALUES (?, ?, ?, ?)");
  $stmt->bind_param('ssss', $mail, $password, $firstname, $lastname);

  if($stmt->execute() == 1){
    echo "New record created successfully";
  } else {
    echo 'ERROR';
  }




?>