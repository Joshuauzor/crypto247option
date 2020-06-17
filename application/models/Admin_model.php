<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Admin_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_name = 'admin';

    public function insert($data){
        return $this->db->insert($this->table_name, $data);
    }

    public function check_email($email){
        $this->db->where('email', $email);
        return $this->db->get($this->table_name)->row();
    }

    public function get_all($id){
        $this->db->where('id', $id);
        return $this->db->get($this->table_name)->result();
    }

    public function get_one($id){
        $this->db->where('id', $id);
        return $this->db->get($this->table_name)->row();
    }

    public function get_by_phone($phone){
        $this->db->where('phone',$phone);
        return $this->db->get($this->table_name)->row();
    }

    public function update($id, $data){
        $this->db->where('id', $id);
         return $this->db->update($this->table_name, $data);
    }

    public function update_by_email($email, $data){
        $this->db->where('email', $email);
        return $this->db->update($this->table_name, $data);
    }
    public function delete($id){
        $this->db->where('id', $id);
         return $this->db->delete($this->table_name)->row();
    }

    public function get_everything(){
        return $this->db->get($this->table_name)->result();
    }
}