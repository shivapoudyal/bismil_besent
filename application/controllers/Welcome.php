<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
         * Controller : Welcome
         * Method : Index
	 * Created by:Shiva
         * Created At : 29-06-2020
         * Description : It is using to load index page 
	 */
    
          public function __construct() {
            parent::__construct();

            $this->load->model("AdminModel");

        }
    
	public function index()
	{
                $this->load->model("AdminModel");
                $data['data'] = $this->AdminModel->getParentServcieList(); 
                //printdie($data);
		$this->load->view('indexView', $data);
	}
        
        /**
         * Method : Index
	 * Created by:Shiva
         * Created At : 29-06-2020
         * Description : It is using to load about page 
	 */
    
	public function about_us()
	{
		$this->load->view('about_usView');
	}
        
        /**
         * Method : Index
	 * Created by:Shiva
         * Created At : 04-07-2020
         * Description : It is using to load contact us page 
	 */
    
	public function contact_us()
	{
		$this->load->view('contactUsView');
	}
        
        /**
         * Method : Index
	 * Created by:Shiva
         * Created At : 04-07-2020
         * Description : It is using to load contact us page 
	 */
    
	public function service()
	{
		$this->load->view('serviceView');
	}
        
        public function service_part($id)
	{ 
                $this->load->model("AdminModel");
                $data["data"] = $this->AdminModel->getSubServiceDetailsById($id);
		$this->load->view('sub_serviceViewFrontend', $data);
	}
        
        
}
