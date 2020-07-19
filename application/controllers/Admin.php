<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
         * Controller : Admin
         * Method : Index
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : All the Administrator work done here
	 */
    
    public function __construct() {
        parent::__construct();

        if (!is_logged_in()) {
            redirect("Login");
        }
        
        $this->load->model("AdminModel");
       
    }
    
        /**
         * Method : Index
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Admin Dashboard View
	 */
    
	public function index()
	{
            $this->load->view('admin/indexView_admin');
	}
        
        /**
         * Method : addService
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Admin Service Add View
	 */
    
	public function addService()
	{
		$this->load->view('admin/serviceAddView');
	}
        
        /**
         * Method : saveService
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Save Service from admin side
	 */
        function saveService(){
            
            //printdie($_FILES);
            $dataArr = $_POST;
            $table_name = "";
            $id = $this->input->post("id");
            $service_type = $this->input->post("service_type");
            $service_name = "";
            
            if($service_type == "parent_service"){
                 $table_name = "services";
                 $service_name = $this->input->post("service_name");
            }
            
            if($service_type == "child_service"){
                 $table_name = "sub_services";
                 $service_name = $this->input->post("sub_service_name");
            }
            
            if(trim(empty($service_name))){
                $this->session->set_flashdata('emsg', 'Please Enter Service Name');
                
                if($service_type == "parent_service"){
                    redirect('Admin/addService');
                }
                
                if($service_type == "child_service"){
                    redirect('Admin/addSubService');
                }
            }
            else if(empty($_FILES["service_image"]["name"]) && (empty ($id))){
                $this->session->set_flashdata('emsg', 'Please Select Image');
                if($service_type == "parent_service"){
                    redirect('Admin/addService');
                }
                
                if($service_type == "child_service"){
                    redirect('Admin/addSubService');
                }
                  
            }
            
            else{
                if(!empty($_FILES["service_image"]["name"])){
                    $fileName = $this->AdminModel->uploadFile($_FILES, $service_type);
                    $dataArr["service_image"] = $fileName;
                }
                
                
                $res = $this->AdminModel->saveDataIntoDb($dataArr, $table_name);
                
                if($res["status"] == true || $res["status"] == 1){
                    $this->session->set_flashdata('smsg', $res["msg"]);
                    if($service_type == "parent_service"){
                        redirect('Admin/servicesList'); 
                    }
                    
                    if($service_type == "child_service"){
                        redirect('Admin/sub_servicesList'); 
                    }
                    
                }
                else{
                    if(!empty($id)){
                        $this->session->set_flashdata('emsg', $res["msg"]);
                        
                        if($service_type == "parent_service"){
                            redirect('Admin/editService'); 
                        }
                        
                        if($service_type == "child_service"){
                            redirect('Admin/editSub_Service'); 
                        }
                    }
                    else{
                        $this->session->set_flashdata('emsg', $res["msg"]);
                        redirect('Admin/addService'); 
                    }
                    
                }
            }
        }
        
        /**
         * Method : ServicesList
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Service List View For Admin
	 */
        function servicesList(){
            $config = array();
            $this->load->library('pagination');
            $config["base_url"] = base_url() . "Admin/servicesList";
            // Set total rows in the result set you are creating pagination for.
            // Number of items you intend to show per page.
            $config["per_page"] = 10;
            // Use pagination number for anchor URL.
            $config['use_page_numbers'] = TRUE;
            $search["search"] = $this->input->get();
            $search["per_page"] = $config["per_page"];
            //Set that how many number of pages you want to view.
            $total_row = $this->AdminModel->totalServices($search);

            $config["total_rows"] = $total_row;
            $config['num_links'] = 2;
            // Open tag for CURRENT link.
            $config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
            $config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='active'><a>";
            $config['cur_tag_close'] = "</a></li>";
            // By clicking on performing NEXT pagination.
            $config['next_link'] = 'Next';
            // By clicking on performing PREVIOUS pagination.
            $config['prev_link'] = 'Previous';
            $is_applied = $this->input->get('is_applied_filter');
            $_GET['is_applied_filter'] = 0;
            if (count($_GET) > 0) {
                $config['suffix'] = '?' . http_build_query($_GET, '', "&");
                $config['first_url'] = $config['base_url'] . '?' . http_build_query($_GET);
            }

            if ($is_applied == 1) {
                redirect($config['base_url'] . '?' . http_build_query($_GET));
            }
            // To initialize "$config" array and set to pagination library.
            $this->pagination->initialize($config);
            if ($this->uri->segment(3)) {
                $page = ($this->uri->segment(3));
            } else {
                $page = 1;
            }

            $data["total"] = $total_row;
            $data["list"] = $this->AdminModel->servicesList($search, $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;', $str_links);
            $data['per_page_cnt'] = $config["per_page"];
            //printdie($data);
            $this->load->view('admin/servicesListView', $data);
        }
        
         /**
         * Method : editService
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Admin Service Add View
	 */
    
	public function editService($id)
	{ 
                $data["data"] = $this->AdminModel->getServiceDetailsById($id);
		$this->load->view('admin/serviceEditView', $data);
	}
        
        /**
         * Method : sub_servicesList
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Sub Service List View For Admin
	 */
        function sub_servicesList(){
            $config = array();
            $this->load->library('pagination');
            $config["base_url"] = base_url() . "Admin/servicesList";
            // Set total rows in the result set you are creating pagination for.
            // Number of items you intend to show per page.
            $config["per_page"] = 10;
            // Use pagination number for anchor URL.
            $config['use_page_numbers'] = TRUE;
            $search["search"] = $this->input->get();
            $search["per_page"] = $config["per_page"];
            //Set that how many number of pages you want to view.
            $total_row = $this->AdminModel->sub_totalServices($search);

            $config["total_rows"] = $total_row;
            $config['num_links'] = 2;
            // Open tag for CURRENT link.
            $config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
            $config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='active'><a>";
            $config['cur_tag_close'] = "</a></li>";
            // By clicking on performing NEXT pagination.
            $config['next_link'] = 'Next';
            // By clicking on performing PREVIOUS pagination.
            $config['prev_link'] = 'Previous';
            $is_applied = $this->input->get('is_applied_filter');
            $_GET['is_applied_filter'] = 0;
            if (count($_GET) > 0) {
                $config['suffix'] = '?' . http_build_query($_GET, '', "&");
                $config['first_url'] = $config['base_url'] . '?' . http_build_query($_GET);
            }

            if ($is_applied == 1) {
                redirect($config['base_url'] . '?' . http_build_query($_GET));
            }
            // To initialize "$config" array and set to pagination library.
            $this->pagination->initialize($config);
            if ($this->uri->segment(3)) {
                $page = ($this->uri->segment(3));
            } else {
                $page = 1;
            }

            $data["total"] = $total_row;
            $data["list"] = $this->AdminModel->sub_servicesList($search, $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;', $str_links);
            $data['per_page_cnt'] = $config["per_page"];
            //printdie($data);
            $this->load->view('admin/sub_servicesListView', $data);
        }
        
            /**
         * Method : addSubService
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Admin Service Add View
	 */
    
	public function addSubService()
	{
		$this->load->view('admin/sub_serviceAddView');
	}
        
          /**
         * Method : editSub_Service
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Sub Service Edit View for admin
	 */
    
	public function editSub_Service($id)
	{ 
                $data["data"] = $this->AdminModel->getSubServiceDetailsById($id);
		$this->load->view('admin/sub_serviceEditView', $data);
	}
                
}