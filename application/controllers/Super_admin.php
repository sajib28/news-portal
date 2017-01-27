<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $session_id = $this->session->userdata('id');
        if ($session_id == NULL) {
            redirect('dashboard', 'refresh');
        }
        //$this->load->model('super_admin_model','su_model');
    }

    public function index()
    {
        $data['admin_maincontent'] = $this->load->view('admin/dashboard_content', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    // Start Users

    public function add_user()
    {
        $data['admin_maincontent'] = $this->load->view('admin/user/add_user', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_user()
    {
        $data = array();

        $data['first_name'] = $this->input->post('first_name', TRUE);
        $data['last_name'] = $this->input->post('last_name', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['password'] = md5($this->input->post('password', TRUE));
        $this->super_admin_model->save_user_info($data);
        //$sdata = array();
        //$sdata['message'] = 'Save category information successfully!';
        //$this->session->set_userdata($sdata);
        $sdata = array();
        $sdata['message'] = 'Save user information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_user');
    }

    public function manage_users()
    {
        $data = array();
        $data['all_users'] = $this->super_admin_model->select_all_users();
        $data['admin_maincontent'] = $this->load->view('admin/user/users', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_user($user_id)
    {
        $data = array();
        $data['update_user_info'] = $this->super_admin_model->select_user_info_by_id($user_id);
        $data['admin_maincontent'] = $this->load->view('admin/user/edit_user', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_user()
    {
        $data = array();
        $user_id = $this->input->post('id', TRUE);
        $data['first_name'] = $this->input->post('first_name', TRUE);
        $data['last_name'] = $this->input->post('last_name', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['password'] = md5($this->input->post('password', TRUE));
        $data['created_date'] = $this->input->post('created_date', TRUE);
        $data['status'] = $this->input->post('status', TRUE);
        $this->super_admin_model->update_user_info_by_id($data, $user_id);
        redirect('super_admin/manage_users');
    }

    public function delete_user($user_id)
    {
        $this->super_admin_model->delete_user_info($user_id);
        redirect('super_admin/manage_users');
    }


    // End User


    // Start Category 

    public function add_category()
    {
        $data['admin_maincontent'] = $this->load->view('admin/category/add_category', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category()
    {
        $data = array();

        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['status'] = $this->input->post('status', TRUE);
        $this->super_admin_model->save_category_info($data);
        //$sdata = array();
        //$sdata['message'] = 'Save category information successfully!';
        //$this->session->set_userdata($sdata);
        $sdata = array();
        $sdata['message'] = 'Save Category information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category');
    }

    public function manage_category()
    {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();
        $data['admin_maincontent'] = $this->load->view('admin/category/category', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_category($categoty_id)
    {
        $this->super_admin_model->update_unpublished_category($categoty_id);
        redirect('super_admin/manage_category');
    }

    public function published_category($categoty_id)
    {
        $this->super_admin_model->update_published_category($categoty_id);
        redirect('super_admin/manage_category');
    }


    public function edit_category($categoty_id)
    {
        $data = array();
        $data['category_info'] = $this->super_admin_model->select_category_info_by_id($categoty_id);
        $data['admin_maincontent'] = $this->load->view('admin/category/edit_category', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category()
    {
        $data = array();
        $category_id = $this->input->post('id', TRUE);
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['status'] = $this->input->post('status', TRUE);
        $this->super_admin_model->update_category_info_by_id($data, $category_id);
        redirect('super_admin/manage_category');
    }

    public function delete_category($category_id)
    {
        $this->super_admin_model->delete_category_info($category_id);
        redirect('super_admin/manage_category');
    }

    // End Category Query

    // Strat News Query

    public function add_news()
    {
        $data = array();
        $data['all_publish_category'] = $this->super_admin_model->select_all_published_category();

        $data['admin_maincontent'] = $this->load->view('admin/news/add_news', $data, TRUE);
//        print_r($data);
        $this->load->view('admin/admin_master', $data);

    }

    public function manage_news()
    {
        $data = array();
//        print_r( $this->super_admin_model->select_all_news());die();
        $data['all_news'] = $this->super_admin_model->select_all_news();
        $data['admin_maincontent'] = $this->load->view('admin/news/news.php', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_news()
    {
        $data = array();
        $data['news_title'] = $this->input->post('news_title', TRUE);
        $data['news_description'] = $this->input->post('news_description', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['news_link'] = $this->input->post('news_link', TRUE);
        $data['news_image'] = $this->input->post('news_image', TRUE);


        $author_name = $this->session->userdata('first_name') . ' ' . $this->session->userdata('last_name');
        $data['author_name'] = $author_name;
        $data['news_status'] = $this->input->post('news_status', TRUE);
        //image upload

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024;
        $config['max_width'] = 75;
        $config['max_height'] = 45;
        $error = '';
        $fdata = array();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('news_image')) {
            $error = $this->upload->display_errors();

        } else {
            $fdata = $this->upload->data();
            $data['news_image'] = $config['upload_path'] . $fdata['file_name'];

        }

        //end image upload
        $this->super_admin_model->save_news_info($data);
        //$sdata = array();
        //$sdata['message'] = 'Save category information successfully!';
        //$this->session->set_userdata($sdata);
        $sdata = array();
        $sdata['message'] = 'Save News information successfully!';
        $this->session->set_userdata($sdata);

        redirect('super_admin/add_news');
    }

    public function edit_news($news_id)
    {
        $data = array();
        $data['all_publish_category'] = $this->super_admin_model->select_all_published_category();
//     print_r($data);die();
        $data['update_news_info'] = $this->super_admin_model->select_news_info_by_id($news_id);
//        print_r($data['update_news_info'] );exit;
        $data['admin_maincontent'] = $this->load->view('admin/news/edit_news', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_news()
    {
        $data = array();
        $news_id = $this->input->post('id', TRUE);
        $data['news_title'] = $this->input->post('news_title', TRUE);
        $data['news_description'] = $this->input->post('news_description', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['news_link'] = $this->input->post('news_link', TRUE);
        $data['news_image'] = $this->input->post('news_image', TRUE);
        $data['news_status'] = $this->input->post('news_status', TRUE);

        //image upload

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024;
        $config['max_width'] = 75;
        $config['max_height'] = 45;
        $error = '';
        $fdata = array();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('news_image')) {
            $error = $this->upload->display_errors();
//            echo $error; die();
        } else {
            $fdata = $this->upload->data();

            $data['news_image'] = $config['upload_path'] . $fdata['file_name'];

        }
        $this->super_admin_model->update_news_info_by_id($data, $news_id);
        redirect('super_admin/manage_news');

    }


    public function unpublished_news($news_id)
    {
        $this->super_admin_model->update_unpublished_news($news_id);
        redirect('super_admin/manage_news');
    }

    public function published_news($news_id)
    {
        $this->super_admin_model->update_published_news($news_id);
        redirect('super_admin/manage_news');
    }

    public function delete_news($news_id)
    {
        $this->super_admin_model->delete_news_info($news_id);
        redirect('super_admin/manage_news');
    }

// start country controller code


    public function add_country()
    {
        $data['admin_maincontent'] = $this->load->view('admin/country/add_country', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_country()
    {
        $data = array();
        $data['all_country'] = $this->super_admin_model->select_all_country();
        $data['admin_maincontent'] = $this->load->view('admin/country/country', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_country()
    {
        $data = array();

        $data['country_name'] = $this->input->post('country_name', TRUE);
        $data['country_code'] = $this->input->post('country_code', TRUE);
        $data['status'] = $this->input->post('status', TRUE);
        $this->super_admin_model->save_country_info($data);
        //$sdata = array();
        //$sdata['message'] = 'Save category information successfully!';
        //$this->session->set_userdata($sdata);
        $sdata = array();
        $sdata['message'] = 'Save Country information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_country');
    }

    public function edit_country($country_id)
    {
        $data = array();
        $data['country_info'] = $this->super_admin_model->select_country_info_by_id($country_id);
        $data['admin_maincontent'] = $this->load->view('admin/country/edit_country', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_country()
    {
        $data = array();
        $country_id = $this->input->post('id', TRUE);
        $data['country_name'] = $this->input->post('country_name', TRUE);
        $data['country_code'] = $this->input->post('country_code', TRUE);
        $data['status'] = $this->input->post('status', TRUE);
        $this->super_admin_model->update_country_info_by_id($data, $country_id);
        redirect('super_admin/manage_country');
    }

    public function delete_country($country_id)
    {
        $this->super_admin_model->delete_country_info($country_id);
        redirect('super_admin/manage_country');
    }
    // Add project category

    public function add_project_category()
    {
        $data['admin_maincontent'] = $this->load->view('admin/add_project_category', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_project_category()
    {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        /// create slug

//        $config = array(
//            'field' => 'category_slug',
//            'title' => 'project_name',
//            'table' => 'project_category',
//            'id' => 'id',
//        );
//        $this->load->library('slug', $config);
//        $data = array(
//            'title' => 'project_name',
//        );

        $data['category_slug'] = $this->input->post('category_slug', TRUE);
        $data['category_slug'] = preg_replace('/[^A-Za-z0-9-]+/', '-', $data['category_slug']);
        $data['category_slug'] = strtolower($data['category_slug']);
        $data['status'] = $this->input->post('status', TRUE);
        $this->super_admin_model->save_project_category_info($data);
        //$sdata = array();
        //$sdata['message'] = 'Save category information successfully!';
        //$this->session->set_userdata($sdata);
        $sdata = array();
        $sdata['message'] = 'Save project category information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_project_category');
    }

    public function manage_project_category()
    {
        $data = array();
        $data['all_project_category'] = $this->super_admin_model->select_all_project_category();
        $data['admin_maincontent'] = $this->load->view('admin/project_category', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }


    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('first_name');
        $this->session->unset_userdata('last_name');
        $sdata = array();
        $sdata['msg'] = 'You are successfully logout!';
        $this->session->set_userdata($sdata);
        redirect('dashboard');
    }

    // Add Project 

    public function add_project()
    {
        $data = array();
        $data['all_publish_project_category'] = $this->welcome_model->select_all_published_project_category();
        $data['admin_maincontent'] = $this->load->view('admin/add_project', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_project()
    {
        $data = array();
        $data['project_name'] = $this->input->post('project_name', TRUE);
        $data['project_url'] = $this->input->post('project_url', TRUE);
        $data['project_category_id'] = $this->input->post('project_category_id', TRUE);

        $data['status'] = $this->input->post('status', TRUE);
        //image upload

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $error = '';
        $fdata = array();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('project_image')) {
            $error = $this->upload->display_errors();

        } else {
            $fdata = $this->upload->data();
            $data['project_image'] = $config['upload_path'] . $fdata['file_name'];

        }

        //end image upload
        $this->super_admin_model->save_project_info($data);
        //$sdata = array();
        //$sdata['message'] = 'Save category information successfully!';
        //$this->session->set_userdata($sdata);
        $sdata = array();
        $sdata['message'] = 'Save projectss information successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_project');
    }

}


