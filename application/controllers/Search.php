<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$data = $this->get_app_settings();
		$data['data'] = "";
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/search',$data,true);
		$this->load->view('frontend/index',$data);
	}

}
