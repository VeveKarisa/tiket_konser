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
        if (!isset($_POST['submit'])) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar_admin');
            $this->load->view('templates/sidebar_admin');
            $this->load->view('Admin/Konser');
            $this->load->view('templates/footer_admin');
        } else {
            $flyer_img = array();
            $seat_img = array();
            $config['upload_path'] = './assets/img/Concert/';
            $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
            $config['max_size'] = '200000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = $this->upload->data();
            $flyer_img[] = $_FILES['flyer_img']['name'];
            $seat_img[] = $_FILES['seat_img']['name'];
            $names_flyer = implode('/', $flyer_img);
            $names_seat = implode('/', $seat_img);

            if ($names_flyer !== '' && $names_seat !== '') {
                $data = [
                    'name' => $this->input->post('name'),
                    'venue' => $this->input->post('venue'),
                    'date' => $this->input->post('date'),
                    'flyer_img' => str_replace(" ", "_", $names_flyer),
                    'seat_img' => str_replace(" ", "_", $names_seat),
                    'bank_name' => $this->input->post('bank_name'),
                    'bank_number' => $this->input->post('bank_number'),
                ];
            } else {
                $data = [
                    'name' => $this->input->post('name'),
                    'venue' => $this->input->post('venue'),
                    'date' => $this->input->post('date'),
                    'bank_name' => $this->input->post('bank_name'),
                    'bank_number' => $this->input->post('bank_number'),
                ];
            }

            $this->db->insert('concert', $data);
            $concertId = $this->db->insert_id();

            for ($noType = 0; $noType < count($this->input->post('seatType')); $noType++) {
                $seatData[] = [
                    'concert_id' => $concertId,
                    'type' => $this->input->post('seatType')[$noType],
                    'total' => $this->input->post('seatCount')[$noType],
                    'price' => $this->input->post('seatPrice')[$noType],
                ];
            }

            $this->db->insert_batch('seat', $seatData);
            redirect(base_url('admin/konser'));
        }
    }
}
