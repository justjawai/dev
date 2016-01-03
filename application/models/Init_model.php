<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Init_model extends CI_Model {

    public function getCategories() {
        $this->db->order_by('name');
        $categories = $this->db->get('categories', 9)->result();
        return $categories;
    }
    
    
    public function getPageMeta($param){
        $key = $param;
        $meta = $this->db->get_where('pages', array('name' => $key))->row();
        return $meta;
    }
    
    
    public function getCategoryList($param) {
        $catname = trim($param);
        $catId = $this->getCategoryId($catname);
        $query  ="SELECT c.*, cat.name as categoryName FROM customers c LEFT JOIN categories cat ON c.categories_id = cat.id WHERE c.categories_id = ".  addslashes($catId)." ";
        
        $result = $this->db->query($query)->result();
        $customer = array();
        foreach ($result as $row){
            $customer[] = $row;
        }
        echo json_encode($customer);
    }
    
    function getNews(){
        $this->db->select('id, seo_url, title, image');
        return $this->db->get('news',5)->result();
    }
    
    public function getpopularSaerch() {
        $this->db->order_by('visitors', 'DESC');
        $customers = $this->db->get('customers', 8)->result();
        return $customers;
    }

    public function getSingleNews($slug){
        return $this->db->get_where('news', array('seo_url'=>$slug), 1)->result();
    }

    public function search($cate, $term){
        $where = null;
        $condition = array();

        if($cate){
            $where .= "  and ";
        }
        if ($cate){
            $condition[] = "cg.name = '$cate' ";
        }
        if ($term){
            $condition[] = "c.name LIKE '%$term%' OR c.description LIKE '%$term%' OR c.profession LIKE '%$term%' ";
        }

        if (count($condition)) {
            $where = " WHERE " . implode(" AND ", $condition);
        }


        $sql = "SELECT c.*, c.name as customer_name,c.photo as customer_photo, cg.* FROM customers c LEFT JOIN categories cg ON c.categories_id = cg.id ".$where;
        return  $this->db->query($sql)->result_array();

    }

    public function getCategoriesList($key){
        $sql = "SELECT c.* FROM customers c WHERE c.categories_id = (SELECT cg.id FROM categories cg WHERE cg.name = '$key')";
        return $this->db->query($sql)->result_array();

    }

    public function getDetail($key){

        $sql = "SELECT c.*, c.id as customer_id FROM customers c LEFT JOIN rating r ON r.customer_id = c.id WHERE c.seo_url = '$key' LIMIT 1 ";
        $query = $this->db->query($sql)->row();
        return $query;

    }

    public function getPage($page){
        $this->db->where('name',$page);
        return $this->db->get('pages',1)->row();
    }

    public function getAllCategories(){
        $all_cat = null;
        $sql = "SELECT * FROM categories c ORDER BY c.name";
        $result = $this->db->query($sql)->result();
        foreach($result as $r){
            $this->db->where('categories_id', $r->id);
            $count = count($this->db->get('customers')->result());
            $all_cat[] = array('name'=>$r->name, 'count'=> $count,'photo'=>$r->photo);
        }
        return $all_cat;
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function getCategoryId($param){
        $param = str_replace('%20',' ',$param);
        $result =  $this->db->get_where('categories', array('name' => $param),1)->result();
        return $result[0]->id;
    }
}
