<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $this->data['title'] = 'Crypto247network | Most reliable trade network';
		$this->load->view('landing/index', $this->data);
	}
}
