<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        //mengembalikan hasil query berupa array
        return $this->db->get('mahasiswa')->result_array();//method di code igniter "result Array
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');//bisa memakai cara di detail
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array(); //CI documentation
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)
        ];
        $this->db->where('id', $this->input->post('id'));// diambil dari form input di ubah.php
        $this->db->update('mahasiswa', $data); //CI_documentation
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();//CI_Documentation
    }


}

?>