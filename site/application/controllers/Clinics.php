<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clinics extends MY_Controller {

	public function __construct(){
        parent::__construct();
        //check_login_user();
        $this->load->model('common_model');
    }

    
    public function index(){
        $data = array();
        $this->data['page_title'] = 'Home';

        //Pagination
        $this->load->library('pagination');
		$config['base_url'] = site_url("clinics/index")."?";
		$config['total_rows'] = 10;
		$config['per_page'] = 10;
		
		$this->pagination->initialize($config);
		$this->data['paginacao'] = $this->pagination->create_links(); 

    }

    public function backup($fileName='db_backup.zip') {
        $this->load->dbutil();
        $backup =& $this->dbutil->backup();
        $this->load->helper('file');
        write_file(FCPATH.'/downloads/'.$fileName, $backup);
        $this->load->helper('download');
        force_download($fileName, $backup);
    }

}