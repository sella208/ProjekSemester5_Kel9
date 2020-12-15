<?php

class M_doswal extends CI_Model {

    public function tampil_data(){
        $query = "SELECT * FROM tb_dosenwali";
        return $this->db->query($query)->result();
    }

}