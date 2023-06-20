<!-- 編輯課程api -->
<?php
include_once "../db.php";

dd($_POST);

$sql_std="select `id`,`name` from student where `name` = '{$_POST['name']}' && (`power` = 'teacher' || `power` = 'super')";
// $create_id=$pdo->query($sql_std)->fetch(PDO::FETCH_ASSOC);
$create_id=array_column(q($sql_std),'id');
dd($create_id);
if(empty($create_id)){
   header("location:../index.php?do=update_class&id={$_POST['id']}&error=沒有此位老師");
  
}else{
// $sql="UPDATE `class` SET 
//                     `subject`='{$_POST['subject']}',
//                  `subject_no`='{$_POST['subject_no']}',
//                  `create_id`='{$create_id['id']}',
//                  `start_time`='{$_POST['start_time']}',
//                  `end_time`='{$_POST['end_time']}'           
//                 where `id` = '{$_POST['id']}'";
$class->save(["subject"=>"{$_POST['subject']}",
              "subject_no"=>"{$_POST['subject_no']}",
              "create_id"=>"{$create_id[0]}",
              "start_time"=>"{$_POST['start_time']}",
              "end_time"=>"{$_POST['end_time']}",
              "id"=>"{$_POST['id']}"]);

   header("location:../index.php?do=update_class&id={$_POST['id']}");
}
?>