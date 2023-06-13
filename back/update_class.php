<!-- 後台修改課程資料 -->
<?php


// 確認課程id是否有傳過來，不在就轉址去查詢那
if (empty($_GET['id'])) {
    header("location:?do=query_class");
}

$sql = "select * from `class` where `id`='{$_GET['id']}'";
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

?>


<div class="update_student">
    <h1> 修改課程資料 </h1>

    <form action="./api/update_class.php" method="post">
        <div>
            <label for="subject">課程名稱:</label>
            <input type="text" name="subject" value="<?= $row['subject']; ?>">
        </div>
        <div>
            <label for="subject_no">課程代號:</label>
            <input type="text" name="subject_no" value="<?= $row['subject_no']; ?>">
        </div>
        <div>
            <label for="create_id">課程建立者:</label>
            <input type="text" name="create_id" value="<?= $row['create_id']; ?>">
        </div>

        <div>
            <label for="start_time">開始時間:</label>
            <input type="date" name="start_time" value="<?= $row['start_time']; ?>">
        </div>
        <div>
            <label for="end_time">結束時間:</label>
            <input type="date" name="end_time" value="<?= $row['end_time']; ?>">
        </div>

        <div>
            <input type="hidden" name='id' value="<?= $row['id'] ?>">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
        <hr>
    </form>
    <div>
        <!-- c_select 資料表 -->


        <div class="select-std">
            <div>
                <form action="./api/add_c_select.php" method="post">
                    <input type="hidden" name='class_id' value="<?= $_GET['id']; ?>">
                    <input type="text" name="number">
                    <button type=submit id="addBtn">增加學生(輸入學號)</button>
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<br>";
                        echo "<span style='color:red'>";
                        echo $_GET['error'];
                        echo "</span>";
                    }

                    ?>
                </form>
            </div>
            <?php
            $sql = "select * from `c_select` where `class_id`= '{$_GET['id']}'";
            $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
            ?>
                <div>
                    <form action="./api/del_c_select.php" method="post">
                        <label for="delStd[]">選課學生:</label>
                        <input type="text" name="delStd[]" value="<?= $row['name']; ?> 學號：<?= $row['number']; ?>">
                        <input type="hidden" name='select_id' value="<?= $row['id']; ?>">
                        <input type="hidden" name='class_id' value="<?= $_GET['id']; ?>">

                        <button type='submit'>刪除</button>
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </div>