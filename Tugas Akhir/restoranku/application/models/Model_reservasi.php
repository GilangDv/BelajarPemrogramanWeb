<?php
class Model_reservasi extends CI_Model
{
    public function inputReservasi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getData()
    {
        return $this->db->get('tb_reservasi');
    }
}
