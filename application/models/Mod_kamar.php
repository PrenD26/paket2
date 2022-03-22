<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_kamar extends CI_Model
{
    private $_table = 'kamar';
    private $_pesan = 'reservasi';

    public function getdata()
    {
        return $this->db->get($this->_table)->result_array();
    }
    public function v_id($id_kamar)
    {

        return $this->db->get_where($this->_table, ['id_kamar' => $id_kamar])->row_array();
    }
    public function create($data)
    {
        $this->db->insert($this->_table, $data);
    }
    public function update($data)
    {
        $this->db->where('id_kamar', $data['id_kamar']);
        $this->db->update($this->_table, $data);
    }
    public function delete($id_kamar)
    {
        return $this->db->delete($this->_table, ['id_kamar' => $id_kamar]);
    }


    public function getpesan()
    {
        return $this->db->get($this->_pesan)->result_array();
    }
    public function pesan($data)
    {
        return $this->db->insert($this->_pesan, $data);
    }
}

/* End of file Mod_kamar.php */
