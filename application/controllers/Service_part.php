<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
         * Controller : service-part
         * Method : Index
	 * Created by:Shiva
         * Created At : 29-06-2020
         * Description : It is using to load sub service page details
	 */


class Service_part extends CI_Controller {
    
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
    
	public function index($id)
	{ 
                $this->load->model("AdminModel");
                $data["data"] = $this->AdminModel->getSubServiceDetailsById($id);
                if(!empty($data['data'])){
                    $this->load->view('sub_serviceViewFrontend', $data);
                }
                else{
                    redirect('errorpage');
                }
                
	}
    
}

	
