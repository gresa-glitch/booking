<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'menu' => "home",
            'judul' => "Dashboard"
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('home/index.php');
        $this->load->view('templates/footer.php');
    }
}
