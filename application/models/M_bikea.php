<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bikea extends CI_Model
{
    private $company = 'company';
    private $admin = 'admin';

    public function get_admin()
    {
        return $this->db->get_where($this->admin, ['role' => '2'])->result();
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
}