<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model('user_model');
    }

    public function index(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';

         if($this->input->post()){
            //validate
            $this->form_validation->set_rules('firstname','First Name', 'required');
            $this->form_validation->set_rules('lastname','Last Name', 'required');
            $this->form_validation->set_rules('email','Email', 'required');
            $this->form_validation->set_rules('phone','Mobile No', 'required');
            $this->form_validation->set_rules('country','Country', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            $this->form_validation->set_rules('confirm_pass','Confirm Password', 'required|matches[password]');

            if($this->form_validation->run()== FALSE){
                //redirect
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('landing/register'));
            }
            else{
                $password_hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

                $data = array(
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'country' => $_POST['country'],
                    'password' => $password_hash,
                    'invested' => '0',
                    'balance' => '0',
                    'withdrawal' => '0',

                );

                $email = $this->user_model->check_email($this->input->post('email'));

                if($email){
                    $this->session->set_flashdata('email', 'Email already exist');
                    redirect(base_url('landing/register'));
                }
                else{
                    $this->user_model->insert($data);
                    $this->session->set_flashdata('registered', 'you have successfully registered, login your account');
                    $users = $this->user_model->check_email($this->input->post('email'));

                    $this->session->set_userdata('btc_user', $users);
                    redirect(base_url('client/home'));
                }

            }
        }
        $this->load->view('landing/register', $this->data);
    }
}