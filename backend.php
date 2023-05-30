<!-- 後台頁面 -->
<?php include_once "db.php";
$do='';
if(isset($_GET['do'])){
    $do=$_GET['do'];
}else{
    
        $do="error";
  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    include_once "header.php";
    include "./back/query_student.php";

    ?>
</body>
</html>