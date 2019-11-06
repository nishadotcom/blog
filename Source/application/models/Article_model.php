<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* File name 	: Article_model.php
* Description	: Handles to model methods
* Author 		: Maria Benedict Nishanth A
**/
class Article_model extends CI_Model
{
	var $table_article 	= 'article';
	var $table_category	= 'menu';
	var $table_user		= 'user';
        var $table_feature_writer = 'featured_writer';
	var $column_order 	= array('article_title'); //set column field database for datatable orderable
    var $column_search 	= array('article_title'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order 			= array('article_created_on' => 'DESC'); // default order 
	
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
		
		$this->db->select("article_id, article_category, article_title, article_content, article_status, article_author, menu_name, ".$this->table_feature_writer.".status AS fw_status");
		$this->db->from($this->table_article);
		$this->db->join($this->table_category, 'article_category = menu_id', 'left');
                $this->db->join($this->table_feature_writer, 'article_author = user_id', 'left');
		$this->db->where('article_status <> "Deleted"');
		
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
		$this->db->insert($this->table_article, $data);
        return $this->db->insert_id();
	}
	
	public function update($article_id, $data)
	{
		$this->db->where('article_id', $article_id);
        return $this->db->update($this->table_article, $data);
	}
	
	public function get_catgories()
	{
		$this->db->select('menu_id, menu_name');
		$this->db->from($this->table_category);
		$this->db->where('menu_status', 'Active');
		$this->db->order_by('menu_name', 'ASC');
		
		return $this->db->get()->result();
	}
	
	public function get_article_by_id($article_id)
	{
		$this->db->select('article_id, article_category, article_title, article_content, article_status, article_author, menu_name, menu_id, article_created_on, article_updated_on, user_name, '.$this->table_feature_writer.'.status AS fw_status');
		$this->db->from($this->table_article);
		$this->db->join($this->table_category, 'article_category = menu_id', 'left');
		$this->db->join($this->table_user, 'article_author = '.$this->table_user.'.user_id', 'left');
                $this->db->join($this->table_feature_writer, 'article_author = '.$this->table_feature_writer.'.user_id', 'left');
		$this->db->where('article_id', $article_id);
		
		return $this->db->get()->row_array();
	}
	
} // end of class
?>
