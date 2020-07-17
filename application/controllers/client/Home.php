<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('user_model','Wallet_model', 'document_model'));
        if(!$this->session->btc_user){
            redirect(base_url());
        }
    }

    public function index(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        // var_dump( $this->data['transaction'] ); die;
        $this->load->view('user/index', $this->data);
    }

    public function live_trade(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);

        $this->load->view('user/fragments/live_trade', $this->data);

    }

  

    // public function veriffy(){
    //     $this->data['title'] = 'Crypto247network | Most reliable trade network';
    //     $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
    //     $this->load->view('user/fragments/verify_account', $this->data);    


    //     $config['upload_path'] = './assets/document';
    //     $config['allowed_types'] = 'png|gif|jpg';
    //     // $config['max_size'] = '7000';

    //     $this->load->library('upload', $config);
    //     $this->upload->do_upload('file_name');
    //     $file_name = $this->upload->data();
       
    //     $data = array(
    //         'front_page' => $file_name['file_name'],
    //     );
    //     // var_dump($data); die;
    //     $this->document_model->insert($data);
    //     $this->session->set_flashdata('review', 'your account is currently under review!');
    //     redirect(base_url('client/home'));
    // }

 
    public function verify(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/verify_account', $this->data);    


        $config['upload_path'] = './assets/document';
        $config['allowed_types'] = 'png|gif|jpg';
        // $config['max_size'] = '7000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('file_name');
        $file_name = $this->upload->data();
       
        $data = array(
            'document_name' => $this->input->post('document_name'),
            'front_page' => $file_name['file_name'],
            'status' => 'Pending',
        );
        // var_dump($data); die;
        $this->user_model->update($this->session->btc_user->id, $data);
    }


    public function support(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/support', $this->data);
    }

    public function upgrade(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/upgrade', $this->data);
    }

    
    public function withdraw(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/withdraw', $this->data);
    }

    public function deposit(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->data['wallet'] = $this->Wallet_model->get_one('1');
        $this->load->view('user/fragments/fund_account', $this->data);
    }

    public function history(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/history', $this->data);
    }

    public function profile(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/profile', $this->data);
    }
 

    public function edit_profile(){
        if($this->input->post()){
            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            // $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Mobile', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('client/home/profile'));
            }
                else{
                    $email = $this->user_model->check_email($this->session->btc_user->email);
                    if(password_verify($this->input->post('password'), $email->password)){
                        $data = array (
                            'firstname' => $_POST['firstname'],
                            'lastname' => $_POST['lastname'],
                            'phone' => $_POST['phone'],
                        );
                        $this->session->set_flashdata('success', 'Account details updated, re-login your account');
                        $this->user_model->update($this->session->btc_user->id, $data);
                        redirect(base_url('client/home/profile'));

                    }
                    else{
                        $this->session->set_flashdata('error', 'incorrect password');
                        redirect(base_url('client/login'));
                    }
                }
        }
    }
   

    public function change_email(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';

        if($this->input->post()){
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if($this->form_validation->run()== FALSE){
                //error
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('client/home/change_email'));
            }
            else{
                //logic
                $phone = $this->user_model->get_by_phone($this->input->post('phone'));
                $check = password_verify($this->input->post('password'), $phone->password);
                $id = $this->session->btc_user->id;
                if($check){
                   $email = $this->user_model->check_email($this->input->post('email'));
                   if($email){
                        $this->session->set_flashdata('error', 'Email is not available!');
                       redirect(base_url('client/home/change_email'));
                   }
                   else{
                     $data = array(
                        'email' => $_POST['email']
                    );
                    $this->user_model->update($id, $data);
                    $this->session->set_flashdata('success','Email address updated successfully');
                    redirect(base_url('client/home'));
                   }

                }
                else{
                    $this->session->set_flashdata('incorrect','Please provide appropriate user details');
                    redirect(base_url('client/home/change_email'));

                }
            }

        }
        $this->load->view('user/fragments/change_email', $this->data);

    }

    public function phone(){
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
        // $this->data['all_details'] = $this->admin_model->get_all($this->session->btc_admin->id);
        $this->data['user_account'] = $this->user_model->get_everything();
        $this->data['acct'] = $this->user_model->get_pending_acct();

        if($this->input->post()){

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('phone', 'Mobile no', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('client/home/phone'));

            }
            else{
                $email = $this->user_model->check_email($this->input->post('email'));

                if(password_verify($this->input->post('password'), $email->password)){
                    $data = array(
                        'phone' => $_POST['phone']
                    );

                    $this->user_model->update($this->session->btc_user->id, $data);
                    $this->session->set_flashdata('phone', 'Mobile no successfully changed!');
                    redirect(base_url('client/home'));
                }
                else{
                    $this->session->set_flashdata('chai', 'incorrect details!');
                    redirect(base_url('client/home/phone'));

                }
            }
        }
        //load view
        $this->load->view('user/fragments/change_phone', $this->data);
    }

    public function logout(){
        if(!$this->session->btc_user){
            redirect(base_url());
        }
        else{
            $this->session->unset_userdata('btc_user');
            redirect(base_url());
        }
    }
}