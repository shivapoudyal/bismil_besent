<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class CloudUpload extends CI_Controller {
    
    function index(){
        $this->load->view("cloudUploadView");
    }
 
 function file_upload_to_s3(){
 
	    $this->load->library('S3'); //load S3 library
	    $this->load->model('cloudUploadModel'); //load model
            
            $fileTempName = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
 
	    $upload_folder   = 'uploadimages';  //folder name
            $bucket_name     =  'imageuploadingshiva'; //Bucket name
            $awsstatus       =  $this->cloudUploadModel->amazons3Upload($image_name, $fileTempName, $upload_folder); //call model function
            $awss3filepath   =  "http://".$bucket_name.'.'."s3.amazonaws.com/".$upload_folder.'/'.$image_name;
            
            printdie($awsstatus);
 }
 
}