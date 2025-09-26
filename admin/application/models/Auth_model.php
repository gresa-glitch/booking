<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    private $_table = "user_account";

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    // auth function
    public function get_user_by_username($username)
    {
        $arr_data = array(
            'username' => $username
        );
        return $this->db->get_where($this->_table, $arr_data)->row();
    }
    //akhir auth function
}
