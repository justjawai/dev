<?php  defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'/libraries/UploadHandler.php');

class Main_Controller extends  CI_Controller{

    public function index(){

        $this->load->view('Index');
    }

    public function category(){
        $this->load->view('Category');
    }

    public function categoryAdd(){

        $id = $this->uri->segment(3);
        $data = array();
        if($id){
            $this->load->model('Main_model');
            $data['category'] = $this->Main_model->getCategory($id);
            if(! $data['category']){
                redirect('custom_404');
            }
        }
        $this->load->view('Category_add', $data);

    }

    public function news(){
        $this->load->view('News');
    }

    public function newsAdd(){
        $this->load->model('Main_model');
        $id = $this->uri->segment(2);
        $data = array();
        $data['news_tag'] = $this->Main_model->getNewsTag();
        if($id){
            $data['news'] = $this->Main_model->getNews($id);
            if(! $data['news']){
                redirect('custom_404');
            }
        }
        $this->load->view('News_add', $data);

    }

    public function news_tag(){
        $this->load->view('News_tag');
    }

    public function news_tagAdd(){
        $this->load->model('Main_model');
        $id = $this->uri->segment(3);
        $data = array();
        if($id){
            $data['tag'] = $this->Main_model->getNewsTagSingle($id);
            if(! $data['tag']){
                redirect('custom_404');
            }
        }
        $this->load->view('News_tag_add', $data);
    }


    
    public function customer(){
        $this->load->view('Customer');
    }
    
    public function customerAdd(){
        $this->load->model('Main_model');
        $id = $this->uri->segment(2);
        $data = array();
        $data['category'] = $this->Main_model->getCategories();
        if($id){
            $data['customer'] = $this->Main_model->getCustomer($id);
            if(! $data['customer']){
                redirect('custom_404');
            }
        }
        $this->load->view('Customer_add', $data);

    }


    public function pageAdd(){
        $slug = $this->uri->segment(2);
        $this->load->model('Main_model');
        $data = array();
       // $data['page'] = $this->Main_model->getPage();
        $this->load->view('Page', $data);

    }




    public function Upload(){
        $path = FCPATH.'uploads/';
        $path = str_replace('admin','admin/..', $path);
        $options = array('upload_dir'=>$path);
        $upload_handler = new UploadHandler($options);
    }
    
    
    

    




    public function set404(){
        $this->load->view('errors/html/custom_404');
    }

}