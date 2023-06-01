<!-- 後台頁面 -->
<?php
include_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

    


    </style>
</head>
<body>
    <?php
    
    //需登入才可以用選單
    //沒有登入只能看一些無關緊要的資訊呈現
    // 登入後同時將進行身份驗證，使用session,並展現可以操作的相關資訊(一連串的驗證)
    $do='';
    if(isset($_GET['do'])){
        $do=$_GET['do'];
    }else{
        
            $do="error";
      
    }
    
    
    
    include_once "header.php";
    include "./front/login.php";
    include "./back/$do.php";
    
    ?>
</body>
</html>