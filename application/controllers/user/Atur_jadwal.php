<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atur_jadwal extends CI_Controller{

    public function index(){
        $this->load->view('user/aturjadwal');
    }
}