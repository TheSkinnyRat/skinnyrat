<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PX_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// DEFAULT TIME ZONE
		date_default_timezone_set('Asia/Jakarta');
		// TABLE
		$this->tbl_prefix = 'px_';
		$this->tbl_shorten_url = $this->tbl_prefix.'shorten_url';
		$this->tbl_member = $this->tbl_prefix.'member';
		$this->tbl_admin = $this->tbl_prefix.'admin';
		$this->tbl_article = $this->tbl_prefix.'article';
		$this->tbl_log_user_agent = $this->tbl_prefix.'log_user_agent';
		$this->tbl_icons = $this->tbl_prefix.'icons';
		$this->tbl_web_setting = $this->tbl_prefix.'web_setting';
		$this->tbl_web_alert = $this->tbl_prefix.'web_alert';
		$this->tbl_change_log = $this->tbl_prefix.'change_log';
		$this->tbl_menu = $this->tbl_prefix.'menu';
		$this->tbl_usergroup = $this->tbl_prefix.'usergroup';
		$this->tbl_useraccess = $this->tbl_prefix.'useraccess';

		// MODELS
		$this->load->model('model_basic');
		$this->load->model('model_menu');
		$this->load->model('model_useraccess');
		$this->load->model('model_usergroup');

		// sessions
		if($this->session->userdata('admin') != FALSE)
			$this->session_admin = $this->session->userdata('admin');
		else{
			$this->session_admin = array(
				'admin_id' => 0,
				'username' => 'GUEST',
				'password' => ' ',
				'realname' => 'GUEST',
				'email' => 'GUEST@LOCAL.DEV',
				'id_usergroup' => 0,
				'name_usergroup' => 'GUEST',
				'photo' => 'THUMB.png'
				);
		}
		if($this->session->userdata('member') != FALSE)
			$this->session_member = $this->session->userdata('member');
		else{
			$this->session_member = FALSE;
		}
	}
	function get_app_settings() {
		$a_row = $this->model_basic->select_all_limit($this->tbl_web_setting,1)->row();
		$data['app_alert'] = $this->model_basic->select_where($this->tbl_web_alert,'status','1')->result();
		$data['app_title'] = $a_row->title;
		$data['app_name'] = $a_row->name;
		$data['app_icon'] = $a_row->icon;
		$data['app_version'] = $a_row->version;
		$data['app_favicon'] = $a_row->favicon;
		return $data;
	}
	function get_function($name,$function){
		$data['function_name'] = $name;
		$data['function'] = $function;
		$data['function_form'] = $function.'_form';
		$data['function_add'] = $function.'_add';
		$data['function_edit'] = $function.'_edit';
		$data['function_delete'] = $function.'_delete';
		$data['function_get'] = $function.'_get';
		$menu_id = $this->model_basic->select_where($this->tbl_menu,'target',$function)->row();
		if($menu_id)
			$data['function_id'] = $menu_id->id;
		else
			$data['function_id'] = 0;
		return $data;
	}
	function get_menu()
	{
		$menu = $this->model_menu->get_menu_bar($this->session_admin['id_usergroup']);
		$submenu = $this->model_menu->get_sub_menu($this->session_admin['id_usergroup']);
		$data = array();
		foreach ($menu as $m) {
			$data[$m->id_menu] = $m;
			$m->submenu = array();
		}
		foreach ($submenu as $sm) {
			$data[$sm->id_parent]->submenu[] = $sm;
		}
		$data['menu'] = $data;
		return $data;
	}
	function get_all_menu()
	{
		$menu = $this->model_basic->select_where_order($this->tbl_menu,'id_parent','0','orders','ASC')->result();
		$submenu = $this->model_basic->select_where_order($this->tbl_menu,'id_parent >','0','orders','ASC')->result();
		$data = array();
		foreach ($menu as $m) {
			$data[$m->id] = $m;
			$m->submenu = array();
		}
		foreach ($submenu as $sm) {
			$data[$sm->id_parent]->submenu[] = $sm;
		}
		return $data;
	}
	function check_login_admin(){
		if($this->session->userdata('admin') == FALSE){
			redirect('admin');
		}
		else
			return true;
	}
	function check_login_member(){
		if($this->session->userdata('member') == FALSE){
			redirect('member');
		}
		else
			return true;
	}
	function check_userakses($menu_id, $function, $user = 'admin')
	{
		if($user == 'admin')
			$group_id = $this->session_admin['id_usergroup'];
		if($user == 'member')
			$group_id = $this->session->userdata['member']['group_id'];
		$access = $this->model_useraccess->get_useraccess($group_id, $menu_id);
		switch ($function)
		{
			case 1:
				if($access->act_read == 1)
					return TRUE;
				else
					redirect('admin/error_403');
				break;
			case 2:
				if($access->act_create == 1)
					return TRUE;
				else
					redirect('admin/error_403');
				break;
			case 3:
				if($access->act_update == 1)
					return TRUE;
				else
					redirect('admin/error_403');
				break;
			case 4:
				if($access->act_delete == 1)
					return TRUE;
				else
					redirect('admin/error_403');
				break;
		}
	}

	function check_userakses_return_json($menu_id, $function, $user = 'admin')
	{
		if($user == 'admin')
			$group_id = $this->session_admin['id_usergroup'];
		if($user == 'member')
			$group_id = $this->session->userdata['member']['group_id'];
		$access = $this->model_useraccess->get_useraccess($group_id, $menu_id);
		switch ($function)
		{
			case 1:
				if($access->act_read == 1)
					return TRUE;
				else
					$this->returnJson(array('status' => 'error','msg' => 'ACCESS DENIED - You do not have permission to access this action'));
				break;
			case 2:
				if($access->act_create == 1)
					return TRUE;
				else
					$this->returnJson(array('status' => 'error','msg' => 'ACCESS DENIED - You do not have permission to access this action'));
				break;
			case 3:
				if($access->act_update == 1)
					return TRUE;
				else
					$this->returnJson(array('status' => 'error','msg' => 'ACCESS DENIED - You do not have permission to access this action'));
				break;
			case 4:
				if($access->act_delete == 1)
					return TRUE;
				else
					$this->returnJson(array('status' => 'error','msg' => 'ACCESS DENIED - You do not have permission to access this action'));
				break;
		}
	}

	function delete_temp($folder){
		if($this->session->userdata($folder) != FALSE){
			$temp_folder = $this->session->userdata($folder);
			$files = glob(FCPATH . "assets/uploads/temp/".$temp_folder."/{,.}*", GLOB_BRACE);
			foreach($files as $file){
				if(is_file($file))
					@unlink($file);
			}
			@rmdir(FCPATH . "assets/uploads/temp/".$temp_folder);
			$this->session->unset_userdata($folder);
		}
	}
	function delete_folder($folder){
		$files = glob(FCPATH . "assets/uploads/".$folder."/{,.}*", GLOB_BRACE);
		foreach($files as $file){
			if(is_file($file))
				@unlink($file);
		}
		@rmdir(FCPATH . "assets/uploads/".$folder);
	}
	function format_log(){
		$log['id_log_type'];
		$log['id_user'];
		$log['desc'];
		$log['date_created'];
	}
	function save_log($data){
		if($this->model_basic->insert_all($this->tbl_logs,$data))
			return true;
		else
			return false;
	}
	function returnJson($msg){
		echo json_encode($msg);
		exit;
	}
	function get_tags($tags,$target,$action){
		$tags = explode(',', $tags);
		$data_insert = array();
		foreach ($tags as $tag) {
			$check = $this->model_basic->select_where($this->tbl_tags,'tags',$tag)->num_rows();
			if($check < 1){
				$data['tags'] = $tag;
				$data[$target] = 1;
				array_push($data_insert, $data);
			}
			else{
				$update = $this->model_basic->update($this->tbl_tags,'tags',$tag,$target,$action);
			}
		}
		if(count($data_insert) > 0){
			$do_insert = $this->model_basic->insert_all_batch($this->tbl_tags,$data_insert);
		}
	}
	function createURL($string){
	    $string = strtolower($string);
	    $string = html_entity_decode($string);
	    $string = str_replace(array('ä','ü','ö','ß'),array('ae','ue','oe','ss'),$string);
	    $string = preg_replace('#[^\w\säüöß]#',null,$string);
	    $string = preg_replace('#[\s]{2,}#',' ',$string);
	    $string = str_replace(array(' '),array('-'),$string);
	    return $string;
	}
}
