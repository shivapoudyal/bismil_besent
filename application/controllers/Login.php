<?php 

class Login extends CI_Controller
 {
	
	/**
	CREATED_BY : SHIVA
	CREATED_DATE : 11/07/2020
	DETAILS : LOGIN PROCESS FOR AUTHENTIC ADMIN LOGIN
	*/
    
//     public function __construct() {
//        parent::__construct();
//
//        
//       
//    }


        public function index()
	{
            if (is_logged_in()) {
                redirect("Admin");
            }
            $this->load->view('admin/signInView_admin');
	}
    
	function admin_login()
	{ 

            if(empty($_POST["email"])){
                $this->session->set_flashdata('emsg', 'Please Enter Email ID');
                redirect('Login');  
            }
            
            else if(empty($_POST["password"])){
                $this->session->set_flashdata('emsg', 'Please Enter Password');
                redirect('Login');  
            }
            else{
                $this->load->model("LoginModel");
                $result = $this->LoginModel->login($_POST);

                if($result==true)
                { 
                    //redirect('Admin');  
                    redirect('Admin/servicesList');  
                }

                else
                {
                    $this->session->set_flashdata('emsg', 'Invalid Username or Password!');
                    redirect('Login');  
                }
            }
                
	} 

	 /*     * *
        * 
        * Method Name :  logout 
        * Description :  Logout or Session Destroy for LoggedIn User
        * Created At :  11/07/2020
        * Created By : Shiva 
        */

       public function logout() {
           $uid = $this->session->userdata("user_id");
           $array_val = array("user_id" => "");
           $this->session->unset_userdata($array_val);
           $this->session->sess_destroy();
           redirect("login");
       }
	
}

