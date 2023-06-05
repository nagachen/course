
<!-- 刪除課程api -->
<?php
include_once "../db.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
    
$sql="DELETE FROM `class` where `id`='{$_POST['id']}'";

$pdo->exec($sql);
header("location:../backend.php");
?>