<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->model('product_model');
	}
//////start///////
	public function index()
	{	
      $this->load->view('display_records');
	}
	public function home()
	{	
      $this->load->view('home_view');
	}
	public function about()
	{	
      $this->load->view('about_view');
	}
	public function image()
	{	
      $this->load->view('image_view');
	}
	public function enquiry()
	{	
      $this->load->view('enquiry_view');
	}
	
	public function sendenquiry()
	{	
		$data['name'] = $this->input->post('name');
		$data['phone_no'] = $this->input->post('phone_no');
		$data['email_id'] = $this->input->post('email_id');
// print_r($data);die;
		$this->product_model->insertenquiry($data);
		redirect('product');
	}
	
}
