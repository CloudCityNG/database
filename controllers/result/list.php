<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */
require_once(dirname(dirname(dirname(__FILE__)))."/models/result.php");

$result_model = new Result();

if(isset($_POST['delete'])) {
    $result_model->delete_student($_POST['assignment_id'], $_POST['student_id']);
}

$result_list = $result_model->get_result_list();

require "../../views/result/list.tor.php";