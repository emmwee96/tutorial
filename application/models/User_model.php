<?php

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function select_all()
    {
        $this->db->select("*");
        $this->db->from("user");

        $query = $this->db->get();

        return $query->result_array();
    }

    public function insert($data)
    {
        $this->db->insert("user", $data);

        return $this->db->insert_id();
    }

    public function get_where($array)
    {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("user_id", 3);
        $this->db->where($array);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function update_where($where, $data)
    {
        $this->db->where($where);
        $this->db->update("user", $data);
    }
}
