<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_riwayatkonsultasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_riwayatkonsultasi');
		$this->load->database();
	}	

	public function index()
	{
		$data['riwayatkonsultasi'] = $this->m_riwayatkonsultasi->tampil_data();
		$this->load->view('admin/data_riwayatkonsultasi', $data);
	}


}
