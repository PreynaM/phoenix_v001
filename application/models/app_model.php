<?php


 class app_model extends CI_Model
  {

    public function is_admin_exists($email,$password)
     {
        $this->db->select("*");
        $this->db->from(tbl_users());
        $this->db->where([
           "email" => $email,
           "password" => md5($password)


        ]);
       $query = $this->db->get();
       $result = $query->row();

       if(!empty($result)) 
        {
            return true;
        }
        else {
            return false;
        }

     }






  }


?>