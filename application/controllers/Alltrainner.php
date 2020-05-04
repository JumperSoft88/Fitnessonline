<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Alltrainner extends CI_Controller {

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
        $allTrainner = $this->search_model->getAllTrainner();

        $data = array(
            'provinces' => $provinces, 
            'allTrainner' => $allTrainner
        );

      
                     
        $this->load->view('trainnerAll',$data);
    }


    public function getTraininerById()
    {
        $fullname = "";
        $telephone = "";
        $address = "";
        $line = "";
        $facebook = "";
        $ig = "";
        $view = "";
        $star = "";
        $img_profile = "";

        $first_name = "";
        $last_name = "";
 
        $province = "";
        $province_name = "";

        $province = "";
        $province_name = "";
        $amphur = "";
        $amphur_name = "";
        $district = "";
        $district_name = "";

        $id = $this->input->post('id');
        

        $trainner = $this->auth_model->getTraininerById($id); 

        $portfolio = $this->search_model->getPortfolioById($id); 

        if($trainner[0]->first_name != null){
            $first_name = $trainner[0]->first_name;
        }

        if($trainner[0]->last_name != null){
            $last_name = $trainner[0]->last_name;
        }

        if($trainner[0]->fullname != null){
            $fullname = $trainner[0]->fullname;
        }

        if($trainner[0]->telephone != null){
            $telephone = $trainner[0]->telephone;
        }

        if($trainner[0]->address != null){
            $address = $trainner[0]->address;
        }

        if($trainner[0]->line != null){
            $line = $trainner[0]->line;
        }

        if($trainner[0]->facebook != null){
            $facebook = $trainner[0]->facebook;
        }

        if($trainner[0]->ig != null){
            $ig = $trainner[0]->ig;
        }

        if($trainner[0]->view != null){
            $view = $trainner[0]->view;
        }

        if($trainner[0]->star != null){
            $star = $trainner[0]->star;
        }

        if($trainner[0]->img_profile != null){
            $img_profile = $trainner[0]->img_profile;
        }
    
        // if(!empty($trainner[0]->provinceId)){
        //     if($trainner[0]->provinceId != null){
        //         $province = $this->address_model->getProvinceById($trainner[0]->$provinceId);
        //         $province_name =  $locale_province[0]->name_th; 
        //     }
        // }
       
        // if(!empty($trainner[0]->amphureId)){
        //     if($trainner[0]->amphureId != null){
        //         $amphur = $this->address_model->getAmphuresById($trainner[0]->$amphureId);
        //         $amphur_name = $locale_amphur[0]->name_th;
        //     }
        // }
        
        // if(!empty($trainner[0]->districtId)){
        //     if($trainner[0]->districtId != null){
        //         $district = $this->address_model->getDistrictById($trainner[0]->districtId);
        //         $district_name = $locale_district[0]->name_th;
        //     }
        // }
         
        $arr = array(
            'username' =>  $trainner[0]->username,
            'fullname' =>  $fullname,
            'first_name' =>  $first_name,
            'last_name' =>  $last_name,
            'telephone' =>  $telephone,
            'address' => $address.' '.$district_name.' '.$amphur_name.' '.$province_name,
            'province_name' => $province_name,
            'amphur_name' => $amphur_name,
            'district_name' => $district_name,
            'line' => $line,
            'facebook' => $facebook,
            'ig' => $ig,
            'view' => $view,
            'star' => $star,
            'img_profile' => $img_profile,
            'portfolio' => $portfolio
        );    

        //$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);    

       header('Content-Type: application/json');
       echo json_encode($arr);
        // $this->load->view('profileTrainner');
        
    }

    
}