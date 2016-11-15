<?php 
/*
	author: Ly Van Tuan
	gmail: lytuanduong96@gmail.com
*/
require_once (dirname(dirname(dirname(__FILE__))).'/models/department.php');
$department_model = new Department();
if($_POST){
	$department = array(
		"department_name"=>$_POST['department_name'],
		"department_number"=>$_POST['department_number'],
		"department_manager"=>$_POST['department_manager'],
		"department_chairperson"=>$_POST['department_chairperson']
	);
	$department_model->add_department($department);			
}
require "../../views/department/add.tor.php";