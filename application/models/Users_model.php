<?php

class Users_Model extends CI_Model {
// start code  vaib
    // public $Organization_name;
    // public $Organization_address;
    // public $Organization_unit;
    // public $Organization_city;
    // public $Organization_state;
    // public $Organization_country;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function insert_data($table,$data) {    
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function update_data($table, $data, $where){
        $this->db->where($where);
        $this->db->update($table,$data);
        return true;
    }
    public function delete_data($table, $where){
        $this->db->where($where);
        return $this->db->delete($table);
    }
    public function get_max_id($table){
        $this->db->select_max('id');
        $this->db->from($table);
        $query = $this->db->get();  // Produces: SELECT MAX(age) as age FROM members
        return $query->row()->id;
    }
    public function get_single($table,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $info = $this->db->get();
        return $info->row();
    }

// end code vaib
    
}