
<?php
$BASEDIR=dirname(__FILE__);
// echo ($BASEDIR);
 include_once $BASEDIR."/base.php";

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
  
    if (isset($_SESSION['login']) && isset($_SESSION['power'])) {
        switch($_SESSION['power']){
            case 'super':
                include_once "./header/header_super.php";
            break;
            case 'teacher':
                include_once "./header/header_teacher.php";
            break;
            case 'member':
                include_once "./head/header_member.php";
            break;
            default:
            break;
        }
        $do  = $_GET['do']??"student";
        $table=ucfirst($do);
        // dd($$table);
        $path=$$table->list();
        
         include "$path";
        
    }else{
        include "./front/login.php";
    }
    ?>



</body>

</html>