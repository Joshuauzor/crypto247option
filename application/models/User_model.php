<?php defined('BASEPATH') OR exit ('No direct access allowed');

class User_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_name = 'users';

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

    public function get_everything(){
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
        return $this->db->delete($this->table_name);
    }

    public function delete_by_email($email){
        $this->db->where('email', $email);
       return $this->db->delete($this->table_name);   
   }
   
    public function get_pending_acct(){
        $this->db->where('status', 'pending');
        return $this->db->get($this->table_name)->result();
    }

    public function check_email_phone($email, $phone){
        $this->db->where('email', $email);
        $this->db->where('phone', $phone);
        return $this->db->get($this->table_name)->row();
    }
}