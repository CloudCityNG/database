<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */

require_once(dirname(dirname(dirname(__FILE__)))."/models/student.php");

$student_model = new Student();
$result = null;
$id = null;

if($_GET) {
    $id = $_GET['id'];
    $result = $student_model->get_student($id);
}

if($_POST) {
    $result = array(
        "student_number" => $_POST["student_number"],
        "firstname" => $_POST["firstname"],
        "lastname" => $_POST["lastname"],
        "father_name" => $_POST["father_name"],
        "mother_name" => $_POST["mother_name"],
        "address" => $_POST["address"],
        "city" => $_POST["city"],
        "state_or_province" => $_POST["state_or_province"],
        "postal_code" => $_POST["postal_code"],
        "phone_number" => $_POST["phone_number"],
        "email_name" => $_POST["email_name"],
        "major" => $_POST["major"],
        "note" => $_POST["note"]
    );
    $student_model->edit_student($id, $result);
}

require "../../views/student/edit.tor.php";