<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    
    public function __construct() {
     parent::__construct();
     $this->load->model('Init_model');
 }

    public function index()
	{
                //get serch terms
                $cate = $_GET['c'];
                $term = $_GET['s'];
                if(empty($term)){
                    redirect('category/'.$cate);
                }

                
                $data['categories'] = $this->Init_model->getCategories();

                if(!empty($cate) OR !empty($term)){
                $data['search_result'] = $this->Init_model->search($cate, $term);
                }
                else{
                    $data['search_result'] = null;
                }
                $data['metas'] = array('title'=>'justjawai '.$cate.' '.$term, 'description'=>$cate.'  '.$term,'keyword'=>$term,'author'=>'just jawai','publisher'=>'just jawai');
                $this->load->view('header');
                $this->load->view('meta', $data);
                $this->load->view('searchbar', $data);
                $this->load->view('search', $data);
        }
}
