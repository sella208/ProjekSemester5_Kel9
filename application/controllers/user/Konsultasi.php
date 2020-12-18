<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class Konsultasi extends CI_Controller {

    public function index()
    {
        // print_r($this->session->userdata('userdata'));
        $data = array(
            'data' => $this->db->query("SELECT * FROM `tb_chat` tc LEFT JOIN tb_mhs mhs ON tc.id_mhs=mhs.id_mhs 
            LEFT JOIN tb_dosenwali dw ON tc.id_doswal=dw.id_doswal 
            LEFT JOIN  tb_kaprodi tk ON tc.id_kaprodi=tk.id_kaprodi 
            LEFT JOIN tb_pusatkarir tp ON tc.id_pusatkarir=tp.id_pusatkarir
            LEFT JOIN tb_psikolog tpsi ON tc.id_psikolog=tpsi.id_psikolog where  tc.id_mhs=".$this->session->userdata('userdata')['id_mhs'])->row_array()
        );
        
        $id_chat = (isset($data['data']['id_chat']) ? $data['data']['id_chat'] : 0);
        $data['chat'] = $this->db->query("SELECT * FROM tb_detail_chat dc JOIN tb_chat tc ON dc.id_chat=tc.id_chat WHERE tc.id_chat = '$id_chat'")->result();
        $this->load->view('user/konsultasi', $data);
    }

    public function store(){
        $data = array(
            'id_chat' => $this->input->post('id_chat'),
            'isi_chat' => $this->input->post('message'),
            //tidakusah yang bawah
            'level' => (isset($this->session->userdata('userdata')['id_mhs']) ? 1 : (isset($this->session->userdata('userdata')['id_doswal']) ? 2 : 3)),
            'tanggal_chat' => date('Y-m-d H:i:s')
            //batas tidak usah
        );
        // print_r($data) ;
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
          );
          $pusher = new Pusher\Pusher(
            'a07f7d661e8689f142b8',
            '2753f5f108972d9cc2f6',
            '1121750',
            $options
          );

        if($this->db->insert('tb_detail_chat', $data)){
          $push = $this->db->order_by('id_detail_chat','DESC');
          $push = $this->db->get('tb_detail_chat')->result( );

          foreach ($push as $key) {
              $data_pusher[] = $key;
          }

            $pusher->trigger('my-channel', 'my-event', $data_pusher);
        
        }
    }
    public function simpan_topik(){
        $d = $_POST;
        $data = [
            'topik_chat' => $d['topik'],
            'id_mhs' => $this->session->userdata('userdata')['id_mhs'],
            'id_doswal' => 1,
            'id_kaprodi' => 1,
            'id_pusatkarir' => 1,
            'id_psikolog' => 1,
            'status_chat' => 1,
        ];
        $insert = $this->db->insert('tb_chat', $data);
        redirect(base_url('user/konsultasi'));
    }
}