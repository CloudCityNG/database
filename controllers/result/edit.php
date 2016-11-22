<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */

require_once(dirname(dirname(dirname(__FILE__)))."/models/result.php");

$result_model = new Result();
$result = null;
$assignment_id = null;
$student_id = null;

$assignments = $result_model->assignments();
$students = $result_model->students();

if($_GET) {
    $assignment_id = $_GET['assignment_id'];
    $student_id = $_GET['student_id'];
    $result = $result_model->get_result($assignment_id, $student_id);
}

if($_POST) {
    $result = array(
        "score" => $_POST["score"],
        "late" => $_POST["late"]
    );
    $result_model->edit_result($assignment_id, $student_id, $result);
}

require "../../views/result/edit.tor.php";