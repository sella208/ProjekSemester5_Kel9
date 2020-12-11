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



}
