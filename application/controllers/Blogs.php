<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
         * Controller : service-part
         * Method : Index
	 * Created by:Shiva
         * Created At : 29-06-2020
         * Description : It is using to load sub service page details
	 */


class Blogs extends CI_Controller {
    
    function _remap($method) 
    {
        if (method_exists($this, $method))
        {
              $this->$method($this->uri->segment(3));
        }
        else
        {
              $this->index($method);
        }
    }
    
    /**
         * Method : service-part
	 * Created by:Shiva
         * Created At : 04-07-2020
         * Description : It is using to load sub service details in frontend
	 */
    
	public function index($meta_url)
	{ 
                $this->load->model("AdminModel");
                $res = $this->AdminModel->getBlogDetails($meta_url); 
                
                //printdie($res);
                
                $status = $res["status"];
                
                if($status == true || $status == 1){
                    $data['data'] = $res['data'];
                    $this->load->view("blogDetailView", $data);
                }
                else{
                    redirect('errorpage');
                }
		
	}
            
}