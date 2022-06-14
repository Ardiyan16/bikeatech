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
        $var['partner2'] = $this->m_bikea->get_partner();
        $this->load->view('admin/partner', $var);
    }

    public function save_partner()
    {
        $this->m_bikea->save_partner();
        $this->session->set_flashdata('success_create', true);
        redirect('Admin/partner');
    }

    public function update_partner()
    {
        $this->m_bikea->update_partner();
        $this->session->set_flashdata('success_update', true);
        redirect('Admin/partner');
    }

    public function delete_partner($id)
    {
        $this->db->delete('partner', ['id' => $id]);
        $this->session->set_flashdata('success_delete', true);
        redirect('Admin/partner');
    }

    public function team()
    {
        $var['title'] = 'Admin | Team';
        $var['team'] = $this->m_bikea->get_team();
        $var['team2'] = $this->m_bikea->get_team();
        $var['team3'] = $this->m_bikea->get_team();
        $this->load->view('admin/team', $var);
    }

    public function save_team()
    {
        $this->m_bikea->save_team();
        $this->session->set_flashdata('success_create', true);
        redirect('Admin/team');
    }

    public function update_team()
    {
        $this->m_bikea->update_team();
        $this->session->set_flashdata('success_update', true);
        redirect('Admin/team');
    }

    public function delete_team($id)
    {
        $this->db->delete('team', ['id' => $id]);
        $this->session->set_flashdata('success_delete', true);
        redirect('Admin/team');
    }

    public function portfolio()
    {
        $var['title'] = 'Admin | Portfolio';
        $var['portfolio'] = $this->m_bikea->get_portfolio();
        $var['detail'] = $this->m_bikea->get_portfolio();
        // var_dump($var['portfolio']);
        $this->load->view('admin/portfolio', $var);
    }

    public function create_portfolio()
    {
        $var['title'] = 'Admin | Add Portfolio';
        $var['partner'] = $this->m_bikea->get_partner();
        $var['category'] = $this->m_bikea->get_category();
        $this->load->view('admin/create_portfolio', $var);
    }

    public function save_portfolio()
    {
        $this->m_bikea->save_portfolio();
        $this->session->set_flashdata('success_create', true);
        redirect('Admin/portfolio');
    }

    public function edit_portfolio($id)
    {
        $var['title'] = 'Admin | Edit Portfolio';
        $var['partner'] = $this->m_bikea->get_partner();
        $var['category'] = $this->m_bikea->get_category();
        $var['edit'] = $this->db->get_where('portfolio', ['id' => $id])->row();
        $this->load->view('admin/edit_portfolio', $var);
    }

    public function update_portfolio()
    {
        $this->m_bikea->update_portfolio();
        $this->session->set_flashdata('success_update', true);
        redirect('Admin/portfolio');
    }

    public function delete_portfolio($id)
    {
        $this->db->delete('portfolio', ['id' => $id]);
        $this->session->set_flashdata('success_delete', true);
        redirect('Admin/portfolio');
    }

    public function category()
    {
        $var['title'] = 'Admin | Category';
        $var['category'] = $this->m_bikea->get_category();
        $this->load->view('admin/category', $var);
    }

    public function save_category()
    {
        $data = [
            'category' => $this->input->post('category')
        ];
        $this->db->insert('category_portfolio', $data);
        $this->session->set_flashdata('success_create', true);
        redirect('Admin/category');
    }

    public function delete_category($id)
    {
        $this->db->delete('category_portfolio', ['id_cat' => $id]);
        $this->session->set_flashdata('success_delete', true);
        redirect('Admin/category');
    }

    public function images_portfolio()
    {
        $var['title'] = 'Admin | Images Portfolio';
        $var['images_portfolio'] = $this->m_bikea->get_images();
        $var['images_portfolio2'] = $this->m_bikea->get_images();
        $var['portfolio'] = $this->db->get('portfolio')->result();
        $this->load->view('admin/images_portfolio', $var);
    }

    public function save_images()
    {
        $this->m_bikea->save_images();
        $this->session->set_flashdata('success_create', true);
        redirect('Admin/images_portfolio');
    }

    public function update_images()
    {
        $this->m_bikea->update_images();
        $this->session->set_flashdata('success_update', true);
        redirect('Admin/images_portfolio');
    }

    public function message()
    {
        $var['title'] = 'Admin | Message';
        $var['message'] = $this->m_bikea->get_message();
        $var['message2'] = $this->m_bikea->get_message();
        $this->load->view('admin/message', $var);
    }

    public function delete_message($id)
    {
        $this->db->delete('message', ['id' => $id]);
        $this->session->set_flashdata('success_delete', true);
        redirect('Admin/message');
    }

}
