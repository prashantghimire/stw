<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('html');
    }
    public function lopu()
    {
        $this->load->view('shared/header');
        $this->load->view('post');
        $this->load->view('shared/footer');
    }
}
