<?php
class Reservasi extends CI_Controller
{
    public function inputData()
    {
        $pemesan = $this->input->post('pemesan');
        $telepon = $this->input->post('telepon');
        $tanggal = $this->input->post('tgl_reservasi');

        $data = [
            'nama'    => $pemesan,
            'telepon' => $telepon,
            'tanggal' => $tanggal
        ];

        $this->Model_reservasi->inputReservasi($data, 'tb_reservasi');
        redirect('Barang');
    }
}
