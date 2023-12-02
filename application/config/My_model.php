<?php
include_once(dirname(__FILE__) . '/core.php');

class My_model extends CURD_controller
{
    // Connect Database
    public function __construct()
    {
        parent::__construct();
    }

    public function real_escape_string($valuse)
    {
        $real = mysqli_real_escape_string($this->dbcon, $valuse);
        return $real;
    }
}
