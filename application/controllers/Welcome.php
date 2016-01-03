<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() {
     parent::__construct();
     $this->load->model('Init_model');
 }

 
// phone directory
// http://www.lemonhunt.com/yellow-pages/sumerpur/
    public function index(){
        //get meta tag of the index page
        $data['metas'] = $this->Init_model->getPageMeta('index');
        //get all category
        $data['categories'] = $this->Init_model->getCategories();
        //get popular search
        $data['popular_search'] = $this->Init_model->getpopularSaerch();
        //get news top 5
        $data['newstop5'] = $this->Init_model->getNews();
        $this->load->view('header');
        $this->load->view('meta', $data);
        $this->load->view('searchbar', $data);
        $this->load->view('index',$data);
    }
        
    
        
        
    public function contactUs(){

                //number captcha
                $this->generateCaptcha();
                $data['metas'] = $this->Init_model->getPageMeta('index');
                $data['categories'] = $this->Init_model->getCategories();
                $this->load->view('header');
                $this->load->view('meta', $data);
                $this->load->view('searchbar', $data);
                $this->load->view('contactus',$data);
    }
    
    public function newsSubmission(){
                //number captcha
                $this->generateCaptcha();
                $data['metas'] = $this->Init_model->getPageMeta('index');
                $data['categories'] = $this->Init_model->getCategories();
                $this->load->view('header');
                $this->load->view('meta', $data);
                $this->load->view('searchbar', $data);
                $this->load->view('newsSubmission',$data);
    }
    
    public function advertisment(){
                $data['metas'] = $this->Init_model->getPageMeta('index');
                $data['categories'] = $this->Init_model->getCategories();
                $this->load->view('header');
                $this->load->view('meta', $data);
                $this->load->view('searchbar', $data);
                $this->load->view('advertisment',$data);
    }
    
    public function details(){
                $data['categories'] = $this->Init_model->getCategories();
                $key = $this->uri->segment(2);
                $data['details'] = $this->Init_model->getDetail($key);
                $data['metas'] = array('title'=>'justjawai '.$data['details']->seo_title, 'description'=>$data['details']->seo_description,'keyword'=>$data['details']->seo_keyword,'author'=>'just jawai','publisher'=>'just jawai');
                 if(count($data['details'])){
                     $this->load->view('header');
                     $this->load->view('meta', $data);
                     $this->load->view('searchbar', $data);
                     $this->load->view('detail',$data);
                 }
                else{
                    show_404();
                }

    }
    
    public function allCategory(){
                $data['categories'] = $this->Init_model->getCategories();
                $this->load->view('header');
                $data['metas'] = array('title'=>'justjawai search all information to sumerpur and related place ', 'description'=>'My sumerpur','keyword'=>'just jawai, sumerpur, pali, rajasthan , mandi sumerpur, jawai bandh','author'=>'just jawai','publisher'=>'just jawai');
                $data['all_cat'] = $this->Init_model->getAllCategories();
                $this->load->view('meta', $data);
                $this->load->view('searchbar', $data);
                $this->load->view('allcategory', $data);
    }
    
    public function newsSingle() {
      $data['categories'] = $this->Init_model->getCategories();
        $slug = $this->uri->segment(2);
      $data['single_news'] = $this->Init_model->getSingleNews($slug);
        if(!$data['single_news']){
            redirect('page404');
        }
        else{
            $this->load->view('header');
            $this->load->view('searchbar', $data);
            $this->load->view('news_single');
        }
      
    }

    public function page(){
        $page = $this->uri->segment(2);
        $data['categories'] = $this->Init_model->getCategories();
        $data['page'] = $data['metas']= $this->Init_model->getPage($page);
        $this->load->view('header');
        $this->load->view('meta', $data);
        $this->load->view('searchbar', $data);
        $this->load->view('page', $data);
    }




    public function page404(){

        $data['categories'] = $this->Init_model->getCategories();
        $this->load->view('header');
        $this->load->view('searchbar', $data);
        $this->load->view('page_404');

    }

    public function jsonHeader($data){
        header('Content-Type: application/json');
        return json_encode($data);
    }

    public function generateCaptcha(){
        $this->session->set_userdata('captcha_a', rand(1,9));
        $this->session->set_userdata('captcha_b', rand(1,9));
    }

    public function discus(){
        $data['categories'] = $this->Init_model->getCategories();
        $this->load->view('header');
        $this->load->view('searchbar', $data);
        $this->load->view('discus');
    }
    
    
}
