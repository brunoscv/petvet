<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

	public $data;

	public function __construct() {
		parent::__construct();
		
		// $this->form_validation->set_error_delimiters('<em class="error">', '</em>');
		$this->data['msg_error'] 	= $this->session->flashdata("msg_error");
		$this->data['msg_success'] 	= $this->session->flashdata("msg_success");
    }

    protected function _auth(){
		#return true;
        $this->data['userdata'] = $this->session->userdata('userdata');
        if( !$this->data['userdata'] ){
			redirect("auth/login");
        }
    }
}