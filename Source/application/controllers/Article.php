<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('article_model', 'model_article');
        $this->template->set_layout('admin');
    }

    /**
     * Description 	:
     * Parameter 	:
     */
    public function index() {
        
        $this->template->title('Article');
        $this->template->build('article/list');
    }

    public function ajax_list() {
        $sno = 1;
        $data = [];

        $list = $this->model_article->get_datatables(); // get data
        $records_total = $this->model_article->count_all();
        $records_filtered = $this->model_article->count_filtered();

        $list_data = $list['result'];
        if ($list_data) {
            foreach ($list_data as $list) {
                $row = [];
                $row[] = $sno++;
                $row[] = $list->menu_name;
                $row[] = $list->article_title;
                $row[] = $list->article_status;
                $action = '<a class="btn btn-info btn-sm" title="View" href="' . base_url() . 'article/view/' . $list->article_id . '"><span class="glyphicon glyphicon-eye-open"></span></a> &nbsp;';
                $action .= '<a class="btn btn-warning btn-sm" title="Update" href="' . base_url() . 'article/update/' . $list->article_id . '"><span class="glyphicon glyphicon-pencil"></span></a>';

                $row[] = $action;
                $data[] = $row;
            }
        }

        $result = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $records_total,
            "recordsFiltered" => $records_filtered,
            "data" => $data
        );


        echo json_encode($result);
    }

    /**
     * Description 	: 
     * Parameter 	:
     * */
    /* public function create()
      {
      $this->template->title('Article - Create');
      $this->template->build('article/create');
      } */

    public function create() {
        $this->template->title('Article - Create'); // PAGE TITLE
        // FORM VALIDATION
        $this->form_validation->set_rules("category", "Category", "trim|required", ['required' => 'Category is required']);
        $this->form_validation->set_rules("title", "Title", "trim|required", ['required' => 'Title is required']);
        $this->form_validation->set_rules("content", "Content", "trim|required", ['required' => 'Content is required']);
        // FILL SELECTED FORM VALUES AFTER FORM VALIDATION 
        $option_categories = '<option value="">Select Category</option>';

        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post()) {
                // CONSTRUCT INSERT DATA
                $data = array(
                    'article_category' => (int) $this->input->post('category'),
                    'article_title' => $this->input->post('title'),
                    'article_content' => $this->input->post('content'),
                    'article_author' => 1, //$this->input->post('name'),
                    'article_created_on' => date('Y-m-d H:i:s') //mysql_date_and_time()
                );
                $result = $this->model_article->insert($data); // INSERT MODEL 
                if ($result) {
                    $this->session->set_flashdata('success', 'Article has been created successfully');
                    redirect('/');
                } else {
                    $this->session->set_flashdata('error', 'Article could not be created. Please try again');
                }
            }
        } else {  // UPDATE FORM FIELD VALUES WHEN FORM VALIDATION FAILS
            $selected_category = set_value('category');

            if ($selected_category) {
                $option_categories = $this->_dropdown_categories($selected_category);
            }
        }
        $data['categories'] = $this->_dropdown_categories($selected_category);

        $this->template->build('article/create', $data);
    }

    public function update($article_id) {
        $this->template->title('Article - Update'); // PAGE TITLE

        $article_data = $this->model_article->get_article_by_id($article_id);
        if ($article_data) {
            $selected_category = $article_data['menu_id'];
        }
        // FORM VALIDATION
        $this->form_validation->set_rules("category", "Category", "trim|required", ['required' => 'Category is required']);
        $this->form_validation->set_rules("title", "Title", "trim|required", ['required' => 'Title is required']);
        $this->form_validation->set_rules("content", "Content", "trim|required", ['required' => 'Content is required']);
        // FILL SELECTED FORM VALUES AFTER FORM VALIDATION 
        $option_categories = '<option value="">Select Category</option>';

        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post()) {
                // CONSTRUCT INSERT DATA
                $update_data = array(
                    'article_category' => (int) $this->input->post('category'),
                    'article_title' => $this->input->post('title'),
                    'article_content' => $this->input->post('content'),
                    'article_author' => 1, //$this->input->post('name'),
                    'article_updated_on' => date('Y-m-d H:i:s') //mysql_date_and_time()
                );
                $result = $this->model_article->update($article_id, $update_data); // INSERT MODEL 
                if ($result) {
                    $this->session->set_flashdata('success', 'Article has been updated successfully');
                    redirect('article');
                } else {
                    $this->session->set_flashdata('error', 'Article could not be updated. Please try again');
                }
            }
        } else {  // UPDATE FORM FIELD VALUES WHEN FORM VALIDATION FAILS
            /* $selected_category = set_value('category');

              if($selected_category)
              {
              $option_categories = $this->_dropdown_categories($selected_category);
              } */
        }
        $data['categories'] = $this->_dropdown_categories($selected_category);
        $data['article_data'] = $article_data;

        $this->template->build('article/update', $data);
    }

    public function view($article_id) {
        $this->template->title('Article - View'); // PAGE TITLE

        $article_data = $this->model_article->get_article_by_id($article_id);

        $data['article_data'] = $article_data;

        $this->template->build('article/view', $data);
    }
    
    public function admin_approve($article_id){
        $update_data = ['article_status' => 'Published'];
        
        $result = $this->model_article->update($article_id, $update_data); // INSERT MODEL 
        if ($result) {
            $this->session->set_flashdata('success', 'Article has been validated successfully');
            redirect('article');
        } else {
            $this->session->set_flashdata('error', 'Article could not be validated. Please try again');
            redirect('article/update/'.$article_id);
        }
    }
    
    public function feature_writer(){
        
    }

    private function _dropdown_categories($selected = FALSE) {
        $categories = $this->model_article->get_catgories();

        $option_category = '<option value="">Select Category</option>';

        if ($categories) {
            foreach ($categories as $category) {
                $selected_category = ($selected == $category->menu_id) ? 'selected' : '';
                $option_category .= '<option value="' . $category->menu_id . '" ' . $selected_category . '>' . $category->menu_name . '</option>';
            }
        }

        return $option_category;
    }

}
