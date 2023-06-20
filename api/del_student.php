
<!-- 刪除學生api -->
<?php
include_once "../db.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
    
$sql="DELETE FROM `student` where `id`='{$_POST['id']}'";

$student->del(["id"=>"{$_POST['id']}"]);
header("location:../index.php");
?>