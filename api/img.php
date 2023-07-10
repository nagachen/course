<?php
include_once "../base.php";



if ($_FILES['img']['error'] <= 0) {
    
    if (in_array($_FILES['img']['type'], ['image/jpeg', 'image/png', 'image/gif'])) {
        move_uploaded_file($_FILES['img']['tmp_name'], '../upload/' . $_FILES['img']['name']);
        $sql = "insert into `img`(`img`) values ('{$_FILES['img']['name']}') ";
        q($sql);
        header("location:../index.php?do=img");
        
    } else {
        header("location:../index.php?do=img&error=非圖片格式");
       
    }
} else {
  header("location:../index.php?do=img&error=沒有選擇檔案");
}
