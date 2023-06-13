<!-- 登入驗證 -->

<?php
include "../db.php";
// dd($_POST);
$chk=$pdo->query("select count(*) from `student` 
                    where `acc` = '{$_POST['acc']}' && `pw` = '{$_POST['pw']}'")
->fetchColumn();
// dd($chk);
if($chk){         //驗證是否成功？
   //身份和登入成功寫入
   $rows=$pdo->query("select `power`,`id`,`name` from `student`
                       where `acc`='{$_POST['acc']}' 
                       && `pw` = '{$_POST['pw']}'")->fetch(PDO::FETCH_ASSOC);
    $_SESSION['power']=$rows['power'];
    $_SESSION['id']=$rows['id'];
    $_SESSION['login']=$_POST['acc'];
    $_SESSION['name']=$rows['name'];
    unset($_SESSION['error']);
    //記錄登入後所留下的痕跡,預計寫入login
    $_SESSION['history']="使用者:{$_POST['acc']}於". date('Y-m-d i:H:s'). "登入成功";
   
    // echo"登入成功";
       header("location:../index.php");
       exit();//需注意header失敗會執行下方HEADER
    //    dd($_SESSION);
}else{
    
   
    $_SESSION['error']= '帳號密碼錯誤';
     header("location:../index.php?do=error&error=1");
}


?>