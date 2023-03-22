<DOCTYPE html> 
<?php
session_start();

if($_SESSION["login"] != "P"){
    header("Location:homepage.php");
}

?>
<html>
    
<head>
    <meta charset="utf-8">
</head> 

<body>
    校長的網頁
    <br>
    <a href="logout.php">Logout</a>
    <a href="Teacher-ok.php">Teacher</a>
    <a href="Student-ok.php">Student</a>
    </body>  
</html>