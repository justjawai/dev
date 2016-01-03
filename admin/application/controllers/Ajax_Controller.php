<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_Controller extends CI_Controller{

    public function loadCategory(){

        $this->load->model('Ajax_model');

        $categories = $this->Ajax_model->loadCategory();

        echo $this->jsonHeader($categories);

    }


    public function loadNewsTag(){

        $this->load->model('Ajax_model');

        $tags = $this->Ajax_model->loadNewsTag();

        echo $this->jsonHeader($tags);

    }

    public function loadNews(){

        $this->load->model('Ajax_model');

        $news = $this->Ajax_model->loadNews();

        echo $this->jsonHeader($news);

    }

    public function loadCustomers(){

        $this->load->model('Ajax_model');

        $news = $this->Ajax_model->loadCustomers();

        echo $this->jsonHeader($news);

    }

    public function categoryAddProcess(){
        $id = ($this->input->post('id', TRUE)) ? $this->input->post('id', TRUE) : null;
        if($id) {
            $this->form_validation->set_rules('name', 'Category name', 'trim|required');
        }
        else{
            $this->form_validation->set_rules('name', 'Category name', 'trim|required|is_unique[categories.name]');
        }

        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $name = $this->input->post('name', TRUE);
            $data = array('name'=>ucfirst($name),
                'photo'=>$this->input->post('photo', TRUE));
            $this->load->model('Ajax_model');
            $response = $this->Ajax_model->categoryAddProcess($data, $id);
        }
        echo $this->jsonHeader($response);
        exit;
    }


    public function newsTagAddProcess(){
        $id = ($this->input->post('id', TRUE)) ? $this->input->post('id', TRUE) : null;
        if($id) {
            $this->form_validation->set_rules('name', 'Category name', 'trim|required');
        }
        else{
            $this->form_validation->set_rules('name', 'Category name', 'trim|required|is_unique[categories.name]');
        }

        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $name = $this->input->post('name', TRUE);
            $data = array('name'=>ucfirst($name));
            $this->load->model('Ajax_model');
            $response = $this->Ajax_model->newsTagAddProcess($data, $id);
        }
        echo $this->jsonHeader($response);
        exit;
    }

    public function pageAddProcess(){

        $id = ($this->input->post('id', TRUE)) ? $this->input->post('id', TRUE) : null;
        if($id) {
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('content', 'Content', 'trim|required');
            $this->form_validation->set_rules('keyword', 'Keyword', 'trim|required');
            $this->form_validation->set_rules('description', 'SEO Description', 'trim|required');
        }
        else{
            $this->form_validation->set_rules('page-name', 'Name', 'trim|required|is_unique[pages.name]');
            $this->form_validation->set_rules('content', 'Content', 'trim|required');
            $this->form_validation->set_rules('keyword', 'Keyword', 'trim|required');
            $this->form_validation->set_rules('description', 'SEO Description', 'trim|required');
        }

        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $data = array('name' => $this->input->post('page-name', TRUE),
                'title' => $this->input->post('title', TRUE),
                'content' => htmlentities($this->input->post('content', TRUE)),
                'keyword' => $this->input->post('keyword', TRUE),
                'author' => $this->input->post('author', TRUE),
                'description' => $this->input->post('description', TRUE),
                'keyword' => $this->input->post('keyword', TRUE),
                'publisher' => $this->input->post('author', TRUE),
                'created_at'=>date('Y-m-d H:i:s'),
                );

            $this->load->model('Ajax_model');
            $response = $this->Ajax_model->pageAddProcess($data, $id);
        }
        echo $this->jsonHeader($response);
        exit;
    }



    public function deleteCategory(){
        $id = $this->input->post('id');
        $this->load->model('Ajax_model');
        $response = $this->Ajax_model->deleteCategory($id);
        echo $this->jsonHeader($response);
    }



    public function newsAddProcess(){
        $id = ($this->input->post('id', TRUE)) ? $this->input->post('id', TRUE) : null;
        if($id) {
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('content', 'Content', 'trim|required');
            $this->form_validation->set_rules('file_path', 'Photo', 'trim|required');
            $this->form_validation->set_rules('seo-url', 'SEO Url', 'trim|required');
            $this->form_validation->set_rules('news-tag', 'News category', 'trim|required');

        }
        else{
            $this->form_validation->set_rules('title', 'Title', 'trim|required|is_unique[news.title]');
            $this->form_validation->set_rules('content', 'Content', 'trim|required');
            $this->form_validation->set_rules('file_path', 'Photo', 'trim|required');
            $this->form_validation->set_rules('seo-url', 'SEO Url', 'trim|required|is_unique[news.seo_url]');
            $this->form_validation->set_rules('news-tag', 'News category', 'trim|required');
        }

        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $data = array('title' => $this->input->post('title', TRUE),
            'sub_title' => $this->input->post('sub-title', TRUE),
            'content' => htmlentities($this->input->post('content', TRUE)),
            'author' => $this->input->post('author', TRUE),
            'source' => $this->input->post('source', TRUE),
            'posted_by' => $this->input->post('posted_by', TRUE),
            'image' => $this->input->post('file_path', TRUE),
            'news_type' => $this->input->post('news-tag', TRUE),
            'status' => $this->input->post('status', TRUE),
            'seo_title' => $this->input->post('seo-title', TRUE),
            'seo_description' => $this->input->post('seo-description', TRUE),
            'seo_keyword' => $this->input->post('seo-keywords', TRUE),
            'seo_url' => $this->input->post('seo-url', TRUE),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'));

            $this->load->model('Ajax_model');
            $response = $this->Ajax_model->newsAddProcess($data, $id);
        }
        echo $this->jsonHeader($response);
        exit;

    }
    
    public function customerAddProcess(){
        
        
        $id = ($this->input->post('id', TRUE)) ? $this->input->post('id', TRUE) : null;
        if($id) {
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('profession', 'Profession', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('category', 'Category', 'trim|required');
            $this->form_validation->set_rules('seo-url', 'SEO Url', 'trim|required');
        }
        else{
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('profession', 'Profession', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('category', 'Category', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[customers.email]');
            $this->form_validation->set_rules('seo-url', 'SEO Url', 'trim|required|is_unique[customers.seo_url]');
        }

        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $data = array('name' => $this->input->post('name', TRUE),
            'profession' => $this->input->post('profession', TRUE),
            'description' => htmlentities($this->input->post('description', TRUE)),
            'address' => $this->input->post('address', TRUE),
            'telephone_business' => $this->input->post('telephone_business', TRUE),
            'mobile' => $this->input->post('mobile', TRUE),
            'email' => $this->input->post('email', TRUE),
            'website' => $this->input->post('website', TRUE),
            'photo' => $this->input->post('photo', TRUE),
            'categories_id'=>$this->input->post('category', TRUE),
            'status'=> ($this->input->post('status', TRUE)) ? 1 : 0,
            'seo_title' => $this->input->post('seo-title', TRUE),
            'seo_description' => $this->input->post('seo-description', TRUE),
            'seo_keyword' => $this->input->post('seo-keywords', TRUE),
            'seo_url' => $this->input->post('seo-url', TRUE),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'));

            $this->load->model('Ajax_model');
            $response = $this->Ajax_model->customerAddProcess($data, $id);
        }
        echo $this->jsonHeader($response);
        exit;
        
    }

    public function customerDelete(){
        $id = $this->input->post('id');
        if($id){
            $this->load->model('Ajax_model');
            $response = $this->Ajax_model->customerDelete($id);
            echo $this->jsonHeader($response);
            exit;
        }
        redirect('custom_404');
    }











    /*utility functions*/

    public function jsonHeader($data){
        header('Content-Type: application/json');
        return json_encode($data);
    }
}