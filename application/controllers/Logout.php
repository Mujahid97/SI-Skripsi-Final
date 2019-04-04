<?php
class Logout extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
    }
    
    function index(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
