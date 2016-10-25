<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */
require "../../libraries/connector.php";
require "../../models/student.php";

$student_model = new Student();

$student_list = $student_model->get_student_list();

require "../../views/student/list.tor.php";