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
