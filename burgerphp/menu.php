<?php
include_once './connect.php';
//include_once './server.php';


$addTodo = $conn->prepare("SELECT * FROM menu");
$addTodo->execute();
$menu = $addTodo->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/iindex.css">
    <title>Document</title>
</head>
<body>

<div class="root">
    <?php include "./header.php" ?>
    <h1>Burgerlerimiz</h1>
    <div class="burgers">
        <?php
        foreach ($menu as $b) {
          ?>
          <div class="burger">
            <div class="card_img"><img src="./images/<?=  $b['img']?>" alt=""></div>
            <div class="card_info">
                <div class="title"><?= $b['title']?></div>
            <div class="price"><?=$b['price']?></div>
           
                
                <div class="description"><?=$b['description']?></div>
            </div>
        </div>
        <?php
        }
        ?>
        
    </div>
            
        

        <?php include "./footer.php" ?> 
    </div>
    
</body>
</html>


