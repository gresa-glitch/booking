<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_account_model extends CI_Model
{

    private $_table = "user_account";

    public $id, $name, $username, $password, $address, $phone, $user_role;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            [
                'field' => 'address',
                'label' => 'Address',
                'rules' => 'required'
            ],

            [
                'field' => 'phone',
                'label' => 'Phone',
                'rules' => 'required'
            ],

            [
                'field' => 'user_role',
                'label' => 'User Role',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function postData()
    {
        $post = $this->input->post(); //get data dari form
        $this->id = uniqid();
        htmlspecialchars($this->name = $post['name']);
        htmlspecialchars($this->username = $post['username']);
        htmlspecialchars($this->password = $post['password']);
        htmlspecialchars($this->address = $post['address']);
        htmlspecialchars($this->phone = $post['phone']);
        htmlspecialchars($this->user_role = $post['user_role']);

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        htmlspecialchars($this->id = $post['id']);
        htmlspecialchars($this->name = $post['name']);
        htmlspecialchars($this->username = $post['username']);
        htmlspecialchars($this->password = $post['password']);
        htmlspecialchars($this->address = $post['address']);
        htmlspecialchars($this->phone = $post['phone']);
        htmlspecialchars($this->user_role = $post['user_role']);
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
