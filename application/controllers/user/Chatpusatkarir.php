<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chatpusatkarir extends CI_Controller {

	public function index()
	{
		$this->load->view('user/chat_pusatkarir');
	}
}