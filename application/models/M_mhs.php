<?php

class M_mhs extends CI_Model {

    public function tampil_data(){
        $query = "SELECT * FROM tb_mhs";
        return $this->db->query($query)->result();
        
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}