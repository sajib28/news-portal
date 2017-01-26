<?php
class Admin extends CI_Model{

function admin_login_check_info($email,$password){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('email',$email);
    $this->db->where('password',md5($password));
    $this->db->where('status',1);
    $query_result = $this->db->get();
   $result = $query_result->row();
   return $result;
}
}
?>