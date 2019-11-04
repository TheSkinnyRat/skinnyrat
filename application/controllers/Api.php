<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {
	}

	function show_more(){
		$type = $this->input->get('type');
		$last = $this->input->get('last');
		$limit = $this->input->get('limit');
		$last_new = $last + $limit;
		if ($type == 'article_rand') {
			$random_id = $this->input->get('random_id');
			$result = $this->model_api->select_rand_where_array_limit_offset($this->tbl_article,$random_id,array('private' => '0'),$limit,$last)->result();
			$result_row = $this->model_api->select_rand_where_array_limit_offset($this->tbl_article,$random_id,array('private' => '0'),$limit,$last)->num_rows();
			$data = '';
			foreach ($result as $r) {
				$data[] = array(
					'a_href' => base_url('blog/'.$r->name),
					'img_src' => ($r->img != '0') ? ($r->img) : (base_url('assets/frontend/img/favicon/ratblog.png')),
					'judul' => $r->judul,
					'new' => (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($r->date_created))) <= 259200) ? ('yes') : ('no')
				);
			}
			$this->returnJson(array('status' => 'OK', 'msg' => 'success', 'row' => $result_row, 'data' => $data));
		}else if($type == 'article_popular'){
			$result = $this->model_api->select_where_array_order_limit_offset($this->tbl_article,array('private' => '0'),'click','DESC',$limit,$last)->result();
			$result_row = $this->model_api->select_where_array_order_limit_offset($this->tbl_article,array('private' => '0'),'click','DESC',$limit,$last)->num_rows();
			$data = '';
			foreach ($result as $r) {
				$data[] = array(
					'a_href' => base_url('blog/'.$r->name),
					'img_src' => ($r->img != '0') ? ($r->img) : (base_url('assets/frontend/img/favicon/ratblog.png')),
					'judul' => $r->judul,
					'new' => (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($r->date_created))) <= 259200) ? ('yes') : ('no')
				);
			}
			$this->returnJson(array('status' => 'OK', 'msg' => 'success', 'row' => $result_row, 'data' => $data));
		}else if($type == 'article_new'){
			$result = $this->model_api->select_where_array_order_limit_offset($this->tbl_article,array('private' => '0'),'date_created','DESC',$limit,$last)->result();
			$result_row = $this->model_api->select_where_array_order_limit_offset($this->tbl_article,array('private' => '0'),'date_created','DESC',$limit,$last)->num_rows();
			$data = '';
			foreach ($result as $r) {
				$data[] = array(
					'a_href' => base_url('blog/'.$r->name),
					'img_src' => ($r->img != '0') ? ($r->img) : (base_url('assets/frontend/img/favicon/ratblog.png')),
					'judul' => $r->judul,
					'new' => (strtotime(date('Y-m-d')) - strtotime(date('Y-m-d',strtotime($r->date_created))) <= 259200) ? ('yes') : ('no')
				);
			}
			$this->returnJson(array('status' => 'OK', 'msg' => 'success', 'row' => $result_row, 'data' => $data));
		}
	}

}
