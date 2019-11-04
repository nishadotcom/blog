<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    /**
     * 
     */
    public function index() {
       // $this->template->set_layout('blog');
        $this->template->title('Home');
        $this->template->build('welcome_message');
    }

}
