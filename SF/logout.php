<?php
session_start();

session_destroy();
header("refresh:1; url= ./public/index.php");
exit();
?>