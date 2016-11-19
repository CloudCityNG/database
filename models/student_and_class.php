<?php 
/**
 * Author: Ly Tuan
 * Date: 18/11/2016
 * Time: 3:20
 */

require_once(dirname(dirname(__FILE__))."/libraries/connector.php");
require(dirname(__FILE__)."/student.php");

class StudentAndClass
{
    private $conn;
    private $table = "student_and_class";

    public function __construct(){
        $this->conn = Connector::getInstance()->getConnection();
    }

    public function get_student_and_class_list() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();
    }



    public function get_student_and_class($id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
        return $stmt->fetch();
    }

    public function add_student_and_class($student_class) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table(class_id, student_id,grade) 
          VALUES (:class_id, :student_id, :grade)");
        $value = array(
            "class_id" => $student_class["class_id"],
            "student_id" => $student_class["student_id"],
            "grade" => $student_class["grade"]
        );
        $stmt->execute($value);
    }

    public function edit_student_class($class_id,$student_id, $student_class) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET
            class_id = :class_id,
            student_id = :student_id,
            grade = :grade
            WHERE class_id = :class_id_mark AND student_id = :student_id_mark" );
        $value = array(
            "class_id" => $student_class["class_id"],
            "student_id" => $student_class["student_id"],
            "grade" => $student_class["grade"],
            "class_id_mark" => $class_id,
            "student_id_mark" => $student_id
        );
        $stmt->execute($value);
    }
    public function getListIdStudent(){
    	$student_model = new Student();
    	$student_list= $student_model->get_student_list();
    	return $student_list;
    }
    public function getListIdClass(){
        $classTable = 'class';
        $stmt = $this->conn->prepare("SELECT * FROM $classTable");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete_student_and_class($class_id,$student_id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE class_id = :class_id AND student_id=:student_id");
        $value = array(
            "class_id"=>$class_id,
            "student_id"=>$student_id
            );
        $stmt->execute($value);
    }
}

