<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function action()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'username tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'password tidak boleh kosong']);
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->process_login();
        }
    }

    private function process_login()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        $cekpass = $this->db->get_where('admin', array('password' => $password));


        //jika usernya terdaftar
        if ($username == $user['username']) {
            if ($user['status'] = 1) {
                if ($password == $user['password']) {
                    $data = [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'role' => $user['role'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == '1') {
                        redirect('Superadmin');
                    }
                    if ($user['role'] == '2') {
                        redirect('Admin');
                    } else {
                        $this->session->unset_userdata('id');
                        $this->session->unset_userdata('username');
                        $this->session->unset_userdata('role');
                        $this->session->set_flashdata('gagal', true);
                        redirect('Auth');
                    }
                } else {
                    $this->session->set_flashdata('passwordsalah', true);
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('tidakaktif', true);
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('usernamesalah', true);
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('id');

        $this->session->set_flashdata('logout', true);
        redirect('Auth');
    }
}
