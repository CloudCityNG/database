<?php


require_once(dirname(dirname(dirname(__FILE__)))."/models/assignment.php");

$assignment_model = new Assignment();
$assignment = null;
$id = null;

if($_GET) {
    $id = $_GET['id'];
    $assignment = $assignment_model->get_assignment($id);
}

if($_POST) {
    $assignment = array(
        "assignment_description"=>$_POST['assignment_description'],
         "exam"=>$_POST['exam'],
         "percent_of_grade"=>$_POST['percent_of_grade'],
         "maximum_point"=>$_POST['maximum_point'],
         "class_id"=>$_POST['class_id']
    );
    $assignment_model->edit_assignment($id, $assignment);
}

require "../../views/assignment/edit.tor.php";