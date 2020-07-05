<?php
class Barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->Model_barang->getData()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/barang', $data);
        $this->load->view('admin/footer');
    }

    public function input()
    {
        $nama  = $this->input->post('nama');
        $harga    = $this->input->post('harga');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo "Upload Gagal";
                die;
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama' => $nama,
            'harga'   => $harga,
            'gambar' => $gambar
        ];

        $this->Model_barang->input($data, 'tb_barang');
        redirect('Admin/barang');
    }

    public function edit($id)
    {
        $where = ["id_makanan" => $id];
        $data['barang'] = $this->Model_barang->getDataById($where, 'tb_barang')->result();

        $this->load->view('admin/header');
        $this->load->view('admin/edit', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');

        $data = [
            'nama'  => $nama,
            'harga'    => $harga,
        ];

        $where = ['id_makanan' => $id];

        $this->Model_barang->updateData($where, $data, 'tb_barang');
        redirect('Admin/barang');
    }

    public function delete($id)
    {
        $where = [
            'id_makanan' => $id
        ];

        $this->Model_barang->deleteData($where, 'tb_barang');
        redirect('Admin/barang');
    }
}
