<DOCTYPE html> 
 
<html>
    
<head>
    <meta charset="utf-8">
</head> 

<body>
    非法進入網頁!<br>
    網頁將在三秒後跳轉至登入頁面或<br>
    <a href="week5.php">點選這裡</a>
    <?php
    header("Refresh:3;url=week5.php");    //等三秒再跳到指定網頁
    ?>
    
    
    </body>  
</html>
