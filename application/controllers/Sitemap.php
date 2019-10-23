<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$data['data'] = $this->model_basic->select_where($this->tbl_article,'private','0')->result();
		$this->load->view('sitemap',$data);
	}

}
