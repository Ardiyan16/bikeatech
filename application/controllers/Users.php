<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_admin');
        // $this->load->model('m_kasir');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $var['title'] = 'Home';
		$this->load->view('user/home', $var);
	}

    public function login()
    {
        $this->load->view('admin/login');
    }
}