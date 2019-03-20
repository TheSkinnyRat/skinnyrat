<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$name = $this->uri->segment(1);

		if($name){
			$get_data = $this->model_basic->select_where($this->tbl_shorten_url,'name',$name)->row();
			if($get_data != null){
					if ($get_data->password != '0') {
						$data['data_url'] = $this->model_basic->select_where($this->tbl_shorten_url,'name',$name)->row();
						$data['content'] = $this->load->view('frontend/menu/pass',$data,true);
						$this->load->view('frontend/index',$data);
					}else{
						redirect($get_data->link);
					}
			}else{
					redirect('home/error_404');
			}
		}else{
			$data['shorten_url'] = $this->model_basic->select_all($this->tbl_shorten_url);
			$data['content'] = $this->load->view('frontend/home/main_page',$data,true);
			$this->load->view('frontend/index',$data);
		}

	}

	function pass_go(){
		$id = $this->input->post('id');
		$password = $this->input->post('password');

		$get_data = $this->model_basic->select_where($this->tbl_shorten_url,'id',$id)->row();
		$real_pass = $this->encrypt->decode($get_data->password);
		if ($real_pass == $password ) {
			$this->returnJson(array('status' => 'ok','msg' => 'Redirecting ...', 'redirect' => $get_data->link));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Invalid Password'));
			}
  }

	function error_404(){
		$data['shorten_url'] = $this->model_basic->select_all($this->tbl_shorten_url);
		$data['content'] = $this->load->view('frontend/error/404',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url(){
		$data['shorten_url'] = $this->model_basic->select_all($this->tbl_shorten_url);
		$data['content'] = $this->load->view('frontend/menu/shorten_url',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_form(){
		$id = $this->input->post('id');
		if($id){
		$data['data'] = $this->model_basic->select_where('tbl_shorten_url','id',$id)->row();
		}else{
		$data['data'] = null;
		}
		$data['content'] = $this->load->view('frontend/menu/shorten_url_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_add(){
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

	function main_page() {

		$data = $this->get_app_settings();
		$data['galeri'] = $this->model_basic->select_where($this->tbl_galeri,'status',1)->result();
		$data['navbar'] = $this->model_basic->select_all($this->tbl_navbar);
		$data['logos'] = $this->model_basic->select_where($this->tbl_logos,'status',1)->result();
		$data['services'] = $this->model_basic->select_where($this->tbl_services,'status',1)->result();
		$data['digital_printing'] = $this->model_basic->select_where($this->tbl_digital_printing,'status',1)->result();
		$data['portfolio'] = $this->model_basic->select_where($this->tbl_portfolio,'status',1)->result();
		$data['portfolio_content'] = $this->model_basic->select_where($this->tbl_portfolio_content,'status',1)->result();
		$data['about'] = $this->model_basic->select_where($this->tbl_about,'status',1)->result();
		$data['team'] = $this->model_basic->select_where($this->tbl_team,'status',1)->result();
		$data['content'] = $this->load->view('frontend/home/main_page',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function galeri_content() {

		$data = $this->get_app_settings();
//		$id = $this->input->post('id');
//		$where = array(
//			'id_parent' => $id,
//		);
		$data['data'] = $this->model_basic->select_all($this->tbl_galeri_content);
		$data['content'] = $this->load->view('frontend/galeri/galeri_content',$data,true);
		$this->load->view('frontend/index',$data);
	}

	 function test(){
		$data = $this->get_app_settings();
		$data['data'] = $this->model_basic->select_where($this->tbl_product,'status',1)->result();
		$this->load->view('frontend/test/index',$data);
    }

}
