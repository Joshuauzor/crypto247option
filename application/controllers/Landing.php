<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->data['title'] = '247smartoptions | Most reliable trade network';
		$this->load->view('landing/index', $this->data);
	}

	public function register(){
		$this->data['title'] = '247smartoptions | Most reliable trade network';
		$this->load->view('landing/register_auth', $this->data);
	}

	public function login(){
		$this->data['title'] = '247smartoptions | Most reliable trade network';
		$this->load->view('landing/login_auth', $this->data);
	}

	// public function market_data(){
	// 	$this->data['title'] = '247smartoptions | Most reliable trade network';
	// 	$this->load->view('landing/market_data', $this->data);
	// }
}
