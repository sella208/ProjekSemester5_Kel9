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

	public function hapus ($id_kaprodi)
	{
		$where = array ('id' => $id_kaprodi);
		$this->m_kaprodi->hapus_data($where, 'tb_kaprodi');
		
	}


}
