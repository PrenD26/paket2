<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mod_fasilitas extends CI_Model
{
    private $_fask = 'fasilitas_kamar';
    private $_vfask = 'view_fk';
    private $_fash = 'fasilitas_hotel';

    public function getfask()
    {
        return $this->db->get($this->_vfask)->result_array();
    }

    public function createfask($data)
    {
        $this->db->insert($this->_fask, $data);
    }
    public function updatefask($data)
    {
        $this->db->where('id_fasilitas', $data['id_fasilitas']);
        $this->db->update($this->_fask, $data);
    }
    public function deletefask($id_fasilitas)
    {
        return $this->db->delete($this->_fask, ['id_fasilitas' => $id_fasilitas]);
    }
    public function v_id($id_kamar)
    {
        return $this->db->query("CALL v_idfask($id_kamar)")->result_array();
    }
    



    public function getfash()
    {
        return $this->db->get($this->_fash)->result_array();
    }
    public function v_idfash($id_fasilitas)
    {

        return $this->db->get_where($this->_fash, ['id_fasilitas' => $id_fasilitas])->row_array();
    }

    public function createfash($data)
    {
        $this->db->insert($this->_fash, $data);
    }
    public function updatefash($data)
    {
        $this->db->where('id_fasilitas', $data['id_fasilitas']);
        $this->db->update($this->_fash, $data);
    }
    public function deletefash($id_fasilitas)
    {
        return $this->db->delete($this->_fash, ['id_fasilitas' => $id_fasilitas]);
    }
}

/* End of file Mod_fasilitas.php */
