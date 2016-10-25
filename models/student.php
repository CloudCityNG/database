<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 21:12
 */
class Student
{
    private $table = "student";

    public function __construct(){

    }

    public function get_student_list() {
        $conn = Connector::getInstance()->getConnection();
        $stmt = $conn->prepare("SELECT student_number, major, firstname, lastname, address, city FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

