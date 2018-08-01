<?php

class Base_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function debug($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }

}
