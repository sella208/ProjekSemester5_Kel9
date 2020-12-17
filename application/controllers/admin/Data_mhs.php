<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mhs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_mhs');
		$this->load->database();
	}	

	public function index()
	{
		$data['mhs'] = $this->m_mhs->tampil_data();
		$this->load->view('admin/data_mhs', $data);
	}

	public function hapus ($id_mhs)
	{
		$where = array ('id_mhst' => $id_mhs);
		$this->m_mhs->hapus_data($where, 'tb_mhs');
		
	}

	public function update_aksi($id_mhs)
	{
		$nama				= $this->input->post('nama');
		$nim				= $this->input->post('nim');
		$program_studi		= $this->input->post('program_studi');
		$golongan			= $this->input->post('golongan');
		$semester			= $this->input->post('semester');
		$status 			= $this->input->post('status');
		$alamat				= $this->input->post('alamat');
		$email				= $this->input->post('email');
		$no_hp				= $this->input->post('no_hp');
		$foto				= $this->input->post('foto');
		
	
		$data	= array (
			'nama_mhs'					=> $nama,
			'nim_mhs'					=> $nim,
			'prodi_mhs'					=> $program_studi,
			'gol_mhs'					=> $golongan,
			'semester_mhs'				=> $semester,
			'id_doswal'					=> $dosen_wali,
			'status_mhs'			    => $status,
			'alamat_mhs'				=> $alamat,
			'email_mhs'					=> $email,
			'nohp_mhs'					=> $no_hp,
			'foto_mhs'					=> $foto,
		
		);

		//$this->m_mhs->input_data($data, 'tb_mhs');
		$this->db->update('tb_mhs',$data, ['id_mhs' => $id_mhs]);
		redirect('admin/data_mhs/index');
	}

	public function tambah_aksi()
	{
		$nama				= $this->input->post('nama');
		$nim				= $this->input->post('nim');
		$program_studi		= $this->input->post('program_studi');
		$golongan			= $this->input->post('golongan');
		$semester			= $this->input->post('semester');
		$dosen_wali			= $this->input->post('dosen_wali');
		$status 			= $this->input->post('status');
		$alamat				= $this->input->post('alamat');
		$email				= $this->input->post('email');
		$no_hp				= $this->input->post('no_hp');
		$foto				= $this->input->post('foto');
		
	
		$data	= array (
			'nama_mhs'					=> $nama,
			'nim_mhs'					=> $nim,
			'prodi_mhs'					=> $program_studi,
			'gol_mhs'					=> $golongan,
			'semester_mhs'				=> $semester,
			'id_doswal'					=> $dosen_wali,
			'status_mhs'			    => $status,
			'alamat_mhs'				=> $alamat,
			'email_mhs'					=> $email,
			'nohp_mhs'					=> $no_hp,
			'foto_mhs'					=> $foto,
		
		);

		//$this->m_mhs->input_data($data, 'tb_mhs');
		$this->db->insert('tb_mhs',$data);
		redirect('admin/data_mhs/index');
	}


}
