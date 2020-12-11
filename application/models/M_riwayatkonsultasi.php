<?php

class M_riwayatkonsultasi extends CI_Model {

    public function tampil_data(){
        $query = "SELECT * FROM tb_riwayatkonsultasi";
        return $this->db->query($query)->result();
        
    }

}