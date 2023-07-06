
<!-- 刪除課程api -->
<?php
include_once "../base.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
    
$table=ucfirst($_POST['table']);
$$table->del($_POST['id']);

header("location:../index.php");
?>