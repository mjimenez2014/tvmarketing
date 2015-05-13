<?php

class Session {
    
    private $CI;
	private $white_list;
    
    function __construct() {
        $this->CI = get_instance();
		$this->CI->load->library("session");
		$this->white_list = array('login','site');
    }
    
    function check_session() {
    	if (!$this->CI->session->userdata('logged_in') && !in_array($this->CI->router->fetch_class(), $this->white_list)) {
    		redirect('/admin/login');
    	}
    }
}  