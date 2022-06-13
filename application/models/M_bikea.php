<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bikea extends CI_Model
{
    private $company = 'company';
    private $admin = 'admin';
    private $blog = 'blog';
    private $partner = 'partner';

    public function get_admin()
    {
        return $this->db->get_where($this->admin, ['role' => '2'])->result();
    }

    public function get_blog()
    {
        return $this->db->get($this->blog)->result();
    }

    public function get_partner()
    {
        return $this->db->get($this->partner)->result();
    }

    public function update_company()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->name = $post['name'];
        $this->ceo = $post['ceo'];
        $this->address = $post['address'];
        $this->no_telp = $post['no_telp'];
        $this->instagram = $post['instagram'];
        $this->facebook = $post['facebook'];
        $this->twitter = $post['twitter'];
        $this->db->update($this->company, $this, ['id' => $post['id']]);
    }

    public function save_admin()
    {
        $post = $this->input->post();
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->role = 2;
        $this->status = 1;
        $this->db->insert($this->admin, $this);
    }

    public function update_admin()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->db->update($this->admin, $this, ['id' => $post['id']]);
    }

    public function save_blog()
    {
        $post = $this->input->post();
        $this->title = $post['title'];
        $this->date_blog = $post['date_blog'];
        $this->category = $post['category'];
        $this->tag = $post['tag'];
        $this->description = $post['description'];
        $this->images = $this->upload_imagesBlog();
        $this->writer = $post['writer'];
        $this->db->insert($this->blog, $this);
    }

    public function update_blog()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->title = $post['title'];
        $this->date_blog = $post['date_blog'];
        $this->category = $post['category'];
        $this->tag = $post['tag'];
        $this->description = $post['description'];
        if (!empty($_FILES["images"]["name"])) {
            $this->images = $this->upload_imagesBlog();
        } else {
            $this->images = $post["old_images"];
        }
        $this->writer = $post['writer'];
        $this->db->update($this->blog, $this, ['id' => $post['id']]);
    }

    public function upload_imagesBlog()
    {
        $config['upload_path']          = './assets/img/images_blog/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $nama_lengkap = $_FILES['images']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
    }
}
