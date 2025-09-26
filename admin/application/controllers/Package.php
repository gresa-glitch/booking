<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("package_model");
    }

    public function index()
    {
        $data = array(
            'judul' => "Package",
            'menu' => 'package',
            'fetchpackage' => $this->package_model->getAll()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('package/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function add()
    {
        $data = array(
            'judul' => "Add Package",
            'menu' => 'package'
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('package/add.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function save()
    {
        $package = $this->package_model;
        $validation = $this->form_validation;
        $validation->set_rules($package->rules());

        if ($validation->run()) {
            $package->postData();
            $this->session->set_flashdata('success', 'Package data has been successfully saved.');
            redirect(base_url() . 'package');
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('package');

        $package = $this->package_model;
        $validation = $this->form_validation;
        $validation->set_rules($package->rules());

        if ($validation->run()) {
            $package->update();
            $this->session->set_flashdata('success', 'Package data successfully updated');
            redirect(base_url() . 'package');
        }

        $data = array(
            'judul' => "Update Package",
            'menu' => 'package',
            'packageParsing' => $package->getById($id)
        );

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('package/edit.php', $data);
        $this->load->view('templates/footer.php');
    }


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->package_model->delete($id)) {
            $this->session->set_flashdata('success', 'Package data has been successfully deleted.');
            redirect(site_url('package'));
        }
    }
}
