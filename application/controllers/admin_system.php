<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_system extends PX_Controller {

	public function __construct() {
			parent::__construct();
			$this->check_login_admin();
			$this->controller_attr = array('controller' => 'admin_system','controller_name' => 'Admin System','controller_id' => 0);
		}

	public function index(){

	}

	function member(){
		$data = $this->get_app_settings();
    $data += $this->controller_attr;
	  $data += $this->get_function('Member','member');
	  $data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_member);
		$data['content'] = $this->load->view('backend/admin_system/member',$data,true);
		$this->load->view('backend/index',$data);
	}

	function member_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Member Form','member');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_member,'id_member',$id)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/member_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function member_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Member Add','member');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

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

	function member_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Member Edit','member');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Member Delete','member');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_member,'id_member',$id);
		if($do_delete){
			redirect('admin_system/member');
		}
		else{

		}
  }

	function admin(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Admin','admin');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all_left_join_1($this->tbl_admin,$this->tbl_admin.'.*,'.$this->tbl_usergroup.'.usergroup_name as hakakses',$this->tbl_usergroup,$this->tbl_admin.'.id_usergroup',$this->tbl_usergroup.'.id');
		$data['content'] = $this->load->view('backend/admin_system/admin',$data,true);
		$this->load->view('backend/index',$data);
	}

	function admin_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Admin Form','admin');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_admin,'id_admin',$id)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['data_usergroup'] = $this->model_basic->select_all($this->tbl_usergroup);
		$data['content'] = $this->load->view('backend/admin_system/admin_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function admin_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Admin Add','admin');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

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

	function admin_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Admin Edit','admin');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Admin Delete','admin');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_admin,'id_admin',$id);
		if($do_delete){
			redirect('admin_system/admin');
		}
		else{

		}
  }

	function shorten_url(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Shorten Url','shorten_url');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all_left_join_1($this->tbl_shorten_url,$this->tbl_shorten_url.'.*,'.$this->tbl_member.'.name as member_name',$this->tbl_member,$this->tbl_shorten_url.'.id_member',$this->tbl_member.'.id_member');
		$data['content'] = $this->load->view('backend/admin_system/shorten_url',$data,true);
		$this->load->view('backend/index',$data);
	}

	function shorten_url_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Shorten Url Form','shorten_url');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id_shorten_url = $this->input->post('id_shorten_url');
		if($id_shorten_url){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['data_member'] = $this->model_basic->select_all($this->tbl_member);
		$data['content'] = $this->load->view('backend/admin_system/shorten_url_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function shorten_url_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Shorten Url Add','shorten_url');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

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

	function shorten_url_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Shorten Url Edit','shorten_url');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Shorten Url Delete','shorten_url');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id_shorten_url = $this->input->post('id_shorten_url');
		$do_delete = $this->model_basic->delete($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url);
		if($do_delete){
			redirect('admin_system/shorten_url');
		}
		else{

		}
  }

	function article(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Article','article');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all_left_join_1($this->tbl_article,$this->tbl_article.'.*,'.$this->tbl_member.'.name as member_name',$this->tbl_member,$this->tbl_article.'.id_member',$this->tbl_member.'.id_member');
		$data['content'] = $this->load->view('backend/admin_system/article',$data,true);
		$this->load->view('backend/index',$data);
	}

	function article_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Article Form','article');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id_article = $this->input->post('id_article');
		if($id_article){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_article,'id_article',$id_article)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['data_member'] = $this->model_basic->select_all($this->tbl_member);
		$data['content'] = $this->load->view('backend/admin_system/article_form',$data,true);
		$this->load->view('backend/index',$data);
  }

	function article_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Article Add','article');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

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

	function article_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Article Edit','article');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Article Delete','article');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id_article = $this->input->post('id_article');
		$data_article_comment = $this->model_basic->select_where($this->tbl_article_comment,'id_article',$id_article)->result();
		foreach ($data_article_comment as $d_article_comment) {
			$do_delete_article_comment_like = $this->model_basic->delete($this->tbl_article_comment_like,'id_article_comment',$d_article_comment->id);
			$do_delete_article_comment_dislike = $this->model_basic->delete($this->tbl_article_comment_dislike,'id_article_comment',$d_article_comment->id);
		}
		$do_delete = $this->model_basic->delete($this->tbl_article,'id_article',$id_article);
		$do_delete_comment = $this->model_basic->delete($this->tbl_article_comment,'id_article',$id_article);
		$do_delete_like = $this->model_basic->delete($this->tbl_article_like,'id_article',$id_article);
		$do_delete_dislike = $this->model_basic->delete($this->tbl_article_dislike,'id_article',$id_article);
		if($do_delete){
			redirect('admin_system/article');
		}
		else{

		}
  }

	function log_user_agent(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Log User Agent','log_user_agent');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_log_user_agent);
		$data['content'] = $this->load->view('backend/admin_system/log_user_agent',$data,true);
		$this->load->view('backend/index',$data);
	}

	function log_user_agent_delete(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Log User Agent Delete','log_user_agent');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_log_user_agent,'id_log_user_agent',$id);
		if($do_delete){
			redirect('admin_system/log_user_agent');
		}
  }

	function log_user_agent_delete_all(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Log User Agent Delete','log_user_agent');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$do_delete = $this->model_basic->delete_all($this->tbl_log_user_agent);
		if($do_delete){
			redirect('admin_system/log_user_agent');
		}
  }

	function web_setting(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Setting','web_setting');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_web_setting);
		$data['content'] = $this->load->view('backend/admin_system/web_setting',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_setting_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Setting Form','web_setting');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$data['data_icon'] = $this->model_basic->select_all($this->tbl_icons);
		$id = $this->input->post('id');
		if($id){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_web_setting,'id',$id)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/web_setting_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_setting_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Setting Add','web_setting');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

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

	function web_setting_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Setting Edit','web_setting');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Alert','web_alert');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_web_alert);
		$data['content'] = $this->load->view('backend/admin_system/web_alert',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_alert_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Alert Form','web_alert');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_web_alert,'id',$id)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/web_alert_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function web_alert_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Alert Add','web_alert');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

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

	function web_alert_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Alert Edit','web_alert');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Web Alert Delete','web_alert');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_web_alert,'id',$id);
		if($do_delete){
			redirect('admin_system/web_alert');
		}
		else{

		}
  }

	function change_log(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Change Log','change_log');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_basic->select_all($this->tbl_change_log);
		$data['content'] = $this->load->view('backend/admin_system/change_log',$data,true);
		$this->load->view('backend/index',$data);
	}

	function change_log_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Change Log Form','change_log');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_change_log,'id',$id)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/change_log_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function change_log_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Change Log Add','change_log');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

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

	function change_log_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Change Log Edit','change_log');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

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
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Change Log Delete','change_log');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_change_log,'id',$id);
		if($do_delete){
			redirect('admin_system/change_log');
		}
		else{

		}
	}

	function menu(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Menu','menu');
		$data += $this->get_menu();
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['userdata'] = $this->session_admin;
		$data['data'] = $this->model_menu->get_all();
		$data['content'] = $this->load->view('backend/admin_system/menu',$data,true);
		$this->load->view('backend/index',$data);
	}

	function menu_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Menu Form','menu');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_menu,'id',$id)->row();
			$where_data_parent = array('id_parent' => 0, 'id !=' => $id);
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
			$where_data_parent = array('id_parent' => 0);
		}
		$data['data_parent'] = $this->model_basic->select_where_array($this->tbl_menu,$where_data_parent)->result();
		$data['content'] = $this->load->view('backend/admin_system/menu_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function menu_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Menu Add','menu');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

		$table_field = $this->db->list_fields($this->tbl_menu);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}
		$insert['orders'] = 0;

		if($insert){
			$do_insert = $this->model_basic->insert_all($this->tbl_menu,$insert);
			$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'menu'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function menu_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Menu Edit','menu');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

		$table_field = $this->db->list_fields($this->tbl_menu);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}

		if($update){
			$do_update = $this->model_basic->update($this->tbl_menu,$update,'id',$update['id']);
			$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'menu'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function menu_delete(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Menu Delete','menu');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_menu,'id',$id);
		if($do_delete){
			redirect('admin_system/menu');
		}
		else{

		}
	}

	function menu_orders(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Menu Orders','menu_orders');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['data'] = $this->get_all_menu();
		$data['content'] = $this->load->view('backend/admin_system/menu_orders',$data,true);
		$this->load->view('backend/index',$data);
	}

	function menu_orders_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Menu Orders Edit','menu_orders');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

  	$item = $this->input->post('item');

  	if(count($item) > 0){
  		$orders = 1;
  		$error = 0;
  		foreach ($item as $menu_id) {
  			$update['orders'] = $orders;
  			if(!$this->model_basic->update($this->tbl_menu,$update,'id',$menu_id))
  				$error++;
  			$orders++;
  		}
  		if($error < 1)
  			$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil, refresh page untuk menerapkan perubahan'));
  		else
  			$this->returnJson(array('status' => 'error','msg' => 'Kesalahan saat mengupdate data'));
  	}
  	else
  		$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
	}

	function usergroup(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Hak Akses','usergroup');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_READ');

	  $data['data'] = $this->model_usergroup->get_all();
	  $data['content'] = $this->load->view('backend/admin_system/usergroup',$data,true);
	  $this->load->view('backend/index',$data);
	}

	function usergroup_form(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Hak Akses','usergroup');
		$data += $this->get_menu();

		$data['userdata'] = $this->session_admin;
		$id = $this->input->post('id');
		if($id){
			$this->check_userakses($data['function_id'], 'ACT_UPDATE');
			$data['data'] = $this->model_basic->select_where($this->tbl_usergroup,'id',$id)->row();
		}else{
			$this->check_userakses($data['function_id'], 'ACT_CREATE');
			$data['data'] = null;
		}
		$data['content'] = $this->load->view('backend/admin_system/usergroup_form',$data,true);
		$this->load->view('backend/index',$data);
	}

	function usergroup_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Usergroup Add','usergroup');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

		$table_field = $this->db->list_fields($this->tbl_usergroup);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = $this->input->post($field);
		}

		if($insert){
			$do_insert = $this->model_basic->insert_all($this->tbl_usergroup,$insert);
			$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => 'usergroup'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function usergroup_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Usergroup Edit','usergroup');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

		$table_field = $this->db->list_fields($this->tbl_usergroup);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}

		if($update){
			$do_update = $this->model_basic->update($this->tbl_usergroup,$update,'id',$update['id']);
			$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'usergroup'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function usergroup_delete(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Usergroup Delete','usergroup');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_usergroup,'id',$id);
		if($do_delete){
			redirect('admin_system/usergroup');
		}
		else{

		}
	}

	function useraccess(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Perizinan','useraccess');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_READ');

		$data['data'] = $this->model_useraccess->get_all();
		$data['data_menu'] = $this->get_all_menu();
		$data['data_available_user'] = $this->model_useraccess->get_available_user();
		$data['content'] = $this->load->view('backend/admin_system/useraccess',$data,true);
		$this->load->view('backend/index',$data);
	}

	function useraccess_add(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Useraccess Add','useraccess');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_CREATE');

		$id_menu = $this->input->post('id_menu');
		$act_read = $this->input->post('act_read');
		$act_create = $this->input->post('act_create');
		$act_update = $this->input->post('act_update');
		$act_delete = $this->input->post('act_delete');

		if($this->input->post('id_usergroup')) {
			$error = 0;
			foreach($id_menu as $mi) {
				$data_insert = array(
					'id_usergroup' => $this->input->post('id_usergroup'),
					'id_menu' => $mi,
					'act_create' => $act_create[$mi],
					'act_read' => $act_read[$mi],
					'act_update' => $act_update[$mi],
					'act_delete' => $act_delete[$mi]
					);
				$insert = $this->model_basic->insert_all($this->tbl_useraccess,$data_insert);
				if(!$insert)
					$error++;
			}
			if($error == 0)
				$this->returnJson(array('status' => 'ok','msg' => 'Input data berhasil','redirect' => 'useraccess'));
			else
				$this->returnJson(array('status' => 'error','msg' => 'Kesalahan saat menyimpan data'));
		}
		else
			$this->returnJson(array('status' => 'error','msg' => 'Tidak ada Usergroup terpilih'));
	}

	function useraccess_get(){

		$id = $this->input->post('id');
		$data['row'] = $this->model_basic->select_where($this->tbl_useraccess,'id_usergroup',$id)->result();
		if($data['row'])
			$this->returnJson(array('status' => 'ok', 'data' => $data));
		else
			$this->returnJson(array('status' => 'error', 'msg' => 'Data tidak ditemukan'));
	}

	function useraccess_edit(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Useraccess Edit','useraccess');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses_return_json($data['function_id'], 'ACT_UPDATE');

	$id = $this->input->post('id');
	$id_menu = $this->input->post('id_menu');
	$id_useraccess = $this->input->post('id_useraccess');
	$act_read = $this->input->post('act_read');
	$act_create = $this->input->post('act_create');
	$act_update = $this->input->post('act_update');
	$act_delete = $this->input->post('act_delete');

	if($id) {
		$error = 0;
		foreach ($id_menu as $mi) {
			if(isset($id_useraccess[$mi])){
				$data_update = array(
					'act_create' => $act_create[$mi],
					'act_read' => $act_read[$mi],
					'act_update' => $act_update[$mi],
					'act_delete' => $act_delete[$mi]
					);
				$update = $this->model_basic->update($this->tbl_useraccess,$data_update,'id',$id_useraccess[$mi]);
				if(!$update)
					$error++;
			}
			else {
				$data_insert = array(
					'id_usergroup' => $id,
					'id_menu' => $mi,
					'act_read' => $act_read[$mi],
					'act_create' => $act_create[$mi],
					'act_update' => $act_update[$mi],
					'act_delete' => $act_delete[$mi]
					);
				$insert = $this->model_basic->insert_all($this->tbl_useraccess,$data_insert);
				if(!$insert)
					$error++;
			}
		}
		if($error == 0)
			$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil','redirect' => 'useraccess'));
		else
			$this->returnJson(array('status' => 'error','msg' => 'Kesalahan saat mengupdate data'));
	}
	else
		$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
	}

	function useraccess_delete(){
		$data = $this->get_app_settings();
		$data += $this->controller_attr;
		$data += $this->get_function('Useraccess Delete','useraccess');
		$data += $this->get_menu();
		$data['userdata'] = $this->session_admin;
		$this->check_userakses($data['function_id'], 'ACT_DELETE');

		$id = $this->input->post('id');
		$do_delete = $this->model_basic->delete($this->tbl_useraccess,'id_usergroup',$id);
		if($do_delete){
			redirect('admin_system/useraccess');
		}
		else{

		}
	}

}
