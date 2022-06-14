<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bikea', 'm_bikea');
        // $this->load->model('m_kasir');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $var['title'] = 'Home';
        $var['partner'] = $this->m_bikea->get_partner();
        $var['count_partner'] = $this->m_bikea->count_partner();
        $var['count_portfolio'] = $this->m_bikea->count_portfolio();
        $var['count_team'] = $this->m_bikea->count_team();
        $var['blog'] = $this->m_bikea->get_blog();
		$this->load->view('user/home', $var);
	}

    public function contact()
    {
        $var['title'] = 'Contact';
        $this->load->view('user/contact', $var);
    }

    public function save_message()
    {
        $this->m_bikea->save_message();
        $this->session->set_flashdata('success_send', true);
        redirect('Users/contact');
    }

    public function about()
    {
        $var['title'] = 'About';
        $var['team'] = $this->m_bikea->get_team();
        $this->load->view('user/about', $var);
    }

    public function service()
    {
        $var['title'] = 'Service';
        $this->load->view('user/service', $var);
    }


}