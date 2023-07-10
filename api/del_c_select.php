<?php
include_once "../base.php";
$sql="DELETE FROM `c_select` where `id`='{$_POST['select_id']}'";
$C_select->del(["id"=>"{$_POST['select_id']}"]);

header("location:../index.php?do=update_class&id={$_POST['class_id']}");

?>