<?php
class Reservasi extends CI_Controller
{
    public function index()
    {
        $data['reservasi'] = $this->Model_reservasi->getData()->result();

        $this->load->view('admin/header');
        $this->load->view('admin/reservasi', $data);
        $this->load->view('admin/footer');
    }
}
