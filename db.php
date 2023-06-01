<?php 
$dsn="mysql:host=localhost;charset=utf8;dbname=course";
$pdo=new PDO($dsn,'root','');
session_start();
function dd($arg){
    echo"<pre>";
    print_r($arg);
    echo"</pre>";
}
?>