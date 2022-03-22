<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_reservasi extends CI_Model
{
    private $_table = 'reservasi';
    private $_view = 'view_reserv';

    public function getdata()
    {
        return $this->db->get($this->_view)->result_array();
    }


    public function filterbytanggal($tanggalawal, $tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM reservasi WHERE checkin BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY checkin ASC");
        return $query->result_array();
    }


    public function v_id($id_reservasi)
    {
        return $this->db->get_where($this->_table, ['id_reservasi' => $id_reservasi])->row_array();
    }

    public function finddetail($id_user)
    {
        return $this->db->get_where($this->_view, ['id_user' => $id_user])->result_array();
    }
    public function findrow($id_user)
    {
        return $this->db->get_where($this->_view, ['id_user' => $id_user])->row_array();
    }

    public function pesan($data)
    {
        return $this->db->insert($this->_table, $data);
    }
    public function update($data)
    {
        $this->db->where('id_reservasi', $data['id_reservasi']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id_reservasi)
    {
        $this->db->delete($this->_table,['id_reservasi' => $id_reservasi]);
    }
}

/* End of file Mod_kamar.php */
