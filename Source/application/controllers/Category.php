<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();
        $this->load->model('category_model', 'model_category');
        $this->template->set_layout('admin');
    }
	
	/**
	 * Description 	:
	 * Parameter 	:
	 */
	public function index()
	{
		$this->template->title('Category');
		$this->template->build('category/list');
	}
	
	public function ajax_list()
	{
		$sno = 1;
		$data = [];
		
		$list 			= $this->model_category->get_datatables(); // get data
		$records_total 	= $this->model_category->count_all();
		$records_filtered = $this->model_category->count_filtered();
		
		$list_data = $list['result'];
		if($list_data){
			foreach($list_data as $list){
				$row = [];
				$row[] = $sno++;
				$row[] = $list->menu_name;
				$row[] = $list->menu_status;
				$action = '<a class="btn btn-info btn-sm" title="View" href="'.base_url().'category/view/'.$list->menu_id.'"><span class="glyphicon glyphicon-eye-open"></span></a> &nbsp;';
				$action .= '<a class="btn btn-warning btn-sm" title="Update" href="'.base_url().'category/update/'.$list->menu_id.'"><span class="glyphicon glyphicon-pencil"></span></a>';
				
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
		
	public function create()
	{
		$this->template->title('Category - Create'); // PAGE TITLE
		// FORM VALIDATION
        $this->form_validation->set_rules("name", "Name", "trim|required", ['required' => 'Name is required']);
				
		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->input->post()) 
			{ 
				// CONSTRUCT INSERT DATA
				$data = array(
					'menu_name' => $this->input->post('name'),
					'menu_description' => $this->input->post('description')
				);
				$result = $this->model_category->insert($data); // INSERT MODEL 
				if ($result) 
				{
					$this->session->set_flashdata('success', 'Category has been created successfully'); 
					redirect('category');
				}
				else
				{
					$this->session->set_flashdata('error', 'Category could not be created. Please try again'); 
				}
			}
		}
		
		$this->template->build('category/create');
	}
	
	public function update($category_id)
	{
		$this->template->title('Category - Update'); // PAGE TITLE
		
		$category_data = $this->model_category->get_category_by_id($article_id);
		
		// FORM VALIDATION
        $this->form_validation->set_rules("name", "Name", "trim|required", ['required' => 'name is required']);
		
		
		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->input->post()) 
			{ 
				// CONSTRUCT INSERT DATA
				$update_data = array(
					'menu_name' => $this->input->post('name'),
					'menu_description' => $this->input->post('description')
				);
				$result = $this->model_category->update($category_id, $update_data); // INSERT MODEL 
				if ($result) 
				{
					$this->session->set_flashdata('success', 'Category has been updated successfully'); 
					redirect('category');
				}
				else
				{
					$this->session->set_flashdata('error', 'Category could not be updated. Please try again'); 
				}
			}
		}
		
		$data['category_data'] = $category_data;
		
		$this->template->build('category/update', $data);
	}
	
	public function view($category_id)
	{
		$this->template->title('Category - View'); // PAGE TITLE
		
		$category_data = $this->model_category->get_category_by_id($category_id);
		
		$data['category_data'] = $category_data;
		
		$this->template->build('category/view', $data);
	}
			
}
