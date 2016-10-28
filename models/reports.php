<?php
/**
* author:Ly Tuan
* Gmail: lytuanduong96@gmail.com
*/
require_once (dirname(dirname(__FILE__)).'/libraries/connector.php');
class Reports 
{
	private $conn;
	private $table="report";	
	function __construct()
	{
		$this ->conn=Connector::getInstance()->getConnection();
	}

	function get_reports_list(){
		$stsm = $this->conn->prepare("SELECT * FROM $this->table");
		$stsm->execute();
		return $stsm->fetchAll();
	}

	 public function delete_report($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
    }

    public function add_report($report){
    	$stsm =$this->conn->prepare("INSERT INTO $this->table(report_name,report_desc) VALUES (:report_name,:report_desc)");
    	$value = array(
    		"report_name"=>$report['report_name'],
    		"report_desc"=>$report['report_desc']
    	);
    	$stsm ->execute($value);
    }

    public function get_report($id){
    	$stsm = $this->conn->prepare("SELECT * FROM $this->table WHERE id= ?");
    	$stsm->execute(array($id));
    }

    public function edit_report($id,$report){
    	$stsm = $this->conn->prepare("UPDATE $this->table SET report_name=:report_name, report_desc=:report_desc WHERE id= :id");
    	$value = array(
    		"report_name"=>$report['report_name'],
    		"report_desc"=> $report['report_desc'],
    		"id"=>$id
    	);
    	$stsm->execute($value);
    }
}