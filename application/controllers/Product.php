<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->model('product_model');
	}

	public function index()
	{	
		$data['products']  = $this->product_model->getAllProducts();
		// print_r($data);die;
		$data['title'] = "Product List";
		$this->load->view('products/index',$data);
	}

	public function getDataByID()
	{
		$userId = $_POST['userid'];
		$data  = $this->product_model->getDatabyId($userId);
		// print_r($data);
		// for ($i=0; $i < count($data); $i++) { 
		// 	echo $data[$i].customer_name;
		// }
		$response = "<table border='0' width='100%'>";
		foreach ($data as $key => $value) {
			# code...
			$customer_id = $value['customer_id'];
			$customer_name =$value['customer_name'];
			$title = $value['title'];

			$response .= "<tr>";
			$response .= "<td>ID : </td><td>".$customer_id."</td>";
			$response .= "</tr>";

			$response .= "<tr>";
			$response .= "<td> Name : </td><td>".$customer_name."</td>";
			$response .= "</tr>";

			$response .= "<tr>";
			$response .= "<td>Title : </td><td>".$title."</td>";
			$response .= "</tr>";
			
		}
		$response .= "</table>";
		echo $response;
	}
}
