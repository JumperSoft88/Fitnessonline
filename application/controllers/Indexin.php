<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexin extends CI_Controller
{
    function __Construct(){
        parent::__Construct ();

        $this->load->model('info_model');
    }

    public function index()
    {
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

        $_SESSION['province'] = $this->info_model->get_province();

        $this->load->view('indexinfo');



    }

    public function forum_trainer(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('info');
    }

    public function forum_fitness(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('info');
    }
}