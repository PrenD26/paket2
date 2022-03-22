<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_user extends CI_Model
{
    private $_table = 'user';

    public function getdata($username)
    {
        return $this->db->get_where($this->_table, ['username' => $username])->row_array();
    }
    public function getdatatamu($email)
    {
        return $this->db->get_where($this->_table, ['email' => $email])->row_array();
    }

    public function get()
    {
        return $this->db->get_where($this->_table, ['username' => $this->session->userdata('username')])->row_array();
    }

    public function register($data){
         $this->db->insert($this->_table,$data);
    }
}

/* End of file Mod_user.php */
