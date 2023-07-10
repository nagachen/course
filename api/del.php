
<?php
include_once "../base.php";
$table = ucfirst($_POST['table']);
dd($_POST);
switch ($_POST['table']) {
        // <!-- 刪除學生api -->
        // <!-- 刪除課程api -->
    case 'student':
    case 'subject':
        $$table->del(["id" => "{$_POST['id']}"]);
        break;
    case 'c_select':
        //刪除課程api
        $$table->del(["id" => "{$_POST['select_id']}"]);
        header("location:../index.php?do=update_class&id={$_POST['class_id']}");
        break;
}
 header("location:../index.php");
?>


