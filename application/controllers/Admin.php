<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends PX_Controller {

	public function __construct() {
			parent::__construct();
			$this->controller_attr = array('controller' => 'admin','controller_name' => 'Admin','controller_id' => 0);

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Dashboard','dashboard');
		$data += $this->get_menu();

		if($this->session->userdata('admin') == FALSE){
			redirect('admin');
		}
		else
		$data['userdata'] = $this->session_admin;
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

				if ($this->agent->is_browser()){
					$agent = $this->agent->browser().' '.$this->agent->version();
				}elseif ($this->agent->is_robot()){
					$agent = $this->agent->robot();
				}elseif ($this->agent->is_mobile()){
					$agent = $this->agent->mobile();
				}else{
					$agent = 'Unidentified User Agent';
				}
				$data_agent = array(
					'id_log_user_agent' => '0',
					'ket' => 'Login Backend = '.$username,
					'date' => date('Y-m-d H:i:s'),
					'agent' => $agent,
					'platform' => $this->agent->platform(),
					'ip_address' => $this->input->ip_address(),
					'agent_string' => $this->agent->agent_string()
				);
				$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);

				$data_user = array(
					'id_admin' => $user_data->id_admin,
					'username' => $user_data->username,
					'password' => $password,
					'name' => $user_data->name,
					'id_usergroup' => $user_data->id_usergroup,
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

	function error_403(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('ERR 403 - ACCESS DENIED','error_403');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;

		$id_usergroup = $data['userdata']['id_usergroup'];
		$data['data'] = $this->model_basic->select_where($this->tbl_usergroup,'id',$id_usergroup)->row();
		$data['content'] = $this->load->view('backend/error/403',$data,true);
		$this->load->view('backend/index',$data);
	}


}
