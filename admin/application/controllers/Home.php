<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("booking_model");
        $this->load->model("payments_model");
    }

    public function index()
    {
        $data = array(
            'menu' => "home",
            'judul' => "Dashboard",
            'fetchbooking' => $this->booking_model->joinPayment(),
            'sumTransaction' => $this->payments_model->sumTotalTransaction(),
            'qtyTransaction' => $this->payments_model->qtyTransaction()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('home/index.php');
        $this->load->view('templates/footer.php');
    }
}
