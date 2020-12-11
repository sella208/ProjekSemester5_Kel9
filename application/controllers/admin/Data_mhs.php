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
		$where = array ('id' => $id_mhs);
		$this->m_mhs->hapus_data($where, 'tb_mhs');
		
	}


}
