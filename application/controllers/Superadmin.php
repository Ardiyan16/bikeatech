<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Superadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bikea', 'm_bikea');
        // $this->load->model('m_kasir');
        $this->load->library('form_validation');
        // if ($this->session->userdata('role') != "admin") {
        // 	echo "<script>
        //         alert('Anda harus login terlebih dahulu');
        //         window.location.href = '" . base_url('auth') . "';
        //     </script>"; //Url Logi
        // }
    }

    public function index()
    {
        $var['title'] = 'Superadmin | Dashboard';
        $this->load->view('superadmin/dashboard', $var);
    }

    public function company()
    {
        $var['title'] = 'Superadmin | Company';
        $var['company'] = $this->db->get_where('company', ['id' => '1'])->row();
        $var['edit'] = $this->db->get_where('company', ['id' => '1'])->row();
        $this->load->view('superadmin/company', $var);
    }

    public function update_company()
    {
        $this->m_bikea->update_company();
        $this->session->set_flashdata('success', true);
        redirect('Superadmin/company');
    }

    public function list_admin()
    {
        $var['title'] = 'Superadmin | List User';
        $var['list'] = $this->m_bikea->get_admin();
        $this->load->view('superadmin/list_admin', $var);
    }

}