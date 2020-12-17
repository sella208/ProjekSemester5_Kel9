<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pusatkarir extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_pusatkarir');
		$this->load->database();
	}	

	public function index()
	{
		$data['pusatkarir'] = $this->m_pusatkarir->tampil_data();
		$this->load->view('admin/data_pusatkarir', $data);
	}

	public function hapus ($id_pusatkarir)
	{
		$where = array ('id' => $id_pusatkarir);
		$this->m_pusatkarir->hapus_data($where, 'tb_pusatkarir');
		
	}

	public function update_aksi($id_pusatkarir)
	{
		$nama				= $this->input->post('nama');
		$nip				= $this->input->post('nip');
		$program_studi		= $this->input->post('program_studi');
		$golongan			= $this->input->post('golongan');
		$nidn				= $this->input->post('nidn');
		$status_pegawai		= $this->input->post('status_pegawai');
		$jabatan			= $this->input->post('jabatan');
		$alamat				= $this->input->post('alamat');
		$email				= $this->input->post('email');
		$no_hp				= $this->input->post('no_hp');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$foto				= $this->input->post('foto');
		
	
		$data	= array (
			'nama_pusatkarir'					=> $nama,
			'nip_pusatkarir'					=> $nip,
			'prodi_pusatkarir'					=> $program_studi,
			'gololongan_pusatkarir'				=> $golongan,
			'nidn_pusatkarir'					=> $nidn,
			'status_pusatkarir'					=> $status_pegawai,
			'jabatan_pusatkarir'			    => $jabatan,
			'alamat_pusatkarir	'				=> $alamat,
			'email_pusatkarir'					=> $email,
			'nohp_pusatkarir'					=> $no_hp,
			'tempat_lahir'						=> $tempat_lahir,
			'tanggal_lahir'						=> $tanggal_lahir,
			'foto_pusatkarir'					=> $foto,
		
		);

		//$this->m_pusatkarir->input_data($data, 'tb_pusatkarir');
		$this->db->update('tb_pusatkarir',$data, ['id_pusatkarir' => $id_pusatkarir]);
		redirect('admin/data_pusatkarir/index');
	}

	public function tambah_aksi()
	{
		$nama				= $this->input->post('nama');
		$nip				= $this->input->post('nip');
		$program_studi		= $this->input->post('program_studi');
		$golongan			= $this->input->post('golongan');
		$nidn				= $this->input->post('nidn');
		$status_pegawai		= $this->input->post('status_pegawai');
		$jabatan			= $this->input->post('jabatan');
		$alamat				= $this->input->post('alamat');
		$email				= $this->input->post('email');
		$no_hp				= $this->input->post('no_hp');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$foto				= $this->input->post('foto');
		
		
	
		$data	= array (
			'nama_pusatkarir'					=> $nama,
			'nip_pusatkarir'					=> $nip,
			'prodi_pusatkarir'					=> $program_studi,
			'gololongan_pusatkarir'				=> $golongan,
			'nidn_pusatkarir'					=> $nidn,
			'status_pusatkarir'					=> $status_pegawai,
			'jabatan_pusatkarir'			    => $jabatan,
			'alamat_pusatkarir	'				=> $alamat,
			'email_pusatkarir'					=> $email,
			'nohp_pusatkarir'					=> $no_hp,
			'tempat_lahir'						=> $tempat_lahir,
			'tanggal_lahir'						=> $tanggal_lahir,
			'foto_pusatkarir'					=> $foto,
		
		);

		//$this->m_pusatkarir->input_data($data, 'tb_pusatkarir');
		$this->db->insert('tb_pusatkarir',$data);
		redirect('admin/data_pusatkarir/index');
	}




}
