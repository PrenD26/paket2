<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_user', 'user');
        $this->load->model('Mod_kamar', 'kamar');
        $this->load->model('Mod_fasilitas', 'fas');
        if ($this->session->userdata['id_level'] == 2) {
            redirect('resepsionis');
        }
        if ($this->session->userdata['id_level'] == 3) {
            redirect('home');
        }
        if ($this->session->userdata['id_level'] == null) {
            redirect('auth');
        }
    }

    //Menu Admin Kamar
    public function kamar()
    {
        $data = [
            'title' => "Kamar",
            'kamar' => $this->kamar->getdata(),
        ];
        $this->load->view('layout_A/header', $data);
        $this->load->view('layout_A/sidebar');
        $this->load->view('admin/kamar', $data);
        $this->load->view('layout_A/footer');
    }

    public function create_kamar()
    {
        $file_name = rand();
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $file_name;
        $config['max_size']             = 4096;
        $config['max_width']            = 1200;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            $data = [
                'title' => "Kamar",
                'kamar' => $this->kamar->getdata(),
                'fask' => $this->fas->getfask(),
            ];
            $this->load->view('layout_A/header', $data);
            $this->load->view('layout_A/sidebar');
            $this->load->view('admin/kamar', $data);
            $this->load->view('layout_A/footer');
        } else {
            $new_image = $this->upload->data('file_name');
            $post = $this->input->post();
            $data = [
                'image' => $new_image,
                'tipe_kamar' => $post['tipe_kamar'],
                'jumlah_kamar' => $post['jumlah_kamar'],
            ];
            $this->kamar->create($data);
            $this->session->set_flashdata('create', 'Data Kamar berhasil dibuat');
            redirect('admin/kamar');
        }
    }

    public function update_kamar($id_kamar)
    {
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $file_name = rand();
            // the user id contain dot, so we must remove it
            $config['upload_path']          = FCPATH . '/assets/uploads/';
            $config['file_name']            = $file_name;
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['overwrite']            = true;
            $config['max_size']             = 4096;
            $config['max_width']            = 1200;
            $config['max_height']           = 1000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $data = [
                    'title' => "Kamar",
                    'kamar' => $this->kamar->getdata(),
                    'fask' => $this->fas->getfask(),
                ];
                $this->load->view('layout_A/header', $data);
                $this->load->view('layout_A/sidebar');
                $this->load->view('admin/kamar', $data);
                $this->load->view('layout_A/footer');
            } else {
                $data['kamar'] = $this->kamar->v_id($id_kamar);
                $old_image = $data['kamar']['image'];
                if ($old_image) {
                    unlink(FCPATH . "assets/uploads/" . $old_image);
                }
                $new_image = $this->upload->data();
                $post = $this->input->post();
                $data = [
                    'id_kamar' => $id_kamar,
                    'tipe_kamar' => $post['tipe_kamar'],
                    'jumlah_kamar' => $post['jumlah_kamar'],
                    'image' => $new_image['file_name'],
                ];
                $this->kamar->update($data);
                $this->session->set_flashdata('create', 'Data kamar berhasil diubah');
                redirect('admin/kamar');
            }
        } else {
            $post = $this->input->post();
            $data = [
                'id_kamar' => $id_kamar,
                'tipe_kamar' => $post['tipe_kamar'],
                'jumlah_kamar' => $post['jumlah_kamar'],
            ];
            $this->kamar->update($data);
            $this->session->set_flashdata('create', 'Data kamar berhasil diubah');
            redirect('admin/kamar');
        }
    }

    public function delete_kamar($id_kamar)
    {
        $this->kamar->delete($id_kamar);
        $this->session->set_flashdata('create', 'Data kamar berhasil dihapus');
        redirect('admin/kamar');
    }



    //Menu Admin Fasilitas Kamar
    public function fas_kamar()
    {
        $data = [
            'title' => "Fasilitas Kamar",
            'kamar' => $this->kamar->getdata(),
            'fasilitaskamar' => $this->fas->getfask(),
        ];
        $this->load->view(
            'layout_A/header',
            $data
        );
        $this->load->view('layout_A/sidebar');
        $this->load->view('admin/fasilitas-kamar', $data);
        $this->load->view('layout_A/footer');
    }

    public function create_fas_kamar()
    {
        $post = $this->input->post();
        $data = [
            'id_kamar' => $post['id_kamar'],
            'nama_fasilitas' => $post['nama_fasilitas'],
        ];
        $this->fas->createfask($data);
        $this->session->set_flashdata('create', 'Data Fasilitas kamar berhasil dibuat');
        redirect('admin/fasilitas-kamar');
    }
    public function update_fas_kamar($id_fasilitas)
    {
        $post = $this->input->post();
        $data = [
            'id_fasilitas' => $id_fasilitas,
            'nama_fasilitas' => $post['nama_fasilitas'],
        ];
        $this->fas->updatefask($data);
        $this->session->set_flashdata('create', 'Data Fasilitas kamar berhasil diubah');
        redirect('admin/fasilitas-kamar');
    }
    public function delete_fas_kamar($id_fasilitas)
    {
        $this->fas->deletefask($id_fasilitas);
        $this->session->set_flashdata('create', 'Data Fasilitas kamar berhasil dihapus');
        redirect('admin/fasilitas-kamar');
    }



    //Menu Admin Fasilitas Hotel
    public function fas_hotel()
    {
        $data = [
            'title' => "Fasilitas Hotel",
            'fash' => $this->fas->getfash(),
        ];
        $this->load->view('layout_A/header', $data);
        $this->load->view('layout_A/sidebar');
        $this->load->view('admin/fasilitas-hotel', $data);
        $this->load->view('layout_A/footer');
    }
    public function create_fas_hotel()
    {

        $file_name = rand();
        $config['upload_path']          = './assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $file_name;
        $config['max_size']             = 4096;
        $config['max_width']            = 1200;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            $data = [
                'title' => "Fasilitas Hotel",
                'fash' => $this->fas->getfash(),
            ];
            $this->load->view('layout_A/header', $data);
            $this->load->view('layout_A/sidebar');
            $this->load->view('admin/fasilitas-hotel', $data);
            $this->load->view('layout_A/footer');
        } else {
            $new_image = $this->upload->data('file_name');
            $post = $this->input->post();
            $data = [
                'image' => $new_image,
                'nama_fasilitas' => $post['nama_fasilitas'],
                'keterangan' => $post['keterangan'],
            ];
            $this->fas->createfash($data);
            $this->session->set_flashdata('create', 'Data Fasilitas Hotel berhasil dibuat');
            redirect('admin/fasilitas-hotel');
        }
    }
    public function update_fas_hotel($id_fasilitas)
    {
        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $file_name = rand();
            // the user id contain dot, so we must remove it
            $config['upload_path']          = FCPATH . '/assets/uploads/';
            $config['file_name']            = $file_name;
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['overwrite']            = true;
            $config['max_size']             = 4096;
            $config['max_width']            = 1200;
            $config['max_height']           = 1000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $data = [
                    'title' => "Fasilitas Hotel",
                    'fash' => $this->fas->getfash(),
                ];
                $this->load->view('layout_A/header', $data);
                $this->load->view('layout_A/sidebar');
                $this->load->view('admin/fasilitas-hotel', $data);
                $this->load->view('layout_A/footer');
            } else {
                $data['fasilitas'] = $this->fas->v_idfash($id_fasilitas);
                $old_image = $data['fasilitas']['image'];
                if ($old_image) {
                    unlink(FCPATH . "assets/uploads/" . $old_image);
                }
                $new_image = $this->upload->data();
                $post = $this->input->post();
                $data = [
                    'id_fasilitas' => $id_fasilitas,
                    'nama_fasilitas' => $post['nama_fasilitas'],
                    'keterangan' => $post['keterangan'],
                    'image' => $new_image['file_name'],
                ];
                $this->fas->updatefash($data);
                $this->session->set_flashdata('create', 'Data Fasilitas Hotel berhasil diubah');
                redirect('admin/fasilitas-hotel');
            }
        } else {
            $post = $this->input->post();
            $data = [
                'id_fasilitas' => $id_fasilitas,
                'nama_fasilitas' => $post['nama_fasilitas'],
                'keterangan' => $post['keterangan'],
            ];
            $this->fas->updatefash($data);
            $this->session->set_flashdata('create', 'Data Fasilitas Hotel berhasil diubah');
            redirect('admin/fasilitas-hotel');
        }
    }
    public function delete_fas_hotel($id_fasilitas)
    {
        $this->fas->deletefash($id_fasilitas);
        $this->session->set_flashdata('create', 'Data Fasilitas Hotel berhasil dihapus');
        redirect('admin/fasilitas-hotel');
    }
}

/* End of file Admin.php */
