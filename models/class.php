<?php
/**
 * Created by PhpStorm.
 * User: ducpham
 * Date: 11/7/2016
 * Time: 9:38 PM
 */

require_once(__DIR__."/../libraries/connector.php");

class Clazz
{
    private $conn;
    private $table = "class";

    public function __construct(){
        $this->conn = Connector::getInstance()->getConnection();
    }

    public function get_class_list() {
        $stmt = $this->conn->prepare("
            SELECT t.*, d.department_name, i.instructor_name
            FROM $this->table t
            INNER JOIN department d
              ON t.department_id = d.id
            INNER JOIN instructor i
              ON t.instructor_id = i.id
        ");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function get_class($id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
        return $stmt->fetch();
    }

    public function add_class($class) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (class_name, section, term, units, 
          year, location, days_and_times, note, department_id, instructor_id) 
          VALUES (:class_name, :section, :term, :units, 
          :year, :location, :days_and_times, :note, :department_id, :instructor_id)");
        $value = array(
            "class_name" => $class["class_name"],
            "section" => $class["section"],
            "term" => $class["term"],
            "units" => $class["units"],
            "year" => $class["year"],
            "location" => $class["location"],
            "days_and_times" => $class["days_and_times"],
            "note" => $class["note"],
            "department_id" => $class["department_id"],
            "instructor_id" => $class["instructor_id"]
        );
        $stmt->execute($value);
    }

    public function edit_class($id, $class) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET
            class_name = :class_name,
            section = :section,
            term = :term,
            units = :units,
            year = :year,
            location = :location,
            days_and_times = :days_and_times,
            note = :note,
            department_id = :department_id,
            instructor_id = :instructor_id
            WHERE id = :id");
        $value = array(
            "class_name" => $class["class_name"],
            "section" => $class["section"],
            "term" => $class["term"],
            "units" => $class["units"],
            "year" => $class["year"],
            "location" => $class["location"],
            "days_and_times" => $class["days_and_times"],
            "note" => $class["note"],
            "department_id" => $class["department_id"],
            "instructor_id" => $class["instructor_id"],
            "id" => $id
        );
        $stmt->execute($value);
    }

    public function delete_class($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
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
    public function departments(){
        $table = 'department';
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

//    public function instructors() {
//        $stmt = $this->conn->prepare("
//            SELECT DISTINCT i.instructor_name, i.id
//            FROM $this->table t
//            INNER JOIN instructor i
//              ON t.instructor_id = i.id
//        ");
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }
    public function instructors(){
        $table = 'instructor';
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

