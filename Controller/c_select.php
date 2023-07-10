<?php
include_once "db.php";
class C_select extends DB{
    function __construct(){
        parent::__construct('c_select');
    }
    function list(){
        return "./view/query_class.php";
    }
}

?>