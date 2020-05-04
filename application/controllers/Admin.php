<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();  
        $this->load->helper('url'); 
        $this->load->model('admin_model');

    }

    public function index()
    {  
        $allMember = $this->admin_model->getAllMember();

        $data = array(
			'allMember' =>  $allMember 
		);

        $this->load->view('admin',$data); 
    }

     
}