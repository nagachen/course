<?php
include_once "db.php";
class Subject extends DB{

function __construct(){
    parent::__construct('subject');
}  
function list(){
    return "./view/query_class.php";
}
}