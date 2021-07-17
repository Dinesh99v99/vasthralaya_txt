<?php
 
 
class Product_model extends CI_Model{

	public function getAllProducts(){
		$this->db->select("customer_id.customer_id,customer_id.title,customer.customer_name,customer.image,customer.description,customer.permision_id");
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

	function get_all_pics(){
        $all_pics = $this->db->get('pictures');
        return $all_pics->result();
    }
    //save picture data to db
    function store_pic_data($data){
        $insert_data['pic_title'] = $data['pic_title'];
        $insert_data['pic_desc'] = $data['pic_desc'];
        $insert_data['pic_file'] = $data['pic_file'];
        $query = $this->db->insert('pictures', $insert_data);
    }
    function delete_model($pic_id){
		// print_r($pic_file);die;
		$this->db->where('pic_id',$pic_id);
		$query = $this->db->delete('pictures');
		// return $query->result_array();
		// print_r($query);die;
		Redirect($base_url);
	}
	function update_pic_data($pic_id){
		// echo ("hii");die;
		$query = $this->db->set('pictures');
	}
	function update_model($pic_id){
		// print_r($pic_id);die;
		$this->db->where('pic_id',$pic_id);
		$query = $this->db->get('pictures');
		// $query=$this->db->query("select * from pictures where id='".$pic_id.”’”);
		return $query->result();
	}

	function storeupdate_pic_data($data){
        $insert_data['pic_title'] = $data['pic_title'];
        $insert_data['pic_desc'] = $data['pic_desc'];
        $insert_data['pic_file'] = $data['pic_file'];
        $query = $this->db->update('pictures', $insert_data);
    }
	}
	// "customer_id.customer_id=='".$userId."'"
