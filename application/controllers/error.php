<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends PX_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		redirect('error/error_404');
	}

	function error_404(){
		$this->load->view('error/404');
  }

}
