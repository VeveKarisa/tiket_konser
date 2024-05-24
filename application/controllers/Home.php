<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('main_model');

		$data['concerts'] = $this->main_model->get_concert();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('Home/Index', $data);
		$this->load->view('templates/footer');
	}

	public function detail_concert()
	{
		$this->load->model('main_model');

		$data['concerts'] = $this->main_model->get_concert();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('Home/detail_concert', $data);
		$this->load->view('templates/footer');
	}
}
