<?php
class LoginModel extends CI_Model
{
	
	/**
	CREATED_BY : SHIVA
	CREATED_DATE : 11/07/2020
	DETAILS : LOGIN PROCESS FOR ADMIN
	*/
	public function login($data)
	{
		date_default_timezone_set('Asia/Kolkata');
		$last_login = date('Y-m-d H:i:s');
		$res = [];      

                $email = strtolower($data['email']); 
                $res = array();
                $array = array("email" => trim($email), "password" => md5($data['password']), "status" => 1); 
                //printdie($array);
                $this->db->where($array);
                $query = $this->db->get("login_details");
                $num_rows = $query->num_rows();
                if($num_rows>0)
                {
                    $data = $query->row_array();
                    $id = $data["user_id"];
                    $email = $data["email"];
                    $role_id = $data["role_id"];
                    $username = $data['username'];

                    $session_array = array("user_id" => $id, "email" => $email, "role_id" => $role_id, "username" => $username);

                    $this->session->set_userdata($session_array); 

                        $res["last_logged_in_at"] = $last_login;
                        $this->db->where("user_id", $id);
                        $this->db->update("login_details", $res);
                    return true;
                }
                else{
                    return false;
                }
	}
}
?>