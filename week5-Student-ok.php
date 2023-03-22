<DOCTYPE html> 
<?php
session_start();


if($_SESSION["login"] != "T" && $_SESSION["login"] != "S"){
    header("Location:homepage.php");
}

?>
<html>
    
<head>
    <meta charset="utf-8">
</head> 

<body>
    學生的網頁
    <br>
    
    <a href="logout.php">Logout</a>
    <a href="Principal.php">Principal</a>  
    <a href="Teacher.php">Teacher</a>    
</body>  
</html>