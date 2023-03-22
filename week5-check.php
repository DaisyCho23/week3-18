<?php
session_start();

$PrincipalID="principal";
$PrincipalPWD="1";
$TeacherID="teacher";
$TeacherPWD="2";
$StudentID="student";
$StudentPWD="3";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($PrincipalID==$id)&&($PrincipalPWD==$pwd)){
    $_SESSION["login"]="P";
    //echo "Login success";
    header("Location:homepage.php");  //直接跳到指定網頁
}
elseif(($TeacherID==$id)&&($TeacherPWD==$pwd)){
    $_SESSION["login"]="T";
    //echo "Login success";
    header("Location:homepage.php");  //直接跳到指定網頁
}
elseif(($StudentID==$id)&&($StudentPWD==$pwd)){
    $_SESSION["login"]="S";
    //echo "Login success";
    header("Location:homepage.php");  //直接跳到指定網頁
}else{
    $_SESSION["login"]="No";
    //echo "Login failed!!!";
    header("Location:fail.php");
}


?>