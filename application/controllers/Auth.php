<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_user', 'user');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/kamar');
        }
        $this->load->view('auth');
    }  
    public function login()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->user->getdata($username);

        if ($user) {
            if ($user['password'] == $password) {
                $data = [
                    'id_user' => $user['id_user'],
                    'id_level' => $user['id_level'],
                    'nama' => $user['nama'],
                    'username' => $user['username'],
                ];

                $this->session->set_userdata($data);
                if ($user['id_level'] == '1') {
                    $this->session->set_flashdata('dashboard', 'Hallo');
                    redirect('admin/kamar');
                } else {
                    $this->session->set_flashdata('dashboard', 'Hallo');
                    redirect('resepsionis');
                }
            } else {
                $this->session->set_flashdata('adminbug', 'Password Anda Salah');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('adminbug', 'Username Anda Salah');
            redirect('auth');
        }
    }
    public function logout()
    {

        $this->session->sess_destroy();
        redirect('auth');
    }




    public function tamu()
    {
        if ($this->session->userdata('username')) {
            redirect('home');
        }
        $this->load->view('tamu/login');
    }
    public function register()
    {
        if ($this->session->userdata('username')) {
            redirect('home');
        }
        $this->load->view('tamu/register');
    }
    public function tamulogin()
    {
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        $tamu = $this->user->getdatatamu($email);

        if ($tamu) {
            if ($tamu['password'] == $password) {
                $data = [
                    'id_user' => $tamu['id_user'],
                    'id_level' => $tamu['id_level'],
                    'nama' => $tamu['nama'],
                    'email' => $tamu['email'],
                    'no_telp' => $tamu['no_telp'],
                ];

                $this->session->set_userdata($data);
                    $this->session->set_flashdata('home', 'Anda Berhasil Login');
                    redirect('home');

            } else {
                $this->session->set_flashdata('adminbug', 'Password Anda Salah');
                redirect('log');
            }
        } else {
            $this->session->set_flashdata('adminbug', 'Email Anda Salah');
            redirect('log');
        }
    }
    public function daftar(){
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]|strip_tags');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|strip_tags|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('no_telp', 'No Handphone', 'required|min_length[5]');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]|matches[password2]|strip_tags');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[5]|matches[password1]|strip_tags');

        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('tamu/register');
        } else {
            $post = $this->input->post();
            $data = [
                'nama' => $post['nama'],
                'email' => $post['email'],
                'id_level' => 3,
                'no_telp' => $post['no_telp'],
                'password' => $post['password1'],
            ];
            $this->user->register($data);
            $this->session->set_flashdata('regis', 'Data anda berhasil disimpan, Silahkan login');
            redirect('log');
        }
        
    }
    public function logouttamu()
    {

        $this->session->sess_destroy();
        redirect('home');
    }
}

/* End of file Login.php */
