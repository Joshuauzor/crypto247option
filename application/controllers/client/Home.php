<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
        $this->load->model(array('user_model', 'document_model'));
        if(!$this->session->btc_user){
            redirect(base_url());
        }
    }

    public function index(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        // var_dump( $this->data['transaction'] ); die;
        $this->load->view('user/index', $this->data);
    }

    public function live_trade(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);

        $this->load->view('user/fragments/live_trade', $this->data);

    }

    // public function veriffy(){
    //     $this->data['title'] = '247smartoptions | Most reliable trade network';
    //     $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);

    //     $config['upload_path'] = './assets/document/';
    //     $config['allowed_types'] = 'png|gif|jpg';
    //     $config['max_size'] = '7000';

    //     $this->load->library('upload', $config);

    //     if(!$this->upload->do_upload('front_page') || (!$this->upload->do_upload('back_page'))){
    //         $this->data['error'] = $this->upload->display_errors();
    //         $this->load->view('user/fragments/verify_account', $this->data);    
    //     }
    //     else{
    //         $this->data['data'] = array('document_metadata' => $this->upload->data());
    //         //db
            
    //         //db
    //         $this->load->view('user/fragments/verify_account', $this->data);    
    //    }

    // }

    public function veriffy(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/verify_account', $this->data);    


        $config['upload_path'] = './assets/document';
        $config['allowed_types'] = 'png|gif|jpg';
        // $config['max_size'] = '7000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('file_name');
        $file_name = $this->upload->data();
       
        $data = array(
            'front_page' => $file_name['file_name'],
        );
        // var_dump($data); die;
        $this->document_model->insert($data);
        $this->session->set_flashdata('review', 'your account is currently under review!');
        redirect(base_url('client/home'));
    }

 
    public function verify(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
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
            'status' => 'pending',
        );
        // var_dump($data); die;
        $this->user_model->update($this->session->btc_user->id, $data);
    }


    public function support(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/support', $this->data);
    }

    public function upgrade(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/upgrade', $this->data);
    }

    
    public function withdraw(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/withdraw', $this->data);
    }

    public function fund_account(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/fund_account', $this->data);
    }

    public function history(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/history', $this->data);
    }

    public function profile(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';
        $this->data['transaction'] = $this->user_model->get_one($this->session->btc_user->id);
        $this->load->view('user/fragments/profile', $this->data);
    }

   

    public function change_email(){
        $this->data['title'] = '247smartoptions | Most reliable trade network';

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
                
                if($check){
                    $data = array(
                        'email' => $_POST['email']
                    );
                    $this->user_model->update($check, $data);
                    $this->session->set_flashdata('success','You have successfully changed your email address');
                    redirect(base_url('client/home'));

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
        $this->data['title'] = '247smartoptions | Most reliable trade network';
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