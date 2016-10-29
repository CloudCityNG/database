<?php
/**
 * Created by PhpStorm.
 * User: thuanbv
 * Date: 10/29/2016
 * Time: 10:45 AM
 */

require_once(dirname(dirname(dirname(__FILE__))).'/models/instructor.php');

$instructor_model = new Instructor();

if(isset($_POST['delete'])){
    $instructor_model->delete_instructor($_POST['id']);
}
$instructor_list = $instructor_model->get_instructor_list();



if(isset($_POST['edit'])){
    $id= $_POST['id'];
    $instructor = array(
        "instructor_name"=>$_POST['instructor_name'],
        "email_name"=>$_POST['email_name'],
        "phone_number"=>$_POST['phone_number'],
        "extension"=>$_POST['extension']
    );
    $instructor_model->edit_instructor($id,$instructor);
}