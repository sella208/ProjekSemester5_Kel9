<?php

class M_doswal extends CI_Model {

    public function tampil_data(){
        $query = "SELECT * FROM tb_dosenwali";
        return $this->db->query($query)->result();
        return $this->db->get('tb_dosenwali');
        return $query;
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function input_data()
    {
        return $this->db->get('tb_dosenwali');
    }
    

}