<?php  
include_once './connect.php';
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
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="root">
        <?php include "./header.php" ?>
        <div class="main">
            <a  href="./menu.php">
                <button class="over_btn">SIPARIS VER</button>
            </a>
        </div>
      <?php include "./footer.php" ?>
    </div>
</body>
</html>