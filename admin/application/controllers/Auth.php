<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
	}

	public function index()
	{
		$data = array(
			'judul' => "Login Page"
		);
		$this->load->view('template_auth/header.php', $data);
		$this->load->view('template_auth/index.php');
		$this->load->view('template_auth/footer.php');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->auth_model->get_user_by_username($username);

		if ($user->username == $username && $user->password == $password) {
			// login success
			$this->session->set_userdata('name', $user->name);
			$this->session->set_userdata('role', $user->user_role);
			redirect(base_url() . 'home');
		} else {
			// login gagal
			$this->session->set_flashdata('error_log_in', 'Incorrect username or password!');
			$this->session->set_userdata('fillauto', $user->username);
			redirect(base_url() . 'auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}

	// public function dummyRegistration()
	// {
	// 	$data = array(
	// 		'username' => 'pic',
	// 		'name' => 'PIC Operasional',
	// 		'password' => password_hash(123456, PASSWORD_DEFAULT),
	// 		'role_access' => 'PIC'
	// 	);
	// 	$this->db->insert('user', $data);
	// }
}
