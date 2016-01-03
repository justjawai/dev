<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends  CI_Model{

    public function getCategory($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('categories')->result();
    }
    
    public function getCategories()
    {
        return $this->db->get('categories')->result();
    }

    public function getNewsTag(){
        return $this->db->get('newsCategory')->result();
    }

    public function getNewsTagSingle($id){
        $this->db->where('id', $id);
        return $this->db->get('newsCategory')->result();
    }

    public function getNews($id){
        $this->db->where('id', $id);
        return $this->db->get('news')->result();
    }
    public function getCustomer($id){
        $this->db->where('id', $id);
        return $this->db->get('customers')->result();
    }




}