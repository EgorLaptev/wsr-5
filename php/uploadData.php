<?php

$error = false;

if(isset($_POST['fullname']) && !empty($_POST['fullname'])) $fullname = $_POST['fullname'];
else $error = true;

if(isset($_POST['email']) && !empty($_POST['email'])) $email = $_POST['email'];
else $error = true;

if(isset($_POST['pass-type']) && !empty($_POST['pass-type'])) $type = $_POST['pass-type'];
else $error = true;

if($type == 'temp') {
  if(isset($_POST['pass-start']) && !empty($_POST['pass-start'])) $start = $_POST['pass-start'];
  else $error = true;
  if(isset($_POST['pass-end']) && !empty($_POST['pass-end'])) $end = $_POST['pass-end'];
  else $error = true;
}

if(isset($_FILES['upload']) && !empty($_FILES['upload'])) $file = addslashes(file_get_contents($_FILES['upload']['tmp_name']));
else $errot = true;

if(!$error) {

  require_once 'connect.php';

  if($type == 'temp')
    $query = "INSERT INTO `clients` (`id`, `fullname`, `email`, `type`, `start`, `end`, `image`) VALUES (NULL, '$fullname', '$email', '$type', '$start', '$end', '$file')";
  else if($type == 'const')
    $query = "INSERT INTO `clients` (`id`, `fullname`, `email`, `type`, `start`, `end`, `image`) VALUES (NULL, '$fullname', '$email', '$type', NULL, NULL, '$file')";

  // FIXME: Переделать под безопасный запрос
  // FIXME: Добавить проверку существующих пользователей по email
  $pdo->query($query);

}

echo '<script>window.location.href="../photo.php"</script>';

?>
