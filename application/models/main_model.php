<?php
class main_model extends CI_model
{
    public function get_concert()
    {
        $this->db->select('*');
        $this->db->from('concert');
        return $this->db->get()->result_array();
    }

    public function get_concert_by_id($concert_id)
    {
        $this->db->where('id', $concert_id);
        $this->db->get('concert');
        return $this->db->get()->row_array();
    }


    public function seatByConcert()
    {
        $this->db->select('*');
        $this->db->from('concert');
        $this->db->join('seat', 'concert.id = seat.concert_id');
        $query = $this->db->get();
        return $query->result_array();
    }
}
