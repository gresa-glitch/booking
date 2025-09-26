<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payments extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("payments_model");
        $this->load->model("booking_model");
    }

    public function index()
    {
        $data = array(
            'judul' => "Payment",
            'menu' => 'payment',
            'fetchpayment' => $this->payments_model->getAllJoin()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('payments/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function add()
    {
        $data = array(
            'judul' => "Add Payments",
            'menu' => 'payment',
            'fetchbooking' => $this->booking_model->getAllJoin()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('payments/add.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function save()
    {
        $post = $this->input->post();
        // the user id contain dot, so we must remove it
        $config['upload_path']          = FCPATH . '/upload/payments/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = "INV-" . date('Ymd') . uniqid();
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        $config['max_width']            = 1080;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('payment_receipt')) {
            $data = array(
                'judul' => "Error upload",
                'menu' => 'payment',
                'fetchbooking' => $this->booking_model->getAllJoin(),
                'error_upload' => $this->upload->display_errors()
            );
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('payments/add.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $uploaded_data = $this->upload->data();

            $cutDescimalPayment = substr($post['total_payment'], 2, -2);
            $paymentsToInt = filter_var($cutDescimalPayment, FILTER_SANITIZE_NUMBER_INT);

            $new_data = array(
                'id' => uniqid(),
                'payment_date' => htmlspecialchars($post['payment_date']),
                'booking_id' => htmlspecialchars($post['booking_id']),
                'total_payment' =>  htmlspecialchars($paymentsToInt),
                'payment_receipt' => $uploaded_data['file_name'],
                'status_payment' => 1
            );

            $this->payments_model->post($new_data);
            $this->session->set_flashdata('success', 'Payment data has been successfully saved.');
            redirect(base_url('payments'));
        }

        // $validation = $this->form_validation;
        // $validation->set_rules($payment->rules());

        // if ($validation->run()) {
        //     $payment->post();
        // }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('booking');

        $booking = $this->booking_model;
        $validation = $this->form_validation;
        $validation->set_rules($booking->rules());

        if ($validation->run()) {
            $booking->update();
            $this->session->set_flashdata('success', 'Booking data successfully updated');
            redirect(base_url() . 'booking');
        }

        $data = array(
            'judul' => "Update Booking",
            'menu' => 'booking',
            'fetchPackage' => $this->package_model->getAll(),
            'bookingParsing' => $booking->getById($id)
        );

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('booking/edit.php', $data);
        $this->load->view('templates/footer.php');
    }


    public function delete($idpay = null)
    {
        if (!isset($idpay)) show_404();

        if ($this->payments_model->delete($idpay)) {
            $this->session->set_flashdata('success', 'Payments data has been successfully deleted.');
            redirect(site_url('payments'));
        }
    }
}
