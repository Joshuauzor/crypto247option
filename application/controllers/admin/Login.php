<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('user_model', 'document_model','admin_model'));
    }

    public function index(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/login'));
            }
            else{
                $email = $this->admin_model->check_email($this->input->post('email'));
                if($email){
                    if(password_verify($this->input->post('password'), $email->password)){
                        $this->session->set_userdata('btc_admin', $email);
                        redirect(base_url('admin/home'));

                    }
                    else{
                        $this->session->set_flashdata('incorrect', 'Incorrect password, continious failed trail will lead to blockage of IP');
                        redirect(base_url('admin/login'));
                    }
                }
                else{
                    $this->session->set_flashdata('email', 'Account does not exist!!!');
                    redirect(base_url('admin/login'));
                    }
            }

        }
        $this->load->view('admin/fragment/login', $this->data);
    }

    public function recover(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        // $this->load->view('admin/fragment/recover_password', $this->data);

        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');

            if($this->form_validation->run()== FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/login/recover'));
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
                    $this->admin_model->update_by_email($email, $data);
                    $this->session->set_flashdata('correct','You have successfully changed your password');
                    redirect('admin/home');

                }
                else{
                    $this->session->set_flashdata('false', 'Invalid Account credential:: Continious trail will block IP');
                    redirect(base_url('admin/login/recover'));

                }
            }

        }
        $this->load->view('admin/fragment/change_password', $this->data);
    }
}