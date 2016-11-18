<?php



require_once(__DIR__."/../libraries/connector.php");

class Instructor
{
    private $conn;
    private $table = "instructor";

    public function __construct(){
        $this->conn = Connector::getInstance()->getConnection();
    }

    public function get_instructor_list() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function get_instructor($id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
        return $stmt->fetch();
    }

    public function add_instructor($instructor) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table(instructor_name, email_name, phone_number, extension) 
          VALUES (:instructor_name, :email_name, :phone_number, :extension)");
        $value = array(
            "instructor_name" => $instructor["instructor_name"],
            "email_name" => $instructor["email_name"],
            "phone_number" => $instructor["phone_number"],
            "extension" => $instructor["extension"]
        );
        $stmt->execute($value);
    }

    public function edit_instructor($id, $instructor) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET
            instructor_name = :instructor_name,
            email_name = :email_name,
            phone_number = :phone_number,
            extension = :extension
            WHERE id = :id");
        $value = array(
            "instructor_name" => $instructor["instructor_name"],
            "email_name" => $instructor["email_name"],
            "phone_number" => $instructor["phone_number"],
            "extension" => $instructor["extension"]
        );
        $stmt->execute($value);
    }

    public function delete_instructor($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
    }
}

