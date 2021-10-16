<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mahasiswa extends CI_Model {
    public function GetAll(){
        return $query = $this->db->get('mahasiswa')->result();
    }

    public function simpan(){
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi')
        );
        $this->db->insert('mahasiswa', $data);
    }

    public function GetDetail($nim){
        $this->db->where('nim', $nim);
        return $query = $this->db->get('mahasiswa')->row();
    }

    public function update($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa', $data);
    }

    public function delete($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
    }
}
