<?php
/**
* author: Ly Van Tuan
* gmail: lytuanduong96@gmail.com
*/
require_once(dirname(dirname(dirname(__FILE__))).'/models/reports.php');

$reports_model = new Reports();

if(isset($_POST['delete'])){
	$reports_model->delete_report($_POST['id']);
}
$reports_list = $reports_model->get_reports_list();



if(isset($_POST['edit'])){
	$id= $_POST['id'];
	$report = array(
		
		"report_name"=>$_POST['report_name'],
		"report_desc"=>$_POST['report_desc']
	);
	$reports_model->edit_report($id,$report);
}