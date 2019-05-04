<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class PX_Model extends CI_Model {

    function __construct() {
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

    }
}
