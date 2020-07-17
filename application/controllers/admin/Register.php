
<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model('admin_model');
        if(!$this->session->btc_admin){
            redirect(base_url('admin/login'));
        }
    }

    public function index(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';

         if($this->input->post()){
            //validate
            $this->form_validation->set_rules('lastname','Last Name', 'required');
            $this->form_validation->set_rules('email','Email', 'required');
            $this->form_validation->set_rules('phone','Phone', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            $this->form_validation->set_rules('confirm_pass','Confirm Password', 'required|matches[password]');

            if($this->form_validation->run()== FALSE){
                //redirect
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/register'));
            }
            else{
                $password_hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

                $data = array(
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'password' => $password_hash

                );

                $email = $this->admin_model->check_email($this->input->post('email'));

                if($email){
                    $this->session->set_flashdata('email', 'Email already exist');
                    redirect(base_url('admin/register'));
                }
                else{
                    $this->admin_model->insert($data);
                    redirect(base_url('admin/home'));
                }

            }
        }
        $this->load->view('admin/fragment/register', $this->data);
    }
}