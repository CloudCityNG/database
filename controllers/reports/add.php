<?php 

/**
* author: Lý Văn Tuấn
* gmail: lytuanduong96@gmail.com
*/

require_once (dirname(dirname(dirname(__FILE__))).'/models/reports.php');

$report_model = new Reports();

if($_POST){
	$report = array(
		"report_name"=>$_POST['report_name'],
		"report_desc"=>$_POST['report_desc']
	);
	$report_model->add_report($report);
	
}
require "../../views/reports/add.tor.php";