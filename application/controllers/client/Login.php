<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model('user_model');
    }

    public function index(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        
        // $this->load->view('user/login', $this->data);

        if($this->input->post()){
            //validate form
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run()== FALSE){
                //ERROR
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('landing/login'));
            }
            else{
                //logic
                $users = $this->user_model->check_email($this->input->post('email'));
                if($users){
                    if(password_verify($this->input->post('password'), $users->password)){
                        $this->session->set_userdata('btc_user', $users);
                        $this->session->set_flashdata('success', 'Login successful');
                        redirect(base_url('client/home'));
                    }
                    else{
                        $this->session->set_flashdata('incorrect', 'incorrect password');
                        redirect(base_url('landing/login'));
                    }
                }
                else{
                    $this->session->set_flashdata('account', 'Account does not exist');
                    redirect(base_url('landing/login'));

                }
                
            }
        }
        $this->load->view('landing/login', $this->data);

    }

    public function change_password(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');

            if($this->form_validation->run()== FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('client/login/change_password'));
            }
            else{
                //logic
                $email = $this->user_model->check_email($this->input->post('email'));
                $phone = $this->user_model->get_by_phone($this->input->post('phone'));
                if($email && $phone){
                    //logic
                    $hashed = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                    $data = array(
                        'password' => $hashed
                    );
                    $email = $this->input->post('email');
                    $this->user_model->update_by_email($email, $data);
                    $this->session->set_flashdata('correct','You have successfully changed your password');
                    redirect('client/home');

                }
                else{
                    $this->session->set_flashdata('false', 'Invalid Account credential:: Continious trail will block IP');
                    redirect(base_url('client/login/change_password'));

                }
            }

        }
        $this->load->view('user/fragments/change_password', $this->data);

    }

}