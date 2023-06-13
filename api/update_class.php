<!-- 編輯課程api -->
<?php
include_once "../db.php";



$sql_std="select `id`,`name` from student where `name` = '{$_POST['name']}' && (`power` = 'teacher' || `power` = 'super')";
$create_id=$pdo->query($sql_std)->fetch(PDO::FETCH_ASSOC);

if(empty($create_id['id'])){
    header("location:../index.php?do=update_class&name={$_POST['name']}&id={$_POST['id']}&error=沒有此位老師");
  
}else{
$sql="UPDATE `class` SET 
                    `subject`='{$_POST['subject']}',
                 `subject_no`='{$_POST['subject_no']}',
                 `create_id`='{$create_id['id']}',
                 `start_time`='{$_POST['start_time']}',
                 `end_time`='{$_POST['end_time']}'           
                where `id` = '{$_POST['id']}'";
$pdo->exec($sql);
header("location:../index.php?do=update_class&id={$_POST['id']}&name={$create_id['name']}");
}
?>