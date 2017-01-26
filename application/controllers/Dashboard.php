<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $session_id = $this->session->userdata('id');
        if($session_id !== NULL){
            redirect('super_admin','refresh');
            
        }
    }
    public function index() {
       $this->load->view('admin/user/login');
        
    }
    public function admin_login_check(){
        $email = $this->input->post('email',TRUE);
        $password = $this->input->post('password',TRUE);
        //$this->load->model('admin');
        $result = $this->admin->admin_login_check_info($email,$password);
        
        //
        //print_r($result);
       // exit();
        
        $sdata = array();
          if($result){      
        $data = array();
        $sdata['id'] = $result->id;
        $sdata['first_name'] = $result->first_name;
        $sdata['last_name'] = $result->last_name;
        $this->session->set_userdata($sdata);
        redirect('super_admin');
    }
    else{
        $sdata['exception'] = 'Your email or password not match!';
        $this->session->set_userdata($sdata);
        redirect('dashboard');
    }
    }
    public function chk(){
        
         $this->load->view('admin/form_validation');
    }
    
}
