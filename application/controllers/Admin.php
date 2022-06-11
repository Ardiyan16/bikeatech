<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('Zend');
        // $this->load->model('m_admin');
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
        $this->load->view('admin/dashboard');
    }

}
