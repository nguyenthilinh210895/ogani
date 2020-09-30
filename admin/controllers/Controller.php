<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/26/2020
 * Time: 1:30 AM
 */

class Controller
{
    public $error;
    public $content;

    public function __construct()
    {
        //quản lý đăng nhập, nếu đăng nhập rồi mới chuyển vào trang admin
    }

    public function render($file, $variables = []){
        extract($variables);
        ob_start();
        require_once "$file";
        $view = ob_get_clean();
        return $view;
    }
}