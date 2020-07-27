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
        $query = $this->db->query("select id, service_name, meta_url from services where status=1 AND is_deleted=0 order by id DESC");
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
    
    /**
     * Method Name : totalBlogs
     * Description : return total number of records from blogs table
     * Created At : 12/07/2020 
     * updated by : Shiva
     * 
     */
    public function totalBlogs($search) {
        $condition = " 1=1 ";
       
        if (!empty($search["search"]["blog_heading"])) {
            $blog_heading = $search["search"]["blog_heading"];
            $condition .= " and blog_heading like '%" . $blog_heading . "%' ";
        }
        
        if (isset($search["search"]["status"]) && $search["search"]["status"] != '') {
            $status = $search["search"]["status"];
            $condition .= " and status ='" . $status . "'";
        }

        $sql = "select id from blogs where $condition AND is_deleted='0' ";
       
        $query = $this->db->query($sql);
        $data = $query->num_rows();
        return $data;
    }
    
    /**
     * Method Name : blogList
     * Description : List all sub_services from sub_services table
     * Updated on : 12/07/2020
     * updated by : Shiva
     */
    public function blogList($search, $page) {
        $condition = " 1=1 ";
        $orderby = "ORDER BY id DESC";
        
        if (!empty($search["search"]["blog_heading"])) {
            $blog_heading = $search["search"]["blog_heading"];
            $condition .= " and blog_heading like '%" . $blog_heading . "%' ";
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
        
        $sql = "select id, service_id, blog_heading, blog_image, status, created_at from blogs where $condition AND is_deleted='0' $orderby limit $page, $per_page";
     
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    
    /**
         * Method : uploadBlogImage
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert data into given DB table
	 */
        function uploadBlogImage($file, $id){
            
                $img_name = $file['blog_image']['name'];
                $_FILES['file']['name'] = $file['blog_image']['name'];
                $_FILES['file']['type'] = $file['blog_image']['type'];
                $_FILES['file']['tmp_name'] = $file['blog_image']['tmp_name'];
                $_FILES['file']['error'] = $file['blog_image']['error'];
                $_FILES['file']['size'] = $file['blog_image']['size'];

                $config['upload_path'] = blog_image_upload_path;
                
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
                    
                    if(!empty($id) || $id > 0){
                        redirect('Admin/editBlog');
                    }
                    else{
                        redirect('Admin/addBlog');
                    }
                }
        }
        
        /**
         * Method : saveBlogsIntoDb
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    
    function saveBlogsIntoDb($dataArr, $id){
        date_default_timezone_set('Asia/Kolkata');
        $dataArr["updated_at"] = date('Y-m-d H:i:s');
        
        unset($dataArr["$id"]);
        
        $res = [];
        
        // If data contains any id then update else insert
        if(!empty($id ) || $id > 0){
                        
            $this->db->where("id", $id);
            $isUpdated = $this->db->update("blogs", $dataArr);
            if($isUpdated){
                $res["status"] = true;
                $res["msg"] = "Blog Updated Succesfully";
                $res["data"] = $dataArr["id"];
            }
            else{
                $res["status"] = false;
                $res["msg"] = "Blog Not Updated";
                $res["data"] = null;
            }
        }
        else{
            $dataArr["created_at"] = date('Y-m-d H:i:s');
            
            $this->db->insert("blogs", $dataArr);
            $inserted_id = $this->db->insert_id();
            if(!empty($inserted_id) || $inserted_id > 0){
                $res["status"] = true;
                $res["msg"] = "Blog Inserted Succesfully";
                $res["data"] = $inserted_id;
            }
            else{
                $res["status"] = false;
                $res["msg"] = "Blog Not Updated";
                $res["data"] = null;
            }
        }
        
        return $res;
    }
    
    /**
         * Method : getBlogAsPerId
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    function getBlogAsPerId($id){
        $query = $this->db->query("select * from blogs where id = $id");
        return $query->row_array();
    }
    
    /**
         * Method : getRecentBlogs
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    function getRecentBlogs($blog_id=""){
        
        $condition =" 1=1 ";
        if(!empty($blog_id) || $blog_id > 0){
            $condition .= " AND tb.id!=$blog_id ";
        }
        
        $query = $this->db->query("select tb.id, tb.blog_heading, tb.blog_image, tb.meta_url, tb.about,
                                    DATE_FORMAT(tb.created_at, '%d') as created_day, 
                                    DATE_FORMAT(tb.created_at, '%M') as created_month, 
                                    DATE_FORMAT(tb.created_at, '%Y') as created_year
                                    from blogs tb
                                    WHERE $condition AND tb.status=1 and tb.is_deleted=0
                                    order by tb.id DESC LIMIT 3");
        return $query->result_array();
    }
    
    /**
         * Method : getCommentCounting
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    function getCommentCounting($blog_id){
        $query = $this->db->query("select count(id) as comment_count from blog_comments
                                    WHERE status=1 and is_deleted=0 AND blog_id=$blog_id");
        return $query->row_array();
    }
    
     /**
         * Method : getRecentBlogs
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    function getBlogInfo($meta_url){
        $query = $this->db->query("select tb.id, tb.service_id, tb.blog_heading, tb.blog_image, tb.meta_url, tb.about,
                                    DATE_FORMAT(tb.created_at, '%d') as created_day, 
                                    DATE_FORMAT(tb.created_at, '%M') as created_month, 
                                    DATE_FORMAT(tb.created_at, '%Y') as created_year
                                    from blogs tb
                                    order by tb.meta_url = '$meta_url' ");
        
        if($query->num_rows() > 0){
            $res['status'] = true;
            $res['data'] = $query->row_array();
        }
        else{
            $res['status'] = false;
            $res['data'] = null;
        }
        return $res;
    }
    
    /**
     * Method Name : totalBlogComments
     * Description : return total number of records from blogs table
     * Created At : 12/07/2020 
     * updated by : Shiva
     * 
     */
    public function totalBlogComments($search) {
        $condition = " 1=1 ";
       
//        if (!empty($search["search"]["blog_heading"])) {
//            $blog_heading = $search["search"]["blog_heading"];
//            $condition .= " and blog_heading like '%" . $blog_heading . "%' ";
//        }
        
        if (isset($search["search"]["status"]) && $search["search"]["status"] != '') {
            $status = $search["search"]["status"];
            $condition .= " and status ='" . $status . "'";
        }

        $sql = "select id from blog_comments where $condition AND is_deleted='0' ";
       
        $query = $this->db->query($sql);
        $data = $query->num_rows();
        return $data;
    }
    
    /**
     * Method Name : blogCommentList
     * Description : List all sub_services from sub_services table
     * Updated on : 12/07/2020
     * updated by : Shiva
     */
    public function blogCommentList($search, $page) {
        $condition = " 1=1 ";
        $orderby = "ORDER BY id DESC";
        
//        if (!empty($search["search"]["blog_heading"])) {
//            $blog_heading = $search["search"]["blog_heading"];
//            $condition .= " and blog_heading like '%" . $blog_heading . "%' ";
//        }
        
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
        
        $sql = "select * from blog_comments where $condition AND is_deleted='0' $orderby limit $page, $per_page";
     
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    
     /**
         * Method : getCommentCounting
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    function getBlogHeadingById($blog_id){
        $query = $this->db->query("select blog_heading from blogs
                                    WHERE id=$blog_id");
        return $query->row_array();
    }
    
     /**
         * Method : getCommentInfo
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    function getCommentInfo($id){
        $query = $this->db->query("select * from blog_comments where id = $id");
        return $query->row_array();
    }
    
    /**
         * Method : updateBlogComment
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Update comment status
	 */
    function updateBlogComment($id, $status){
        
        $updateArr['status'] = $status;
        $dataArr["updated_at"] = date('Y-m-d H:i:s');
        
        $this->db->where("id", $id);
        if($this->db->update("blog_comments", $updateArr)){
            return true;
        }
        else return false;
    }
    
    /**
         * Method : delComment
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Update comment status
	 */
    function delComment($id){
        
        $updateArr['is_deleted'] = 1;
        $dataArr["updated_at"] = date('Y-m-d H:i:s');
        
        $this->db->where("id", $id);
        if($this->db->update("blog_comments", $updateArr)){
            return true;
        }
        else return false;
    }
    
     /**
         * Method : getTopServices
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Update comment status
	 */
         function getTopServices(){
             $query = $this->db->query("select meta_url, service_name from services where status=1 AND is_deleted=0 ORDER BY id DESC LIMIT 4");
             return $query->result_array();
         }
         
    
     
     /**
         * Method : getBlogDetails
	 * Created by:Shiva
         * Created At : 11-07-2020
         * Description : Update comment status
	 */     
         
    function getBlogDetails($meta_url){
        $res=[];
        
        //$condition = " 1=1 ";
                
        $query = $this->db->query("select id, service_id, blog_heading, about, blog_image, meta_title, meta_description, meta_keywords, meta_url,
                                    DATE_FORMAT(created_at, '%d') as created_day, 
                                    DATE_FORMAT(created_at, '%M') as created_month, 
                                    DATE_FORMAT(created_at, '%Y') as created_year
                                   from blogs where  meta_url ='" . $meta_url . "'");
        if($query->num_rows()>0){
            $res['status'] = true;
            $res['data'] = $query->row_array();
        }
        else {
            $res['status'] = false;
            $res['data'] = "";
        }
        
        return $res;
    }
    
     /**
         * Method : getBlogComments
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    function getBlogComments($blog_id){
        $query = $this->db->query("select id, blog_id, visitor_name, visitor_email, visitor_msg,
                                    DATE_FORMAT(created_at, '%d') as created_day, 
                                    DATE_FORMAT(created_at, '%M') as created_month, 
                                    DATE_FORMAT(created_at, '%Y') as created_year
                                    from blog_comments
                                    WHERE status=1 AND is_deleted=0 AND blog_id=$blog_id ORDER BY id DESC");
        return $query->result_array();
    }
    
    /**
         * Method : saveComment
	 * Created by:Shiva
         * Created At : 12-07-2020
         * Description : this function will update or insert blogs into given DB table
	 */
    
    function saveComment($dataArr){
        
        unset($dataArr['blog_meta_url']);
        
        $dataArr["updated_at"] = date('Y-m-d H:i:s');
        $dataArr["created_at"] = date('Y-m-d H:i:s');
        
        if($this->db->insert("blog_comments", $dataArr)){
            return true;
        }
        else return false;
    }
    
     /**
     * Method Name : totalBlogs
     * Description : return total number of records from blogs table
     * Created At : 12/07/2020 
     * updated by : Shiva
     * 
     */
    public function totalBlogsForFrontend($search) {
        $condition = " 1=1 ";
       
        if (!empty($search["search"]["blog_heading"])) {
            $blog_heading = $search["search"]["blog_heading"];
            $condition .= " and blog_heading like '%" . $blog_heading . "%' ";
        }
        
        if (isset($search["search"]["status"]) && $search["search"]["status"] != '') {
            $status = $search["search"]["status"];
            $condition .= " and status ='" . $status . "'";
        }

        $sql = "select id from blogs where $condition AND is_deleted='0' AND status=1 ";
       
        $query = $this->db->query($sql);
        $data = $query->num_rows();
        return $data;
    }
    
    /**
     * Method Name : blogListForFrontend
     * Description : List all sub_services from sub_services table
     * Updated on : 12/07/2020
     * updated by : Shiva
     */
    public function blogListForFrontend($search, $page) {
        $condition = " 1=1 ";
        $orderby = "ORDER BY id DESC";
        
        if (!empty($search["search"]["blog_heading"])) {
            $blog_heading = $search["search"]["blog_heading"];
            $condition .= " and blog_heading like '%" . $blog_heading . "%' ";
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
        
        $sql = "select id, service_id, blog_heading, blog_image, status, about,
                meta_url, meta_keywords,
                DATE_FORMAT(created_at, '%d') as created_day, 
                DATE_FORMAT(created_at, '%M') as created_month, 
                DATE_FORMAT(created_at, '%Y') as created_year
                from blogs where $condition AND status=1 AND is_deleted='0' $orderby limit $page, $per_page";
     
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    
    /**
     * Method Name :  blogAllKeywords
     * Description : List all sub_services from sub_services table
     * Updated on : 12/07/2020
     * updated by : Shiva
     */
    function blogAllKeywords(){
        $sql = "select GROUP_CONCAT(meta_keywords) as meta_keywords from blogs where status=1 AND is_deleted=0";
        $query = $this->db->query($sql);
        return $query->row_array()['meta_keywords'];
    }
    
}

