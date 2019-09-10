<?php
/**
 * Created by PhpStorm.
 * User: mgi
 * Date: 24/2/2018 AD
 * Time: 22:57
 */

class Webboard_model extends CI_Model
{
    public function __construct(){
        parent::__construct();


        $this->load->database(); // load database

    }
}
