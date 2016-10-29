<?php
/**
 * Created by PhpStorm.
 * User: thuanbv
 * Date: 10/29/2016
 * Time: 10:45 AM
 */

require_once (dirname(dirname(dirname(__FILE__))).'/models/instructor.php');

$instructor_model = new Instructor();

if($_POST){
    $instructor = array(
        "instructor_name"=>$_POST['instructor_name'],
        "email_name"=>$_POST['email_name'],
        "phone_number"=>$_POST['phone_number'],
        "extension"=>$_POST['extension']
    );
    $instructor_model->add_instructor($instructor);

}
require "../../views/instructor/add.tor.php";