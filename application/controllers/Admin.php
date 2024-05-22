<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar_admin');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('Admin/Dashboard');
        $this->load->view('templates/footer_admin');
    }

    public function Konser()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar_admin');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('Admin/Konser');
        $this->load->view('templates/footer_admin');
    }
}
