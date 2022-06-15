<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

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
        $var['blog'] = $this->m_bikea->get_blog2();
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

    public function portfolio()
    {
        $var['title'] = 'Portfolio';
        $var['category'] = $this->db->get('category_portfolio')->result();
        $var['portfolio'] = $this->m_bikea->get_portfolio();
        $this->load->view('user/portfolio', $var);
    }

    public function detail_portfolio($id)
    {
        $var['portfolio'] = $this->m_bikea->get_detailPortfolio($id);
        $var['detail'] = $this->db->get_where('detail_img', ['id_portfolio', $id])->result();
        $var['title'] = $var['portfolio']->title;
        $this->load->view('user/detail_portfolio', $var);
    }


    public function blog()
    {
        $var['title'] = 'Blog';
        $var['blog'] = $this->m_bikea->get_blog();
        $this->load->view('user/blog', $var);
    }

    public function detail_blog($id)
    {
        $var['detail'] = $this->db->get_where('blog', ['id' => $id])->row();
        $var['blog'] = $this->m_bikea->get_blog2();
        $var['title'] = $var['detail']->title;
        $this->load->view('user/detail_blog', $var);
    }
}
