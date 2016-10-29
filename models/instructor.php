<?php
/**
 * Created by PhpStorm.
 * User: thuanbv
 * Date: 10/29/2016
 * Time: 10:32 AM
 */

require_once (dirname(dirname(__FILE__)).'/libraries/connector.php');
class Instructor
{
    private $conn;
    private $table="instructor";
    function __construct()
    {
        $this ->conn=Connector::getInstance()->getConnection();
    }

    function get_instructor_list(){
        $stsm = $this->conn->prepare("SELECT * FROM $this->table");
        $stsm->execute();
        return $stsm->fetchAll();
    }

    public function delete_instructor($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute(array($id));
    }

    public function add_instructor($instructor){
        $stsm =$this->conn->prepare("INSERT INTO $this->table(instructor_name, email_name, phone_number, extension) VALUES (:instructor_name, :email_name, :phone_number, :extension)");
        $value = array(
            "instructor_name"=>$instructor['instructor_name'],
            "email_name"=>$instructor['email_name'],
            "phone_number"=>$instructor['phone_number'],
            "extension"=>$instructor['extension']
        );
        $stsm ->execute($value);
    }

    public function get_instructor($id){
        $stsm = $this->conn->prepare("SELECT * FROM $this->table WHERE id= ?");
        $stsm->execute(array($id));
    }

    public function edit_instructor($id,$instructor){
        $stsm = $this->conn->prepare("UPDATE $this->table SET instructor_name=:instructor_name, email_name=:email_name, phone_number=:phone_number, extension=:extension  WHERE id= :id");
        $value = array(
            "instructor_name"=>$instructor['instructor_name'],
            "email_name"=>$instructor['email_name'],
            "phone_number"=>$instructor['phone_number'],
            "extension"=>$instructor['extension']
        );
        $stsm->execute($value);
    }
}