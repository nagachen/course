<?php
include_once "../db.php";
$sql="DELETE FROM `c_select` where `id`='{$_POST['select_id']}'";

$pdo->exec($sql);
header("location:../backend.php?do=update_class&id={$_POST['class_id']}");

?>