
<!-- 編輯學生api -->
<?php
include_once "../db.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
    
$sql="UPDATE `student` SET  `number`='{$_POST['number']}', 
                            `name`='{$_POST['name']}',
                            `email`='{$_POST['email']}',
                            `course`='{$_POST['course']}',
                            `acc`='{$_POST['acc']}',
                            `pw`='{$_POST['pw']}', 
                            `power`='{$_POST['power']}'
                            where `id` = '{$_POST['id']}'";

$pdo->exec($sql);
header("location:../backend.php");
?>