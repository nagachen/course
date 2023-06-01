<?php
//在考慮是否要完全的dertory $_SESSION,原本的unset,需關閉瀏覽器才有效果
unset($_SESSION['power']);
unset($_SESSION['error']);
unset($_SESSION['history']) ;
unset($_SESSION['login']);
// echo"登出成功";
header("location:?do=index");
exit();
?>

