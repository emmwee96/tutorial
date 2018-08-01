<?php

class Admin extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("User_model");

        $this->page_data = array();
        $this->page_data["dummy"] = "Hello world";
    }

    public function index()
    {

        $this->page_data["user"] = $this->User_model->select_all();

        // echo "<pre>";
        // var_dump($this->page_data);
        // echo "</pre>";
        // die();

        $this->load->view("user/all", $this->page_data);
    }

    public function add()
    {

        if ($_POST) {

            $input = $this->input->post();

            $data = array(
                "username" => $input["username"],
            );

            $this->User_model->insert($data);
        }

        $this->load->view("user/add", $this->page_data);

    }

    public function where()
    {
        // $user_id = 2;

        $where = array(
            "user_id" => 3,
            "username" => "testagain",
        );

        $this->debug($where);

        $this->page_data["user"] = $this->User_model->get_where($where);

        echo "<pre>";
        var_dump($this->page_data["user"]);
        echo "</pre>";
        die();
    }

    public function update()
    {
        if ($_POST) {
            $input = $this->input->post();

            $where = array(
                "user_id" => $input["user_id"],
            );

            $data = array(
                "username" => $input["username"],
            );

            $this->User_model->update_where($where, $data);
        }

        $this->load->view("user/update", $this->page_data);
    }

    public function get()
    {
        if ($_GET) {
            $input = $this->input->get();

            die(var_dump($input));
        }
    }

    function asd(){
        asdasbdasidh asfasdfasd
        fadsfdsaf
        sdgadsbgadsgads
        gadsfgadsfadsf
        
    }
}
