<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("booking_model");
        $this->load->model("package_model");
        $this->load->model("customer_model");
    }

    public function index()
    {
        $data = array(
            'judul' => "Booking",
            'menu' => 'booking',
            'fetchbooking' => $this->booking_model->getAllJoin(),
            'photoquee' => $this->booking_model->getPhotoQuee()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('booking/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function finishqueue($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->booking_model->updateAuto($id)) {
            $this->session->set_flashdata('queue', 'Photo queue completed successfully.');
            redirect(base_url() . 'home');
        }
    }

    public function add()
    {
        $data = array(
            'judul' => "Add Booking",
            'menu' => 'booking',
            'fetchPackage' => $this->package_model->getAll(),
            'fetchCustomer' => $this->customer_model->getAll()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('booking/add.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function save()
    {
        $booking = $this->booking_model;
        $validation = $this->form_validation;
        $validation->set_rules($booking->rules());

        if ($validation->run()) {
            $booking->post();
            $this->session->set_flashdata('success', 'Order received successfully, please make payment.');
            redirect(base_url() . 'payments');
        }
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


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->booking_model->delete($id)) {
            $this->session->set_flashdata('success', 'Booking data has been successfully deleted.');
            redirect(site_url('booking'));
        }
    }
}
