<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/pass.css">
  <title>Оформить заявку</title>
</head>

<body>

  <?php if($_SESSION['login'] == 'admin' || $_SESSION['login'] == 'operator') : ?>
    <a href="./account.php" class="account">Кабинет</a>
  <?php endif; ?>

  <nav class="menu" id="menu">
    <button id="open-nav" class="open-nav">Sign in</button>
    <button id="close-nav" class="close-nav">x</button>
    <form class="sign-in" action="php/sign_in.php" method="post">
      <input type="text" name="login" placeholder="Логин">
      <input type="password" name="password" placeholder="Пароль">
      <input type="submit" name="sing_in" value="Войти">
    </form>
  </nav>

  <form action="photo.php" method="POST" class="create-pass" id="create-pass">
      <input type="text" name="fullname" pattern="[A-Za-z\s]{3,50}" placeholder="ФИО" required>
      <input type="email" name="email" placeholder="Почта" required>
      <select class="pass-type" id="pass-type" name="pass-type" >
        <option value="const" selected>Постоянный</option>
        <option value="temp">Временный</option>
      </select>

      <input type="date" id="pass-start" name="pass-start" hidden>
      <input type="date" id="pass-end" name="pass-end" hidden>

      <input type="submit" id="confirm" name="confirm" value="Продолжить">

  </form>

  <script defer src="/js/pass.js" charset="utf-8"></script>



</body>

</html>
