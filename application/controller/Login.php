<?php

include_once(dirname(__DIR__) . '/config/core.php');
class Login extends CURD_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadmodel('/model/Login_model');
        $this->model = new Loing_model();
    }
    public function load($page)
    {
        if (method_exists('Login', $page)) {
            $this->$page();
        }
        throw new Exception("Method Not Found");
    }
    public function index()
    {
        $results =  $this->model->getdata();
    }
    public function register()
    {
        $this->renderview('/view/login.php');
    }
}
renderClass(new Login());
