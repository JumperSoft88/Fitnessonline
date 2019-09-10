<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexinfo extends CI_Controller
{
    function __Construct(){
        parent::__Construct ();

    }

    public function index()
    {
        $this->load->view('indexinfo');
    }
}