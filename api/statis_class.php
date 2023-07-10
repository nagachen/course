<?php
include_once "../base.php";
$sql_std="select count(`c_select`.`class_id`) 
from `c_select`,(select `id` from `subject` where subject = '{$_POST['class']}')A 
where `c_select`.`class_id`= `A`.`id`";

$sql_total="select count(*) from `c_select`";
$sql_student=array_column(q($sql_std),'count(`c_select`.`class_id`)');

$std=$sql_student[0]; //有多少人選？
$total=$C_select->count(); //一共有多少人？






header("location:../index.php?do=statis_class&std=$std&total=$total&class={$_POST['class']}");
