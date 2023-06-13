
<!-- 新增學生api -->
<?php
include_once "../db.php";
    $sql="INSERT INTO `student`( `number`, `name`, `email`, `acc`, `pw`,`power`) 
                VALUES ('{$_POST['number']}','{$_POST['name']}','{$_POST['email']}','{$_POST['acc']}','{$_POST['pw']}','{$_POST['power']}')";
    $pdo->exec($sql);
    header("location:../index.php");
?>