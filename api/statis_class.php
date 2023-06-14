<?php
include_once "../db.php";
$sql_std="select count(`c_select`.`class_id`) 
from `c_select`,(select `id` from `class` where subject = '{$_POST['class']}')A 
where `c_select`.`class_id`= `A`.`id`";
$sql_total="select count(*) from `c_select`";
$std=$pdo->query($sql_std)->fetchColumn(); //有多少人選？
$total=$pdo->query($sql_total)->fetchColumn(); //一共有多少人？
header("location:../index.php?do=statis_class&std=$std&total=$total&class={$_POST['class']}");
