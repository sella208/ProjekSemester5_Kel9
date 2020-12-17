<?php

class M_profil extends CI_Model {
    public function usermhs()
	{
        $id = $this->session->userdata('userdata')['id_mhs'];
		$q = $this->db->query("SELECT * FROM tb_mhs WHERE id_mhs='$id'");
        return $q;
        
    }

}