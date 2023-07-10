
<!-- 編輯學生api -->
<?php
include_once "../base.php";
    
// $sql="UPDATE `student` SET  `number`='{$_POST['number']}', 
//                             `name`='{$_POST['name']}',
//                             `email`='{$_POST['email']}',
//                             `acc`='{$_POST['acc']}',
//                             `pw`='{$_POST['pw']}', 
//                             `power`='{$_POST['power']}'
//                             where `id` = '{$_POST['id']}'";

// //
$Student->save(["id"=>"{$_POST['id']}",
        "number"=>"{$_POST['number']}",
          "email"=>"{$_POST['email']}",
              "acc"=>"{$_POST['acc']}",
                "pw"=>"{$_POST['pw']}",
          "power"=>"{$_POST['power']}",
           "name"=>"{$_POST['name']}"]);
header("location:../index.php");
?>