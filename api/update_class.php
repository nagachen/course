<!-- 編輯課程api -->
<?php
include_once "../db.php";

$sql="UPDATE `class` SET 
                    `subject`='{$_POST['subject']}',
                 `subject_no`='{$_POST['subject_no']}',
                 `create_id`='{$_POST['create_id']}',
                 `start_time`='{$_POST['start_time']}',
                 `end_time`='{$_POST['end_time']}'           
                where `id` = '{$_POST['id']}'";


$pdo->exec($sql);

//拿取student學生資料比對（比學號，自動帶出名字)
$sql="select `number`,`name` from `student`";
$std_check=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);  

//先跟原有資料比對
$c_select=$pdo->query("select `id` from `c_select` where `class_id`='{$_POST['id']}'")
             ->fetchAll(PDO::FETCH_ASSOC);
dd($c_select);
if(!empty($c_select)){
   //沒空的要判斷
}else{
   //空的新增
}
foreach($_POST['addStd'] as $row){
   $std_name='';
   foreach($std_check as $name){ 
      $std_name=($name['number']==$row)?$std_name=$name['name']:$std_name='查無此人';
   }
$sql_std="UPDATE `c_select` 
             SET        
                 `class_id`='{$_POST['id']}',
                      `name`='{$std_name}',
                    `number`='$row'";
dd($sql_std);
$pdo->exec($sql_std);

}
// header("location:../backend.php");
?>