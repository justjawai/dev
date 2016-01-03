<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_model extends  CI_Model{

    public function loadCategory(){

        $link = mysqli_connect('localhost','root','','my_portal');
        $pagenum = $_GET['pagenum'];
        $pagesize = $_GET['pagesize'];
        $start = $pagenum * $pagesize;
        $query = "SELECT SQL_CALC_FOUND_ROWS * FROM categories LIMIT $start, $pagesize";
        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());
        $sql = "SELECT FOUND_ROWS() AS `found_rows`;";
        $rows = mysqli_query($link, $sql);
        $rows = mysqli_fetch_assoc($rows);
        $total_rows = $rows['found_rows'];

        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());

        $categories = null;
        // get data and store in a json array
        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $categories[] = array(
                'Id'=>$row['id'],
                'Name' => $row['name'],
                'Photo'=>$row['photo']
            );
        }
        $data[] = array(
            'TotalRows' => $total_rows,
            'Rows' => $categories
        );
        mysqli_close($link);

        return $data;
    }


    public function loadNewsTag(){

        $link = mysqli_connect('localhost','root','','my_portal');
        $pagenum = $_GET['pagenum'];
        $pagesize = $_GET['pagesize'];
        $start = $pagenum * $pagesize;
        $query = "SELECT SQL_CALC_FOUND_ROWS * FROM newsCategory LIMIT $start, $pagesize";
        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());
        $sql = "SELECT FOUND_ROWS() AS `found_rows`;";
        $rows = mysqli_query($link, $sql);
        $rows = mysqli_fetch_assoc($rows);
        $total_rows = $rows['found_rows'];

        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());

        $categories = null;
        // get data and store in a json array
        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $categories[] = array(
                'Id'=>$row['id'],
                'Name' => $row['name']
            );
        }
        $data[] = array(
            'TotalRows' => $total_rows,
            'Rows' => $categories
        );
        mysqli_close($link);

        return $data;
    }





    public function loadNews(){

        $link = mysqli_connect('localhost','root','','my_portal');
        $pagenum = $_GET['pagenum'];
        $pagesize = $_GET['pagesize'];
        $start = $pagenum * $pagesize;
        $query = "SELECT SQL_CALC_FOUND_ROWS * FROM news LIMIT $start, $pagesize";
        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());
        $sql = "SELECT FOUND_ROWS() AS `found_rows`;";
        $rows = mysqli_query($link, $sql);
        $rows = mysqli_fetch_assoc($rows);
        $total_rows = $rows['found_rows'];

        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());

        $news = null;
        // get data and store in a json array
        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $news[] = array(
                'Id'=>$row['id'],
                'Title' => $row['title'],
                'Author' => $row['author'],
                'PostedBy'=>$row['posted_by'],
                'Status'=>$row['status'],
                'CreatedAt'=>$row['created_at'],

            );
        }


        $data[] = array(
            'TotalRows' => $total_rows,
            'Rows' => $news
        );
        mysqli_close($link);

        return $data;
    }


    public function loadCustomers(){

        $link = mysqli_connect('localhost','root','','my_portal');
        $pagenum = $_GET['pagenum'];
        $pagesize = $_GET['pagesize'];
        $start = $pagenum * $pagesize;
        $query = "SELECT SQL_CALC_FOUND_ROWS * FROM customers LIMIT $start, $pagesize";
        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());
        $sql = "SELECT FOUND_ROWS() AS `found_rows`;";
        $rows = mysqli_query($link, $sql);
        $rows = mysqli_fetch_assoc($rows);
        $total_rows = $rows['found_rows'];

        $result = mysqli_query($link, $query) or die("SQL Error 1: " . mysql_error());

        $customers = null;
        // get data and store in a json array
        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $customers[] = array(
                'Id'=>$row['id'],
                'Photo' => $row['photo'],
                'Name' => $row['name'],
                'Profession'=>$row['profession'],
                'Mobile'=>$row['mobile'],
                'Status'=>$row['status'],

            );
        }
        $data[] = array(
            'TotalRows' => $total_rows,
            'Rows' => $customers
        );
        mysqli_close($link);

        return $data;
    }




    public function categoryAddProcess($data, $id){

        if($id){
            $this->db->where('id', $id);
            $this->db->update('categories', $data);
            $response = array('code'=>1,'msg'=>'success', 'value'=> 'Category Updated Successfully');
}
        else{
            $this->db->insert('categories', $data);
            if($this->db->affected_rows() > 0){
                $response = array('code'=>1,'msg'=>'success', 'value'=> 'Category Created Successfully');
            }
            else{
                $response = array('code'=>2,'msg'=>'Failed', 'value'=> 'Category creation failed');
            }
        }

        return $response;

    }


    public function newsTagAddProcess($data, $id){

        if($id){
            $this->db->where('id', $id);
            $this->db->update('newsCategory', $data);
            $response = array('code'=>1,'msg'=>'success', 'value'=> 'Tag Updated Successfully');
        }
        else{
            $this->db->insert('newsCategory', $data);
            if($this->db->affected_rows() > 0){
                $response = array('code'=>1,'msg'=>'success', 'value'=> 'Tag Created Successfully');
            }
            else{
                $response = array('code'=>2,'msg'=>'Failed', 'value'=> 'Tag creation failed');
            }
        }

        return $response;

    }

    public function newsAddProcess($data, $id){

        if($id){
            $this->db->where('id', $id);
            $this->db->update('news', $data);
            $response = array('code'=>1,'msg'=>'success', 'value'=> 'News Updated Successfully');
        }
        else{
            $this->db->insert('news', $data);
            if($this->db->affected_rows() > 0){
                $response = array('code'=>1,'msg'=>'success', 'value'=> 'Category Created Successfully');
            }
            else{
                $response = array('code'=>2,'msg'=>'Failed', 'value'=> 'Category creation failed');
            }
        }

        return $response;

    }
    
    public function customerAddProcess($data, $id){
        
        if($id){
            $this->db->where('id', $id);
            $this->db->update('customers', $data);
            $response = array('code'=>1,'msg'=>'success', 'value'=> 'Customers Updated Successfully');
        }
        else{
            $this->db->insert('customers', $data);
            if($this->db->affected_rows() > 0){
                $response = array('code'=>1,'msg'=>'success', 'value'=> 'Customer Created Successfully');
            }
            else{
                $response = array('code'=>2,'msg'=>'Failed', 'value'=> 'Customer creation failed');
            }
        }

        return $response;

    }

    public function pageAddProcess($data, $id){

        if($id){
            $this->db->where('id', $id);
            $this->db->update('pages', $data);
            $response = array('code'=>1,'msg'=>'success', 'value'=> 'Page Updated Successfully');
        }
        else{
            $this->db->insert('pages', $data);
            if($this->db->affected_rows() > 0){
                $response = array('code'=>1,'msg'=>'success', 'id'=>$this->db->insert_id(), 'value'=> 'Page Created Successfully');
            }
            else{
                $response = array('code'=>2,'msg'=>'Failed', 'value'=> 'Page creation failed');
            }
        }

        return $response;

    }

    public function deleteCategory($id){
        $this->db->where('id', $id);
        $this->db->delete('categories');
        return ($this->db->affected_rows() > 0) ?  array('code'=>1,'msg'=>'success', 'value'=> 'Category deleted successfully') : array('code'=>0,'msg'=>'Failed', 'value'=> 'failed');
    }

    public function customerDelete($id){
        $this->db->delete('customers', array('id' => $id));
        return ($this->db->affected_rows() > 0) ?  array('code'=>1,'msg'=>'success', 'value'=> 'Customer deleted successfully') : array('code'=>0,'msg'=>'Failed', 'value'=> 'failed');
    }


    /*utility functions*/

    public function jsonHeader($data){
        header('Content-Type: application/json');
        return json_encode($data);
    }

}