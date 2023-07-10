<!-- 後台編輯學生或員資料 -->
<?php

   
// 確認學生id是否有傳過來，不在就轉址去查詢那
if(empty($_POST['id'])){
header("location:?do=query_student");
}

$sql="select * from `student` where `id`='{$_POST['id']}'";
// $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
$row=$Student->find(["id"=>"{$_POST['id']}"]);
?>


<div class="update_student w-25 table table-info  bg-success-subtle table-striped   mx-auto mt-3 shadow p-3 mb-5  rounded">
    <h2> 修改學生或員工資料 </h2>
   
    <form action="./api/update.php" method="post">
        <div >
            <label for="number">學號或員工號:</label>
            <input type="text" name="number" value="<?=$row['number'];?>">
        </div>
        <div >
            <label for="name">姓名:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" name="name" value="<?=$row['name'];?>">
        </div>
        <div >
            <label for="email">電子郵件:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" name="email" value="<?=$row['email'];?>">
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
        <input type="hidden" name='table' value="<?=$_POST['table']; ?>">

        <input type="hidden" name='id' value="<?=$row['id']?>">
        </div>
        <div>
            <input type="submit" value="送出">
            <input type="reset" value="重置">
        </div>
    </form>
</div>