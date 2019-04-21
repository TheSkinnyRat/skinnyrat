<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends PX_Controller {
	public function __construct() {
			parent::__construct();
		}

	public function index(){
		if($this->session->userdata('admin') != FALSE){
			redirect('admin/dashboard');
		}
		else
			redirect('admin/login');
	}

	function login(){
		if($this->session->userdata('admin') != FALSE){
			redirect('admin/dashboard');
		}
		else
			$this->load->view('backend/admin/login');
	}

	function dashboard(){
		$data['userdata'] = $this->session_admin;
		if($this->session->userdata('admin') == FALSE){
			redirect('admin');
		}
		else
		$data['count_tbl_shorten_url'] = $this->model_basic->get_count($this->tbl_shorten_url);
		$data['count_tbl_member'] = $this->model_basic->get_count($this->tbl_member);
		$data['count_tbl_admin'] = $this->model_basic->get_count($this->tbl_admin);
		$data['content'] = $this->load->view('backend/admin/dashboard',$data,true);
		$this->load->view('backend/index',$data);
	}

	function do_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user_data = $this->model_basic->select_where($this->tbl_admin,'username',$username)->row();
		if($user_data){
			if($this->encrypt->decode($user_data->password) == $password){
				$data_user = array(
					'id_admin' => $user_data->id_admin,
					'username' => $user_data->username,
					'password' => $password,
					'name' => $user_data->name,
					);
				$this->session->set_userdata('admin',$data_user);
				$this->returnJson(array('status' => 'ok','msg' => 'Login berhasil, anda akan di alihkan.','redirect' => 'dashboard'));
			}
			else
				$this->returnJson(array('status' => 'error','msg' => 'Login gagal, password anda salah.'));
		}
		else
			$this->returnJson(array('status' => 'error','msg' => 'Login gagal, username tidak terdaftar.'));
	}

	function do_logout() {
		if($this->session->userdata('admin') != FALSE){
			$this->session->unset_userdata('admin');
			redirect(base_url());
		}
		else
			redirect(base_url());
	}


}
