<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$name = $this->uri->segment(2);

		if($name){
			$data = $this->get_app_settings();
			$get_data = $this->model_basic->select_where($this->tbl_article,'name',$name)->row();
			if($get_data != null){
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
					'ket' => 'Akses Article = '.$name,
					'date' => date('Y-m-d H:i:s'),
					'agent' => $agent,
					'platform' => $this->agent->platform(),
					'ip_address' => $this->input->ip_address(),
					'agent_string' => $this->agent->agent_string()
				);
				$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);
				$up_click = $this->model_basic->update_one($this->tbl_article,'id_article',$get_data->id_article,'click','+1');
				$data['data'] = $this->model_basic->select_where($this->tbl_article,'id_article',$get_data->id_article)->row();
				$data['like'] = $this->model_basic->count_where($this->tbl_article_like,'id_article',$data['data']->id_article);
				$data['dislike'] = $this->model_basic->count_where($this->tbl_article_dislike,'id_article',$data['data']->id_article);
				$data['comment_count'] = $this->model_basic->count_where($this->tbl_article_comment,'id_article',$data['data']->id_article);
				$data['comment'] = $this->model_basic->select_where_array_join_1_order($this->tbl_article_comment,$this->tbl_article_comment.'.*,'.$this->tbl_member.'.name,'.$this->tbl_member.'.username',array('id_article' => $data['data']->id_article, 'id_parent' => '0'),$this->tbl_member,$this->tbl_article_comment.'.id_member',$this->tbl_member.'.id_member','date','ASC')->result();
				$data['comment_parent'] = $this->model_basic->select_where_join_1_order($this->tbl_article_comment,$this->tbl_article_comment.'.*,'.$this->tbl_member.'.name,'.$this->tbl_member.'.username','id_parent >','0',$this->tbl_member,$this->tbl_article_comment.'.id_member',$this->tbl_member.'.id_member','date','ASC')->result();
				foreach ($data['comment'] as $data_comment) {
					$data['comment_like_'.$data_comment->id] = $this->model_basic->count_where($this->tbl_article_comment_like,'id_article_comment',$data_comment->id);
					$data['comment_dislike_'.$data_comment->id] = $this->model_basic->count_where($this->tbl_article_comment_dislike,'id_article_comment',$data_comment->id);
					if($this->session->userdata('member') == TRUE){
						$data['userdata'] = $this->session_member;
						$get_user_comment_like = $this->model_basic->select_where_array($this->tbl_article_comment_like,array('id_article_comment' => $data_comment->id, 'id_member' => $data['userdata']['id_member']))->num_rows();
						if ($get_user_comment_like > 0) {
							$data['user_comment_like_'.$data_comment->id] = TRUE;
						}else {
							$data['user_comment_like_'.$data_comment->id] = FALSE;
						}
						$get_user_comment_dislike = $this->model_basic->select_where_array($this->tbl_article_comment_dislike,array('id_article_comment' => $data_comment->id, 'id_member' => $data['userdata']['id_member']))->num_rows();
						if ($get_user_comment_dislike > 0) {
							$data['user_comment_dislike_'.$data_comment->id] = TRUE;
						}else {
							$data['user_comment_dislike_'.$data_comment->id] = FALSE;
						}
					}
				}
				foreach ($data['comment_parent'] as $data_comment_parent) {
					$data['comment_like_'.$data_comment_parent->id] = $this->model_basic->count_where($this->tbl_article_comment_like,'id_article_comment',$data_comment_parent->id);
					$data['comment_dislike_'.$data_comment_parent->id] = $this->model_basic->count_where($this->tbl_article_comment_dislike,'id_article_comment',$data_comment_parent->id);
					if($this->session->userdata('member') == TRUE){
						$data['userdata'] = $this->session_member;
						$get_user_comment_like = $this->model_basic->select_where_array($this->tbl_article_comment_like,array('id_article_comment' => $data_comment_parent->id, 'id_member' => $data['userdata']['id_member']))->num_rows();
						if ($get_user_comment_like > 0) {
							$data['user_comment_like_'.$data_comment_parent->id] = TRUE;
						}else {
							$data['user_comment_like_'.$data_comment_parent->id] = FALSE;
						}
						$get_user_comment_dislike = $this->model_basic->select_where_array($this->tbl_article_comment_dislike,array('id_article_comment' => $data_comment_parent->id, 'id_member' => $data['userdata']['id_member']))->num_rows();
						if ($get_user_comment_dislike > 0) {
							$data['user_comment_dislike_'.$data_comment_parent->id] = TRUE;
						}else {
							$data['user_comment_dislike_'.$data_comment_parent->id] = FALSE;
						}
					}
				}
				if ($data['data']->id_member != 0) {
					$data['data_name'] = $this->model_basic->select_where($this->tbl_member,'id_member',$data['data']->id_member)->row();
				}
				if($this->session->userdata('member') == TRUE){
					$data['userdata'] = $this->session_member;
					$get_user_like = $this->model_basic->select_where_array($this->tbl_article_like,array('id_article' => $data['data']->id_article, 'id_member' => $data['userdata']['id_member']))->num_rows();
					if ($get_user_like > 0) {
						$data['user_like'] = TRUE;
					}else {
						$data['user_like'] = FALSE;
					}
					$get_user_dislike = $this->model_basic->select_where_array($this->tbl_article_dislike,array('id_article' => $data['data']->id_article, 'id_member' => $data['userdata']['id_member']))->num_rows();
					if ($get_user_dislike > 0) {
						$data['user_dislike'] = TRUE;
					}else {
						$data['user_dislike'] = FALSE;
					}
					$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
					$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
				}else{
					$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
					$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
				}
				$data['article_rand'] = $this->model_basic->select_rand_where_limit($this->tbl_article,'private','0','3')->result();
				if ($data['data']->password != '0') {
					$data['content'] = $this->load->view('frontend/public/menu/blog_pass',$data,true);
				}else{
					$data['content'] = $this->load->view('frontend/public/menu/blog',$data,true);
				}
				$this->load->view('frontend/index_blog',$data);
			}else{
					redirect('error/error_404');
			}
		}else{
			$data = $this->get_app_settings();
			$data['count_tbl_shorten_url'] = $this->model_basic->get_count($this->tbl_shorten_url);
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
				$data['content'] = $this->load->view('frontend/member/menu/main_page',$data,true);
			}else{
				$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
				$data['content'] = $this->load->view('frontend/public/menu/main_page',$data,true);
			}
			$this->load->view('frontend/index',$data);
		}

	}

}
