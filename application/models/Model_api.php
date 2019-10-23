<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_api extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	function select_rand_where_array_limit_offset($table,$random_id,$where,$limit,$offset) {
		$this->load->database('default',TRUE);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($random_id, 'RANDOM');
		$this->db->limit($limit,$offset);
		$data = $this->db->get();
		return $data;
	}

	function select_where_array_order_limit_offset($table,$where,$order_by,$order_type,$limit,$offset){
		$this->load->database('default',TRUE);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
        $this->db->order_by($order_by, $order_type);
        $this->db->limit($limit,$offset);
		$data = $this->db->get();
		return $data;
	}

}
