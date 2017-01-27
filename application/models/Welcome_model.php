<?php

class Welcome_model extends CI_Model {

    public function get_categories() {
        $categories = $this->db->where('status',1)->get('category')->result();
        $result = [];
        foreach($categories as $category){
            $this->db->where('category_id', $category->id);
            $this->db->where('news_status',1);
            $query = $this->db->get('news');
            $result[$category->category_name] = $query->result();
        }

        return $result;
    }
}
/*
$query = $this->db->get('category');
$return = array();

foreach ($query->result() as $category) {
$return[$category->id] = $category;
$return[$category->id]->subs = $this->get_sub_categories($category->id); // Get the categories sub categories
}

return $return;
}

public function get_sub_categories($category_id) {
    $this->db->where('category_id', $category_id);
    $this->db->where('news_status',1);
    $query = $this->db->get('news');
    return $query->result();*/

//    public function select_all_published_news() {
//        $this->db->select('*');
//        $this->db->from('news');
//        
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//        return $result;
//    }
//
//    public function select_news_by_category_id($category_id) {
//        $this->db->select('*');
//        $this->db->from('news');
//        $this->db->where('category_id', $category_id);
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//        return $result;
//    }
//
//    public function select_blog_info_by_id($blog_id) {
//        $this->db->select('*');
//        $this->db->from('blog');
//        $this->db->where('id', $blog_id);
//        $query_result = $this->db->get();
//        $result = $query_result->row();
//        return $result;
//    }
//
//    public function select_blog_by_category_id($category_id) {
//        $this->db->select('*');
//        $this->db->from('blog');
//        $this->db->where('category_id', $category_id);
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//        return $result;
//    }
//
//    public function save_user_info($data) {
//        $this->db->insert('user', $data);
//    }
//
//    public function user_login_check_info($email_address, $password) {
//        $this->db->select('*');
//        $this->db->from('user');
//        $this->db->where('email_address', $email_address);
//        $this->db->where('password', md5($password));
//        $query_result = $this->db->get();
//        $result = $query_result->row();
//        return $result;
//    }
//
//    public function save_comments($data) {
//        $this->db->insert('comments', $data);
//    }
//
//    public function select_comments_by_blog_id($blog_id) {
//        $this->db->select('*');
//        $this->db->from('comments');
//        $this->db->where('blog_id', $blog_id);
//        $this->db->where('status', 1);
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//        return $result;
//    }
//    public function select_latest_posts(){
//        $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 0,3"; 
//       $query_result = $this->db->query($sql);
//       $result = $query_result->result();
//       return $result;
//        
//    }
//    public function update_hit_counter($total_hit,$blog_id){
//        $this->db->set('hit_count',$total_hit);
//        $this->db->where('id',$blog_id);
//        $this->db->update('blog');
//         
//    }
//    public function select_popular_posts(){
//        $sql = "SELECT * FROM blog ORDER BY hit_count DESC LIMIT 0,3"; 
//       $query_result = $this->db->query($sql);
//       $result = $query_result->result();
//       return $result;
//    }
// // select all publish project category
//    
//    public function select_all_published_project_category() {
//        $this->db->select('*');
//        $this->db->from('project_category');
//        $this->db->where('status', 1);
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//        return $result;
//    }

