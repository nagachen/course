<!-- 編輯課程api -->
<?php
include_once "../db.php";


    
$sql="UPDATE `class` SET `id`='{$_POST['id']}',
                    `subject`='{$_POST['subject']}',
                 `subject_no`='{$_POST['subject_no']}',
                 `create_id`='{$_POST['create_id']}',
                 `select_id`='{$_POST['select_id']}',
                 `start_time`='{$_POST['start_time']}',
                 `end_time`='{$_POST['end_time']}'           
                where `id` = '{$_POST['id']}'";


$pdo->exec($sql);
header("location:../backend.php");
?>