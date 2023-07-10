<?php

include_once "../base.php";

dd($_POST['option']);
$rows=$Subject->all();
foreach($rows as $row){
    
    if(in_array($row['subject'],$_POST['option'])){
        dd($row['subject']);
        $sql_open="UPDATE `subject` SET `close`='1' WHERE `subject` = '{$row['subject']}'";
        // $pdo->exec($sql_open);
        q($sql_open);
        
    }else{
        
        dd($row['subject']);
        $sql_close="UPDATE `subject` SET `close`='0' WHERE `subject` = '{$row['subject']}'";
        // $pdo->exec($sql_close);
        q($sql_close);

    }
}
 header("location:../index.php?do=set_class")
?>