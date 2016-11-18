<?php


require_once(dirname(dirname(dirname(__FILE__)))."/models/instructor.php");

$instructor_model = new Instructor();
$instructor = null;
$id = null;

if($_GET) {
    $id = $_GET['id'];
    $instructor = $instructor_model->get_instructor($id);
}

if($_POST) {
    $instructor = array(
        "instructor_name" => $_POST["instructor_name"],
        "email_name" => $_POST["email_name"],
        "phone_number" => $_POST["phone_number"],
        "extension" => $_POST["extension"]
    );
    $instructor_model->edit_instructor($id, $instructor);
}

require "../../views/instructor/edit.tor.php";