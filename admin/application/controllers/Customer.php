<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("customer_model");
    }

    public function index()
    {
        $data = array(
            'judul' => "Customer",
            'menu' => 'customer',
            'fetchcustomer' => $this->customer_model->getAll()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('customer/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function add()
    {
        $data = array(
            'judul' => "Add Customer",
            'menu' => 'customer'
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('customer/add.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function save()
    {
        $customer = $this->customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->rules());

        if ($validation->run()) {
            $customer->postData();
            $this->session->set_flashdata('success', 'Customer data has been successfully saved. Please place your order.');
            redirect(base_url() . 'booking/add');
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('customer');

        $customer = $this->customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->rules());

        if ($validation->run()) {
            $customer->update();
            $this->session->set_flashdata('success', 'Customer data successfully updated');
            redirect(base_url() . 'customer');
        }

        $data = array(
            'judul' => "Update Customer",
            'menu' => 'customer',
            'customerParsing' => $customer->getById($id)
        );

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('customer/edit.php', $data);
        $this->load->view('templates/footer.php');
    }


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->customer_model->delete($id)) {
            $this->session->set_flashdata('success', 'Customer data has been successfully deleted.');
            redirect(site_url('customer'));
        }
    }
}
