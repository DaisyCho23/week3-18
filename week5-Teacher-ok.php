<DOCTYPE html> 
<?php
session_start();

if($_SESSION["login"] != "P" && $_SESSION["login"] != "T"){
    header("Location:homepage.php");
}

?>
<html>
    
<head>
    <meta charset="utf-8">
</head> 

<body>
    老師的網頁
    <br>
    <a href="logout.php">Logout</a>
    <a href="Principal-ok.php">Principal</a>
    <a href="Student-ok.php">Student</a>
    </body>  
</html>