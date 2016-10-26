<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 21:12
 */
require_once(dirname(__FILE__, 2)."/libraries/connector.php");

class Student
{
    private $conn;
    private $table = "student";

    public function __construct(){
        $this->conn = Connector::getInstance()->getConnection();
    }

    public function get_student_list() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function get_student($id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
    }

    public function add_student($student) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table(student_number, firstname, lastname) 
          VALUES (:student_number, :firstname, :lastname)");
        $value = array(
            "student_number" => $student["student_number"],
            "firstname" => $student["firstname"],
            "lastname" => $student["lastname"]
        );
        $stmt->execute($value);
    }

    public function edit_student($id, $student) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET
            firstname = :firstname,
            lastname = :lastname,
            student_number = :student_number
            WHERE id = :id");
        $value = array(
            "student_number" => $student["student_number"],
            "firstname" => $student["firstname"],
            "lastname" => $student["lastname"],
            "id" => $id
        );
        $stmt->execute($value);
    }

    public function delete_student($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
    }
}

