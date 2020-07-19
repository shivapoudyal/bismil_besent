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
 * Author  :  Pushpendra Rathor
 * Created At : 10/05/2019
 * Updated At :  10/05/2019
 * Updated By : Pushpendra Rathor
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
 * Author  :  Pushpendra Rathor
 * Created At : 10/05/2019
 * Updated At :  10/05/2019
 * Updated By : Pushpendra Rathor
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
 * Author  :  Pushpendra Rathor
 * Created At : 10/05/2019
 * Updated At :  10/05/2019
 * Updated By : Pushpendra Rathor
 */

function serviceNameFromId($id) {
    // Get current CodeIgniter instance
    $CI = & get_instance();
    $CI->load->model("AdminModel");
    $stateList = $CI->AdminModel->serviceNameFromId($id);
    return $stateList;
}