<?php
 
 
class Product_model extends CI_Model{

	public function getAllProducts(){
		$this->db->select("customer_id.customer_id,customer_id.title,customer.customer_name,customer.description");
		$this->db->from('customer_id');
		$this->db->join('customer', 'customer.id = customer_id.customer_id');
		$query = $this->db->get();
		// print_r($query);
		return $query->result();
	}
	public function getDatabyId($userId){
		$this->db->select("customer_id.customer_id,customer_id.title,customer.customer_name,customer.description");
		$this->db->where('customer_id.customer_id', $userId);
		$this->db->from('customer_id');
		$this->db->join('customer', 'customer.id = customer_id.customer_id');
		$query = $this->db->get();
		return $query->result_array();

	}

	}
	// "customer_id.customer_id=='".$userId."'"
