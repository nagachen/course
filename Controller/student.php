<?php
include_once "db.php";
class Student extends DB{
    
    function __construct(){
        parent::__construct('student');
    }

    function list(){
        return "./view/query_student.php";
    }
    
    
}
?>