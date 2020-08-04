<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
         * Controller : service-part
         * Method : Index
	 * Created by:Shiva
         * Created At : 29-06-2020
         * Description : It is using to load sub service page details
	 */


class Bloglist extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model("AdminModel");
       
    }
    
    /**
         * Method : bloglist
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : All BLog List View For Frontend
	 */
        function index(){
            $config = array();
            $this->load->library('pagination');
            $config["base_url"] = base_url() . "bloglist/index";
            // Set total rows in the result set you are creating pagination for.
            // Number of items you intend to show per page.
            $config["per_page"] = 4;
            // Use pagination number for anchor URL.
            $config['use_page_numbers'] = TRUE;
            $search["search"] = $this->input->get();
            $search["per_page"] = $config["per_page"];
            //Set that how many number of pages you want to view.
            $total_row = $this->AdminModel->totalBlogsForFrontend($search);

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
            $data["list"] = $this->AdminModel->blogListForFrontend($search, $page);
            $str_links = $this->pagination->create_links();
            $data["links"] = explode('&nbsp;', $str_links);
            $data['per_page_cnt'] = $config["per_page"];
            //printdie($data);
            $this->load->view('blogListView', $data);
        }
}

