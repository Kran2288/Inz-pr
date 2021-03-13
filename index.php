
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
    require_once 'include/db.php';

    $result = mysqli_query($connect, "SELECT * FROM `social_networks`");
    $post = mysqli_query($connect, "SELECT * FROM `posts_index`");
    
    $res = $connect->query('SELECT * FROM posts_index');
    $data_count = mysqli_num_rows($res);
    
  ?> 
  <? include "inc/header.php" ?>

<div class="index_conntent">
  <div class="index_conntent-position">
    <h1 class="index_conntent-h1">Лучшие новости за прошедшее время(<?echo($data_count)?>)</h1>
    <div class="index_conntent-items row">
      
      <?php
            while($posts = mysqli_fetch_assoc($post)){
                
              ?>
              <div class="col-sm">
                <div class="index_conntent-item">
                <img src="<?php echo $posts['link_img'] ?>" class="index_conntent-img"  alt="">
                <h2><?php echo $posts['name'] ?></h2>
                <p><?php echo $posts['description'] ?></p>
                <p><?php echo $posts['data'] ?></p>
                </div>
              </div>
            <?php
            }
      ?>
      
     
    </div>
  </div>
</div>

<? include "inc/footer.php" ?>
<script src="https://kit.fontawesome.com/4e625ca82e.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>