<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payments_model extends CI_Model
{

    private $_table = "payments";

    private $_tbl_booking = "booking";

    public $id;
    // $payment_date, $booking_id, $total_payment, $payment_receipt, $status_payment;

    public function rules()
    {
        return [
            [
                'field' => 'payment_date',
                'label' => 'Payment date',
                'rules' => 'required'
            ],

            [
                'field' => 'payment_receipt',
                'label' => 'Payment receive',
                'rules' => 'required'
            ],

        ];
    }

    public function sumTotalTransaction()
    {
        $query = $this->db->query("SELECT status_payment, sum(total_payment) as 'total_transaction' FROM payments WHERE payment_date = curdate() AND status_payment = 1");
        return $query->row()->total_transaction; // return berupa array objek
    }

    public function qtyTransaction()
    {
        $query = $this->db->query("SELECT * FROM payments WHERE payment_date = curdate() AND status_payment = 1");
        return $query->num_rows();
    }

    public function getAllJoin()
    {
        $this->db->select('*, payments.id as idpay');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function post($new_data)
    {
        return $this->db->insert($this->_table, $new_data);
    }

    public function updatebookingpaymentid($editIDPaymentBooking)
    {
        $data = array(
            'id_payment' => $editIDPaymentBooking['id_payment'],
            'booking_status' => 'Settlement'
        );
        $this->db->where('id', $editIDPaymentBooking['id']);
        return $this->db->update($this->_tbl_booking, $data);
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

    public function delete($idpay)
    {
        $data = $this->getById($idpay);
        // hapus file
        unlink(FCPATH . "/upload/payments/" . $data->payment_receipt);
        return $this->db->delete($this->_table, array("id" => $idpay));
    }
}
