<!-- 學生或員工list -->




<?php

$sql = "select * from `student` where `acc` = '{$_SESSION['login']}'";
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);



?>

<table class="query_student">
    <tr>
        <td>學號或員工號</td>
        <td>姓名</td>
        <td>電子郵件</td>
        <td>所(選/開)課程</td>
        <td>身份</td>
    </tr>
        <tr>
            <td><?= $row['number'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['course'] ?></td>
            <td><?= $row['power'] ?></td>           
        </tr>
    
</table>