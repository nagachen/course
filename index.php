<?php
$BASEDIR = dirname(__FILE__);
// echo ($BASEDIR);
include_once $BASEDIR . "/base.php";

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
        switch ($_SESSION['power']) {
            case 'super':
                include_once "./header/header_super.php";
                break;
            case 'teacher':
                include_once "./header/header_teacher.php";
                break;
            case 'member':
                include_once "./header/header_member.php";
                break;
            default:
                break;
        }
        $do = $_GET['do'] ?? "list";
        switch ($do) {
            case 'add_student':
            case 'add_class':
            case 'del_class':
            case 'del_student':
            case 'update_class':
            case 'update_student':
                include "./view/modal/" . $do . ".php";
                break;
            case 'set_class':
            case 'statis_class':
                include "./view/" . $do . ".php";
                break;
            case 'list':
                include "./view/list.php";
                break;
            default:
                $table = ucfirst($do);
                //   dd($table);
                $path = $$table->list();

                include "$path";
        }
    } else {
        include "./front/login.php";
    }
    ?>
    <div>
        <h3>說明：</h3>
        <pre>
            帳號分別有三種身份可以使用
            ID:admin  PW:admin
            ID:chen   PW:chen
            ID:john   PW:john
            每個帳號都有不同的權限和選項

</pre>
    </div>

    <div class="fixed-bottom">


        <a href="https://nagachen.github.io"><button type="button" class="btn btn-info">回GIT頁面</button></a>
    </div>

</body>

</html>