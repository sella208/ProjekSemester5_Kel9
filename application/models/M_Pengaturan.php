<?php
/**
* 
*/
class ClassName extends AnotherClass
{
	
	function __construct(argument)
	{
		# code...
	}
	public function cek($type){
		if($type == 1){
    		$data = $this->db->get_where("tb_mhs")->result_array();
    	}else if($type == 2){
    		$data = $this->db->get_where("tb_dosenwali")->result_array();
    	}else{
    		$data = $this->db->get_where("tb_kaprodi")->result_array();
    	}
	}
}