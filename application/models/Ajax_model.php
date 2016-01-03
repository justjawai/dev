<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_model extends CI_Model {

    public function saveContact($data){
        $this->db->insert('contact_mail', $data);
        if($this->db->affected_rows())
            return TRUE;
        else
            return FALSE;
    }



    public function saveNews($data){
        $this->db->insert('news_submit', $data);
        if($this->db->affected_rows())
            return TRUE;
        else
            return FALSE;
    }

    public function advertisementSave($data){
        $this->db->insert('advertise', $data);
        if($this->db->affected_rows())
            return TRUE;
        else
            return FALSE;
    }

}
