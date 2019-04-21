<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$name = $this->uri->segment(1);

		if($name){
			$get_data = $this->model_basic->select_where($this->tbl_shorten_url,'name',$name)->row();
			if($get_data != null){
					if ($get_data->password != '0') {
						$data['data_url'] = $this->model_basic->select_where($this->tbl_shorten_url,'name',$name)->row();
						$data['content'] = $this->load->view('frontend/public/menu/pass',$data,true);
						if($this->session->userdata('member') == TRUE){
							$data['userdata'] = $this->session_member;
							$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
							$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
						}else{
							$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
							$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
						}
						$this->load->view('frontend/index',$data);
					}else{
						$up_click = $this->model_basic->update_one($this->tbl_shorten_url,'id_shorten_url',$get_data->id_shorten_url,'click','+1');
						redirect($get_data->link);
					}
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

	function pass_go(){
		$id_shorten_url = $this->input->post('id_shorten_url');
		$password = $this->input->post('password');

		$get_data = $this->model_basic->select_where($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url)->row();
		$real_pass = $this->encrypt->decode($get_data->password);
		if ($real_pass == $password ) {
			$up_click = $this->model_basic->update_one($this->tbl_shorten_url,'id_shorten_url',$get_data->id_shorten_url,'click','+1');
			$this->returnJson(array('status' => 'ok','msg' => 'Redirecting...', 'redirect' => $get_data->link));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Invalid Password'));
			}
  }

	function shorten_url(){
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/shorten_url');
		}else

		$data['shorten_url'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_member','0')->result();
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/shorten_url',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_form(){
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/shorten_url_form');
		}else

		$id_shorten_url = $this->input->post('id_shorten_url');
		if($id_shorten_url){
		$data['data'] = $this->model_basic->select_where('tbl_shorten_url','id_shorten_url',$id_shorten_url)->row();
		}else{
		$data['data'] = null;
		}
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/shorten_url_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_add(){
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/shorten_url_add');
		}else

		$table_field = $this->db->list_fields($this->tbl_shorten_url);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = htmlspecialchars($this->input->post($field));
		}
		$insert['id_member'] = '0';
		$insert['click'] = '0';

		if ($insert['password'] != '0') {
			$insert['password'] = $this->encrypt->encode($insert['password']);
		}
		$cek_name = $this->model_basic->select_where($this->tbl_shorten_url,'name',$insert['name'])->row();
		if ($cek_name != null) {
			$this->returnJson(array('status' => 'error','msg' => 'Custom URL tidak tersedia!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all($this->tbl_shorten_url,$insert);

				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'shorten_url'));
				redirect('home/shorten_url_form');
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function about(){
		$data['data'] = null;
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/about',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function change_log(){
		$data['data'] = null;
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/change_log',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function info(){
		$data['data'] = null;
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/info',$data,true);
		$this->load->view('frontend/index',$data);
	}

}
