<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->model('product_model');
	}

	public function index1()
	{	
		$data['products']  = $this->product_model->getAllProducts();
		// print_r($data);die;
		$data['title'] = "Product List";
		$this->load->view('products/index',$data);
	}

	public function getDataByID()
	{
		// print_r($_POST);die;
	
		$userId = $_POST['pid'];

		if($userId == 0){
			$data  = $this->product_model->getDatabyId($userId);

		}else if ( $userId==1 ){
			$data  = $this->product_model->getDatabyfilter($userId);
		}else{
			$data  = $this->product_model->getDatabyfiltersecond($userId);	
		}

		// $data  = $this->product_model->getDatabyId($userId);
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
	

	public function	create(){

		$data['title'] = "Inser image";
		$this->load->view('products/image',$data);
	}

	public function index()
    {
        // $this->load->model('');
        $data['picture_list'] = $this->product_model->get_all_pics();
        
        $this->load->view('header');
        $this->load->view('picture_list', $data);
        $this->load->view('footer');
    }

}