<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 26/10/2016
 * Time: 09:58
 */
require_once(dirname(dirname(dirname(__FILE__)))."/models/result.php");

$result_model = new Result();

$assignments = $result_model->assignments();
$students = $result_model->students();

if($_POST) {
    $result = array(
        "score" => $_POST["score"],
        "late" => $_POST["late"]
    );
    $result_model->add_result($result);
}

require "../../views/result/add.tor.php";
