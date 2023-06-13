<?php
include_once "../db.php";
unset($_SESSION['id']);
unset($_SESSION['power']);
unset($_SESSION['error']);
unset($_SESSION['history']) ;
unset($_SESSION['login']);
unset($_SESSION['do']);
unset($_SESSION['name']);

// echo"登出成功";
header("location:../index.php");
exit();
?>
