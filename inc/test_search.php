<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/dist/css/lightbox.css">
    <title>Поиск: <?php echo $_GET['search'] ?></title>
</head>
<body>
<? include "../inc/header.php" ?>
  <h2>Поисковой запрос: <?php echo $_GET['search'];?></h2>  
<?php
    require_once "../include/db.php";

    $result = mysqli_query($connect, "SELECT * FROM `social_networks`");
    
    $search_get = $_GET['search'];
    $sql = "SELECT * FROM news WHERE 'title' LIKE '%$search_get%'";
    $select = mysqli_query($connect, $sql);

    while($select_while = mysqli_fetch_assoc($select)){
        ?>
        <br>
            <b><?php echo $select_while['id'];?><?php echo $select_while['title']?></b>
        <?php
    }
  ?> 
  

  <? include "../inc/footer.php" ?>
</body>
</html>