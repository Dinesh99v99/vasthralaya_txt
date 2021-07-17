<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
		$this->load->model('product_model');
        $this->load->library('form_validation');
        
        $this->load->view('header');

    }
    
    public function form(){
        $this->load->view('upload_form');
        $this->load->view('footer');
    }
    
    public function file_data(){
        //validate the form data 

        $this->form_validation->set_rules('pic_title', 'Picture Title', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('upload_form');
        }else{
            
            //get the form values
            $data['pic_title'] = $this->input->post('pic_title', TRUE);
            $data['pic_desc'] = $this->input->post('pic_desc', TRUE);

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('pic_file')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }else{

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['pic_file'] = $upload_data['file_name'];

                //store pic data to the db
                $this->product_model->store_pic_data($data);

                redirect('/');
            }
            $this->load->view('footer');
        }
    }
    public function delete_image($pic_id){

$this->product_model->delete_model($pic_id);
        
    // foreach ($query_get_image->result() as $record)
    // {
    //     // delete file, if exists...
    //     $filename = $image_path . $record->picture; 
    //     if (file_exists($filename))
    //     {
    //         unlink($filename);
    //     }

    //     // ...and continue with your code
    //     $this->np_gallery_model->delete($id);
    //     $query = $this->db->get("np_gallery");
    //     $data['records'] = $query->result();
    //     // $this->load->view('admin/gallery/gallery_listing',$data);
    // }
    }
    public function update_image($pic_id){
$result['data']=$this->product_model->update_model($pic_id);
    //    $data['update_value'] $this->product_model->update_pic_data($pic_id);
// print_r($result);die;
        $this->load->view('update_form',$result);
       
    }
    public function update_upload(){
		// print_r('hiiii');die;
        $this->form_validation->set_rules('pic_title', 'Picture Title', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('update_form');
        }else{
            
            //get the form values
            $data['pic_title'] = $this->input->post('pic_title', TRUE);
            $data['pic_desc'] = $this->input->post('pic_desc', TRUE);

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../assets/image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('pic_file')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }else{

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['pic_file'] = $upload_data['file_name'];

                //store pic data to the db
                $this->product_model->storeupdate_pic_data($data);

                redirect($base_url);
                // Redirect($base_url);
            }
            $this->load->view('footer');
        }
    }
    }
