<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_psikolog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_psikolog');
		$this->load->database();
	}	

	public function index()
	{
		$data['psikolog'] = $this->m_psikolog->tampil_data();
		$this->load->view('admin/data_psikolog', $data);
	}

	public function hapus ($id_psikolog)
	{
		$where = array ('id' => $id_psikolog);
		$this->m_psikologs->hapus_data($where, 'tb_psikolog');
		
	}


}
