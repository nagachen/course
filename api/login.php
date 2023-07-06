<!-- 登入驗證 -->

<?php
include_once "../base.php";
// dd($_POST);
$row=$student->find(["acc"=>"{$_POST['acc']}","pw"=>"{$_POST['pw']}"]);
// dd($row);

if(!empty($row)){         //驗證是否成功？
   //身份和登入成功寫入
   
    $_SESSION['power']=$row['power'];
    $_SESSION['id']=$row['id'];
    $_SESSION['login']=$_POST['acc'];
    $_SESSION['name']=$row['name'];
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