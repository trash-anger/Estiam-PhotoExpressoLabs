<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once("conf.php");

  session_start();

  $conn = mysqli_connect($db_host,$db_user,$db_password, $db_db);

	$mail = $_POST['mail'];
	$password = md5($_POST['password']);

  $query = "SELECT id, mail, password, lastname, firstname FROM users WHERE mail=? LIMIT 1";

  if($stmt = $conn->prepare($query)){
    $stmt->bind_param('s', $mail);

    $stmt->execute();
    /* Association des variables de résultat */
    $stmt->bind_result($idDB, $mailDB, $passwordDB, $lastnameDB, $firstnameDB);
    /* Lecture des valeurs */
    while ($stmt->fetch()) {
      if($mail == $mailDB && $password == $passwordDB){
        $_SESSION['id']  = $idDB;
        $_SESSION['firstname'] = $firstnameDB;
        $_SESSION['lastname'] = $lastnameDB;
        $_SESSION['email'] = $mailDB;
        echo 'test';
      } else {
        echo 'BAd login';
      }
    }
  } else {
    var_dump($conn->error);
  }

?>
