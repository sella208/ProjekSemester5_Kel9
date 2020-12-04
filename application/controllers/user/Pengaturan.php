<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller{
    public function index(){
        $this->load->view('user/pengaturan');
    }
}