
<!-- 新增學生api -->
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
    $dsn="mysql:host=localhost;charset=utf8;dbname=course";
    $pdo=new PDO($dsn,'root','');
    $sql="INSERT INTO `student`( `student_num`, `name`, `email`, `course`, `acc`, `pw`) 
                VALUES ('{$_POST['std_num']}','{$_POST['std_name']}','{$_POST['std_email']}','{$_POST['std_course']}','{$_POST['std_acc']}','{$_POST['std_pw']}')";
    $pdo->exec($sql);
    header("location:../back/add_student.php");
?>