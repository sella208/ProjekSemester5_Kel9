<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_doswal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_doswal');
		$this->load->database();
	}	

	public function index()
	{
		$data['dosenwali'] = $this->m_doswal->tampil_data();
		$this->load->view('admin/data_doswal', $data);
	}

	public function hapus($id_doswal)
	{
		$where = array ('id_doswal' => $id_doswal);
		$this->m_doswal->hapus_data($where, 'tb_dosenwali');
		redirect('admin/data_doswal');

		
	}

	public function update_aksi($id_doswal)
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
			'nama_doswal'				=> $nama,
			'nip_doswal'				=> $nip,
			'alamat_doswal'				=> $alamat,
			'nohp_doswal'				=> $no_hp,
			'email_doswal'				=> $email,
			'nidn_doswal'				=> $nidn,
			'jabatan_doswal'			=> $jabatan,
			'status_pegawai'			=> $status_pegawai,
			'gol_doswal'				=> $golongan,
			'tempat_lahir'				=> $tempat_lahir,
			'tanggal_lahir'				=> $tanggal_lahir,
			'prodi_doswal'				=> $program_studi,
			'foto_doswal'				=> $foto,
		
		);

		//$this->m_doswal->input_data($data, 'tb_dosenwali');
		$this->db->update('tb_dosenwali',$data, ['id_doswal' => $id_doswal]);
		redirect('admin/data_doswal/index');
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
			'nama_doswal'				=> $nama,
			'nip_doswal'				=> $nip,
			'alamat_doswal'				=> $alamat,
			'nohp_doswal'				=> $no_hp,
			'email_doswal'				=> $email,
			'nidn_doswal'				=> $nidn,
			'jabatan_doswal'			=> $jabatan,
			'status_pegawai'			=> $status_pegawai,
			'gol_doswal'				=> $golongan,
			'tempat_lahir'				=> $tempat_lahir,
			'tanggal_lahir'				=> $tanggal_lahir,
			'prodi_doswal'				=> $program_studi,
			'foto_doswal'				=> $foto,
		
		);

		//$this->m_doswal->input_data($data, 'tb_dosenwali');
		$this->db->insert('tb_dosenwali',$data);
		redirect('admin/data_doswal/index');
	}




}
