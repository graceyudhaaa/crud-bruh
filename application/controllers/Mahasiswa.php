<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}
	public function index()
	{
		$data['konten'] = 'v_mahasiswa';
		$data['mahasiswa'] = $this->m_mahasiswa->GetAll();
		$this->load->view('v_template', $data);
	}

	public function tambah()
	{
		$data['konten'] = 'v_tambah';
		$this->load->view('v_template', $data);
	}

	public function edit($nim)
	{
		$data['konten'] = 'v_edit';
		$data['detailMahasiswa'] = $this->m_mahasiswa->GetDetail($nim);
		$this->load->view('v_template', $data);
	}

	public function update(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');

		$arrUpdate = array(
			'nim' => $nim,
			'nama' => $nama,
			'prodi' => $prodi,
		);

		$this->m_mahasiswa->update($nim, $arrUpdate);
		redirect(base_url());
	}

	public function delete($nim){
		$this->m_mahasiswa->delete($nim);
		redirect(base_url());
	}

	public function simpan()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim|is_unique[mahasiswa.nim]');
		$this->form_validation->set_rules('nim', 'Nama', 'required|trim');
		$this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
		
		$this->form_validation->set_message('is_unique', '{field} sudah terdaftar');

		if($this->form_validation->run() == false){
			$this->tambah();
		}else{
			//data masukan ke database
			$this->m_mahasiswa->simpan();

			$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambahkan</div>');
			redirect('mahasiswa');
		}
	}
}
