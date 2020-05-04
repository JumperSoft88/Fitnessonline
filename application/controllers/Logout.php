<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();  
        $this->load->helper('url'); 
        $this->load->model('auth_model');

    }

    public function index()
    {  
       // $message = "ขอบคุณที่ร่วมเป็นส่วนหนึ่งของ FitnessOnline";
        $tab = 'tab1'; 
		
		$data1 = array( 
            'tab' => $tab
            
		);
        $this->session->sess_destroy();

        // $alltrainner = $this->auth_model->getAllTraininer(); 
        // $allfitness = $this->auth_model->getAllFitness(); 
        // $this->session->set_userdata('allTrainner', $alltrainner);
		// $this->session->set_userdata('allFitness', $allfitness);
       // $this->load->view('home');
        redirect("welcome","refresh");
       //$this->load->view('home',$data1);
    }

     
}