<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class Konsultasi extends CI_Controller {

    public function index()
    {
        // print_r($this->session->userdata('userdata'));
        $data = array(
            'chat' => $this->db->order_by('id','DESC')->get('chat')->result() 
        );
        
        
        $this->load->view('user/konsultasi', $data);
    }

    public function store(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'message' => $this->input->post('message'),
        );

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

        if($this->db->insert('chat', $data)){
          $push = $this->db->order_by('id','DESC');
          $push = $this->db->get('chat')->result( );

          foreach ($push as $key) {
              $data_pusher[] = $key;
          }

            $pusher->trigger('my-channel', 'my-event', $data_pusher);
        
        } 
    }
}