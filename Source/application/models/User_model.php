<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * File name 	: User_model.php
 * Description	: Handles to model methods
 * Author 		: Maria Benedict Nishanth A
 * */
class User_model extends CI_Model {

    var $table_article = 'article';
    var $table_category = 'menu';
    var $table_user = 'user';
    var $table_fw = 'featured_writer';
    var $column_order = array('user_name'); //set column field database for datatable orderable
    var $column_search = array('user_name'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('user_name' => 'ASC'); // default order 

    function __construct() {
        parent::__construct(); //Call the Model constructor
    }

    /**
     * Description	: 
     * Parameter 	: 
     * */
    function get_datatables() {
        $this->_get_datatables_query();

        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        $data['result'] = $query->result();
        $data['sql'] = $this->db->last_query();
        return $data;
    }

    /**
     * Description 	: 
     * Parameter 	: 
     * */
    private function _get_datatables_query() {
        $i = 0;

        $this->db->select($this->table_user.'.user_id, user_name, user_detail, user_role, status AS fw_status');
        $this->db->from($this->table_user);
        $this->db->join($this->table_fw, $this->table_user.'.user_id = '.$this->table_fw.'.user_id', 'left');

        foreach ($this->column_search as $item) { // loop column 
            if (isset($_POST['search']['value'])) { // if datatable send POST for search

                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    /**
     * Description 	: 
     * Parameter 	: 
     * */
    public function count_all() {
        $this->_get_datatables_query();

        return $this->db->count_all_results();
    }

    /**
     * Description 	: 
     * Parameter 	: 
     * */
    public function count_filtered() {
        $this->_get_datatables_query();

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function insert($data) {
        $this->db->insert($this->table_article, $data);
        return $this->db->insert_id();
    }

    public function update($article_id, $data) {
        $this->db->where('article_id', $article_id);
        return $this->db->update($this->table_article, $data);
    }
    
    public function get_fw_by_userid($user_id){
        $this->db->select('fw_id, user_id, status');
        $this->db->from($this->table_fw);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        
        return $query->row(); 
    }
    
    public function fw_add($data) {
        $this->db->insert($this->table_fw, $data);
        return $this->db->insert_id();
    }
    
    public function fw_update($fw_id, $data) {
        $this->db->where('fw_id', $fw_id);
        return $this->db->update($this->table_fw, $data);
    }


}

// end of class
?>
