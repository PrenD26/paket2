<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamu extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
      
        $this->load->model('Mod_kamar', 'kamar');
        $this->load->model('Mod_fasilitas', 'fas');
        $this->load->model('Mod_reservasi', 'res');
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'kamar' => $this->kamar->getdata(),
            'fask' => $this->fas->getfask(),
        ];
        $this->load->view('layout_T/header', $data);
        $this->load->view('layout_T/sidebar');
        $this->load->view('tamu/home');
        $this->load->view('layout_T/footer');
    }

    public function kamar()
    {
        $data = [
            'title' => 'Kamar',
            'kamar' => $this->kamar->getdata(),
            'fask' => $this->fas->getfask(),
        ];
        $this->load->view('layout_T/header', $data);
        $this->load->view('layout_T/sidebar');
        $this->load->view('tamu/kamar', $data);
        $this->load->view('layout_T/footer');
    }

    
    public function view($id_kamar)
    {
        $data = [
            'title' => 'Detail Kamar',
            'fas' => $this->kamar->v_id($id_kamar),
            'fask' => $this->fas->v_id($id_kamar),
        ];
        $this->load->view('layout_T/header', $data);
        $this->load->view('layout_T/sidebar');
        $this->load->view('tamu/view', $data);
        $this->load->view('layout_T/footer');
    }

    public function fashotel()
    {
        $data = [
            'title' => 'Fasilitas Hotel',
            'fash' => $this->fas->getfash(),
        ];
        $this->load->view('layout_T/header', $data);
        $this->load->view('layout_T/sidebar');
        $this->load->view('tamu/fashotel', $data);
        $this->load->view('layout_T/footer');
    }
    public function pesan()
    {
        if ($this->session->userdata['id_level'] == null) {
            redirect('home');
        }
        $data = [
            'title' => 'Pesan',
            'kamar' => $this->kamar->getdata(),
        ];
        $this->load->view('layout_T/header', $data);
        $this->load->view('layout_T/sidebar');
        $this->load->view('tamu/pesan', $data);
        $this->load->view('layout_T/footer');
    }
    public function reservasi()
    {
        $this->form_validation->set_rules('checkin', 'Check In', 'required');
        $this->form_validation->set_rules('checkout', 'Check Out', 'required');
        $this->form_validation->set_rules('pemesan', 'Nama Pemesan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_telp', 'No Handphone', 'required');
        $this->form_validation->set_rules('tamu', 'Nama Tamu', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Kamar', 'required');
        $this->form_validation->set_rules('id_kamar', 'Tipe Kamar', 'required');
        if ($this->form_validation->run() == FALSE) {
            $datax = [
                'title' => 'Pesan',
                'kamar' => $this->kamar->getdata(),
            ];
            $this->load->view('layout_T/header', $datax);
            $this->load->view('layout_T/sidebar');
            $this->load->view('tamu/pesan', $datax);
            $this->load->view('layout_T/footer');
        } else {
            $post = $this->input->post();
            $data = [
                'id_kamar' => $post['id_kamar'],
                'id_user' => $this->session->userdata('id_user'),
                'checkin' => $post['checkin'],
                'checkout' => $post['checkout'],
                'pemesan' => $post['pemesan'],
                'email' => $post['email'],
                'no_telp' => $post['no_telp'],
                'tamu' => $post['tamu'],
                'jumlah' => $post['jumlah'],
                'status' => 1,
            ];
            $this->res->pesan($data);
            $this->session->set_flashdata('pesan', 'Reservasi berhasil dilakukan,Print bukti Resevasi pada menu History');
            redirect('home');
        }
    }
    public function history($id_user)
    {
        if ($this->session->userdata['id_level'] == 1) {
            redirect('kmr');
        }
        if ($this->session->userdata['id_level'] == 2) {
            redirect('resepsionis');
        }
        if ($this->session->userdata['id_level'] == null) {
            redirect('home');
        }
        if ($this->session->userdata['id_level'] == 3) {



            $datax = [
                'title' => 'History',
                'data' => $this->res->finddetail($id_user),
            ];
            $this->load->view('layout_T/header', $datax);
            $this->load->view('layout_T/sidebar');
            $this->load->view('tamu/history', $datax);
            $this->load->view('layout_T/footer');
        }
    }



    public function print($id_user)
    {

        $data = [
            'data' => $this->res->findrow($id_user),
            'title' => 'Data Reservasi',
        ];
        
         $this->load->view('print',  $data);
    }
}

/* End of file Tamu.php */
