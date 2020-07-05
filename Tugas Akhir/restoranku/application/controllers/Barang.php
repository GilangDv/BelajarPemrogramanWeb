<?php
class Barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->Model_barang->getData()->result();

        $this->load->view('user/header');
        $this->load->view('user/barang', $data);
        $this->load->view('user/footer');
    }

    public function detail($id)
    {
        $where = ["id_makanan" => $id];
        $data['barang'] = $this->Model_barang->getDataById($where, 'tb_barang')->result();

        $this->load->view('user/header');
        $this->load->view('user/detail_barang', $data);
        $this->load->view('user/footer');
    }
}
