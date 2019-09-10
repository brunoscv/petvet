<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->_auth();
        $this->load->model('common_model');
        $this->load->model('clients_model');
    }

    
    public function index(){
        $data = array();
        $this->data['page_title'] = 'Área do Cliente';

        $this->load->view('modulos/clients/header');
        $this->load->view('modulos/clients/index', $this->data);
        $this->load->view('modulos/clients/footer');
      
    }

    public function backup($fileName='db_backup.zip'){
        $this->load->dbutil();
        $backup =& $this->dbutil->backup();
        $this->load->helper('file');
        write_file(FCPATH.'/downloads/'.$fileName, $backup);
        $this->load->helper('download');
        force_download($fileName, $backup);
    }

}