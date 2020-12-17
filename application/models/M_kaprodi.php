<?php

class M_kaprodi extends CI_Model {

    public function tampil_data(){
        $query = "SELECT * FROM tb_kaprodi";
        return $this->db->query($query)->result();
        
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}