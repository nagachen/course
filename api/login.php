<!-- 登入驗證 -->
<?php
include "../db.php";
dd($_POST);
$chk=$pdo->query("select count(*) from `student` 
                    where `acc` = '{$_POST['acc']}' && `pw` = '{$_POST['pw']}'")
->fetchColumn();
dd($chk);
if($chk){         //驗證是否成功？
   //身份和登入成功寫入
   $power=$pdo->query("select `power` from `student`
                       where `acc`='{$_POST['acc']}' 
                       && `pw` = '{$_POST['pw']}'")->fetch(PDO::FETCH_ASSOC);
    $_SESSION['power']=$power;
    $_SESSION['login']=$_POST['acc'];
    // echo"登入成功";
       header("location:?do=sucess");
}else{
       header("location:?do=error");
}


?>