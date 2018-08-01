<?php

class Ui extends Base_Controller
{

    public function index()
    {
        $this->load->view("ui/index");
    }

    public function boot4()
    {
        $this->load->view("ui/boot4");
    }

}
