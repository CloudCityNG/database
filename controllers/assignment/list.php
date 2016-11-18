<?php
/**
 * Created by PhpStorm.
 * User: thuanbv
 * Date: 10/29/2016
 * Time: 10:45 AM
 */

require_once(dirname(dirname(dirname(__FILE__))).'/models/assignment.php');

$assignment_model = new Assignment();

if(isset($_POST['delete'])){
    $assignment_model->delete_assignment($_POST['id']);
}
$assignment_list = $assignment_model->get_assignment_list();



if(isset($_POST['edit'])){
    $id= $_POST['id'];
    $assignment = array(
        "assignment_description"=>$_POST['assignment_description'],
         "exam"=>$_POST['exam'],
         "percent_of_grade"=>$_POST['percent_of_grade'],
         "maximum_point"=>$_POST['maximum_point'],
         "class_id"=>$_POST['class_id']
    );
    $assignment_model->edit_assignment($id,$assignment);
}
require "../../views/assignment/list.tor.php";