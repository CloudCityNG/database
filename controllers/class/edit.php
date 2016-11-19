<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */

require_once(__DIR__."/../../models/class.php");

$class_model = new Clazz();
$class = null;
$id = null;

$departments = $class_model->departments();
$instructors = $class_model->instructors();

if($_GET) {
    $id = $_GET['id'];
    $class = $class_model->get_class($id);
}

if($_POST) {
    $class = array(
        "class_name" => $_POST["class_name"],
        "section" => $_POST["section"],
        "term" => $_POST["term"],
        "units" => $_POST["units"],
        "year" => $_POST["year"],
        "location" => $_POST["location"],
        "days_and_times" => $_POST["days_and_times"],
        "note" => $_POST["note"],
        "department_id" => $_POST["department_id"],
        "instructor_id" => $_POST["instructor_id"]
    );
    if($id != null)
        $class_model->edit_class($id, $class);
}

require "../../views/class/edit.tor.php";