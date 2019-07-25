<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_system extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

	}

	function article_like(){
		if($this->session->userdata('member') == FALSE){
			redirect(base_url('member/login'));
		}
		$data['userdata'] = $this->session_member;
		$insert['id_article'] = $this->input->post('id');
		$insert['id_member'] = $data['userdata']['id_member'];

		if($insert){
			$get_user_like = $this->model_basic->select_where_array($this->tbl_article_like,array('id_article' => $insert['id_article'], 'id_member' => $insert['id_member']))->num_rows();
			if ($get_user_like > 0) {
				$do_delete = $this->model_basic->delete_array($this->tbl_article_like,array('id_article' => $insert['id_article'], 'id_member' => $insert['id_member']));
			}else {
				$do_insert = $this->model_basic->insert_all($this->tbl_article_like,$insert);
			}
			$like = $this->model_basic->count_where($this->tbl_article_like,'id_article',$insert['id_article']);

			$this->returnJson(array('status' => 'ok','like' => $like));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
  }

	function article_dislike(){
		if($this->session->userdata('member') == FALSE){
			redirect(base_url('member/login'));
		}
		$data['userdata'] = $this->session_member;
		$insert['id_article'] = $this->input->post('id');
		$insert['id_member'] = $data['userdata']['id_member'];

		if($insert){
			$get_user_dislike = $this->model_basic->select_where_array($this->tbl_article_dislike,array('id_article' => $insert['id_article'], 'id_member' => $insert['id_member']))->num_rows();
			if ($get_user_dislike > 0) {
				$do_delete = $this->model_basic->delete_array($this->tbl_article_dislike,array('id_article' => $insert['id_article'], 'id_member' => $insert['id_member']));
			}else {
				$do_insert = $this->model_basic->insert_all($this->tbl_article_dislike,$insert);
			}
			$dislike = $this->model_basic->count_where($this->tbl_article_dislike,'id_article',$insert['id_article']);

			$this->returnJson(array('status' => 'ok','dislike' => $dislike));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
  }

	function comment_add(){
		if($this->session->userdata('member') == FALSE){
			redirect(base_url('member/login'));
		}
		$data['userdata'] = $this->session_member;
		$table_field = $this->db->list_fields($this->tbl_article_comment);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = htmlspecialchars($this->input->post($field));
		}
		$insert['id'] = '0';
		$insert['id_member'] = $data['userdata']['id_member'];

		if($insert){
			$do_insert = $this->model_basic->insert_all($this->tbl_article_comment,$insert);

			$this->returnJson(array('status' => 'ok'));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
  }

	function comment_delete(){
		if($this->session->userdata('member') == FALSE){
			redirect(base_url('member/login'));
		}
		$data['userdata'] = $this->session_member;
		$id = $this->input->post('id');
		$id_article = $this->input->post('id_article');
		$data['data'] = $this->model_basic->select_where($this->tbl_article_comment,'id',$id)->row();
		$data_article = $this->model_basic->select_where($this->tbl_article,'id_article',$id_article)->row();
		if ($data['data']->id_member == $data['userdata']['id_member']) {
			$do_delete = $this->model_basic->delete($this->tbl_article_comment,'id',$id);
			$data_parent = $this->model_basic->select_where($this->tbl_article_comment,'id_parent',$id)->result();
			foreach ($data_parent as $d_parent) {
				$do_delete_like_parent = $this->model_basic->delete($this->tbl_article_comment_like,'id_article_comment',$d_parent->id);
				$do_delete_dislike_parent = $this->model_basic->delete($this->tbl_article_comment_dislike,'id_article_comment',$d_parent->id);
			}
			$do_delete_parent = $this->model_basic->delete($this->tbl_article_comment,'id_parent',$id);
			$do_delete_like = $this->model_basic->delete($this->tbl_article_comment_like,'id_article_comment',$id);
			$do_delete_dislike = $this->model_basic->delete($this->tbl_article_comment_dislike,'id_article_comment',$id);
			$this->returnJson(array('status' => 'ok'));
		}else{
			redirect('error/error_403');
		}
	}

	function comment_delete_parent(){
		if($this->session->userdata('member') == FALSE){
			redirect(base_url('member/login'));
		}
		$data['userdata'] = $this->session_member;
		$id = $this->input->post('id');
		$id_article = $this->input->post('id_article');
		$data['data'] = $this->model_basic->select_where($this->tbl_article_comment,'id',$id)->row();
		$data_article = $this->model_basic->select_where($this->tbl_article,'id_article',$id_article)->row();
		if ($data['data']->id_member == $data['userdata']['id_member']) {
			$do_delete = $this->model_basic->delete($this->tbl_article_comment,'id',$id);
			$do_delete_like = $this->model_basic->delete($this->tbl_article_comment_like,'id_article_comment',$id);
			$do_delete_dislike = $this->model_basic->delete($this->tbl_article_comment_dislike,'id_article_comment',$id);
			$this->returnJson(array('status' => 'ok'));
		}else{
			redirect('error/error_403');
		}
	}

	function comment_like(){
		if($this->session->userdata('member') == FALSE){
			redirect(base_url('member/login'));
		}
		$data['userdata'] = $this->session_member;
		$insert['id_article_comment'] = $this->input->post('id');
		$insert['id_member'] = $data['userdata']['id_member'];

		if($insert){
			$get_user_like = $this->model_basic->select_where_array($this->tbl_article_comment_like,array('id_article_comment' => $insert['id_article_comment'], 'id_member' => $insert['id_member']))->num_rows();
			if ($get_user_like > 0) {
				$do_delete = $this->model_basic->delete_array($this->tbl_article_comment_like,array('id_article_comment' => $insert['id_article_comment'], 'id_member' => $insert['id_member']));
			}else {
				$do_insert = $this->model_basic->insert_all($this->tbl_article_comment_like,$insert);
			}
			$like = $this->model_basic->count_where($this->tbl_article_comment_like,'id_article_comment',$insert['id_article_comment']);

			$this->returnJson(array('status' => 'ok','like' => $like));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function comment_dislike(){
		if($this->session->userdata('member') == FALSE){
			redirect(base_url('member/login'));
		}
		$data['userdata'] = $this->session_member;
		$insert['id_article_comment'] = $this->input->post('id');
		$insert['id_member'] = $data['userdata']['id_member'];

		if($insert){
			$get_user_dislike = $this->model_basic->select_where_array($this->tbl_article_comment_dislike,array('id_article_comment' => $insert['id_article_comment'], 'id_member' => $insert['id_member']))->num_rows();
			if ($get_user_dislike > 0) {
				$do_delete = $this->model_basic->delete_array($this->tbl_article_comment_dislike,array('id_article_comment' => $insert['id_article_comment'], 'id_member' => $insert['id_member']));
			}else {
				$do_insert = $this->model_basic->insert_all($this->tbl_article_comment_dislike,$insert);
			}
			$dislike = $this->model_basic->count_where($this->tbl_article_comment_dislike,'id_article_comment',$insert['id_article_comment']);

			$this->returnJson(array('status' => 'ok','dislike' => $dislike));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Periksa kembali form'));
		}
	}

	function article_like_show(){
		$id = $this->input->get('id');
		$id = $this->encrypt->decode($id);

		if($id){
			$data = $this->get_app_settings();
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
			}else{
				$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
			}
			$data['ref'] = $this->input->get('ref');
			$data['header'] = 'Article Like';
			$data['data'] = $this->model_basic->select_where_join($this->tbl_article_like,'*',$this->tbl_article_like.'.id_article',$id,$this->tbl_member,$this->tbl_article_like.'.id_member',$this->tbl_member.'.id_member')->result();
			$data['content'] = $this->load->view('frontend/public/menu/like_dislike_show',$data,true);
			$this->load->view('frontend/index',$data);
		}else{
			redirect(base_url('error/error_404'));
		}
  }

	function article_dislike_show(){
		$id = $this->input->get('id');
		$id = $this->encrypt->decode($id);

		if($id){
			$data = $this->get_app_settings();
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
			}else{
				$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
			}
			$data['ref'] = $this->input->get('ref');
			$data['header'] = 'Article Dislike';
			$data['data'] = $this->model_basic->select_where_join($this->tbl_article_dislike,'*',$this->tbl_article_dislike.'.id_article',$id,$this->tbl_member,$this->tbl_article_dislike.'.id_member',$this->tbl_member.'.id_member')->result();
			$data['content'] = $this->load->view('frontend/public/menu/like_dislike_show',$data,true);
			$this->load->view('frontend/index',$data);
		}else{
			redirect(base_url('error/error_404'));
		}
  }

	function comment_like_show(){
		$id = $this->input->get('id');
		$id = $this->encrypt->decode($id);

		if($id){
			$data = $this->get_app_settings();
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
			}else{
				$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
			}
			$data['ref'] = $this->input->get('ref');
			$data['header'] = 'Comment Like';
			$data['data'] = $this->model_basic->select_where_join($this->tbl_article_comment_like,'*',$this->tbl_article_comment_like.'.id_article_comment',$id,$this->tbl_member,$this->tbl_article_comment_like.'.id_member',$this->tbl_member.'.id_member')->result();
			$data['content'] = $this->load->view('frontend/public/menu/like_dislike_show',$data,true);
			$this->load->view('frontend/index',$data);
		}else{
			redirect(base_url('error/error_404'));
		}
  }

	function comment_dislike_show(){
		$id = $this->input->get('id');
		$id = $this->encrypt->decode($id);

		if($id){
			$data = $this->get_app_settings();
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
			}else{
				$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
			}
			$data['ref'] = $this->input->get('ref');
			$data['header'] = 'Comment Dislike';
			$data['data'] = $this->model_basic->select_where_join($this->tbl_article_comment_dislike,'*',$this->tbl_article_comment_dislike.'.id_article_comment',$id,$this->tbl_member,$this->tbl_article_comment_dislike.'.id_member',$this->tbl_member.'.id_member')->result();
			$data['content'] = $this->load->view('frontend/public/menu/like_dislike_show',$data,true);
			$this->load->view('frontend/index',$data);
		}else{
			redirect(base_url('error/error_404'));
		}
  }

}
