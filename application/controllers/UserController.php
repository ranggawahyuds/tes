<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class UserController extends CI_Controller{
    public $folder = 'user/';
  
    
    public function index()
    {
        $data = [
            'content' => $this->folder. "layout"
        ];
        $this->load->view('user/layout',$data);
    }
}