<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 21:12
 */
require_once(__DIR__."/../libraries/connector.php");

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
        return $stmt->fetch();
    }

    public function add_student($student) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table(student_number, firstname, lastname, father_name, 
          mother_name, address, city, state_or_province, postal_code, phone_number, email_name, major, note) 
          VALUES (:student_number, :firstname, :lastname, :father_name, 
          :mother_name, :address, :city, :state_or_province, :postal_code, :phone_number, :email_name, :major, :note)");
        $value = array(
            "student_number" => $student["student_number"],
            "firstname" => $student["firstname"],
            "lastname" => $student["lastname"],
            "father_name" => $student["father_name"],
            "mother_name" => $student["mother_name"],
            "address" => $student["address"],
            "city" => $student["city"],
            "state_or_province" => $student["state_or_province"],
            "postal_code" => $student["postal_code"],
            "phone_number" => $student["phone_number"],
            "email_name" => $student["email_name"],
            "major" => $student["major"],
            "note" => $student["note"]
        );
        $stmt->execute($value);
    }

    public function edit_student($id, $student) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET
            student_number = :student_number,
            firstname = :firstname,
            lastname = :lastname,
            father_name = :father_name,
            mother_name = :mother_name,
            address = :address,
            city = :city,
            state_or_province = :state_or_province,
            postal_code = :postal_code,
            phone_number = :phone_number,
            email_name = :email_name,
            major = :major,
            note = :note
            WHERE id = :id");
        $value = array(
            "student_number" => $student["student_number"],
            "firstname" => $student["firstname"],
            "lastname" => $student["lastname"],
            "father_name" => $student["father_name"],
            "mother_name" => $student["mother_name"],
            "address" => $student["address"],
            "city" => $student["city"],
            "state_or_province" => $student["state_or_province"],
            "postal_code" => $student["postal_code"],
            "phone_number" => $student["phone_number"],
            "email_name" => $student["email_name"],
            "major" => $student["major"],
            "note" => $student["note"],
            "id" => $id
        );
        $stmt->execute($value);
    }

    public function delete_student($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
    }
}

