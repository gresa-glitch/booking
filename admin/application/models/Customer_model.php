<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{

    private $_table = "customer";

    public $id, $name, $email, $phone;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],

            [
                'field' => 'phone',
                'label' => 'Phone',
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
        htmlspecialchars($this->email = $post['email']);
        htmlspecialchars($this->phone = $post['phone']);

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        htmlspecialchars($this->id = $post['id']);
        htmlspecialchars($this->name = $post['name']);
        htmlspecialchars($this->email = $post['email']);
        htmlspecialchars($this->phone = $post['phone']);
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
