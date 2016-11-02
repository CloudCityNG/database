<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */
require_once(dirname(dirname(dirname(__FILE__)))."/models/student.php");

$student_model = new Student();
$name = "";

if(isset($_POST['delete'])) {
    $student_model->delete_student($_POST['id']);
    $name = $_POST['name'];
}

$student_list = $student_model->get_student_list();

require "../../views/student/list.tor.php";