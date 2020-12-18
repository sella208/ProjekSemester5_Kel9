<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class Chatdosen extends CI_Controller {

    public function index()
    {
        // print_r($this->session->userdata('userdata'));
        $data = array(
            'data' => $this->db->query("SELECT * FROM `tb_chat` tc LEFT JOIN tb_dosenwali dw ON tc.id_doswal=dw.id_doswal 
            LEFT JOIN tb_mhs mhs ON tc.id_mhs=mhs.id_mhs 
            LEFT JOIN  tb_kaprodi tk ON tc.id_kaprodi=tk.id_kaprodi 
            LEFT JOIN tb_pusatkarir tp ON tc.id_pusatkarir=tp.id_pusatkarir
            LEFT JOIN tb_psikolog tpsi ON tc.id_psikolog=tpsi.id_psikolog where  tc.id_doswal=".$this->session->userdata('userdata')['id_doswal'])->row_array()
        );
		// print_r($data);
        $id_chat = $data['data']['id_chat'];
        $data['chat'] = $this->db->query("SELECT * FROM tb_detail_chat dc JOIN tb_chat tc ON dc.id_chat=tc.id_chat WHERE tc.id_chat = '$id_chat'")->result();
        $this->load->view('user/chatdosen', $data);
    }
    public function lanjutkan ($id){
        $this->db->update("tb_chat", ['status_chat' => 2], ['id_chat' => $id]);
        redirect(base_url('user/chatdosen'));
    }
    public function selesai ($id){
        $this->db->update("tb_chat", ['status_chat' => 5], ['id_chat' => $id]);
        redirect(base_url('user/chatdosen'));
    }


}