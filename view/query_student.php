<!-- 學生或員工查詢後台 -->

<!-- 現有資料列表 -->


<?php

$rows = $Student->all();
?>

<table class="table table-Warning table-striped w-75 text-center mx-auto mt-3 shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="shadow p-3 mb-3 bg-body-tertiary rounded w-25 mx-auto mt-3">學生或員工查詢</h1>
    <tr>
        <td>id</td>
        <td>學號或員工號</td>
        <td>姓名</td>
        <td>電子郵件</td>
        <td>帳號</td>
        <td>密碼</td>
        <td>身份</td>
        <td class="table_editDel_td"></td>
        <td class="table_editDel_td"></td>
        <td class="table_editDel_td"></td>


    </tr>
    <?php
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['number'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['acc'] ?></td>
            <td><?= $row['pw'] ?></td>
            <td><?= $row['power'] ?></td>
            <td>
                <!-- 收到編輯和刪除的訊息才顯示, 權限為帳號等級 -->
                <form action="?do=add_student" method="post">

                    <button type='submit'>新增</button>
                </form>
            </td>
            <td>
                <form action="?do=update_student" method="post">
                    <input type="hidden" name='id' value="<?= $row['id'] ?>">
                    <button type='submit'>編輯</button>
                </form>
            </td>
            <td>
                <form action="?do=del_student" method="post">
                    <input type="hidden" name='id' value="<?= $row['id'] ?>">
                    <button type='submit'>刪除</button>
                </form>
            </td>
            </td>
        </tr>
    <?php
    }
    ?>
</table>