<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

    public function login(){
        if($_POST){ 
            $query = $this->login_model->validate_user();
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'name' => $row->first_name,
                        'email' =>$row->email,
                        'role' =>$row->role,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata("userdata", $this->data);
                    $url = site_url() . 'clients';
                    redirect($url);
                }
                echo json_encode(array('st'=> 1,'url'=> $url)); //--success
            } else{
                echo json_encode(array('st'=> 0)); //-- error
            }  
        }
        $this->load->view('modulos/auth/login', $this->data);
    }

    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $data['page'] = 'logout';
        $this->load->view('modulos/auth/login', $this->data);
    }

}