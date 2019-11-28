<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    /**
     * 
     */
    public function index() {
       // $this->template->set_layout('blog');
        $this->template->title('Home');
        $this->template->build('home');
    }
    
    public function articles($topic = FALSE){
        $this->template->title('Articles');
        $this->template->build('articles');
    }
    
    public function article(){
        $this->template->title('Article');
        $this->template->build('article');
    }
}
