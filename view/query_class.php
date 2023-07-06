<!-- 課程查詢後台 -->

<!-- 現有資料列表 -->


<?php
$rows=$Subject->all(["close"=>"1"]);

?>

<table class="query_student  table table-Warning table-striped w-75 text-center mx-auto mt-3 shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1>課程查詢</h1>
    <tr>

        <td>課程名稱</td>
        <td>課程代號</td>
        <td>開課老師</td>
        <td>開始時間</td>
        <td>結束時間</td>
        <td class="table_editDel_td"></td>
        <td class="table_editDel_td"></td>
        <td class="table_editDel_td"></td>


    </tr>
    <?php
    foreach ($rows as $row) {
    ?>
        <tr>
            <td><?= $row['subject'] ?></td>
            <td><?= $row['subject_no'] ?></td>
            <td><?php
                $name=$Student->find(["id"=>"{$row['create_id']}"]);
               
                echo $name['name'];
                ?></td>
            <td><?= $row['start_time'] ?></td>
            <td><?= $row['end_time'] ?></td>


            <td>
                <?php
                   

                if (($_SESSION['id'] === $row['create_id']) || ($_SESSION['power'] === 'super')) {
                ?>
                    <form action="?do=add_class" method="post">
                       
                        <button type='submit'>新增</button>
                    </form>
                <?php
                }
                ?>
            </td>

            <td>

                <form action="?do=update_class" method="get">
             
                    <input type="hidden" name='do' value="update_class">
                    <input type="hidden" name='id' value="<?= $row['id'] ?>">
                    <button type='submit'>編輯</button>
                </form>
            </td>
            <td>
                <?php
                   

                if (($_SESSION['id'] === $row['create_id']) || ($_SESSION['power'] === 'super')) {
                ?>
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