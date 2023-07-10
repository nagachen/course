<?php
include_once "db.php";
class Img extends DB{
    function __construct(){
        parent::__construct('img');
    }
    function list(){
        return "./view/modal/img.php";
    }
}
?>