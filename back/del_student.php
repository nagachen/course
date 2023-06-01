<!-- 後台刪除學生或員工 -->
<?php   
// 確認學生id是否有傳過來，不在就轉址去查詢那
if(empty($_POST['id'])){
header("location:?do=query_student");
}

$sql="select * from `student` where `id`='{$_POST['id']}'";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>


<div class="del_student">
    <h1> 刪除學生或員工資料 </h1>
   
    <form action="./api/del_student.php" method="post">
        <div >
            <label for="number">學號:</label>
            <input type="text" name="number" value="<?=$row['number'];?>">
        </div>
        <div >
            <label for="name">姓名:</label>
            <input type="text" name="name" value="<?=$row['name'];?>">
        </div>
        <div >
            <label for="email">電子郵件:</label>
            <input type="text" name="email" value="<?=$row['email'];?>">
        </div>
        <div >
            <label for="course">(選/開)課科目</label>
            <!-- 先用輸入的，之後再用選的 -->
            <input type="text" name="course" value="<?=$row['course'];?>">
        </div>
        <div >
            <label for="acc">帳號:</label>
            <input type="text" name="acc" value="<?=$row['acc'];?>">
        </div>
        <div >
            <label for="pw">密碼:</label>
            <input type="text" name="pw" value="<?=$row['pw'];?>">
        </div>
        <div >
            <label for="power">身份:</label>
            <input type="text" name="power" value="<?=$row['power'];?>">
        </div>
        <div>
        <input type="hidden" name='id' value="<?=$row['id']?>">
        </div>
        <div><h1 style="color:red;">確定是否要刪除這筆資料？</h1></div>
        <div>
            <input type="submit" value="確定">
            <input type="reset" value="取消" onclick="location.href='?do=query_student'">
        </div>
    </form>
</div>