<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_Admin extends CI_Controller{
    public function index(){
        $this->load->view('admin/pengaturan');
    }
    public function ambildata($type){
    	if($type == 1){
    		$data = $this->db->query("SELECT *, nim_mhs as nomor FROM tb_mhs")->result_array();
    	}else if($type == 2){
    		$data = $this->db->query("SELECT *, nip_doswal as nomor FROM tb_dosenwali")->result_array();
    	}else{
    		$data = $this->db->query("SELECT *, nip_kaprodi as nomor FROM tb_kaprodi")->result_array();
    	}
    	echo json_encode($data);
    }
    public function reset_password(){
    	$nomor = $this->input->post('identitas');
    	$type = $this->input->post('type');
    	if($type == 1){
    		$table = 'tb_mhs';
    		$arr   = ['password_mhs' => $nomor];
    		$where = ['nim_mhs' => $nomor];
    	}else if($type == 2){
    		$table = 'tb_dosenwali';
    		$arr   = ['password_doswal' => $nomor];
    		$where = ['nip_doswal' => $nomor];
    	}else{
    		$table = 'tb_kaprodi';
    		$arr   = ['password_kaprodi' => $nomor];
    		$where = ['nip_kaprodi' => $nomor];
    	}
    	$this->session->set_flashdata('msg', 'Berhasil Ganti Password');
    	$ar = $this->db->update($table, $arr, $where);
    	redirect(base_url('pengaturan_admin'));
    }
}
