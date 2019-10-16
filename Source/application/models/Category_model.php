<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* File name 	: Category_model.php
* Description	: Handles to model methods
* Author 		: Maria Benedict Nishanth A
**/
class Category_model extends CI_Model
{
	var $table_category	= 'menu';
	var $column_order 	= array('menu_name'); //set column field database for datatable orderable
    var $column_search 	= array('menu_name'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order 			= array('menu_name' => 'ASC'); // default order 
	
    function __construct()
	{
        parent::__construct(); //Call the Model constructor
    }
	
	/**
	* Description	: 
	* Parameter 	: 
	**/
	function get_datatables()
    {		
        $this->_get_datatables_query();
		
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query 			= $this->db->get();
		$data['result'] = $query->result();
		$data['sql'] 	= $this->db->last_query(); 
		return $data;
    }
	
	/**
	* Description 	: 
	* Parameter 	: 
	**/
	private function _get_datatables_query()
    {
		$i = 0;
		
		$this->db->select("menu_id, menu_name, menu_description, menu_status");
		$this->db->from($this->table_category);
		$this->db->where('menu_status = "Active"');
		
		foreach ($this->column_search as $item) // loop column 
        {
            if(isset($_POST['search']['value'])) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
	
	/**
	* Description 	: 
	* Parameter 	: 
	**/
    public function count_all()
    {
		$this->_get_datatables_query();
		
        return $this->db->count_all_results();
    }
	
	/**
	* Description 	: 
	* Parameter 	: 
	**/
	public function count_filtered()
	{
        $this->_get_datatables_query();
		
        $query = $this->db->get();
        return $query->num_rows();
    }
	
	public function insert($data)
	{
		$this->db->insert($this->table_category, $data);
        return $this->db->insert_id();
	}
	
	public function update($category_id, $data)
	{
		$this->db->where('menu_id', $category_id);
        return $this->db->update($this->table_category, $data);
	}
	
	public function get_catgories()
	{
		$this->db->select('menu_id, menu_name');
		$this->db->from($this->table_category);
		$this->db->where('menu_status', 'Active');
		$this->db->order_by('menu_name', 'ASC');
		
		return $this->db->get()->result();
	}
	
	public function get_category_by_id($category_id)
	{
		$this->db->select("menu_id, menu_name, menu_description, menu_status");
		$this->db->from($this->table_category);
		$this->db->where('menu_id', $category_id);
		
		return $this->db->get()->row_array();
	}
	
} // end of class
?>
