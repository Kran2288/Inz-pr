<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>News from Russia</title>
</head>
<body>
<?php
    include_once "../include/db.php";
    $result = mysqli_query($connect, "SELECT * FROM `social_networks`");
    $result1 = mysqli_query($connect, "SELECT * FROM `preparation_process`");
    $result2 = mysqli_query($connect, "SELECT * FROM `preparation_process_link`");
  ?> 
  <? include 'header.php' ?>


 <div class="R-p_main-conntent">
    <div class="R-p_main-conntent_position">
      <h1 class="R-p_main-text-h1">Процесс подготовки</h1>
      <?php
            while($Rp = mysqli_fetch_assoc($result1)){?>
                <div class="R-p_main-text-item">
                <a href="<?php echo $Rp['link'] ?>" class="R-p_main-text-item-a"><?php echo $Rp['name'] ?></a>
                <p class="R-p_main-text-item-p"><?php echo $Rp['description'] ?></p>
                </div>

            <?php
            }
      ?>
      <h1 class="R-p_main-text-h1">Ссылки на конференции и трансляции</h1>
      <?php
            while($Rp_link = mysqli_fetch_assoc($result2)){?>
                <a href="<?php echo $Rp_link['link'] ?>" class="R-p_main-text-item-a"><?php echo $Rp_link['link'] ?></a><br>
            <?php
            }
      ?>
    </div>
    
 </div>
  



<? include "footer.php" ?>
<script src="https://kit.fontawesome.com/4e625ca82e.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>