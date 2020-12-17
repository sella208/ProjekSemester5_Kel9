<?php

class M_mhs extends CI_Model {

    public function tampil_data(){
        $query = "SELECT * FROM tb_mhs";
        return $this->db->query($query)->result();
        return $this->db->get('tb_mhs');
        
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function input_data()
    {
        return $this->db->get('tb_mhs');
    }

}