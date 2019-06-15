<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>HW</title>
    <style>
    header {
      background: url('images/gallery/background.jpg');
      height: 40px;
      margin-bottom: 30px;
    }

    footer {
      background: url('images/gallery/background.jpg');
      height: 140px;
      margin-top: 30px;
    }

    .galleryWrapper__screen {
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #222;
      opacity: 0.8;
      position: fixed;
      top: 0;
      z-index: 100;
      display: block;
      text-align: center;
    }

    .galleryWrapper__image {
      max-height: 80%;
      max-width: 80%;
      z-index: 101;
      position: absolute;
      margin: auto;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
    }

    .galleryWrapper__close {
      z-index: 101;
      position: absolute;
      top: 0;
      right: 0;
    }

    .galleryWrapper__next {
      z-index: 101;
      position: absolute;
      top: 50%;
      right: 0;
    }

    .galleryWrapper__back {
      z-index: 101;
      position: absolute;
      top: 50%;
      left: 0;
    }

    .img-thumbnail {
      margin: 15px;
    }

    .date {
      text-align: right;
      padding-top: 30px;
      padding-right: 20px;
    }
    </style>
</head>
<body>
<header></header>
<div class="galleryPreviewsContainer">
  <?php
  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      // и регулярное выражение здесь, чтобы избавиться от копий файлов, которые начинаются с  ._
      if ($files[$i] != "." && $files[$i] != ".." && preg_match("/^[^._]{2}/", $files[$i])) $result[] = $files[$i];
    }
    return $result;
  }

    $dir = "images"; // путь к директории, где изображения
    $files = scandir($dir); // список файлов этой директории
    $files = excess($files); // удалить лишние файлы
  ?>
 
<?php 
   //  вывод изображений на страницу 
    for ($i = 0; $i < count($files); $i++) { ?>
    <img src="<?=$dir."/".$files[$i]?>" class="img-thumbnail" alt="" width="200" data-full_image_url="<?=$dir.DIRECTORY_SEPARATOR.$files[$i]?>"/>
  
<?php } ?>
    
  </div>
  <footer>
    <div class="date">
    <?php 
    $date = getdate();
    echo $date['weekday'].', '.$date['mday'].' '.$date['month'];
    ?>
    </div>
  </footer>
<script type="text/javascript" src="main.js"></script>
</body>
</html>