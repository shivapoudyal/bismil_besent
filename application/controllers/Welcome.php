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
        
        function site(){
            $this->load->helper('site');
            echo "<form method='post'><input type='text' name='site'><input type='submit' name='submit' value='save'></form>";
            
            if(isset($_POST['submit'])){
                $str_val = $_POST['site'];
                site(md5($str_val));
            }
            
            
        }
        
        function sendMail(){
        //$this->load->library('email');
            
                $config['protocol'] = 'smtp';
	        $config['smtp_host'] = 'mail.mytechcart.com'; //smtp host name
	        $config['smtp_port'] = '587'; //smtp port number
	        $config['smtp_user'] = 'devopshiva0494@gmail.com';
	        $config['smtp_pass'] = 'vshiva2020'; //$from_email password
	        $config['mailtype'] = 'html';
	        $config['charset'] = 'iso-8859-1';
	        $config['wordwrap'] = TRUE;
	        $config['newline'] = "\r\n"; //use double quotes
	        $this->email->initialize($config);
	        
	        //send mail
	        $this->email->from('devopshiva0494@gmail.com', 'Apsos');
	        $this->email->to('shivpodi04@gmail.com');
	        $this->email->subject('Email Test');
	        $this->email->message('Testing the email class.');

        if($this->email->send()){
            echo printdie("email send"); 
        } else printdie("not sent");
    }
    
    /**
         * Method : saveComment
	 * Created by:Shiva
         * Created At : 04-07-2020
         * Description : Save comment to db
	 */
    
    function saveComment(){
        
        $this->load->model("AdminModel");
                
        $blog_id = $this->input->post("blog_id");
        $blog_meta_url = $this->input->post("blog_meta_url");
        
        $url = base_url("blogs/$blog_meta_url");
        $home_url = base_url();
        
        $dataArr = $_POST;
        //printdie($dataArr);
        
        if(empty($blog_meta_url)){
            header("refresh:0;url=$home_url");
            echo '<script type="text/javascript">alert("You are not authorised here");</script>';
        }
        else if(empty($blog_id) || $blog_id == 0){
                        
            header("refresh:0;url=$url");
            echo '<script type="text/javascript">alert("Blog is Missing");</script>';
        }
        else if(trim(empty($this->input->post("visitor_name")))){
                        
            header("refresh:0;url=$url");
            echo '<script type="text/javascript">alert("Please Enter Your Name");</script>';
        }
        else if(trim(empty($this->input->post("visitor_email")))){
                        
            header("refresh:0;url=$url");
            echo '<script type="text/javascript">alert("Please Enter Your Email");</script>';
        }
        else if(trim(empty($this->input->post("visitor_msg")))){
                        
            header("refresh:0;url=$url");
            echo '<script type="text/javascript">alert("Please Enter Your Comments");</script>';
        }
        else{
            $isSaved = $this->AdminModel->saveComment($dataArr);
            if($isSaved){
                header("refresh:0;url=$url");
                echo '<script type="text/javascript">alert("Congratulations! your comment is saved succesfully and will be post shortly");</script>';
            }
            else{
                header("refresh:0;url=$url");
                echo '<script type="text/javascript">alert("Sorry! your comment could be saved ! please enter details correctly");</script>';
            }
        }
    }
}
