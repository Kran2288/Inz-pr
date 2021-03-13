<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/dist/css/lightbox.css">
    <title>Inz-project</title>
</head>
<body>
<?php
    require_once "../include/db.php";

    $result = mysqli_query($connect, "SELECT * FROM `social_networks`");
    $photo = mysqli_query($connect, "SELECT * FROM `photos_gal`");
    
    $res = $connect->query('SELECT * FROM photos_gal');
    $data_count = mysqli_num_rows($res);
  ?> 
  <? include "../inc/header.php" ?>
<style>
    .photos_container img{
            transition:0.5s;
            margin-left:1rem;
            margin-bottom: 1rem;
    }
    .photos_container img:hover{
            transform: scale(1.1);
            
    }
</style>
<div class="Photos_conntent">
  <div class="photos_conntent-position">
    <h1 class="index_conntent-h1">Лучшии фото москвы(<?echo($data_count)?>)</h1>
    <p> Нажмите на фотографию что-бы посмотреть получше</p>
    <div class="photos_container">
    <?php
            while($photos = mysqli_fetch_assoc($photo)){    
              ?>
              <a href="<?php echo $photos['link'] ?>" data-lightbox="test"><img src="<?php echo $photos['link'] ?>" alt="no-image"></a>
            <?php
            }
      ?>
    </div>    
    </div>
  </div>
</div>

<? include "../inc/footer.php" ?>
<script src="https://kit.fontawesome.com/4e625ca82e.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>