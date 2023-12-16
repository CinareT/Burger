
<?php
include_once "./connect.php";
echo $title;
if(empty($_POST["title"])){
    setcookie("status", "empty");
    header("Location:index.php");
    exit;
}else{
    if(isset($_COOKIE['status'])){
    setcookie('status', 'empty',time()-1);
}
}


$title=$_POST['title'];


$addTodo=$conn->prepare("SELECT `description`, `title`, `price`, `img` FROM `menu` WHERE ?");
$addTodo=$conn->prepare("SELECT `description`, `title`, `img` FROM `about` WHERE ?");
    $addTodo->execute([$title]);
    if($addTodo->rowCount()> 0){
      setcookie("status", "success");

        header("Location:index.php");
        exit;
    }
    else{
        if(isset($_COOKIE['status'])){
        setcookie('status', 'success',time()-1);
        echo "error adding";
    }
    }
?>  

