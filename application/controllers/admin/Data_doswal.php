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

	public function hapus ($id_doswal)
	{
		$where = array ('id' => $id_doswal);
		$this->m_doswal->hapus_data($where, 'tb_dosenwali');
		
	}


}
