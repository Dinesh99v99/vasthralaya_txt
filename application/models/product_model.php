<?php
 
 
class Product_model extends CI_Model{

	public function insertenquiry($data){
		$this->db->insert('add_data',$data);
	}

}
