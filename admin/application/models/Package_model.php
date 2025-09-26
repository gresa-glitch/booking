<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package_model extends CI_Model
{

    private $_table = "package";

    public $id, $item, $price;

    public function rules()
    {
        return [
            [
                'field' => 'item',
                'label' => 'Item',
                'rules' => 'required'
            ],

            [
                'field' => 'price',
                'label' => 'Price',
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
        htmlspecialchars($this->item = $post['item']);
        htmlspecialchars($this->price = $post['price']);

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        htmlspecialchars($this->id = $post['id']);
        htmlspecialchars($this->item = $post['item']);
        htmlspecialchars($this->price = $post['price']);
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
