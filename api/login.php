<!-- 登入驗證 -->
<?php
include "../db.php";
dd($_POST);
$rows=$pdo->query("selete * from `student`")->fetchAll(PDO::FETCH_ASSOC);
if(isset($_POST)){
    foreach($rows as $row){
        if($_POST['acc']){

        }
    }
    
}


?>