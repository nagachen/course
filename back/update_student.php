<!-- 後台編輯學生 -->
<?php

   
// 確認學生id是否有傳過來，不在就轉址去查詢那
if(empty($_POST['id'])){
header("location:?do=query_student");
}

$sql="select * from `student` where `id`='{$_POST['id']}'";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

?>


<div class="update_student">
    <h1> 編輯學生 </h1>
   
    <form action="./api/update_student.php" method="post">
        <div >
            <label for="std_num">學號:</label>
            <input type="text" name="std_num" value="<?=$row['student_num'];?>">
        </div>
        <div >
            <label for="std_name">姓名:</label>
            <input type="text" name="std_name" value="<?=$row['name'];?>">
        </div>
        <div >
            <label for="std_email">電子郵件:</label>
            <input type="text" name="std_email" value="<?=$row['email'];?>">
        </div>
        <div >
            <label for="std_course">選課科目</label>
            <!-- 先用輸入的，之後再用選的 -->
            <input type="text" name="std_course" value="<?=$row['course'];?>">
        </div>
        <div >
            <label for="std_acc">帳號:</label>
            <input type="text" name="std_acc" value="<?=$row['acc'];?>">
        </div>
        <div >
            <label for="std_pw">密碼:</label>
            <input type="text" name="std_pw" value="<?=$row['pw'];?>">
        </div>
        <div>
        <input type="hidden" name='id' value="<?=$row['id']?>">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
</div>