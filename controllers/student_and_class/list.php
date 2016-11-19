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

if(isset($_POST['delete'])) {
    $student_and_class_model->delete_student_and_class($_POST['class_id'],$_POST['student_id']);
}
$student_list = $student_and_class_model->getListIdStudent();

if(isset($_POST['edit'])){
	$class_id= $_POST['class_id'];
	$student_id= $_POST['student_id'];
	$class = array(
		
		"class_id"=>$_POST['class_id'],
		"student_id"=>$_POST['student_id'],
		"grade"=>$_POST['grade']
	);
	$student_and_class_model->edit_student_class($class_id,$student_id,$class);
}

$student_and_class_list = $student_and_class_model->get_student_and_class_list();

require "../../views/student_and_class/list.tor.php";