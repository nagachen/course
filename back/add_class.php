<!-- 後台新增課程 -->
<?php
dd($_SESSION);
?>
<div class="add_class">
    <h1> 新增課程 </h1>
    <form action="./api/add_class.php" method="post">
        <div>
            <label for="subject">課程名稱</label>
            <input type="text" name="subject" >
        </div>
        <div>
            <label for="subject_no">科目代號</label>
            <input type="text" name="subject_no" >
        </div>
        
        <div>
            <label for="start_time">開始時間</label>
            <!-- 先用輸入的，之後再用選的 -->
            <input type="date" name="start_time" >
        </div>
        
        <div>
            <label for="end_time">結束時間</label>
            <!-- 先用輸入的，之後再用選的 -->
            <input type="date" name="end_time" >
        </div>
        <div>
            
            <input type="hidden" name="create_id" value=<?="{$_SESSION['id']}"?> >
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
</div>