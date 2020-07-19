<?php

class AdminModel extends CI_Model{
    
    /**
	CREATED_BY : SHIVA
	CREATED_DATE : 11/07/2020
	DETAILS : Admin Working Model
	*/
    
    
        /**
         * Method : saveDataIntoDb
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert data into given DB table
	 */
    
    function saveDataIntoDb($dataArr, $table_name){
        date_default_timezone_set('Asia/Kolkata');
        $dataArr["updated_at"] = date('Y-m-d H:i:s');
        unset($dataArr["service_type"]);
        
        $res = [];
        
        // If data contains any id then update else insert
        if(!empty($dataArr["id"] || $dataArr["id"] != "" || $dataArr["id"] > 0 )){
            
            $id = $dataArr["id"];
            unset($dataArr["id"]);
            
            $this->db->where("id", $id);
            $isUpdated = $this->db->update($table_name, $dataArr);
            if($isUpdated){
                $res["status"] = true;
                $res["msg"] = "Data Updated Succesfully";
                $res["data"] = $dataArr["id"];
            }
            else{
                $res["status"] = false;
                $res["msg"] = "Data Not Updated";
                $res["data"] = null;
            }
        }
        else{
            $dataArr["created_at"] = date('Y-m-d H:i:s');
            $this->db->insert($table_name, $dataArr);
            $inserted_id = $this->db->insert_id();
            if(!empty($inserted_id) || $inserted_id > 0){
                $res["status"] = true;
                $res["msg"] = "Data Inserted Succesfully";
                $res["data"] = $inserted_id;
            }
            else{
                $res["status"] = false;
                $res["msg"] = "Data Not Updated";
                $res["data"] = null;
            }
        }
        
        return $res;
    }
    
        /**
         * Method : uploadFile
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert data into given DB table
	 */
        function uploadFile($file, $service_type){
            
                $img_name = $file['service_image']['name'];
                $_FILES['file']['name'] = $file['service_image']['name'];
                $_FILES['file']['type'] = $file['service_image']['type'];
                $_FILES['file']['tmp_name'] = $file['service_image']['tmp_name'];
                $_FILES['file']['error'] = $file['service_image']['error'];
                $_FILES['file']['size'] = $file['service_image']['size'];

                // File upload configuration
                if($service_type == "parent_service"){
                    $config['upload_path'] = image_upload_path;
                }
                if($service_type == "child_service"){
                    $config['upload_path'] = sub_service_image_upload_path;
                }
                
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['encrypt_name'] = true;

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if ($this->upload->do_upload('file')) {
                    $imageData = $this->upload->data();
                    return $imageData['file_name'];
                } 
                else {
                    $this->session->set_flashdata("emsg", strip_tags($this->upload->display_errors()));
                    
                    if($service_type == "parent_service"){
                        redirect('Admin/addService');
                    }
                    
                    if($service_type == "child_service"){
                        redirect('Admin/addSubService');
                    }
                }
        } 
        
        /**
     * Method Name : totalServices
     * Description : return total number of records from service table
     * Created At : 12/07/2020 
     * updated by : Shiva
     * 
     */
    public function totalServices($search) {
        $condition = " 1=1 ";
       
        if (!empty($search["search"]["service_name"])) {
            $service_name = $search["search"]["service_name"];
            $condition .= " and service_name like '%" . $service_name . "%' ";
        }
        
        if (isset($search["search"]["status"]) && $search["search"]["status"] != '') {
            $status = $search["search"]["status"];
            $condition .= " and status ='" . $status . "'";
        }

        $sql = "select id from services where $condition AND is_deleted='0' ";
       
        $query = $this->db->query($sql);
        $data = $query->num_rows();
        return $data;
    }
    
    /**
     * Method Name : servicesList
     * Description : List all services from services table
     * Updated on : 12/07/2020
     * updated by : Shihva
     */
    public function servicesList($search, $page) {
        $condition = " 1=1 ";
        $orderby = "ORDER BY id DESC";
        
        if (!empty($search["search"]["service_name"])) {
            $service_name = $search["search"]["service_name"];
            $condition .= " and service_name like '%" . $service_name . "%' ";
        }
        
        if (isset($search["search"]["status"]) && $search["search"]["status"] != '') {
            $status = $search["search"]["status"];
            $condition .= " and status ='" . $status . "'";
        }

        $per_page = $search["per_page"];

        if ($page == 1) {
            $page = 0;
        } else {
            $page = ($page - 1) * $per_page;
        }
        
        $sql = "select id, service_name, service_image, status, created_at from services where $condition AND is_deleted='0' $orderby limit $page, $per_page";
     
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    
    function getServiceDetailsById($id){
        
        $condition = " 1=1 ";
        if((int) $id == true){
            $condition .= " and id ='" . $id . "'";
        }
        else{
            $condition .= " and meta_url ='" . $id . "'";
        }
        
        $query = $this->db->query("select * from services where $condition");
        if($query->num_rows()>0){
            return $query->row_array();
        }
        else return false;
        
    }
    
     /**
     * Method Name : servicesListActive
     * Description : return active service list
     * Created At : 12/07/2020 
     * updated by : Shiva
     * 
     */
      function servicesListActive(){
        $query = $this->db->query("select id, service_name from services where status=1 AND is_deleted=0 order by id DESC");
        return $query->result_array();
    }
    
     /**
     * Method Name : serviceNameFromId
     * Description : return service name as per ID
     * Created At : 12/07/2020 
     * updated by : Shiva
     * 
     */
      function serviceNameFromId($id){
        $query = $this->db->query("select service_name from services where id=$id");
        return $query->row_array()["service_name"];
    }
        
      /**
     * Method Name : sub_totalServices
     * Description : return total number of records from sub_service table
     * Created At : 12/07/2020 
     * updated by : Shiva
     * 
     */
    public function sub_totalServices($search) {
        $condition = " 1=1 ";
       
        if (!empty($search["search"]["service_name"])) {
            $sub_service_name = $search["search"]["service_name"];
            $condition .= " and sub_service_name like '%" . $sub_service_name . "%' ";
        }
        
        if (isset($search["search"]["status"]) && $search["search"]["status"] != '') {
            $status = $search["search"]["status"];
            $condition .= " and status ='" . $status . "'";
        }

        $sql = "select id from sub_services where $condition AND is_deleted='0' ";
       
        $query = $this->db->query($sql);
        $data = $query->num_rows();
        return $data;
    }
    
    /**
     * Method Name : sub_servicesList
     * Description : List all sub_services from sub_services table
     * Updated on : 12/07/2020
     * updated by : Shiva
     */
    public function sub_servicesList($search, $page) {
        $condition = " 1=1 ";
        $orderby = "ORDER BY id DESC";
        
        if (!empty($search["search"]["service_name"])) {
            $service_name = $search["search"]["service_name"];
            $condition .= " and sub_service_name like '%" . $service_name . "%' ";
        }
        
        if (isset($search["search"]["status"]) && $search["search"]["status"] != '') {
            $status = $search["search"]["status"];
            $condition .= " and status ='" . $status . "'";
        }

        $per_page = $search["per_page"];

        if ($page == 1) {
            $page = 0;
        } else {
            $page = ($page - 1) * $per_page;
        }
        
        $sql = "select id, service_id, sub_service_name, service_image, status, created_at from sub_services where $condition AND is_deleted='0' $orderby limit $page, $per_page";
     
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    
     /**
         * Method : editSub_Service
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Sub Service Edit View for admin
	 */
    function getSubServiceDetailsById($id){
        
        $condition = " 1=1 ";
        if((int) $id == true){
            $condition .= " and id ='" . $id . "'";
        }
        else{
            $condition .= " and meta_url ='" . $id . "'";
        }
        
        $query = $this->db->query("select * from sub_services where $condition");
        
        if($query->num_rows()>0){
            return $query->row_array();
        }
        else return false;
        
        return $query->row_array();
    }
    
    /**
    * Method : getServiceAndSubServcieList
    * Created by:Shiva
    * Created At : 11-07-2020
    * Description : Sub Service Edit View for admin
    */
    function getParentServcieList(){
        $parentQuery = $this->db->query("select DISTINCT ts.id, ts.meta_url, ts.service_name from services ts
                                   LEFT JOIN sub_services tss ON ts.id = tss.service_id 
                                   where ts.status=1 AND ts.is_deleted=0 AND tss.status=1 AND tss.is_deleted=0
                                   GROUP BY tss.id HAVING count(tss.id) > 0");
        
        $parent_services = $parentQuery->result_array();
        return $parent_services;
    }
    
    function getChildServiceList($service_id){
            $childQuery = $this->db->query("select tss.id, tss.meta_url, tss.sub_service_name, tss.service_image from sub_services tss
                                           WHERE tss.service_id = $service_id AND tss.status = 1 AND tss.is_deleted=0");
            
            $child_services = $childQuery->result_array();
            
            return $child_services;
    }
    
    function getServiceDetailsByIdForFrontend($id){
        $res=[];
        $condition = " 1=1 ";
        if((int) $id == true){
            $condition .= " and id ='" . $id . "'";
        }
        else{
            $condition .= " and meta_url ='" . $id . "'";
        }
        
        $query = $this->db->query("select * from services where $condition");
        if($query->num_rows()>0){
            $res['service_type'] = 'service';
            $res['data'] = $query->row_array();
            $res['status'] = true;
        }
        else {
            $sub_query = $this->db->query("select * from sub_services where $condition");
            if($sub_query->num_rows()>0){
                $res['service_type'] = 'sub_service';
                $res['data'] = $sub_query->row_array();
                $res['status'] = true;
            }
            else {
                $res['service_type'] = 'not_found';
                $res['data'] = "";
                $res['status'] = false;
            }
        }
        
        return $res;
        
    }
}

