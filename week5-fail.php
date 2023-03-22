<?php ob_start(); ?>   <!--避免header already set的錯誤-->
<?php
session_start();

if($_SESSION["login"]=="No"){

}else{
    header("Location:error.php");
}

?>
<DOCTYPE html> 
 
<html>
    
<head>
    <meta charset="utf-8">
</head> 

<body>
    登入失敗!<br>
    網頁將在三秒後跳轉至登入頁面或<br>
    <a href="week5.php">點選這裡</a>
    <?php
    header("Refresh:3;url=week5.php");    //等三秒再跳到指定網頁
    ?>
    
    
    </body>  
</html>
<?php ob_flush(); ?>