<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		if (!isset($_POST['submit'])) {
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('Auth/index');
			$this->load->view('templates/footer');
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
					echo 'welcome to dashboard';
				} else {
					// WRONG PASSWORD
					redirect(base_url('auth/'));
				}
			} else {
				// NO EMAIL REGISTERED
				redirect(base_url('auth/'));
			}
		}
	}

	public function Register()
	{
		if (!isset($_POST['submit'])) {
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('Auth/register');
			$this->load->view('templates/footer');
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
