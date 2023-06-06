
<!-- 編輯學生api -->
<?php
include_once "../db.php";
    
$sql="UPDATE `student` SET  `number`='{$_POST['number']}', 
                            `name`='{$_POST['name']}',
                            `email`='{$_POST['email']}',
                            `acc`='{$_POST['acc']}',
                            `pw`='{$_POST['pw']}', 
                            `power`='{$_POST['power']}'
                            where `id` = '{$_POST['id']}'";

$pdo->exec($sql);
header("location:../backend.php");
?>