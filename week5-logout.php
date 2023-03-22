<?php
session_start();

session_destroy();

header("Location:week5.php");
?>