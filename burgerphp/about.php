<?php  

include_once './connect.php';



$addTodo = $conn->prepare("SELECT * FROM aboutt");
$addTodo->execute();
$aboutt = $addTodo->fetch(PDO::FETCH_ASSOC);

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
        <div class="about">
            <div class="about_img">
                <img src="./images/<?= $aboutt['img']?>" alt="">
            </div>
            <h2 class="about_title"><?= $aboutt['title'] ?></h2>
            <p><?= $aboutt['description'] ?></p>
        </div>
 
        <?php include "./footer.php" ?>
    </div>
</body>
</html>