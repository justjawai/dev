<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'/libraries/UploadHandler.php');

class Ajax extends CI_Controller {
    
    public function __construct() {
     parent::__construct();
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }
        $this->load->model('Ajax_model');
 }

    public function saveContact(){
            $this->form_validation->set_rules('firstname', 'Name', 'trim|required');
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('comment', 'Message', 'trim|required|max_length[400]');
            $this->form_validation->set_rules('captcha_val', 'Captcha', 'trim|required|callback_captcha_check');

        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $data = array('name' => $this->input->post('firstname', TRUE).' '.$this->input->post('lastname', TRUE) ,
                'email' => $this->input->post('email', TRUE),
                'subject' => $this->input->post('subject', TRUE),
                'message'=>$this->input->post('comment', TRUE),
                'ip'=>$this->input->ip_address(),
                'created_at'=>date('Y-m-d H:i:s'));
            if($this->Ajax_model->saveContact($data)){
                $greeting = "Thanks for contact us we will contact you shortly";
                $this->email_send($this->input->post('email', TRUE), $this->input->post('firstname', TRUE).' '.$this->input->post('lastname', TRUE), $greeting);
                $response = array('code'=>1,'msg'=>'success', 'value'=> '<div>Thanks ! your contact has been save. Will resonse back soon</div>');
            }
            else{
                $response = array('code'=>2,'msg'=>'fail', 'value'=> 'Opps');
            }
        }
        echo $this->jsonHeader($response);
        exit;
    }

    public function saveNews(){
        $this->form_validation->set_rules('firstname', 'Name', 'trim|required');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('comment', 'Message', 'trim|required|max_length[400]');
        $this->form_validation->set_rules('captcha_val', 'Captcha', 'trim|required|callback_captcha_check');

        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $data = array('name' => $this->input->post('firstname', TRUE).' '.$this->input->post('lastname', TRUE) ,
                'email' => $this->input->post('email', TRUE),
                'subject' => $this->input->post('subject', TRUE),
                'content'=>htmlentities($this->input->post('comment', TRUE)),
                'image'=>$this->input->post('file_path', TRUE),
                'ip'=>$this->input->ip_address(),
                'created_at'=>date('Y-m-d H:i:s'));
            if($this->Ajax_model->saveNews($data)){
                $greeting = "Thanks for Submit a great news we will show your news on our portal after review. Thanks!";
                $this->email_send($this->input->post('email', TRUE), $this->input->post('firstname', TRUE).' '.$this->input->post('lastname', TRUE), $greeting);
                $response = array('code'=>1,'msg'=>'success', 'value'=> '<div>Thanks ! your News has been submitted. Will resonse back soon</div>');
            }
            else{
                $response = array('code'=>2,'msg'=>'fail', 'value'=> 'Opps');
            }
        }
        echo $this->jsonHeader($response);
        exit;

    }


    public function advertisementSave(){

        $this->form_validation->set_rules('firstname', 'Name', 'trim|required');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('comment', 'Message', 'trim|required|max_length[400]');
        $this->form_validation->set_rules('captcha_val', 'Captcha', 'trim|required|callback_captcha_check');
        $this->form_validation->set_rules('size', 'Size', 'trim|required');


        $response = array();
        if ($this->form_validation->run() == FALSE){
            $response = array('code'=>0,'msg'=>'validation error', 'value'=> validation_errors());
        }
        else{
            $data = array('name' => $this->input->post('firstname', TRUE).' '.$this->input->post('lastname', TRUE) ,
                'email' => $this->input->post('email', TRUE),
                'type' => $this->input->post('subject', TRUE),
                'content'=>htmlentities($this->input->post('comment', TRUE)),
                'image'=>$this->input->post('file_path', TRUE),
                'ip'=>$this->input->ip_address(),
                'size'=>$this->input->post('size', TRUE),
                'created_at'=>date('Y-m-d H:i:s'));
            if($this->Ajax_model->advertisementSave($data)){
                $greeting = "Thanks for Submit advertisement for your business";
                $this->email_send($this->input->post('email', TRUE), $this->input->post('firstname', TRUE).' '.$this->input->post('lastname', TRUE), $greeting);
                $response = array('code'=>1,'msg'=>'success', 'value'=> '<div>Thanks ! your Advertisement has been submitted. Will resonse back soon</div>');
            }
            else{
                $response = array('code'=>2,'msg'=>'fail', 'value'=> 'Opps');
            }
        }
        echo $this->jsonHeader($response);
        exit;

    }


    public function captcha_check($str)
    {
        $val = $this->session->userdata('captcha_a') + $this->session->userdata('captcha_b');
        if ($val == $str)
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('captcha_check', 'Captcha value not matched');
            return FALSE;
        }
    }

    /*utility functions*/

    public function jsonHeader($data){
        header('Content-Type: application/json');
        return json_encode($data);
    }

    public function generateCaptcha(){
       $this->session->set_userdata('captcha_a', rand(1,9));
       $this->session->set_userdata('captcha_b', rand(1,9));

        echo'<button class="btn disabled">'.$this->session->userdata('captcha_a').'</button> + <button class="btn disabled">'. $this->session->userdata('captcha_b').'</button> = <input type="text" placeholder="Total value" name="captcha_val" required>';


    }


    public function upload(){
        $options = array('upload_dir'=>FCPATH.'uploads/');
        $upload_handler = new UploadHandler($options);
    }

    public function email_send($email = null, $name= null, $greeting = null){
        $message = '<div style="width: 700px; margin: 0 auto">
                    <div style="background: #4DB6AC;padding: 5px 15px;"><img src="http://www.namdevtimes.com/wp-content/uploads/2015/10/newLogo_nt2.png"> </div>
                    <div style="background: #EEEEEE;padding: 50px 15px;">Hello '.$name.' ! Welcome to Just Jawai. <br>'.$greeting.' </div>
                    <div style="background: #4DB6AC;padding: 5px 15px;">
                    <table style="width: 100%"><tr><td><a style="color: #ffffff" href="#">About</a> </td><td><a  style="color: #ffffff" href="#">Contact</a> </td><td><a style="color: #ffffff" href="#">Help</a> </td><td><a style="color: #ffffff" href="#">Download</a> </td></tr></table>
                    </div>
                    </div>';


        //echo $message;

        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';


        $this->email->initialize($config);

        $this->email->from('support@justjawai.com', 'Just Jawai ');
//        support@123
        $this->email->to('pariharvikram1989@gmail.com');
        $this->email->cc('pariharvikram1989@gmail.com');
        //$this->email->bcc('them@their-example.com');

        $this->email->subject('No Reply');
        $this->email->message($message);

        $this->email->send();

        return true;

    }


}
