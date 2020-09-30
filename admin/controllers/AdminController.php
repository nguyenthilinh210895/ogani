<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/26/2020
 * Time: 1:44 AM
 */
require_once "controllers/Controller.php";
class AdminController extends Controller
{
    public function index(){
        $this->content = $this->render('views/homepages/index.php');
        require_once "views/layouts/main.php";
    }
}