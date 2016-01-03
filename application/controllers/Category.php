<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
     parent::__construct();
     $this->load->model('Init_model');
 }

    public function index()
	{
            $key = $this->uri->segment(2);
            if($key) {
                $data['metas'] = $this->Init_model->getPageMeta('category');
                $data['categories'] = $this->Init_model->getCategories();
                $data['categories_list'] = $this->Init_model->getCategoriesList($key);
                $this->load->view('header');
                $this->load->view('meta');
                $this->load->view('searchbar', $data);
                $this->load->view('category', $data);
            }
        else{
            redirect('allcategory');
        }
    }
        
        public function getCategoryList(){
            $category =  $this->uri->segment(3);
            $category = $this->Init_model->getCategoryList($category);

        }
}
