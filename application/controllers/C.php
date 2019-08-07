<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$url = $this->uri->segment(2);

		if($url){

			$table_field = $this->db->list_fields($this->tbl_shorten_url);
			$insert = array();
			$lenght_random_string = 3;
			$insert['name'] = random_string('alnum', $lenght_random_string);
			while ($this->model_basic->select_where($this->tbl_shorten_url,'name',$insert['name'])->row() !== NULL) {
				$lenght_random_string++;
				$insert['name'] = random_string('alnum', $lenght_random_string);
			}

			$insert['link'] = urldecode($url);
			$insert['password'] = '0';
			$insert['date_created'] = date('Y-m-d H:i:s');
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$insert['id_member'] = $data['userdata']['id_member'];
			}else{
				$insert['id_member'] = '0';
			}
			$insert['click'] = '0';

			if($insert){
					$do_insert = $this->model_basic->insert_all($this->tbl_shorten_url,$insert);
					$get_id = $this->model_basic->select_where($this->tbl_shorten_url,'name',$insert['name'])->row();

					$d = urlencode(base_url($insert['name']));
					$m = urlencode('SHORT URL ANDA SIAP DIBAGIKAN');
					$id = $get_id->id_shorten_url;
					$login = 'true';
					if($this->session->userdata('member') == TRUE){
						$redirect = base_url('c?success=true'.'&d='.$d.'&m='.$m.'&id='.$id.'&login='.$login);
					}else{
						$redirect = base_url('c?success=true'.'&d='.$d.'&m='.$m);
					}
					redirect($redirect);
				}else{
					redirect(base_url('err'));
				}

		}else if($this->input->get('url')){

			$url = $this->input->get('url');

			$table_field = $this->db->list_fields($this->tbl_shorten_url);
			$insert = array();
			$lenght_random_string = 3;
			$insert['name'] = random_string('alnum', $lenght_random_string);
			while ($this->model_basic->select_where($this->tbl_shorten_url,'name',$insert['name'])->row() !== NULL) {
				$lenght_random_string++;
				$insert['name'] = random_string('alnum', $lenght_random_string);
			}

			$insert['link'] = urldecode($url);
			$insert['password'] = '0';
			$insert['date_created'] = date('Y-m-d H:i:s');
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$insert['id_member'] = $data['userdata']['id_member'];
			}else{
				$insert['id_member'] = '0';
			}
			$insert['click'] = '0';

			if($insert){
					$do_insert = $this->model_basic->insert_all($this->tbl_shorten_url,$insert);
					$get_id = $this->model_basic->select_where($this->tbl_shorten_url,'name',$insert['name'])->row();

					$d = urlencode(base_url($insert['name']));
					$m = urlencode('SHORT URL ANDA SIAP DIBAGIKAN');
					$id = $get_id->id_shorten_url;
					$login = 'true';
					if($this->session->userdata('member') == TRUE){
						$redirect = base_url('c?success=true'.'&d='.$d.'&m='.$m.'&id='.$id.'&login='.$login);
					}else{
						$redirect = base_url('c?success=true'.'&d='.$d.'&m='.$m);
					}
					redirect($redirect);
				}else{
					redirect(base_url('err'));
				}

		}else if($this->input->get('success')){
			$data = $this->get_app_settings();
			$data['d'] = $this->input->get('d');
			$data['m'] = $this->input->get('m');
			$data['id'] = $this->input->get('id');
			$data['login'] = $this->input->get('login');
			if($this->session->userdata('member') == TRUE){
				$data['userdata'] = $this->session_member;
				$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
			}else{
				$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
				$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
			}
			$data['content'] = $this->load->view('frontend/public/menu/success_c',$data,true);
			$this->load->view('frontend/index',$data);

		}else{
			redirect('error/error_404');
		}

	}

}
