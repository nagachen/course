<?php 

// if(isset($_GET['error'])){
//     echo "<span style='color:red'>";
//     echo "帳號或密碼錯誤";
//     echo "</span>";
// }


if(isset($_GET['msg'])){

    echo "<span style='color:orange'>";
    echo $_GET['msg'];
    echo "</span>";
}

?>

<a href="backend.php">回首頁</a>

<!-- <h1>查無此頁面，請洽系統管理者</h1> -->