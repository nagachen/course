<?php
include_once "../base.php";
dd($_POST);

$std_check=$Student->find(["number"=>"{$_POST['number']}"]);

$sql_select=$C_select->all(["class_id"=>"{$_POST['class_id']}","number"=>"{$_POST['number']}"]);
// dd($std_check);
// dd($select_check);
//沒有學號跳到錯誤頁
if((empty($std_check))||(!empty($select_check))) {
    
    header("location:../index.php?do=update_class&id={$_POST['class_id']}&error=沒有此學生學號或重複選課");
}else{
    
     $name=$std_check['name']; //使用fetchall，number變多應該有bug
 

    $C_select->save(["class_id"=>"{$_POST['class_id']}",
                     "name"=>"$name",
                     "number"=>"{$_POST['number']}"]);
    header("location:../index.php?do=update_class&id={$_POST['class_id']}");

 }

            ?>