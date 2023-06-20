<?php
include_once "../db.php";
dd($_POST);


// $sql="select `number`,`name` from `student` where `number`='{$_POST['number']}' ";
// $std_check=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$std_check=$student->find(["number"=>"{$_POST['number']}"]);

$sql_select="select `number` from `c_select` where `class_id`='{$_POST['class_id']}' && `number`='{$_POST['number']}'";
// $select_check=$pdo->query($sql_select)->fetchAll(PDO::FETCH_ASSOC);
$sql_select=$c_select->all(["class_id"=>"{$_POST['class_id']}","number"=>"{$_POST['number']}"]);
// dd($std_check);
// dd($select_check);
//沒有學號跳到錯誤頁
if((empty($std_check))||(!empty($select_check))) {
    
    header("location:../index.php?do=update_class&id={$_POST['class_id']}&error=沒有此學生學號或重複選課");
}else{
    
     $name=$std_check['name']; //使用fetchall，number變多應該有bug
    $sql_add = "INSERT INTO `c_select`(`class_id`, `name`, `number`) 
        VALUES ('{$_POST['class_id']}','$name','{$_POST['number']}')";

    $c_select->save(["class_id"=>"{$_POST['class_id']}",
                     "name"=>"$name",
                     "number"=>"{$_POST['number']}"]);
    header("location:../index.php?do=update_class&id={$_POST['class_id']}");

 }

            ?>