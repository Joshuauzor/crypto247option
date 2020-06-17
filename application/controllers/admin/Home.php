<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('user_model','admin_model', 'document_model'));
        if(!$this->session->btc_admin){
            redirect(base_url('admin/login'));
        }
    }

    public function index(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['admin'] = $this->admin_model->get_everything();
        $this->data['all_details'] = $this->admin_model->get_all($this->session->btc_admin->id);
        $this->data['user_account'] = $this->user_model->get_everything();
        // var_dump($this->data['user_account']); die;
        $this->data['acct'] = $this->user_model->get_pending_acct();
        // var_dump($this->data['user_account']); die;
        $this->load->view('admin/index', $this->data);
    }

    public function approve(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['admin'] = $this->admin_model->get_everything();
        $this->data['all_details'] = $this->admin_model->get_all($this->session->btc_admin->id);
        $this->data['user_account'] = $this->user_model->get_everything();
        $this->data['acct'] = $this->user_model->get_pending_acct();
        $this->load->view('admin/approve', $this->data);
    }

    public function edit_details(){
        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('account_type', 'Account type', 'required');
            $this->form_validation->set_rules('invested', 'Invested', 'required');
            $this->form_validation->set_rules('balance', 'Balance', 'required');
            $this->form_validation->set_rules('withdrawal', 'Withdrawal', 'required');

            if($this->form_validation->run()== FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/approve'));
            }
            else{
                $data = array(
                    'email' => $_POST['email'],
                    'account_type' => $_POST['account_type'],
                    'invested' => $_POST['invested'],
                    'balance' => $_POST['balance'],
                    'withdrawal' => $_POST['withdrawal'],

                );

                $this->user_model->update_by_email($this->input->post('email'), $data);
                redirect(base_url('admin/home/approve'));
            }

        }
        //load view if u want
    }

    public function reset_account(){

        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['admin'] = $this->admin_model->get_everything();
        $this->data['all_details'] = $this->admin_model->get_all($this->session->btc_admin->id);
        $this->data['user_account'] = $this->user_model->get_everything();
        $this->data['acct'] = $this->user_model->get_pending_acct();

        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required');

            if($this->form_validation->run()== FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/reset_account'));
            }
            else{
               $check = $this->admin_model->check_email($this->input->post('email'));
                $email= $this->input->post('email');
               if($check){
                $data = array(
                    'status' => 'Unverified',
                    'invested' => '0',
                    'withdrawal' => '0',
                    'balance' => '0',
                    'account_type' => 'Mini'
                );
                $this->session->set_flashdata('success', 'you have successfully reset the account');
                $this->user_model->update_by_email($email, $data);
                redirect(base_url('admin/home/reset_account'));
               }
               else{
                   $this->session->set_flashdata('invalid', 'Incorrect Email Address');
                   redirect(base_url('admin/home/reset_account'));
               }
            }
        }
        $this->load->view('admin/reset_account', $this->data);

    }
    
    public function pending_approve(){
        if($this->input->post()){
            $data = array(
                $status = 'Verified'
            );
            $this->user_model->update_by_email($this->input->post('email'), $data);
        }

    }

    public function pending_decline(){
        
    }

    public function verify_account(){
        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('status', 'Account Status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home'));
            }
            else{
                $email = $this->input->post('email');
                if($email){
                    $data = array(
                        'status' => $_POST['status']
                    );

                    $this->user_model->update_by_email($email, $data);
                    redirect(base_url('admin/home'));
                }else{
                    $this->session->set_flashdata('email', 'Invalid email, please cross check');
                    redirect(base_url('admin/home'));
                }
            }
        }
    }

    public function change_email(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['all_details'] = $this->admin_model->get_all($this->session->btc_admin->id);
        $this->data['user_account'] = $this->user_model->get_everything();
        $this->data['acct'] = $this->user_model->get_pending_acct();

        
        if($this->input->post()){
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if($this->form_validation->run()== FALSE){
                //error
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/change_email'));
            }
            else{
                //logic
                $phone = $this->admin_model->get_by_phone($this->input->post('phone'));
                $check = password_verify($this->input->post('password'), $phone->password);
                
                if($check){
                    $data = array(
                        'email' => $_POST['email']
                    );
                    $this->admin_model->update($check, $data);
                    $this->session->set_flashdata('success','You have successfully changed your email address');
                    redirect(base_url('admin/home'));

                }
                else{
                    $this->session->set_flashdata('incorrect','Please provide appropriate user details');
                    redirect(base_url('admin/home/change_email'));

                }
            }

        }
        $this->load->view('admin/fragment/change_email', $this->data);
    }

    public function phone(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['all_details'] = $this->admin_model->get_all($this->session->btc_admin->id);
        $this->data['admin'] = $this->admin_model->get_everything();

        $this->data['user_account'] = $this->user_model->get_everything();
        $this->data['acct'] = $this->user_model->get_pending_acct();

        if($this->input->post()){

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('phone', 'Mobile no', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/phone'));

            }
            else{
                $email = $this->admin_model->check_email($this->input->post('email'));

                if(password_verify($this->input->post('password'), $email->password)){
                    $data = array(
                        'phone' => $_POST['phone']
                    );

                    $this->admin_model->update($this->session->btc_admin->id, $data);
                    $this->session->set_flashdata('phone', 'Mobile no successfully changed!');
                    redirect(base_url('admin/home'));
                }
                else{
                    $this->session->set_flashdata('chai', 'incorrect details!');
                    redirect(base_url('admin/home/phone'));

                }
            }
        }
        //load view
        $this->load->view('admin/fragment/change_phone', $this->data);
    }

    public function logout(){
        if(!$this->session->btc_admin){
            redirect(base_url('admin/login'));
        }
        else{
            $this->session->unset_userdata('btc_admin');
            redirect(base_url('admin/login'));
        }
    }
}