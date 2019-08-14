<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_system extends PX_Controller {
	public function __construct() {
			parent::__construct();
			$this->check_login_member();
		}

	public function index(){

	}

	function shorten_url(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;
		$data['shorten_url'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_member',$data['userdata']['id_member'])->result();

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/shorten_url',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function shorten_url_form(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;
		$id_shorten_url = $this->input->post('id_shorten_url');
		if($id_shorten_url){
		$data['data'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url)->row();
		if ($data['data']->id_member != $data['userdata']['id_member']) {
			redirect('error/error_403');
		}
		}else{
		$data['data'] = null;
		}

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/shorten_url_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_add(){
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

				$d = urlencode(base_url($insert['name']));
				$m = urlencode('SHORT URL ANDA SIAP DIBAGIKAN');
				$redirect = base_url('home/success?d='.$d.'&m='.$m);
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => $redirect));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function shorten_url_update(){
		$data['userdata'] = $this->session_member;
		$table_field = $this->db->list_fields($this->tbl_shorten_url);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$update['id_member'] = $data['userdata']['id_member'];
		$update['click'] = '0';

		if ($update['password'] != '0') {
			$update['password'] = $this->encrypt->encode($update['password']);
		}
		$cek_name = $this->model_basic->select_where($this->tbl_shorten_url,'name',$update['name'])->row();
		if ($cek_name != null && $update['id_shorten_url'] != $cek_name->id_shorten_url) {
			$this->returnJson(array('status' => 'error','msg' => 'Custom URL tidak tersedia!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update($this->tbl_shorten_url,$update,'id_shorten_url',$update['id_shorten_url']);

				if ($this->input->post('save_here') != NULL) {
					$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => '#save_success'));
				}else{
					$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'shorten_url'));
				}
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function shorten_url_delete(){
		$data['userdata'] = $this->session_member;
		$id_shorten_url = $this->input->post('id_shorten_url');
		$data['data'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url)->row();
		if ($data['data']->id_member == $data['userdata']['id_member']) {
			$do_delete = $this->model_basic->delete($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url);
			if($do_delete){
				redirect('member_system/shorten_url');
			}
		}	else{
			redirect('error/error_403');
		}
  }

	function profile(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/profile',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function profile_form(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;
		$id_member = $data['userdata']['id_member'];
		$data['data'] = $this->model_basic->select_where($this->tbl_member,'id_member',$id_member)->row();

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/profile_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function profile_update(){
		$data['userdata'] = $this->session_member;
		$check_password = $this->input->post('check_password');
		$table_field = $this->db->list_fields($this->tbl_member);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$update['id_member'] = $data['userdata']['id_member'];

		$check_data = $this->model_basic->select_where($this->tbl_member,'id_member',$update['id_member'])->row();
		$check_username = $this->model_basic->select_where($this->tbl_member,'username',$update['username'])->row();

		$update['password'] = $check_data->password;

		if ($check_password != $this->encrypt->decode($check_data->password)) {
			$this->returnJson(array('status' => 'error','msg' => 'Invalid Password!'));
		}else{
			if ($check_username != null && $check_username->id_member != $update['id_member']) {
				$this->returnJson(array('status' => 'error','msg' => 'Username sudah digunakan!'));
			}else{
				if($update){
					$do_update = $this->model_basic->update($this->tbl_member,$update,'id_member',$update['id_member']);
					$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => base_url('member/do_logout_login') ));
				}else{
					$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
				}
			}
		}
  }

	function password_form(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;
		$id_member = $data['userdata']['id_member'];
		$data['data'] = $this->model_basic->select_where($this->tbl_member,'id_member',$id_member)->row();

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/password_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function password_update(){
		$data['userdata'] = $this->session_member;
		$id_member = $data['userdata']['id_member'];
		$old_password = $this->input->post('old_password');
		$update = array(
			'password' => $this->encrypt->encode($this->input->post('password')),
		);

		$check_data = $this->model_basic->select_where($this->tbl_member,'id_member',$id_member)->row();

		if ($old_password != $this->encrypt->decode($check_data->password)) {
			$this->returnJson(array('status' => 'error','msg' => 'Invalid Password!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update($this->tbl_member,$update,'id_member',$id_member);
				$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => base_url('member/do_logout_login') ));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function member_delete(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;
		$id_member = $data['userdata']['id_member'];
		$data['data'] = $this->model_basic->select_where($this->tbl_member,'id_member',$id_member)->row();

		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/member_delete',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function member_delete_do(){
		$data['userdata'] = $this->session_member;
		$id_member = $data['userdata']['id_member'];
		$password = $this->input->post('password');

		$check_data = $this->model_basic->select_where($this->tbl_member,'id_member',$id_member)->row();

		if ($password != $this->encrypt->decode($check_data->password)) {
			$this->returnJson(array('status' => 'error','msg' => 'Invalid Password!'));
		}else{
			if($password){
				$do_delete = $this->model_basic->delete($this->tbl_member,'id_member',$id_member);
				$this->returnJson(array('status' => 'ok','msg' => 'Hapus data berhasil', 'redirect' => base_url('member/do_logout_login') ));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function article(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;

		$data['article'] = $this->model_basic->select_where($this->tbl_article,'id_member',$data['userdata']['id_member'])->result();
		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/article',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function article_form(){
		$data = $this->get_app_settings();
		$data['userdata'] = $this->session_member;

		$id_article = $this->input->post('id_article');
		if($id_article){
		$data['data'] = $this->model_basic->select_where($this->tbl_article,'id_article',$id_article)->row();
		if ($data['data']->id_member != $data['userdata']['id_member']) {
			redirect('error/error_403');
		}
		}else{
		$data['data'] = null;
		}
		$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/member/menu/article_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function article_add(){
		$data['userdata'] = $this->session_member;

		$table_field = $this->db->list_fields($this->tbl_article);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = htmlspecialchars($this->input->post($field));
		}
		$insert['konten'] = $this->input->post('konten');
		$insert['id_member'] = $data['userdata']['id_member'];
		$insert['click'] = '0';

		$cek_name = $this->model_basic->select_where($this->tbl_article,'name',$insert['name'])->row();
		if ($cek_name != null) {
			$this->returnJson(array('status' => 'error','msg' => 'URL Article Tidak Tersedia!'));
		}else{
			if($insert){
				$do_insert = $this->model_basic->insert_all($this->tbl_article,$insert);

				$d = urlencode(base_url('blog/'.$insert['name']));
				$m = urlencode('URL ARTICLE ANDA SIAP DIBAGIKAN');
				$redirect = base_url('home/success?d='.$d.'&m='.$m);
				$this->returnJson(array('status' => 'ok','msg' => 'Insert data berhasil', 'redirect' => $redirect));
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
	}

	function article_update(){
		$data['userdata'] = $this->session_member;

		$table_field = $this->db->list_fields($this->tbl_article);
		$update = array();
		foreach ($table_field as $field) {
			$update[$field] = $this->input->post($field);
		}
		$update['id_member'] = $data['userdata']['id_member'];
		$update['click'] = '0';

		$cek_name = $this->model_basic->select_where($this->tbl_article,'name',$update['name'])->row();
		if ($cek_name != null && $update['id_article'] != $cek_name->id_article) {
			$this->returnJson(array('status' => 'error','msg' => 'URL Article Tidak Tersedia!'));
		}else{
			if($update){
				$do_update = $this->model_basic->update($this->tbl_article,$update,'id_article',$update['id_article']);

				if ($this->input->post('save_here') != NULL) {
					$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => '#save_success'));
				}else{
					$this->returnJson(array('status' => 'ok','msg' => 'Update data berhasil', 'redirect' => 'article'));
				}
			}else{
				$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
			}
		}
  }

	function article_delete(){
		$data['userdata'] = $this->session_member;
		$id_article = $this->input->post('id_article');
		$data_article = $this->model_basic->select_where($this->tbl_article,'id_article',$id_article)->row();
		$data_article_comment = $this->model_basic->select_where($this->tbl_article_comment,'id_article',$id_article)->result();
		if ($data_article->id_member == $data['userdata']['id_member']) {
			foreach ($data_article_comment as $d_article_comment) {
				$do_delete_article_comment_like = $this->model_basic->delete($this->tbl_article_comment_like,'id_article_comment',$d_article_comment->id);
				$do_delete_article_comment_dislike = $this->model_basic->delete($this->tbl_article_comment_dislike,'id_article_comment',$d_article_comment->id);
			}
			$do_delete = $this->model_basic->delete($this->tbl_article,'id_article',$id_article);
			$do_delete_comment = $this->model_basic->delete($this->tbl_article_comment,'id_article',$id_article);
			$do_delete_like = $this->model_basic->delete($this->tbl_article_like,'id_article',$id_article);
			$do_delete_dislike = $this->model_basic->delete($this->tbl_article_dislike,'id_article',$id_article);
			if($do_delete){
				redirect('member_system/article');
			}
		}else{
			redirect('error/error_403');
		}
  }

}
