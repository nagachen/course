<!-- 學生或員工list -->




<?php



// $sql = "select * from `student` where `acc` = '{$_SESSION['login']}'";
// $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$row=$student->find(["acc" => "{$_SESSION['login']}"]);

?>

<table class="query_student table table-Warning table-striped w-75 text-center mx-auto mt-3 shadow p-3 mb-5 bg-body-tertiary rounded">
    <tr>
        <td>學號或員工號</td>
        <td>姓名</td>
        <td>電子郵件</td>
        
        <td>身份</td>
    </tr>
        <tr>
            <td><?= $row['number'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['power'] ?></td>           
        </tr>
    
</table>