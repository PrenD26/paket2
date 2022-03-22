<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resepsionis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
      
        $this->load->model('Mod_reservasi', 'res');
        if ($this->session->userdata['id_level'] == 1) {
            redirect('kmr');
        }
        if ($this->session->userdata['id_level'] == 3) {
            redirect('home');
        }
        if ($this->session->userdata['id_level'] == null) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [
            'title' => "Data Reservasi",
            'reserv' =>$this->res->getdata(),
        ];
        $this->load->view('layout_A/header', $data);
        $this->load->view('layout_A/sidebar');
        $this->load->view('resepsionis/home', $data);
        $this->load->view('layout_A/footer');
       
    }

    public function filter()
    {
       
        $post = $this->input->post();
        $tanggalawal = $post['tanggalawal'];
        $tanggalakhir = $post['tanggalakhir'];
            $reservasi = $this->res->filterbytanggal($tanggalawal, $tanggalakhir);
        $data = [
            'title' => "Data Reservasi " . $tanggalawal . ' sampai ' . $tanggalakhir,
            'reserv' => $reservasi,
        ];
        $this->load->view('layout_A/header', $data);
        $this->load->view('layout_A/sidebar');
        $this->load->view('resepsionis/home', $data);
        $this->load->view('layout_A/footer');
    }


    public function update($id_reservasi)
    {
        $data = [
            'id_reservasi' => $id_reservasi,
            'status' => $this->input->post('status'),
        ];
        $this->res->update($data);
        $this->session->set_flashdata('create', 'Data Reservasi berhasil diubah');
        redirect('resepsionis');
    }
    public function delete($id_reservasi){
        $this->res->delete($id_reservasi);
        $this->session->set_flashdata('create', 'Data reservasi berhasil dihapus');
        redirect('resepsionis');
    }
}

/* End of file Resepsionis.php */
