<?php

namespace App\Controllers;

class Craw extends BaseController{
    // function __construct(){
    //     parent ::__construct();
    //     $this->load->helper('simple_html_dom');
    //     $this->load->model('Craw_model');
    // }
    // 
    public function index(){
        $data["pageTitle"] = "Simple Crawler with PHP Simple HTML DOM Parser";
        $this->load->view('pages/menu', $data);       
    }
    // public function display(){
    //     $data["pageTitle"] = "list of crawler results";
    //     $data['record']=$this->Craw_model->getAll();
    //     $this->load->view('pages/display', $data);
    // }
    // public function get_contens(){
    //     $data["pageTitle"]="Crawler Result";
    //     $data["message"]="";
    //     $html = file_get_html('http://localhost/example/index.html');
    //     foreach($html->find('table[class=example] tr') as $row){
    //         if($row->find('td',1)){
    //             $title=strip_tags($row->find('td',1)->innerte);
    //             $url=$row->find('a',0)->href;
    //             $date1=$row->find('td',3)->innertext;
    //             $picture=$row->find('img',0)->src;
    //             $data1=array('title'=>$title, 'date1'=>date1, 'url'=>$url, 'picture'=>$picture);
    //             if($this->db->insert("tbl_craw",$data1)){
    //                 $data["message"].="Input succeed";
    //             }
    //             else{
    //                 $data["message"].="Galat";
    //             }
    //         }
    //     }
    //     $this->load->view('pages/get_content', $data);
    // }
}

?>