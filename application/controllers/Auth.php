<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$data['customJs'] = 'sweetAlertJs';

		if (!isset($_POST['submit'])) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('Auth/index', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$data = [
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			];

			$employeeData = $this->db->get_where('user', ['email' => $data['email']])->row_array();
			if ($employeeData) {
				if (password_verify($data['password'], $employeeData['password'])) {
					$this->session->set_userdata([
						'fullname' => $employeeData['fullname'],
						'username' => $employeeData['username'],
						'email' => $employeeData['email'],
						'phone_number' => $employeeData['phone_number'],
						'level' => $employeeData['level'],
						'user_data' => ['username' => $employeeData['username']],
					]);
					if ($employeeData['level'] == 3) {
						redirect(base_url('Home'));
					} else {
						redirect(base_url('Admin'));
					}
				} else {
					// WRONG PASSWORD
					$this->session->set_flashdata('message', ['icon' => 'error', 'title' => 'Wrong Password', 'text' => 'Your password is wrong, try again']);
					redirect(base_url('Auth'));
				}
			} else {
				// NO EMAIL REGISTERED
				$this->session->set_flashdata('message', ['icon' => 'error', 'title' => 'No email registered', 'text' => 'Register your email first']);
				redirect(base_url('auth'));
			}
		}
	}

	public function Register()
	{
		$data['customJs'] = 'sweetAlertJs';

		if (!isset($_POST['submit'])) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('Auth/register', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$data = [
				'fullname' => $this->input->post('fullname'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'phone_number' => $this->input->post('phone_number'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' => $this->input->post('level'),
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', ['icon' => 'success', 'title' => 'Account Registered', 'text' => 'Your account has been registered']);
			redirect(base_url('auth/'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('access_token');
		$this->session->unset_userdata('user_data');
		$this->session->sess_destroy();
		redirect('Home');
	}
}
