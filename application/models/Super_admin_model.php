<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Super_admin_model
 *
 * @author sajib
 */
class Super_admin_model extends CI_Model {
   // strat user
    public function save_user_info($data) {
        $this->db->insert('admin', $data);
    }
   
    public function select_all_users() {
        $this->db->select('*');
        $this->db->from('admin');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }


   
    public function select_user_info_by_id($user_id) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function update_user_info_by_id($data,$user_id){
        $this->db->where('id',$user_id);
        $this->db->update('admin',$data);
    }

     public function delete_user_info($user_id) {
        $this->db->where('id', $user_id);
        $this->db->delete('admin');
    }


    // End User


    // Start Category
       public function save_category_info($data) {
        $this->db->insert('category', $data);
    }

    public function select_all_category() {
        $this->db->select('*');
        $this->db->from('category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }


    public function update_unpublished_category($categoty_id) {
        $this->db->set('status', 0);
        $this->db->where('id', $categoty_id);
        $this->db->update('category');
    }

    public function update_published_category($categoty_id) {
        $this->db->set('status', 1);
        $this->db->where('id', $categoty_id);
        $this->db->update('category');
    }

public function select_category_info_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id',$category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function update_category_info_by_id($data,$category_id){
        $this->db->where('id',$category_id);
        $this->db->update('category',$data);
    }
     public function delete_category_info($category_id) {
        $this->db->where('id', $category_id);
        $this->db->delete('category');
    }

    // End Category query
     
     //blog query
      public function save_news_info($data) {
        $this->db->insert('news', $data);
    }

    public function select_all_news() {
        $this->db->select('news.*, category.id as category_id, category.category_name, country.id as country_id, country.country_name');
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id', 'left');
        $this->db->join('country', 'country.id = news.country_id', 'left');
        $query_result = $this->db->get();
        $result = $query_result->result();
     /* print_r($result);die();*/
        return $result;
    }

     public function select_all_published_category(){
         $this->db->select('*');
        $this->db->from('category');
        $this->db->where('status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
     }

      public function select_news_info_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id',$news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_news_info_by_id($data, $news_id){
        $this->db->where('id',$news_id);
        $this->db->update('news',$data);

    }
    public function update_unpublished_news($news_id) {
        $this->db->set('news_status', 0);
        $this->db->where('id', $news_id);
        $this->db->update('news');
    }

    public function update_published_news($news_id) {
        $this->db->set('news_status', 1);
        $this->db->where('id', $news_id);
        $this->db->update('news');
    }

    public function delete_news_info($news_id){
 $this->db->where('id', $news_id);
        $this->db->delete('news');
}
// End news Query


// Start country query


    public function select_all_country() {
        $this->db->select('*');
        $this->db->from('country');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_country_info($data) {
        $this->db->insert('country', $data);
    }


    public function select_country_info_by_id($country_id) {
        $this->db->select('*');
        $this->db->from('country');
        $this->db->where('id',$country_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_country_info_by_id($data,$country_id){
        $this->db->where('id',$country_id);
        $this->db->update('country',$data);
    }
    public function delete_country_info($country_id) {
        $this->db->where('id', $country_id);
        $this->db->delete('country');
    }

    /*// Save project caregory info
     public function save_project_category_info($data) {
       $this->db->insert('project_category', $data);
   }

   public function select_all_project_category() {
       $this->db->select('*');
       $this->db->from('project_category');
       $query_result = $this->db->get();
       $result = $query_result->result();
       return $result;
   }
   // Save project

    public function save_project_info($data) {
       $this->db->insert('project', $data);
   }*/
  
}
