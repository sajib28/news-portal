<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $session_id = $this->session->userdata('id');
        $this->load->helper('custom_helper');
    }

    public function index()
    {
        $data = array();
        $data['categories'] = $this->welcome_model->get_categories();
//      print_r($data);
//      $data['all_publish_category'] = $this->welcome_model->select_all_published_category();
        $data['client_info'] = getLocationInfoByIp();
        $data['main_content'] = $this->load->view('frontend/home_content', $data, TRUE);
        $data['title'] = "Home";
        $data['breadcum'] = FALSE;

        $this->load->view('frontend/master', $data);
    }

//    public function news() {
//        $data = array();
//        $data['all_publish_category'] = $this->welcome_model->select_all_published_category();
////        $data['category_news'] = $this->welcome_model->select_news_by_category_id($category_id);
//        /*$data['latest_posts'] = $this->welcome_model->select_latest_posts();
//        $data['popular_posts'] = $this->welcome_model->select_popular_posts();*/
//        
//     echo '<pre>';
//     print_r($data);
//        $data['main_content'] = $this->load->view('frontend/home_content', $data, TRUE);
//        $data['title'] = "News";
//        $this->load->view('frontend/master', $data);
//
//    }

    public function blog_details($blog_id)
    {
        $data = array();
        $data['all_publish_category'] = $this->welcome_model->select_all_published_category();
        $data['comments_by_blog_id'] = $this->welcome_model->select_comments_by_blog_id($blog_id);
        $data['latest_posts'] = $this->welcome_model->select_latest_posts();
        $data['blog_info'] = $this->welcome_model->select_blog_info_by_id($blog_id);
        $total_hit = $data['blog_info']->hit_count + 1;
        $this->welcome_model->update_hit_counter($total_hit, $blog_id);
        $data['popular_posts'] = $this->welcome_model->select_popular_posts();
        $data['blog_info'] = $this->welcome_model->select_blog_info_by_id($blog_id);
        $data['main_content'] = $this->load->view('blog/single_post', $data, TRUE);
        $data['title'] = "Blog";
        $data['breadcum'] = TRUE;
        $this->load->view('blog_master', $data);
    }

    public function category_blog($category_id)
    {
        $data = array();
        $data['all_publish_category'] = $this->welcome_model->select_all_published_category();
        $data['category_blog'] = $this->welcome_model->select_blog_by_category_id($category_id);
        $data['latest_posts'] = $this->welcome_model->select_latest_posts();
        $data['popular_posts'] = $this->welcome_model->select_popular_posts();
        $data['main_content'] = $this->load->view('blog/category_blog', $data, TRUE);
        $data['title'] = "Blog";
        $data['breadcum'] = TRUE;
        $this->load->view('blog_master', $data);
    }

    public function portfolio()
    {
        $data = array();
        $data['all_publish_project_category'] = $this->welcome_model->select_all_published_project_category();

        $data['main_content'] = $this->load->view('blog/portfolio_content', '', TRUE);
        $data['title'] = "Portfolio";
        $data['breadcum'] = TRUE;
        $this->load->view('master', $data);
    }

    public function contact()
    {
        $data = array();
        $data['main_content'] = $this->load->view('blog/contact_content', '', TRUE);
        $data['title'] = "Contact Us";
        $data['breadcum'] = TRUE;
        $this->load->view('master', $data);
    }

    public function sign_up()
    {
        $data = array();
        $data['main_content'] = $this->load->view('blog/sign_up', '', TRUE);
        $data['title'] = "Sign Up";
        $data['breadcum'] = TRUE;
        $this->load->view('master', $data);
    }

    public function save_user()
    {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', TRUE);
        $data['email_address'] = $this->input->post('email_address', TRUE);
        $data['password'] = md5($this->input->post('password', TRUE));
        $this->welcome_model->save_user_info($data);
        $sdata = array();
        $sdata['message'] = 'registration successfully.You may login now!';
        $this->session->set_userdata($sdata);
        redirect('welcome/sign_up');
    }

    public function login()
    {
        $data = array();
        $data['main_content'] = $this->load->view('blog/login', '', TRUE);
        $data['title'] = "Login";
        $data['breadcum'] = TRUE;
        $this->load->view('master', $data);
    }

    public function user_login_check()
    {
        $email_address = $this->input->post('email_address', TRUE);
        $password = $this->input->post('password', TRUE);
        $result = $this->welcome_model->user_login_check_info($email_address, $password);
        $sdata = array();
        if ($result) {
            $sdata['id'] = $result->id;
            $sdata['user_name'] = $result->user_name;
            $sdata['email_address'] = $result->email_address;
            $this->session->set_userdata($sdata);
            redirect('welcome');
        } else {
            $sdata['exception'] = 'Your email and password invalid';
            $this->session->set_userdata($sdata);
            redirect('welcome/login');
        }
    }

    public function post_comments()
    {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id', TRUE);
        $data['comments'] = $this->input->post('comments', TRUE);
        $data['author_name'] = $this->session->userdata('user_name');
        $sdata = array();
        $this->welcome_model->save_comments($data);
        $sdata['message'] = 'Your comments successfully post and waiting for admin approval';
        $this->session->set_userdata($sdata);
        redirect('welcome/blog_details/' . $data['blog_id']);
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('user_name');
        $sdata = array();
        $sdata['msg'] = 'You are successfully logout!';
        $this->session->set_userdata($sdata);
        redirect('welcome/login');
    }




}

