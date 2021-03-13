<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Inz-project</title>
</head>
<body>
<?php
    include_once "../include/db.php";
    $result = mysqli_query($connect, "SELECT * FROM `social_networks`");
  ?> 
  <? include 'header.php' ?>


 <div class="about">
    <div class="about_text">
    <h1 class="about_text-h1"> О нас</h1>
    <div class="d-flex flex-row ">
        <div class="about_text-img">
            <img src="/img/7HZrB_B32pA.png" class="about_img" alt="">
        </div>
        <div class="about_text-text">
            <p>Аширов Айрат<br>
            8(916)-633-07-76<br>
            ashirov.ayrat@gmail.com<br>
            Здорово, когда на странице о компании есть фотографии и видео: производства или магазинов, сотрудников, ключевых лиц. <br>
            Изображения, фотографии или видеопрезентация дадут о фирме больше информации, чем просто текст.<br>
            Плохо, если визуальная часть содержит абстрактные стоковые изображения, не имеющие отношения к вашей компании.<br> Такие изображения снижают доверие к бренду.<br>
            Например, для нашего раздела об агентстве мы специально фотографировали сотрудников за работой и отдельно — наш офис.<br> Так посетители сайта составят представление, кто работает над их проектами.<br>
            Иллюстрации нужны не всегда. Например, горнодобывающая компания делает сайт, чтобы привлекать зарубежных инвесторов.<br> В этом случае посетители зайдут в раздел о компании, чтобы узнать о размере компании, финансовой надежности, планах на развитие. 
            </p>
        </div>
    </div>
    </div>
 </div>
  



<? include "footer.php" ?>
<script src="https://kit.fontawesome.com/4e625ca82e.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>