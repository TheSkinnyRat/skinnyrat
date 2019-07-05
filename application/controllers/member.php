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
		$data = $this->get_app_settings();
		if($this->session->userdata('member') != FALSE){
			redirect(base_url() );
		}
		else
		$data['data'] = null;
		$data['ref'] = $this->input->get('ref');
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/login',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function register(){
		$data = $this->get_app_settings();
		if($this->session->userdata('member') != FALSE){
			redirect(base_url() );
		}
		else
		$data['data'] = null;
		$data['ref'] = $this->input->get('ref');
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/register',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function register_add(){
		$ref = $this->input->get('ref');
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
					'ket' => 'Register Member = '.$insert['username'],
					'date' => date('Y-m-d H:i:s'),
					'agent' => $agent,
					'platform' => $this->agent->platform(),
					'ip_address' => $this->input->ip_address(),
					'agent_string' => $this->agent->agent_string()
				);
				$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);

				if ($ref != NULL) {
					$redirect = base_url('member/login?ref='.urlencode($ref));
				}else{
					$redirect = base_url('member/login');
				}
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => $redirect));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function do_login() {
		$ref = $this->input->get('ref');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user_data = $this->model_basic->select_where($this->tbl_member,'username',$username)->row();
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
					'ket' => 'Login Member = '.$username,
					'date' => date('Y-m-d H:i:s'),
					'agent' => $agent,
					'platform' => $this->agent->platform(),
					'ip_address' => $this->input->ip_address(),
					'agent_string' => $this->agent->agent_string()
				);
				$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);

				$data_user = array(
					'id_member' => $user_data->id_member,
					'username' => $user_data->username,
					'password' => $password,
					'name' => $user_data->name,
					);
				$this->session->set_userdata('member',$data_user);
				if ($ref != NULL) {
					$redirect = $ref;
				}else{
					$redirect = base_url();
				}
				$this->returnJson(array('status' => 'ok','msg' => 'Login berhasil, anda akan di alihkan.','redirect' => $redirect ));
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
			$ref = $this->input->get('ref');
			if ($ref != NULL) {
				redirect($ref);
			}else{
				redirect(base_url());
			}
		}
		else
			redirect(base_url());
	}

	function do_logout_login() {
		if($this->session->userdata('member') != FALSE){
			$this->session->unset_userdata('member');
			redirect(base_url('member/login'));
		}
		else
			redirect(base_url('member/login'));
	}


}
