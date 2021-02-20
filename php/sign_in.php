<?php

if(isset($_POST['sing_in'])) {

  $error = false;

  if(isset($_POST['login']) && !empty($_POST['login'])) $login = $_POST['login'];
  else $error = true;

  if(isset($_POST['password']) && !empty($_POST['password'])) $password = $_POST['password'];
  else $error = true;

  if(!$error) {

    require_once 'connect.php';

    $exist = $pdo->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' LIMIT 1")->rowCount();

    session_start();

    $_SESSION['login'] = ($exist) ? $login : '';

  }

}

header('Location: ' . '../pass.php');

?>
