<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/photo.css">
  <title>Загрузите ваше фото</title>
</head>

<body>
  <div>
    <h1 class="title">Загрузите ваше фото</h1>
    <form enctype="multipart/form-data" class="upload-photo" action="./php/uploadData.php" method="POST">
      <input type="file" name="upload" class="upload" id="upload">
      <input type="submit" name="confirm" id="confirm" value="Подтвердить" disabled>
      <?php foreach ($_POST as $key => $value) : ?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>">
      <?php endforeach; ?>
    </form>
  </div>
  <canvas id="cropImage"></canvas>

  <script defer src="js/loadPhoto.js" charset="utf-8"></script>

</body>

</html>
