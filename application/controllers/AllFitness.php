<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AllFitness extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();  
        $this->load->helper('url'); 
        $this->load->model('address_model');
        $this->load->model('auth_model');
        $this->load->model('search_model');

    }

    public function index()
    {  

        $provinces = $this->address_model->getProvince();
        $allFitness = $this->search_model->getAllFitness();
 

        $data = array(
            'provinces' => $provinces, 
            'allFitness' => $allFitness
        );

                     
        $this->load->view('fitnessAll',$data);
    }
 
}