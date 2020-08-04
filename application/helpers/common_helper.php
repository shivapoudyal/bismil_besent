<?php

/**
 * 
 * Method Name  : printdie() 
 * Description : This method will return log data in structured way to be deleted after completion 
 * Author  :  Shiva
 * Created on :  29-06-2020
 * Updated On : 29-06-2020
 * updated by :  Shiva
 */
function printdie($arr) {
    echo '<pre>';
    print_r($arr);
    die;
}


/***
     * 
     * Method Name : is_logged_in()
     * Description : Helper Function to check User id Logged IN or Not.
     * Created At : 22/03/2020
     * Created by : Shiva
     */
    
    function is_logged_in() {
        // Get current CodeIgniter instance
        $CI =& get_instance();
        $user = $CI->session->userdata('user_id');
        if (!isset($user)) 
        { 
            return false; 
        } else { 
            return true; 
        }
    }
    
    /* * *
 * 
 * Method Name : stateList()
 * Description : Helper Function will return list of all States of INDIA.
 * Author  :  Shiva
 * Created At : 10/05/2019
 * Updated At :  10/05/2019
 * Updated By : Shiva
 */

function servicesListActive() {
    // Get current CodeIgniter instance
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    //$serviceList = $CI->AdminModel->servicesListActive();
    $serviceList = $CI->AdminModel->getParentServcieList();
    return $serviceList;
}

   /* * *
 * 
 * Method Name : activeServices()
 * Description : Helper Function will return list of all States of INDIA.
 * Author  :  Shiva
 * Created At : 10/05/2019
 * Updated At :  10/05/2019
 * Updated By : Shiva
 */

function activeServices() {
    // Get current CodeIgniter instance
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $serviceList = $CI->AdminModel->servicesListActive();
    //$serviceList = $CI->AdminModel->getParentServcieList();
    return $serviceList;
}

  /* * *
 * 
 * Method Name : stateList()
 * Description : Helper Function will return list of all States of INDIA.
 * Author  :  Shiva
 * Created At : 10/05/2019
 * Updated At :  10/05/2019
 * Updated By : Shiva
 */

function serviceNameFromId($id) {
    // Get current CodeIgniter instance
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->serviceNameFromId($id);
    return $stateList;
}


  /* * *
 * 
 * Method Name : getChildServiceList()
 * Description : Helper Function will return list of all subservice list as per service id
 * Author  :  Shiva
 * Created At : 10/05/2019
 * Updated At :  10/05/2019
 * Updated By : Shiva
 */

function getChildServiceList($id) {
    // Get current CodeIgniter instance
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->getChildServiceList($id);
    return $stateList;
}

/**
 * 
 * Method Name  : excerptShow() 
 * Description : This method will return limited string to display
 * Author  :  Shiva
 * Created on :  06/06/2019
 * Updated On : 06/06/2019   
 * updated by :  Shiva
 */
function excerptShow($x, $length) {
    if (strlen($x) <= $length) {
        return $x;
    } else {
        $y = substr($x, 0, $length) . '...';
        return $y;
    }
}

 /**
         * Method : getRecentBlogs
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */

function getRecentBlogs($blog_id="") {
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->getRecentBlogs($blog_id);
    return $stateList;
}

 /**
         * Method : getCommentCounting
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */

function getCommentCounting($blog_id) {
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->getCommentCounting($blog_id);
    return $stateList;
}

/**
         * Method : getBlogHeadingById
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */

function getBlogHeadingById($blog_id) {
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->getBlogHeadingById($blog_id);
    return $stateList;
}

/**
         * Method : getTopServices
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */

function getTopServices() {
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->getTopServices();
    return $stateList;
}

/**
         * Method : getBlogComments
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */

function getBlogComments($blog_id) {
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->getBlogComments($blog_id);
    return $stateList;
}

/**
         * Method : blogAllKeywords
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */

function blogAllKeywords() {
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->blogAllKeywords();
    return $stateList;
}