
<?php
include_once "../base.php";
$table = ucfirst($_POST['table']);
switch ($_POST['table']) {

  case 'student':
    // <!-- 編輯學生api -->
    $Student->save([
      "id" => "{$_POST['id']}",
      "number" => "{$_POST['number']}",
      "email" => "{$_POST['email']}",
      "acc" => "{$_POST['acc']}",
      "pw" => "{$_POST['pw']}",
      "power" => "{$_POST['power']}",
      "name" => "{$_POST['name']}"
    ]);
    header("location:../index.php");
    break;

  case 'subject':
    // <!-- 編輯課程api -->
    $sql_std = "select `id`,`name` from student where `name` = '{$_POST['name']}' && (`power` = 'teacher' || `power` = 'super')";

    $create_id = array_column(q($sql_std), 'id');
    dd($create_id);
    if (empty($create_id)) {
      header("location:../index.php?do=update_class&id={$_POST['id']}&error=沒有此位老師");
      exit();
    } else {
      $$table->save([
        "subject" => "{$_POST['subject']}",
        "subject_no" => "{$_POST['subject_no']}",
        "create_id" => "{$create_id[0]}",
        "start_time" => "{$_POST['start_time']}",
        "end_time" => "{$_POST['end_time']}",
        "id" => "{$_POST['id']}"
      ]);

      header("location:../index.php?do=update_class&id={$_POST['id']}");
      exit();
    }
    break;
}

?>


