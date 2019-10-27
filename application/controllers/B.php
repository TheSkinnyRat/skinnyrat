<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B extends PX_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {

		$name = $this->uri->segment(2);

		if ($name) {
			redirect('blog/'.$name);
		}else {
			redirect('blog');
		}

	}

}
