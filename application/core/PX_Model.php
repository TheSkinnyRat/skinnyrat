<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class PX_Model extends CI_Model {

    function __construct() {
        parent::__construct();
		// DEFAULT TIME ZONE
		date_default_timezone_set('Asia/Jakarta');
		// TABLE
		$this->tbl_prefix = 'px_';
		$this->tbl_shorten_url = $this->tbl_prefix.'shorten_url';

    }
}
