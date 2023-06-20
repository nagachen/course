<?php

include_once "../db.php";

dd($_POST['option']);
$rows=$class->all();
foreach($rows as $row){
    
    if(in_array($row['subject'],$_POST['option'])){
        dd($row['subject']);
        $sql_open="UPDATE `class` SET `close`='1' WHERE `subject` = '{$row['subject']}'";
        // $pdo->exec($sql_open);
        q($sql_open);
        
    }else{
        
        dd($row['subject']);
        $sql_close="UPDATE `class` SET `close`='0' WHERE `subject` = '{$row['subject']}'";
        // $pdo->exec($sql_close);
        q($sql_close);

    }
}
 header("location:../index.php?do=set_class")
?>