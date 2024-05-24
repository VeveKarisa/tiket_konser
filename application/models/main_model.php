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


    public function seatByConcert($id)
    {
        $this->db->select('*');
        $this->db->from('seat');
        $this->db->where('seat.concert_id', $id);
        return $this->db->get()->result_array();
    }


    public function getAvailableSeats($concertId, $seatType)
    {
        $this->db->select('booking.concert_id, booking.concert_name, seat.total AS total_seats, booking.seat_type, booking.price, booking.username AS booked_by');
        $this->db->from('booking');
        $this->db->join('seat', 'booking.concert_id = seat.concert_id AND booking.seat_type = seat.type');
        $this->db->where('booking.concert_id', $concertId);
        $this->db->where('booking.seat_type', $seatType);

        $query = $this->db->get();
        $bookedSeats = $query->result_array();

        if ($bookedSeats == null) {
            $this->db->select('concert.id AS concert_id, concert.name AS concert_name, seat.total AS available_seats, seat.type AS seat_type');
            $this->db->from('seat');
            $this->db->join('concert', 'seat.concert_id = concert.id');
            $this->db->where('seat.concert_id', $concertId);
            $this->db->where('seat.type', $seatType);
            $query = $this->db->get();
            $concertData = $query->row_array();
        } else {
            $countBookedSeats = count($bookedSeats);

            foreach ($bookedSeats as $row) {
                $availableSeats = intval($row['total_seats']) - $countBookedSeats;
                $concertData = [
                    'concert_id' => $row['concert_id'],
                    'concert_name' => $row['concert_name'],
                    'available_seats' => $availableSeats,
                    'seat_type' => $row['seat_type'],
                ];
            }
        }
        return $concertData;
    }
}
