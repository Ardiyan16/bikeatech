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
        $var['edit'] = $this->m_bikea->get_admin();
        $this->load->view('superadmin/list_admin', $var);
    }

    public function save_admin()
    {
        $this->m_bikea->save_admin();
        $this->session->set_flashdata('success_create', true);
        redirect('Superadmin/list_admin');
    }

    public function update_admin()
    {
        $this->m_bikea->update_admin();
        $this->session->set_flashdata('success_update', true);
        redirect('Superadmin/list_admin');
    }

    public function delete_admin($id)
    {
        $this->db->delete('admin', ['id' => $id]);
        $this->session->set_flashdata('success_delete', true);
        redirect('Superadmin/list_admin');
    }

}