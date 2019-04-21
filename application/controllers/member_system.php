<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_system extends PX_Controller {
	public function __construct() {
			parent::__construct();
		}

	public function index(){

	}

	function shorten_url(){
		$this->check_login_member();
		$data['userdata'] = $this->session_member;
		$data['shorten_url'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_member',$data['userdata']['id_member'])->result();

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/shorten_url',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function shorten_url_form(){
		$this->check_login_member();
		$data['userdata'] = $this->session_member;
		$id_shorten_url = $this->input->post('id_shorten_url');
		if($id_shorten_url){
		$data['data'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url)->row();
		}else{
		$data['data'] = null;
		}

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/shorten_url_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_add(){
		$this->check_login_member();
		$data['userdata'] = $this->session_member;
		$table_field = $this->db->list_fields($this->tbl_shorten_url);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$insert['id_member'] = $data['userdata']['id_member'];
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

	function shorten_url_update(){
		$this->check_login_member();
		$data['userdata'] = $this->session_member;
		$table_field = $this->db->list_fields($this->tbl_shorten_url);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$update['id_member'] = $data['userdata']['id_member'];

		if ($update['password'] != '0') {
			$update['password'] = $this->encrypt->encode($update['password']);
		}
		$cek_name = $this->model_basic->select_where($this->tbl_shorten_url,'name',$update['name'])->row();
		if ($cek_name != null && $update['id_shorten_url'] != $cek_name->id_shorten_url) {
			$this->returnJson(array('status' => 'error','msg' => 'Custom URL tidak tersedia!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update($this->tbl_shorten_url,$update,'id_shorten_url',$update['id_shorten_url']);

				$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'shorten_url'));
				redirect('home/shorten_url_form');
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function shorten_url_delete(){
    $this->check_login_member();
		$data['userdata'] = $this->session_member;
		$id_shorten_url = $this->input->post('id_shorten_url');
		$do_delete = $this->model_basic->delete($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url);
		if($do_delete){
			redirect('member_system/shorten_url');
		}
		else{

		}
  }

}
