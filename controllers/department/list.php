<?php 
/*
author : Ly Van Tuan
gmail: lytuanduong96@gmail.com
Date: 28/10/2016
Time: 11:03
*/
require_once (dirname(dirname(dirname(__FILE__))).'/models/department.php');
$department_model = new Department();

$department_list  = $department_model->get_Department_List();


if(isset($_POST['delete'])){
	$department_model->del_Department($_POST['id']);
}



if(isset($_POST['edit'])){
	$id= $_POST['id'];
	$department = array(
		"department_name"=>$_POST['department_name'],
		"department_number"=>$_POST['department_number'],
		"department_manager"=>$_POST['department_manager'],
		"department_chairperson"=>$_POST['department_chairperson']
	);
	$department_model->edit_department($id,$department);
}
