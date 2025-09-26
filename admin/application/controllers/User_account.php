<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_account_model");
    }

    public function index()
    {
        $data = array(
            'judul' => "User Account",
            'menu' => 'user_account',
            'fetchuser' => $this->user_account_model->getAll()
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('user_account/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function add()
    {
        $data = array(
            'judul' => "Add User",
            'menu' => 'user_account'
        );
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('user_account/add.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function save()
    {
        $user = $this->user_account_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->postData();
            $this->session->set_flashdata('success', 'User data has been successfully saved.');
            redirect(base_url() . 'user_account');
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('user_account');

        $user = $this->user_account_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Account data successfully updated');
            redirect(base_url() . 'user_account');
        }

        $data = array(
            'judul' => "Update User",
            'menu' => 'user_account',
            'userParsing' => $user->getById($id)
        );

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('user_account/edit.php', $data);
        $this->load->view('templates/footer.php');
    }


    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->user_account_model->delete($id)) {
            $this->session->set_flashdata('success', 'Account data has been successfully deleted.');
            redirect(site_url('user_account'));
        }
    }
}
