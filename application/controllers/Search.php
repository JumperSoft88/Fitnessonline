<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();  
        $this->load->helper('url'); 
        $this->load->model('search_model');
        $this->load->model('address_model');
        
    }

    public function index()
    {  
        // $this->auth_model->getCoachByProvinceId($user_data);
        // $this->auth_model->getCoachByAmphuresId($user_data);
        // $this->auth_model->getCoachByDistrictId($user_data);
    }

    public function searchMemberByProvinceId()
    {
        $search = $this->search_model->searchMemberByProvinceId($this->input->post('provinceId'),$this->input->post('type'));
       

        $result = array( 
            "allProvince" => $search 

        );

        header('Content-Type: application/json');
        echo json_encode($result); 
 
                     
        //$this->load->view('fitnessAll',$result);
    }

    public function searchMemberByAmphureId()
    {
        $search = $this->search_model->searchMemberByAmphureId($this->input->post('amphuresId'),$this->input->post('type'));

        $result = array( 
            "allAmphure" => $search 

        );

        header('Content-Type: application/json');
        echo json_encode($result); 
 
    }

    public function searchMemberByDistrictId()
    {
        $search = $this->search_model->searchMemberByDistrictId($this->input->post('district'),$this->input->post('type'));

        $result = array( 
            "allDistrict" => $search 

        );

        header('Content-Type: application/json');
        echo json_encode($result); 
 
    }

     
}