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
						$data = $this->get_app_settings();
						$data['data_url'] = $this->model_basic->select_where($this->tbl_shorten_url,'name',$name)->row();
						$data['content'] = $this->load->view('frontend/public/menu/pass',$data,true);
						if($this->session->userdata('member') == TRUE){
							$data['userdata'] = $this->session_member;
							$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
							$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
						}else{
							$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
							$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
						}
						$this->load->view('frontend/index',$data);
					}else{
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
							'ket' => 'Akses Short Link = '.$name,
							'date' => date('Y-m-d H:i:s'),
							'agent' => $agent,
							'platform' => $this->agent->platform(),
							'ip_address' => $this->input->ip_address(),
							'agent_string' => $this->agent->agent_string()
						);
						$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);
						$up_click = $this->model_basic->update_one($this->tbl_shorten_url,'id_shorten_url',$get_data->id_shorten_url,'click','+1');
						redirect($get_data->link);
					}
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

	function pass_go(){
		$id_shorten_url = $this->input->post('id_shorten_url');
		$password = $this->input->post('password');

		$get_data = $this->model_basic->select_where($this->tbl_shorten_url,'id_shorten_url',$id_shorten_url)->row();
		$real_pass = $this->encrypt->decode($get_data->password);
		if ($real_pass == $password ) {
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
				'ket' => 'Akses Short Link = '.$get_data->name,
				'date' => date('Y-m-d H:i:s'),
				'agent' => $agent,
				'platform' => $this->agent->platform(),
				'ip_address' => $this->input->ip_address(),
				'agent_string' => $this->agent->agent_string()
			);
			$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);
			$up_click = $this->model_basic->update_one($this->tbl_shorten_url,'id_shorten_url',$get_data->id_shorten_url,'click','+1');
			$this->returnJson(array('status' => 'ok','msg' => 'Redirecting...', 'redirect' => $get_data->link));
		}else{
			$this->returnJson(array('status' => 'error','msg' => 'Invalid Password'));
			}
  }

	function shorten_url(){
		$data = $this->get_app_settings();
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/shorten_url');
		}else

		$data['shorten_url'] = $this->model_basic->select_where($this->tbl_shorten_url,'id_member','0')->result();
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/shorten_url',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_form(){
		$data = $this->get_app_settings();
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/shorten_url_form');
		}else

		$id_shorten_url = $this->input->post('id_shorten_url');
		if($id_shorten_url){
		$data['data'] = $this->model_basic->select_where('tbl_shorten_url','id_shorten_url',$id_shorten_url)->row();
		}else{
		$data['data'] = null;
		}
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/shorten_url_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function shorten_url_add(){
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/shorten_url_add');
		}else

		$table_field = $this->db->list_fields($this->tbl_shorten_url);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = htmlspecialchars($this->input->post($field));
		}
		$insert['id_member'] = '0';
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

	function about(){
		$data = $this->get_app_settings();
		$data['data'] = null;
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/about',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function change_log(){
		$data = $this->get_app_settings();
		$data['data'] = $this->model_basic->select_where_order($this->tbl_change_log,'status','1','id','DESC')->result();
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/change_log',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function info(){
		$data = $this->get_app_settings();
		$data['data'] = null;
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/info',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function article(){
		$data = $this->get_app_settings();
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/article');
		}else

		$data['article'] = $this->model_basic->select_where($this->tbl_article,'id_member','0')->result();
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/article',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function article_form(){
		$data = $this->get_app_settings();
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/article_form');
		}else

		$id_article = $this->input->post('id_article');
		if($id_article){
		$data['data'] = $this->model_basic->select_where($this->tbl_article,'id_article',$id_article)->row();
		}else{
		$data['data'] = null;
		}
		$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
		$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		$data['content'] = $this->load->view('frontend/public/menu/article_form',$data,true);
		$this->load->view('frontend/index',$data);
  }

	function article_add(){
		if($this->session->userdata('member') == TRUE){
			redirect('member_system/article_add');
		}else

		$table_field = $this->db->list_fields($this->tbl_article);
		$insert = array();
		foreach ($table_field as $field) {
			$insert[$field] = htmlspecialchars($this->input->post($field));
		}
		$insert['konten'] = $this->input->post('konten');
		$insert['id_article'] = '0';
		$insert['id_member'] = '0';
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

	function success(){
		$data = $this->get_app_settings();
		$data['d'] = $this->input->get('d');
		$data['m'] = $this->input->get('m');
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/success',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function wa_ctc(){
		$data = $this->get_app_settings();
		$data['data'] = null;
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
			'ket' => 'Akses WA CTC',
			'date' => date('Y-m-d H:i:s'),
			'agent' => $agent,
			'platform' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address(),
			'agent_string' => $this->agent->agent_string()
		);
		$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);
		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/wa_ctc_form',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function wa_ctc_go(){
		$no_wa = $this->input->post('no_wa');
		$isi_pesan = urlencode($this->input->post('isi_pesan'));
		if (!$no_wa && !$isi_pesan) {
			$this->returnJson(array('status' => 'error','msg' => 'Ini Salah Satu Form'));
		}else if (!$no_wa) {
			$link = "https://wa.me?text=".$isi_pesan;
		}else{
			$link = "https://wa.me/".$no_wa."?text=".$isi_pesan;
		}

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
			'ket' => 'Create WA CTC = '.$link,
			'date' => date('Y-m-d H:i:s'),
			'agent' => $agent,
			'platform' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address(),
			'agent_string' => $this->agent->agent_string()
		);
		$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);

		$d = urlencode($link);
		$m = urlencode('LINK WA CLICK TO CHAT ANDA SIAP DIBAGIKAN');
		$redirect = base_url('home/success?d='.$d.'&m='.$m);
		$this->returnJson(array('status' => 'ok','msg' => 'Redirecting...', 'redirect' => $redirect));
	}

	function wa_cws(){
		$data = $this->get_app_settings();
		$data['data'] = null;
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
			'ket' => 'Akses WA CWS',
			'date' => date('Y-m-d H:i:s'),
			'agent' => $agent,
			'platform' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address(),
			'agent_string' => $this->agent->agent_string()
		);
		$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);

		if($this->session->userdata('member') == TRUE){
			$data['userdata'] = $this->session_member;
			$data['sidebar'] = $this->load->view('frontend/member/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/member/topbar',$data,true);
		}else{
			$data['sidebar'] = $this->load->view('frontend/public/sidebar',$data,true);
			$data['topbar'] = $this->load->view('frontend/public/topbar',$data,true);
		}
		$data['content'] = $this->load->view('frontend/public/menu/wa_cws_form',$data,true);
		$this->load->view('frontend/index',$data);
	}

	function wa_cws_go(){
		$no_wa = $this->input->post('no_wa');
		$link = "https://wa.me/".$no_wa;

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
			'ket' => 'Create WA CWS = '.$link,
			'date' => date('Y-m-d H:i:s'),
			'agent' => $agent,
			'platform' => $this->agent->platform(),
			'ip_address' => $this->input->ip_address(),
			'agent_string' => $this->agent->agent_string()
		);
		$insert_log_user_agent = $this->model_basic->insert_all($this->tbl_log_user_agent,$data_agent);

		$redirect = $link;
		$this->returnJson(array('status' => 'ok','msg' => 'Opening Whatsapp...', 'redirect' => $redirect));
	}

	function get_info(){
		$data = $this->get_app_settings();
		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}

		echo "Di akses dari :<br/>";
		echo "Browser = ". $agent . "<br/>";
		echo "Sistem Operasi = " . $this->agent->platform() ."<br/>"; // Platform info (Windows, Linux, Mac, etc.)
		//ip hanya muncul pada hosting
		echo "IP = " . $this->input->ip_address();
	}

}
