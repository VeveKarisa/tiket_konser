<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar_admin');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('Dashboard/Index');
        $this->load->view('templates/footer_admin');
    }

    public function Konser()
    {
        $this->load->model('main_model');

        $data['concerts'] = $this->main_model->get_concert();
        $data['seatByConcerts'] = $this->main_model->seatByConcert();

        if (!isset($_POST['submit'])) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar_admin');
            $this->load->view('templates/sidebar_admin');
            $this->load->view('Dashboard/Konser', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $config['upload_path'] = './assets/img/Concert/';
            $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
            $config['max_size'] = '200000'; // kb
            $this->load->library('upload', $config);
            $flyer_img = $this->upload->do_upload('flyer_img');

            if ($flyer_img) {
                $names_flyer = $this->upload->data();
            }

            $this->upload->initialize($config);
            $seat_img = $this->upload->do_upload('seat_img');
            if ($seat_img) {
                $names_seat = $this->upload->data();
            }

            if (isset($names_flyer) && isset($names_seat)) {
                $data = [
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'venue' => $this->input->post('venue'),
                    'date' => $this->input->post('date'),
                    'flyer_img' => $names_flyer['file_name'],
                    'seat_img' => $names_seat['file_name'],
                    'bank_name' => $this->input->post('bank_name'),
                    'bank_number' => $this->input->post('bank_number'),
                ];
            } else {
                $data = [
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
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
            redirect(base_url('Dashboard/Konser'));
        }
    }
}
