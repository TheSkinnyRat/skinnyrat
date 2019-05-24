<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_system extends PX_Controller {
	public function __construct() {
			parent::__construct();
		}

	public function index(){

	}

	function member(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_member);
		$data['content'] = $this->load->view('backend/admin_system/member',$data,true);
		$this->load->view('backend/index',$data);
	}

	function member_form(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where($this->tbl_member,'id_member',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/member_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function member_add(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
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
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'member'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function member_update(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_member);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$update['password'] = $this->encrypt->encode($update['password']);
		$check_username = $this->model_basic->select_where($this->tbl_member,'username',$update['username'])->row();
		if ($check_username != null && $check_username->id_member != $update['id_member']) {
			$this->returnJson(array('status' => 'error','msg' => 'Username sudah digunakan!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update($this->tbl_member,$update,'id_member',$update['id_member']);
				$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'member'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function member_delete(){
    $this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_member,'id_member',$id);
		if($do_delete){
			redirect('admin_system/member');
		}
		else{

		}
  }

	function admin(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_admin);
		$data['content'] = $this->load->view('backend/admin_system/admin',$data,true);
		$this->load->view('backend/index',$data);
	}

	function admin_form(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where($this->tbl_admin,'id_admin',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/admin_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function admin_add(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_admin);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$insert['password'] = $this->encrypt->encode($insert['password']);
		$check_username = $this->model_basic->select_where($this->tbl_admin,'username',$insert['username'])->row();
		if ($check_username != null) {
			$this->returnJson(array('status' => 'error','msg' => 'Username sudah digunakan!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all($this->tbl_admin,$insert);
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'admin'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function admin_update(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_admin);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$update['password'] = $this->encrypt->encode($update['password']);
		$check_username = $this->model_basic->select_where($this->tbl_admin,'username',$update['username'])->row();
		if ($check_username != null && $check_username->id_admin != $update['id_admin']) {
			$this->returnJson(array('status' => 'error','msg' => 'Username sudah digunakan!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update($this->tbl_admin,$update,'id_admin',$update['id_admin']);
				$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'admin'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function admin_delete(){
    $this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_admin,'id_admin',$id);
		if($do_delete){
			redirect('admin_system/admin');
		}
		else{

		}
  }

	function shorten_url(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all_left_join_1($this->tbl_shorten_url,$this->tbl_shorten_url.'.*,'.$this->tbl_member.'.name as member_name',$this->tbl_member,$this->tbl_shorten_url.'.id_member',$this->tbl_member.'.id_member');
		$data['content'] = $this->load->view('backend/admin_system/shorten_url',$data,true);
		$this->load->view('backend/index',$data);
	}

	function shorten_url_form(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id_shorten_url = $this->input->post('id_shorten_url');
		if($id_shorten_url){
		$data['data'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url)->row();
		}else{
		$data['data'] = null;
		}
		$data['data_member'] = $this->model_basic->select_all($this->tbl_member);
		$data['content'] = $this->load->view('backend/admin_system/shorten_url_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function shorten_url_add(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_shorten_url);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
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
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_shorten_url);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}if ($update['password'] != '0') {
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
    $this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id_shorten_url = $this->input->post('id_shorten_url');
		$do_delete = $this->model_basic->delete($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url);
		if($do_delete){
			redirect('admin_system/shorten_url');
		}
		else{

		}
  }

	function article(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all_left_join_1($this->tbl_article,$this->tbl_article.'.*,'.$this->tbl_member.'.name as member_name',$this->tbl_member,$this->tbl_article.'.id_member',$this->tbl_member.'.id_member');
		$data['content'] = $this->load->view('backend/admin_system/article',$data,true);
		$this->load->view('backend/index',$data);
	}

	function article_form(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id_article = $this->input->post('id_article');
		if($id_article){
		$data['data'] = $this->model_basic->select_where($this->tbl_article,'id_article',$id_article)->row();
		}else{
		$data['data'] = null;
		}
		$data['data_member'] = $this->model_basic->select_all($this->tbl_member);
		$data['content'] = $this->load->view('backend/admin_system/article_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function article_add(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_article);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = htmlspecialchars($this->input->post($field));
		}
		$insert['konten'] = $this->input->post('konten');

		$cek_name = $this->model_basic->select_where($this->tbl_article,'name',$insert['name'])->row();
		if ($cek_name != null) {
			$this->returnJson(array('status' => 'error','msg' => 'URL Article Tidak Tersedia!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all($this->tbl_article,$insert);

				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'article'));
				redirect('home/shorten_url_form');
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
	}

	function article_update(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_article);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$cek_name = $this->model_basic->select_where($this->tbl_article,'name',$update['name'])->row();
		if ($cek_name != null && $update['id_article'] != $cek_name->id_article) {
			$this->returnJson(array('status' => 'error','msg' => 'URL Article Tidak Tersedia!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update($this->tbl_article,$update,'id_article',$update['id_article']);

				$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'article'));
				redirect('home/article_form');
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function article_delete(){
    $this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id_article = $this->input->post('id_article');
		$do_delete = $this->model_basic->delete($this->tbl_article,'id_article',$id_article);
		if($do_delete){
			redirect('admin_system/article');
		}
		else{

		}
  }

	function log_user_agent(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_log_user_agent);
		$data['content'] = $this->load->view('backend/admin_system/log_user_agent',$data,true);
		$this->load->view('backend/index',$data);
	}

	function log_user_agent_delete(){
    $this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_log_user_agent,'id_log_user_agent',$id);
		if($do_delete){
			redirect('admin_system/log_user_agent');
		}
  }

	function log_user_agent_delete_all(){
    $this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$do_delete = $this->model_basic->delete_all($this->tbl_log_user_agent);
		if($do_delete){
			redirect('admin_system/log_user_agent');
		}
  }

	function web_setting(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_web_setting);
		$data['content'] = $this->load->view('backend/admin_system/web_setting',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_setting_form(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data_icon'] = $this->model_basic->select_all($this->tbl_icons);
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where($this->tbl_web_setting,'id',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/web_setting_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_setting_add(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_web_setting);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		if($insert['favicon']){
			if(!@copy($insert['favicon'],'assets/frontend/img/favicon/'.basename($insert['favicon'])))
				$insert['favicon'] = $this->input->post('old_favicon');
			else
				$insert['favicon'] = basename($insert['favicon']);
		}
		else
			$insert['favicon'] = $this->input->post('old_favicon');

		$check_data = $this->model_basic->select_all($this->tbl_web_setting);
		if ($check_data != null) {
			$this->returnJson(array('status' => 'error','msg' => 'Data Sudah Ada!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all($this->tbl_web_setting,$insert);
				$this->delete_temp('temp_folder');
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'web_setting'));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function web_setting_update(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_web_setting);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		if($update['favicon']){
			if(!@copy($update['favicon'],'assets/frontend/img/favicon/'.basename($update['favicon'])))
				$update['favicon'] = $this->input->post('old_favicon');
			else
				$update['favicon'] = basename($update['favicon']);
		}
		else
			$update['favicon'] = $this->input->post('old_favicon');

		if($update){
			$do_update = $this->model_basic->update($this->tbl_web_setting,$update,'id',$update['id']);
			$this->delete_temp('temp_folder');
			$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'web_setting'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
  }

	function web_alert(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_web_alert);
		$data['content'] = $this->load->view('backend/admin_system/web_alert',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_alert_form(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where($this->tbl_web_alert,'id',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/web_alert_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_alert_add(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_web_alert);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}

		if($insert){
			$do_insert = $this->model_basic->insert_all($this->tbl_web_alert,$insert);
			$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'web_alert'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
  }

	function web_alert_update(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_web_alert);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}

		if($update){
			$do_update = $this->model_basic->update($this->tbl_web_alert,$update,'id',$update['id']);
			$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'web_alert'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
  }

	function web_alert_delete(){
    $this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_web_alert,'id',$id);
		if($do_delete){
			redirect('admin_system/web_alert');
		}
		else{

		}
  }

	function change_log(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_change_log);
		$data['content'] = $this->load->view('backend/admin_system/change_log',$data,true);
		$this->load->view('backend/index',$data);
	}

	function change_log_form(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where($this->tbl_change_log,'id',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/change_log_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function change_log_add(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_change_log);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}

		if($insert){
			$do_insert = $this->model_basic->insert_all($this->tbl_change_log,$insert);
			$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'change_log'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function change_log_update(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$table_field = $this->db->list_fields($this->tbl_change_log);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}

		if($update){
			$do_update = $this->model_basic->update($this->tbl_change_log,$update,'id',$update['id']);
			$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'change_log'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function change_log_delete(){
		$this->check_login_admin();
		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_change_log,'id',$id);
		if($do_delete){
			redirect('admin_system/change_log');
		}
		else{

		}
	}

}
