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

<div class="news_conntent">
    <div class="news_content-position">
    
        
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