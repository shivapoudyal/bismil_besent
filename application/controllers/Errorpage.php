<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errorpage extends CI_Controller {
    
    function index(){
        $this->load->view("errorpageView");
    }
    
}