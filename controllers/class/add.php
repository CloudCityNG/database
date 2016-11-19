<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 26/10/2016
 * Time: 09:58
 */
require_once(dirname(dirname(dirname(__FILE__)))."/models/class.php");

$class_model = new Clazz();

$departments = $class_model->departments();
$instructors = $class_model->instructors();

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

    $class_model->add_class($class);
}

require "../../views/class/add.tor.php";
