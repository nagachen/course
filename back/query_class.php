<!-- 課程查詢後台 -->

<!-- 現有資料列表 -->


<?php

$sql = "select * from `class`";
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="query_student">
    <h1>課程查詢</h1>
    <tr>

        <td>課程名稱</td>
        <td>課程代號</td>
        <td>開課老師</td>
        <td>開始時間</td>
        <td>結束時間</td>


    </tr>
    <?php
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?= $row['subject'] ?></td>
            <td><?= $row['subject_no'] ?></td>
            <td><?= $row['create_id'] ?></td>
            <td><?= $row['start_time'] ?></td>
            <td><?= $row['end_time'] ?></td>

            <td>

                <?php

                if (($_SESSION['id'] === $row['create_id']) || ($_SESSION['power'] === 'super')) {
                ?>
                    <!-- 老師才能編緝收到編輯和刪除的訊息才顯示, 權限為帳號等級 -->
                    <form action="?do=update_class" method="get">
                        <input type="hidden" name='do' value="update_class">
                        <input type="hidden" name='id' value="<?= $row['id'] ?>">
                        <button type='submit'>編輯</button>
                    </form>
                    <form action="?do=del_class" method="post">
                        <input type="hidden" name='id' value="<?= $row['id'] ?>">
                        <button type='submit'>刪除</button>
                    </form>
                <?php
                }
                ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>