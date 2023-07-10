<!-- 後台刪除課程 -->
<?php   
// 確認課程id是否有傳過來，不在就轉址去查詢那
if(empty($_POST['id'])){
header("location:?do=query_class");
}

// $sql="select * from `class` where `id`='{$_POST['id']}'";
$row=$Subject->find($_POST['id']);
?>


<div class="del_student  w-25 table table-info bg-success-subtle table-striped   mx-auto mt-3 shadow p-3 mb-5  rounded">
    <h1> 刪除課程 </h1>
   
    <form action="./api/del.php" method="post">
        <div >
            <label for="subject">課程名稱:</label>
            <input type="text" name="subject" value="<?=$row['subject'];?>">
        </div>
        <div >
            <label for="subject_no">課程代號:</label>
            <input type="text" name="subject_no" value="<?=$row['subject_no'];?>">
        </div>
        <div >
            <label for="create_id">課程建立:</label>
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
        <input type="hidden" name="table" value=<?=($Subject->get_table());?>>
        <input type="hidden" name='id' value="<?=$row['id']?>">

        </div>
        <div><h1 style="color:red;">確定是否要刪除這筆資料？</h1></div>
        <div>
            <input type="submit" value="確定">
            <input type="reset" value="取消" onclick="location.href='?do=Subject'">
        </div>
    </form>
</div>