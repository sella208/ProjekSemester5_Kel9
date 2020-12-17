<?php

class M_profil extends CI_Model {
    public function tampil_data(){
        return $this->db->get('tb_mhs');
    }

}