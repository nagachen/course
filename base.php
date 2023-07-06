<?php
session_start();
$BASEDIR=dirname(__FILE__);

include_once $BASEDIR."/Controller/c_select.php";
include_once $BASEDIR."/Controller/student.php";
include_once $BASEDIR."/Controller/subject.php";
include_once $BASEDIR."/Controller/upload.php";

?>



<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<?php


function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}


function q($sql){
        $pdo=new PDO("mysql:host=localhost;charset=utf8;dbname=s1120208",'s1120208','s1120208');
        return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

$Student=new Student;
$Subject=new Subject;
$C_select=new C_select;
$Upload=new Upload;
?>