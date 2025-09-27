<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{

    private $_table = "booking";

    public $id, $id_package, $booking_duration, $booking_date, $photo_time, $order_type, $booking_status;

    public function rules()
    {
        return [
            [
                'field' => 'booking_duration',
                'label' => 'Booking duration',
                'rules' => 'required'
            ],

            [
                'field' => 'booking_date',
                'label' => 'Booking date',
                'rules' => 'required'
            ],

            [
                'field' => 'photo_time',
                'label' => 'Photo time',
                'rules' => 'required'
            ],

        ];
    }

    public function getAllJoin()
    {
        $this->db->select('*, booking.id as idbook');
        $this->db->join('package', 'package.id = booking.id_package');
        $this->db->join('customer', 'customer.id = booking.id_customer');
        $this->db->order_by('booking.id DESC');
        return $this->db->get($this->_table)->result();
    }

    public function joinPayment()
    {
        $this->db->select('*, booking.id as idbook');
        $this->db->join('package', 'package.id = booking.id_package');
        $this->db->join('customer', 'customer.id = booking.id_customer');
        $this->db->join('payments', 'payments.booking_id = booking.id', 'left');
        $this->db->order_by('booking.id DESC');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function autoBookingID()
    {
        // mengambil data barang dengan kode paling besar
        $this->db->select("max(id) as idmax");
        return $this->db->get($this->_table)->result();
    }

    public function post()
    {
        // mengambil data barang dengan kode paling besar
        $this->db->select("max(id) as idmax");
        $data = $this->db->get($this->_table)->result();
        foreach ($data as $key) {
            // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
            // dan diubah ke integer dengan (int)
            $increment = (int) substr($key->idmax, 12, 5);
            $increment++;
            // membentuk kode barang baru
            // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
            // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
            // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
            $string = "STD";
            $finalOrderId = $string . date('Ymd') . sprintf("%03s", $increment);
            if ($data) {
                $finalOrderId = $finalOrderId;
            } else {
                $finalOrderId = "STD" . date('Ymd') . sprintf("%03s", "00001");
            }
        }

        $post = $this->input->post(); //get data dari form
        $this->id = $finalOrderId;
        htmlspecialchars($this->id_customer = $post['id_customer']);
        htmlspecialchars($this->id_package = $post['id_pakcage']);
        htmlspecialchars($this->booking_duration = $post['booking_duration']);
        htmlspecialchars($this->booking_date = $post['booking_date']);
        htmlspecialchars($this->photo_time = $post['photo_time']);
        htmlspecialchars($this->order_type = "Offline");
        htmlspecialchars($this->booking_status = 0);

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        htmlspecialchars($this->id = $post['id']);
        htmlspecialchars($this->id_package = $post['id_pakcage']);
        htmlspecialchars($this->booking_duration = $post['booking_duration']);
        htmlspecialchars($this->booking_date = $post['booking_date']);
        htmlspecialchars($this->photo_time = $post['photo_time']);
        htmlspecialchars($this->order_type = "Offline");
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
