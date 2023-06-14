<?php
include_once "../db.php";



if ($_FILES['img']['error'] <= 0) {
    
    if (in_array($_FILES['img']['type'], ['image/jpeg', 'image/png', 'image/gif'])) {
        move_uploaded_file($_FILES['img']['tmp_name'], '../upload/' . $_FILES['img']['name']);
        $sql = "insert into `img`(`img`) values ('{$_FILES['img']['name']}') ";
        $pdo->exec($sql);
        header("location:../index.php?do=upload");
        
    } else {
        header("location:../index.php?do=upload&error=非圖片格式");
       
    }
} else {
  header("location:../index.php?do=upload&error=沒有選擇檔案");
}
