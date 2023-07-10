<?php
include_once "../base.php";
dd($_POST['table']);
$table = ucfirst($_POST['table']);
switch ($_POST['table']) {
    case 'student':
        // <!-- 新增學生api -->
        $$table->save([
            "number" => "{$_POST['number']}", "name" => "{$_POST['name']}",
            "email" => "{$_POST['email']}", "acc" => "{$_POST['acc']}", "pw" => "{$_POST['pw']}",
            "power" => "{$_POST['power']}"
        ]);
        break;
    case 'subject':
        // <!-- 新增課程api -->
        $$table->save([
            "subject" => "{$_POST['subject']}", "subject_no" => "{$_POST['subject_no']}", "create_id" => "{$_POST['create_id']}", "start_time" => "{$_POST['start_time']}", "end_time" => "{$_POST['end_time']}"
        ]);
        break;
    case 'c_select':
        // 新增課程選擇
        $std_check = $Student->find(["number" => "{$_POST['number']}"]);
        $sql_select = $$table->all(["class_id" => "{$_POST['class_id']}", "number" => "{$_POST['number']}"]);
        //沒有學號跳到錯誤頁
        // dd($std_check);
        if ((empty($std_check)) || (!empty($select_check))) {

           header("location:../index.php?do=update_class&id={$_POST['class_id']}&error=沒有此學生學號或重複選課");
             exit();
        } else {
            $name = $std_check['name']; //使用fetchall，number變多應該有bug
            $C_select->save([
                "class_id" => "{$_POST['class_id']}",
                "name" => "$name",
                "number" => "{$_POST['number']}"
            ]);
              header("location:../index.php?do=update_class&id={$_POST['class_id']}");
             exit();

        }
}

 header("location:../index.php");
?>





