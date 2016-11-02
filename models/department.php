<?php
/**
* author: Ly Van Tuan
* gmail: lytuanduong96@gmail.com
*/

require_once (dirname(dirname(__FILE__)).'/libraries/connector.php');

class Department
{
	private $conn;
	private $table="department";
	function __construct()
	{
		$this->conn= Connector::getInstance()->getConnection();
	}

	function get_Department_List(){
		$stsm = $this->conn->prepare("SELECT * FROM $this->table");
		$stsm->execute();
		return $stsm->fetchAll();
	}
	function del_Department($id){
		$stsm =$this->conn->prepare("DELETE FROM $this->table WHERE id=?");
		$stsm->execute(array($id));
	}	
	function edit_department($id,$department){
		$stsm = $this->conn->prepare("UPDATE $this->table SET department_number=:department_number, department_manager=:department_manager, department_name=:department_name, department_chairperson=:department_chairperson WHERE id=:id");
		$value = array(
			"department_number"=>$department['department_number'],
			"department_manager"=>$department['department_manager'],
			"department_name"=>$department['department_name'],
			"department_chairperson"=>$department['department_chairperson'],
			"id"=>$id
		);
		$stsm->execute($value);
	}

	function add_department($department){
		$stsm = $this->conn->prepare("INSERT INTO $this->table(department_name,department_number,department_manager,department_chairperson) VALUES (:department_name,:department_number,:department_manager,:department_chairperson)");
		$value = array(
			"department_name"=>$department['department_name'],
			"department_number"=>$department['department_number'],
			"department_manager"=>$department['department_manager'],
			"department_chairperson"=>$department['department_chairperson']
			);

		$stsm->execute($value);
	}
}
