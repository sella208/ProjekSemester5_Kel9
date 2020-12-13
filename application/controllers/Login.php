<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
    public function index(){
        $this->load->view("login");
    }

    public function cek() {
        if($this->input->method(TRUE) == 'POST' && !empty($_POST)) {
            $in['username'] = $this->input->post('username');
            $in['password'] = $this->input->post('password');
            echo $this->M_login->cek($in);
        }else {
            // echo "<aku disini gan";
            redirect(base_url());
        }
    }
}