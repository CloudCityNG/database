<?php
/**
 * Created by PhpStorm.
 * User: thuanbv
 * Date: 10/29/2016
 * Time: 10:32 AM
 */

require_once (dirname(dirname(__FILE__)).'/libraries/connector.php');
class Assignment
{
    private $conn;
    private $table="assignment";
    function __construct()
    {
        $this ->conn=Connector::getInstance()->getConnection();
    }

    function get_assignment_list(){
        $stsm = $this->conn->prepare("SELECT * FROM $this->table");
        $stsm->execute();
        return $stsm->fetchAll();
    }

    public function get_assignment($id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
        return $stmt->fetch();
    }


    public function add_assignment($assignment){
        $stsm =$this->conn->prepare("INSERT INTO $this->table(assignment_description, exam, percent_of_grade, maximum_point, class_id) VALUES (:assignment_description, :exam, :percent_of_grade, :maximum_point, :class_id)");
        $value = array(
            "assignment_description"=>$assignment['assignment_description'],
            "exam"=>$assignment['exam'],
            "percent_of_grade"=>$assignment['percent_of_grade'],
            "maximum_point"=>$assignment['maximum_point'],
            "class_id"=>$assignment['class_id']
        );
        $stsm ->execute($value);
    }

    public function edit_assignment($id,$assignment){
        $stsm = $this->conn->prepare("UPDATE $this->table SET assignment_description=:assignment_description, exam=:exam, percent_of_grade=:percent_of_grade, maximum_point=:maximum_point, class_id=:class_id  WHERE id= :id");
        $value = array(
            "assignment_description"=>$assignment['assignment_description'],
            "exam"=>$assignment['exam'],
            "percent_of_grade"=>$assignment['percent_of_grade'],
            "maximum_point"=>$assignment['maximum_point'],
            "class_id"=>$assignment['class_id']
        );
        $stsm->execute($value);
    }

    public function delete_assignment($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
    }
}