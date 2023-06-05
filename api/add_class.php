
<!-- 新增課程api -->

<?php
include_once "../db.php";


include_once "../db.php";
    $sql="INSERT INTO `class`( `subject`, `subject_no`, `create_id`, `start_time`, `end_time`) 
                VALUES ('{$_POST['subject']}','{$_POST['subject_no']}','{$_POST['create_id']}','{$_POST['start_time']}','{$_POST['end_time']}')";
    
    $pdo->exec($sql);
    header("location:../backend.php");
?>