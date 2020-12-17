<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kaprodi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_kaprodi');
		$this->load->database();
	}	

	public function index()
	{
		$data['kaprodi'] = $this->m_kaprodi->tampil_data();
		$this->load->view('admin/data_kaprodi', $data);
	}

	public function hapus($id_kaprodi)
	{
		$where = array ('id_kaprodi' => $id_kaprodi);
		$this->m_kaprodi->hapus_data($where, 'tb_kaprodi');
		redirect('admin/data_kaprodi');

		
	}

	public function update_aksi($id_kaprodi)
	{
		$nama				= $this->input->post('nama');
		$nip				= $this->input->post('nip');
		$alamat				= $this->input->post('alamat');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');
		$nidn				= $this->input->post('nidn');
		$jabatan			= $this->input->post('jabatan');
		$status_pegawai		= $this->input->post('status_pegawai');
		$golongan			= $this->input->post('golongan');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$program_studi		= $this->input->post('program_studi');
		$foto				= $this->input->post('foto');
	
		$data	= array (
			'nama_kaprodi'				=> $nama,
			'nip_kaprodi'				=> $nip,
			'alamat_kaprodi'			=> $alamat,
			'nohp_kaprodi'				=> $no_hp,
			'email_kaprodi'				=> $email,
			'nidn_kaprodi'				=> $nidn,
			'jabatan_kaprodi'			=> $jabatan,
			'status_pegawai'			=> $status_pegawai,
			'golongan_kaprodi'			=> $golongan,
			'tempat_lahir'				=> $tempat_lahir,
			'tanggal_lahir'				=> $tanggal_lahir,
			'prodi_kaprodi'				=> $program_studi,
			'foto_kaprodi'				=> $foto,
		
		);

		//$this->m_kaprodi->input_data($data, 'tb_kaprodi');
		$this->db->update('tb_kaprodi',$data, ['id_kaprodi' => $id_kaprodi]);
		redirect('admin/data_kaprodi/index');
	}

	public function tambah_aksi(){
		$nama				= $this->input->post('nama');
		$nip				= $this->input->post('nip');
		$alamat				= $this->input->post('alamat');
		$no_hp				= $this->input->post('no_hp');
		$email				= $this->input->post('email');
		$nidn				= $this->input->post('nidn');
		$jabatan			= $this->input->post('jabatan');
		$status_pegawai		= $this->input->post('status_pegawai');
		$golongan			= $this->input->post('golongan');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tanggal_lahir		= $this->input->post('tanggal_lahir');
		$program_studi		= $this->input->post('program_studi');
		$foto				= $this->input->post('foto');
	
		$data	= array (
			'nama_kaprodi'				=> $nama,
			'nip_kaprodi'				=> $nip,
			'alamat_kaprodi'			=> $alamat,
			'nohp_kaprodi'				=> $no_hp,
			'email_kaprodi'				=> $email,
			'nidn_kaprodi'				=> $nidn,
			'jabatan_kaprodi'			=> $jabatan,
			'status_pegawai'			=> $status_pegawai,
			'golongan_kaprodi'			=> $golongan,
			'tempat_lahir'				=> $tempat_lahir,
			'tanggal_lahir'				=> $tanggal_lahir,
			'prodi_kaprodi'				=> $program_studi,
			'foto_kaprodi'				=> $foto,
		
		);

		//$this->m_kaprodi->input_data($data, 'tb_kaprodi');
		$this->db->insert('tb_kaprodi',$data);
		redirect('admin/data_kaprodi/index');
	}


}
