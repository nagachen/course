
<!-- 編輯學生api -->
<?php
include_once "../db.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
    
$sql="UPDATE `student` SET  `student_num`='{$_POST['std_num']}', 
                            `name`='{$_POST['std_name']}',
                            `email`='{$_POST['std_email']}',
                            `course`='{$_POST['std_course']}',
                            `acc`='{$_POST['std_acc']}',
                            `pw`='{$_POST['std_pw']}' where `id` = '{$_POST['id']}'";

$pdo->exec($sql);
// header("location:../backend.php");
?>