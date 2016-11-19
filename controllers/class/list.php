<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */
require_once(__DIR__."/../../models/class.php");

$class_model = new Clazz();

if(isset($_POST['delete'])) {
    $class_model->delete_class($_POST['id']);
}

$class_list = $class_model->get_class_list();

require "../../views/class/list.tor.php";