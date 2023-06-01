
<!-- 新增學生api -->
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
    $dsn="mysql:host=localhost;charset=utf8;dbname=course";
    $pdo=new PDO($dsn,'root','');
    $sql="INSERT INTO `student`( `number`, `name`, `email`, `course`, `acc`, `pw`,`power`) 
                VALUES ('{$_POST['number']}','{$_POST['name']}','{$_POST['email']}','{$_POST['course']}','{$_POST['acc']}','{$_POST['pw']}','{$_POST['power']}')";
    $pdo->exec($sql);
    header("location:../backend.php");
?>