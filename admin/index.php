<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/26/2020
 * Time: 12:53 AM
 */
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$controller = isset($_POST['controller']) ? $_POST['controller'] : 'admin';
$action = isset($_POST['action']) ? $_POST['action'] : 'index';
$controller = ucfirst($controller);
$controller .= "Controller";
$path_controller = "controllers/$controller.php";
if(!file_exists($path_controller)){
    die("Trang không tồn tại!");
}
require_once "$path_controller";
$obj = new $controller();
if(!method_exists($obj, $action)){
    die("Phương thức không tồn tại!");
}
$obj->$action();