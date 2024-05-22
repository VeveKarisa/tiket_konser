<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('Auth');
		$this->load->view('templates/footer');
	}

	public function Register()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('Register');
		$this->load->view('templates/footer');
	}
}
