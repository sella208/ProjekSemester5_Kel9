<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('M_profil');
		$this->load->helper('url');
	}	

	public function index()
	{
        $d['mahasiswa'] = $this->db->get_where('tb_mhs', ['nim_mhs' =>
        $this->session->userdata('nim_mhs')])->row_array();
		$get = $this->M_profil->usermhs();
		// print_r($this->session->userdata('userdata'));
        $data = $get->row();
        $d['id_mhs'] = $data->id_mhs;
        $d['nim_mhs'] = $data->nim_mhs;
        $d['nama_mhs'] = $data->nama_mhs;
        $d['alamat_mhs'] = $data->alamat_mhs;
        $d['nohp_mhs'] = $data->nohp_mhs;
        $d['prodi_mhs'] = $data->prodi_mhs;
        $d['semester_mhs'] = $data->semester_mhs;
        $d['gol_mhs'] = $data->gol_mhs;
		$d['status_mhs'] = $data->status_mhs;
		//$d['nama_doswal'] = $data->nama_doswal;
		$d['email_mhs'] = $data->email_mhs;
		
		$this->load->view('user/profil', $d);
	}

}