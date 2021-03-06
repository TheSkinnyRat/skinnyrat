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
    $this->tbl_icons = $this->tbl_prefix.'icons';
    $this->tbl_web_setting = $this->tbl_prefix.'web_setting';
    $this->tbl_web_alert = $this->tbl_prefix.'web_alert';
		$this->tbl_change_log = $this->tbl_prefix.'change_log';
    $this->tbl_menu = $this->tbl_prefix.'menu';
    $this->tbl_usergroup = $this->tbl_prefix.'usergroup';
    $this->tbl_useraccess = $this->tbl_prefix.'useraccess';
    $this->tbl_article_like = $this->tbl_prefix.'article_like';
    $this->tbl_article_dislike = $this->tbl_prefix.'article_dislike';
		$this->tbl_article_comment = $this->tbl_prefix.'article_comment';
    $this->tbl_article_comment_like = $this->tbl_prefix.'article_comment_like';
		$this->tbl_article_comment_dislike = $this->tbl_prefix.'article_comment_dislike';

    }
}
