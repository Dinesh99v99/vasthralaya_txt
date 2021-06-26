<?php
 
 
class Product_model extends CI_Model{

	public function getAllProducts(){
		$this->db->select("customer_id.customer_id,customer_id.title,customer.customer_name,customer.description,customer.permision_id");
		$this->db->from('customer_id');
		$this->db->join('customer', 'customer.id = customer_id.customer_id');
		$query = $this->db->get();
		// print_r($query);
		return $query->result();
	}
	public function getDatabyId($userId){
		$this->db->select("customer_id.customer_id,customer_id.title,customer.customer_name,customer.description,customer.permision_id");
		$this->db->from('customer_id');
		$this->db->join('customer', 'customer.id = customer_id.customer_id');
		$query = $this->db->get();
		// print_r($query);die;
		return $query->result_array();

	}
	public function getDatabyfilter($userId){
		$this->db->select("customer_id.customer_id,customer_id.title,customer.customer_name,customer.description,customer.permision_id");
		$this->db->where('customer.permision_id', $userId);
		$this->db->from('customer_id');
		$this->db->join('customer', 'customer.id = customer_id.customer_id');
		$query = $this->db->get();
		// print_r($query);die;
		return $query->result_array();

	}
	public function getDatabyfiltersecond($userId){
		$this->db->select("customer_id.customer_id,customer_id.title,customer.customer_name,customer.description,customer.permision_id");
		$this->db->where('customer.permision_id', $userId);
		$this->db->from('customer_id');
		$this->db->join('customer', 'customer.id = customer_id.customer_id');
		$query = $this->db->get();
		// print_r($query);die;
		return $query->result_array();

	}
	}
	// "customer_id.customer_id=='".$userId."'"
