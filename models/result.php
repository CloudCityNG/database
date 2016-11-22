<?php
/**
 * Created by PhpStorm.
 * User: ducpham
 * Date: 11/7/2016
 * Time: 9:38 PM
 */

require_once(__DIR__."/../libraries/connector.php");

class Result
{
    private $conn;
    private $table = "result";

    public function __construct(){
        $this->conn = Connector::getInstance()->getConnection();
    }

    public function get_result_list() {
        $stmt = $this->conn->prepare("
            SELECT t.*, a.assignment_description, s.firstname, s.lastname
            FROM $this->table t
            INNER JOIN assignment a
              ON t.assignment_id = a.id
            INNER JOIN student s
              ON t.student_id = s.id
        ");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function get_result($assignment_id, $student_id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE assignment_id = :assignment_id AND student_id = :student_id");
        $value = array(
            "assignment_id" => $assignment_id,
            "student_id" => $student_id
        );
        $stmt->execute($value);
        return $stmt->fetch();
    }

    public function add_result($result) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (assignment_id, student_id, score, late) 
          VALUES (:assignment_id, :student_id, :score, :late)");
        $value = array(
            "assignment_id" => $result["assignment_id"],
            "student_id" => $result["student_id"],
            "score" => $result["score"],
            "late" => $result["late"]
        );
        $stmt->execute($value);
    }

    public function edit_result($assignment_id, $student_id, $class) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET
            score = :score,
            late = :late,
            WHERE assignment_id = :assignment_id AND student_id = :student_id");
        $value = array(
            "score" => $class["score"],
            "late" => $class["late"],
            "assignment_id" => $assignment_id,
            "student_id" => $student_id
        );
        $stmt->execute($value);
    }

    public function delete_result($assignment_id, $student_id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE assignment_id = :assignment_id AND student_id = :student_id");
        $value = array(
            "assignment_id" => $assignment_id,
            "student_id" => $student_id
        );
        $stmt->execute($value);
    }

    // public function departments() {
    //     $stmt = $this->conn->prepare("
    //         SELECT DISTINCT d.department_name, d.id
    //         FROM $this->table t
    //         INNER JOIN department d
    //           ON t.department_id = d.id
    //     ");
    //     $stmt->execute();
    //     return $stmt->fetchAll();
    // }
    public function assignments(){
        $table = 'assignment';
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function students(){
        $table = 'student';
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

