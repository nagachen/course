<!-- 學生查詢後台 -->

<!-- 現有資料列表 -->


<?php

$sql = "select * from `student`";
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="query_student">
    <tr>
        <td>id</td>
        <td>學號</td>
        <td>姓名</td>
        <td>電子郵件</td>
        <td>所選課程</td>
        <td>帳號</td>
        <td>密碼</td>
    </tr>
    <?php
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['student_num'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['course'] ?></td>
            <td><?= $row['acc'] ?></td>
            <td><?= $row['pw'] ?></td>
            <td>
                <!-- 收到編輯和刪除的訊息才顯示, 權限為帳號等級 -->
            <form action="?do=update_student" method="post" >
                <input type="hidden" name='id' value="<?=$row['id']?>">
                <button type='submit' >編輯</button>
            </form>
            <form action="?do=del_student" method="post" >
                <input type="hidden" name='id' value="<?=$row['id']?>">
                <button type='submit' >刪除</button>
            </form>

            </td>
        </tr>
    <?php
    }
    ?>
</table>