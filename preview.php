<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/preview.css">
  <title>Пропуск</title>
</head>

<body>

  <?php

  require_once 'php/connect.php';

  $fullname = $_POST['fullname'];

  if($_POST['pass-type'] == 'temp') {
    $start = $_POST['pass-start'];
    $end   = $_POST['pass-end'];
  }


  require ($_POST['pass-type'] == 'temp') ? 'guest.php' : 'employee.php';

  ?>

</body>

</html>
