<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model', 'model_user');
        $this->template->set_layout('admin');
    }

    /**
     * Description 	:
     * Parameter 	:
     */
    public function index() {
        
        $this->template->title('Users');
        $this->template->build('user/list');
    }

    public function ajax_list() {
        $sno = 1;
        $data = [];

        $list = $this->model_user->get_datatables(); // get data
        $records_total = $this->model_user->count_all();
        $records_filtered = $this->model_user->count_filtered();

        $list_data = $list['result']; 
        if ($list_data) {
            foreach ($list_data as $list) {
                $row = [];
                $row[] = $sno++;
                $row[] = $list->user_name;
                $row[] = $list->user_role;
                if($list->fw_status == 'Active'){
                    $fw_action = '<button class="btn btn-info btn-warning btn_fw" title="View" data-action="fw_remove" data-userid="'.$list->user_id.'">Remove Featured Writer</button> &nbsp;';
                }else{
                    $fw_action = '<button class="btn btn-info btn-sm btn_fw" title="View" data-action="fw_add" data-userid="'.$list->user_id.'">Featured Writer</button> &nbsp;';
                }
                
                $action = $fw_action;
                
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
     * Description : Add a new Featured Writer
     * **/
    public function featured_writer(){
        $usre_id = $this->input->post('user_id');
        $action = $this->input->post('action');
        $get_fw = $this->model_user->get_fw_by_userid($usre_id);
        
        if($action == 'fw_remove'){
            if($get_fw){
                $status = $get_fw->status;
                if($status == 'Active'){
                    // Update Status
                    $update_data =  [
                                    'status'=>'Deleted',
                                    'modified_on' => date('Y-m-d H:i:s')
                                ];
                    $result = $this->model_user->fw_update($get_fw->fw_id, $update_data);
                }else{
                    $result = TRUE;
                }
            }else{
                $result = TRUE;
            }
        }else{
            if($get_fw){
            
                $status = $get_fw->status;
                if($status == 'Deleted'){
                    // Update Status
                    $update_data =  [
                                    'status'=>'Active',
                                    'modified_on' => date('Y-m-d H:i:s')
                                ];
                    $result = $this->model_user->fw_update($get_fw->fw_id, $update_data);
                }else{
                    $result = TRUE;
                }
            }  else {
                // Insert
                $insert_data =  [
                                    'user_id'=>$usre_id,
                                    'status'=>'Active',
                                    'created_on' => date('Y-m-d H:i:s')
                                ];
                $result = $this->model_user->fw_add($insert_data);
            }
        }
        
        
        
        $return_data = ['msg'=>'Feature writer has been added successfully'];
        
        echo json_encode($return_data);
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
