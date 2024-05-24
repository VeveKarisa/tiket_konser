<?php

function getTypeSeatByConcertId($id)
{
    $CI = &get_instance();
    $CI->load->model('Main_model');
    $data = $CI->Main_model->seatByConcert($id);
    return $data;
}

function seatAvailable($id, $type)
{
    $CI = &get_instance();
    $CI->load->model('Main_model');
    $data = $CI->Main_model->getAvailableSeats($id, $type);
    return $data;
}
