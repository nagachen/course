<!-- 後台修改課程資料 -->
<?php

   
// 確認課程id是否有傳過來，不在就轉址去查詢那
if(empty($_POST['id'])){
header("location:?do=query_class");
}

$sql="select * from `class` where `id`='{$_POST['id']}'";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

?>


<div class="update_student">
    <h1> 修改課程資料 </h1>
   
    <form action="./api/update_class.php" method="post">
        <div >
            <label for="subject">課程名稱:</label>
            <input type="text" name="subject" value="<?=$row['subject'];?>">
        </div>
        <div >
            <label for="subject_no">課程代號:</label>
            <input type="text" name="subject_no" value="<?=$row['subject_no'];?>">
        </div>
        <div >
            <label for="create_id">課程建立者:</label>
            <input type="text" name="create_id" value="<?=$row['create_id'];?>">
        </div>
        
        <div >
            <label for="start_time">開始時間:</label>
            <input type="date" name="start_time" value="<?=$row['start_time'];?>">
        </div>
        <div >
            <label for="end_time">結束時間:</label>
            <input type="date" name="end_time" value="<?=$row['end_time'];?>">
        </div>
        
        <div>
        <input type="hidden" name='id' value="<?=$row['id']?>">
        </div>
        <div >
            <!-- c_select 資料表 -->
            <label for="select_id">選課學生:</label>
            <!-- 先用輸入的，之後再用選的 -->
            <input type="text" name="select_id" value="<?=$row['select_id'];?>">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
</div>