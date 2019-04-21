<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends PX_Controller {
	public function __construct() {
			parent::__construct();
		}

	public function index(){
		if($this->session->userdata('member') != FALSE){
			redirect(base_url() );
		}
		else
			redirect('member/login');
	}

	function login(){
		if($this->session->userdata('member') != FALSE){
			redirect(base_url() );
		}
		else
		$data['data'] = null;
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/login',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function register(){
		if($this->session->userdata('member') != FALSE){
			redirect(base_url() );
		}
		else
		$data['data'] = null;
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/register',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function register_add(){
		$table_field = $this->db->list_fields($this->tbl_member);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$insert['password'] = $this->encrypt->encode($insert['password']);
		$check_username = $this->model_basic->select_where($this->tbl_member,'username',$insert['username'])->row();
		if ($check_username != null) {
			$this->returnJson(array('status' => 'error','msg' => 'Username sudah digunakan!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all($this->tbl_member,$insert);
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'login'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function do_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user_data = $this->model_basic->select_where($this->tbl_member,'username',$username)->row();
		if($user_data){
			if($this->encrypt->decode($user_data->password) == $password){
				$data_user = array(
					'id_member' => $user_data->id_member,
					'username' => $user_data->username,
					'password' => $password,
					'name' => $user_data->name,
					);
				$this->session->set_userdata('member',$data_user);
				$this->returnJson(array('status' => 'ok','msg' => 'Login berhasil, anda akan di alihkan.','redirect' => base_url() ));
			}
			else
				$this->returnJson(array('status' => 'error','msg' => 'Login gagal, password anda salah.'));
		}
		else
			$this->returnJson(array('status' => 'error','msg' => 'Login gagal, username tidak terdaftar.'));
	}

	function do_logout() {
		if($this->session->userdata('member') != FALSE){
			$this->session->unset_userdata('member');
			redirect(base_url() );
		}
		else
			redirect(base_url() );
	}


}
