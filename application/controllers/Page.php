<?php
Class Page extends CI_Controller{

    public function index(){

        $data['title'] = "Page";

        $this->load->view('page',$data);
    }
}
?>