<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bikea', 'm_bikea');
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
        $var['title'] = 'Admin | Dashboard';
        $this->load->view('admin/dashboard', $var);
    }

    public function blog()
    {
        $var['title'] = 'Admin | Blog';
        $var['blog'] = $this->m_bikea->get_blog();
        $var['detail'] = $this->m_bikea->get_blog();
        $this->load->view('admin/blog', $var);
    }

    public function create_blog()
    {
        $var['title'] = 'Admin | Add Blog';
        $this->load->view('admin/create_blog', $var);
    }

    public function save_blog()
    {
        $this->m_bikea->save_blog();
        $this->session->set_flashdata('success_create', true);
        redirect('Admin/blog');
    }

    public function edit_blog($id)
    {
        $var['title'] = 'Admin | Edit Blog';
        $var['edit'] = $this->db->get_where('blog', ['id' => $id])->row();
        $this->load->view('admin/edit_blog', $var);
    }

    public function update_blog()
    {
        $this->m_bikea->update_blog();
        $this->session->set_flashdata('success_update', true);
        redirect('Admin/blog');
    }

    public function delete_blog($id)
    {
        $this->db->delete('blog', ['id' => $id]);
        $this->session->set_flashdata('success_delete', true);
        redirect('Admin/blog');
    }

    public function partner()
    {
        $var['title'] = 'Admin | Partner';
        $var['partner'] = $this->m_bikea->get_partner();
        $this->load->view('admin/partner', $var);
    }

}
