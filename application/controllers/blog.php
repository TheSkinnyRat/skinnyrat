<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$name = $this->uri->segment(2);

		if($name){
			$get_data = $this->model_basic->select_where($this->tbl_article,'name',$name)->row();
			if($get_data != null){
				$up_click = $this->model_basic->update_one($this->tbl_article,'id_article',$get_data->id_article,'click','+1');
				$data['data'] = $this->model_basic->select_where($this->tbl_article,'id_article',$get_data->id_article)->row();
				if($this->session->userdata('member') == TRUE){
					$data['userdata'] = $this->session_member;
					$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
					$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
				}else{
					$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
					$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
				}
				$data['content'] = $this->load->view('frontend/public/menu/blog',$data,true);
				$this->load->view('frontend/index',$data);
			}else{
					redirect('error/error_404');
			}
		}else{
			$data['count_tbl_shorten_url'] = $this->model_basic->get_count($this->tbl_shorten_url);
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
				$data['content'] = $this->load->view('frontend/member/menu/main_page',$data,true);
			}else{
				$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
				$data['content'] = $this->load->view('frontend/public/menu/main_page',$data,true);
			}
			$this->load->view('frontend/index',$data);
		}

	}

}
