<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Document_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    private $table_name = 'document';

   
    public function insert($data){
        return $this->db->insert($this->table_name, $data);
    }

    public function check_email($email){
        $this->db->where('email', $email);
        return $this->db->get($this->table_name)->row();
    }

    public function get_all($id){
        $this->db->where('id', $id);
        $this->db->join('users', 'transaction.user_id = users.id');
        return $this->db->get($this->table_name)->result();
    }

    public function get_one($id){
        $this->db->where('id', $id);
        // $this->db->join('users', 'transaction.user_id = users.id');
        return $this->db->get($this->table_name)->row();
    }

    public function update($id, $data){
        $this->db->where('id', $id);
        $this->db->update($this->table_name, $data);
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table_name)->row();
    }
}
