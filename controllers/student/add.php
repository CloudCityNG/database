<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 26/10/2016
 * Time: 09:58
 */
require_once(dirname(dirname(dirname(__FILE__)))."/models/student.php");

$student_model = new Student();

if($_POST) {
    $student = array(
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
    $student_model->add_student($student);
}

require "../../views/student/add.tor.php";
