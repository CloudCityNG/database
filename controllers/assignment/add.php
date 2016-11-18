<?php
/**
 * Created by PhpStorm.
 * User: thuanbv
 * Date: 10/29/2016
 * Time: 10:45 AM
 */

require_once (dirname(dirname(dirname(__FILE__))).'/models/assignment.php');

$assignment_model = new Assignment();

if($_POST){
    $assignment = array(
         "assignment_description"=>$_POST['assignment_description'],
         "exam"=>$_POST['exam'],
         "percent_of_grade"=>$_POST['percent_of_grade'],
         "maximum_point"=>$_POST['maximum_point'],
         "class_id"=>$_POST['class_id']
    );
    $assignment_model->add_assignment($assignment);

}
require "../../views/assignment/add.tor.php";