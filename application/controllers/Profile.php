<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$username = $this->uri->segment(2);

		if($username){
			$get_data = $this->model_basic->select_where($this->tbl_member,'username',$username)->row();
			if($get_data != null){
				$data = $this->get_app_settings();
				$data['data'] = $get_data;
				if($this->session->userdata('member') == TRUE){
					$data['userdata'] = $this->session_member;
					$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
					$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
				}else{
					$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
					$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
				}
				$data['content'] = $this->load->view('frontend/public/menu/profile',$data,true);
				$this->load->view('frontend/index',$data);
			}else{
					redirect('error/error_404');
			}
		}else{
			redirect('error/error_404');
		}

	}

}
