
<!-- 新增課程api -->

<?php
include_once "../db.php";


    $class->save(["subject"=>"{$_POST['subject']}","subject_no"=>"{$_POST['subject_no']}"
        ,"create_id"=>"{$_POST['create_id']}","start_time"=>"{$_POST['start_time']}","end_time"=>"{$_POST['end_time']}"]);
    
    
    
    header("location:../index.php");
?>