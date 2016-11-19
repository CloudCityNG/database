<?php
/**
 * User: Ly Tuan
 * Date: 18/11/2016
 * Time: 4:02
 */
require_once(dirname(dirname(dirname(__FILE__)))."/models/student_and_class.php");

$student_and_class_model = new StudentAndClass();
$student_list = $student_and_class_model->getListIdStudent();
$class_list = $student_and_class_model->getListIdClass();
if($_POST) {
    $class = array(
    	"class_id"=>$_POST["class_id"],
        "student_id" => $_POST["student_id"],
        "grade" => $_POST["grade"]
    );
    $student_and_class_model->add_student_and_class($class);
}
require "../../views/student_and_class/add.tor.php";