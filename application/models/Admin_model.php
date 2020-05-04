<?php
 
class Admin_model extends CI_Model
{
    public function __construct(){
        parent::__construct();


        $this->load->database(); // load database

    }

    public function getAllMember()
    {
        $this->db->select('*');
        $this->db->from('tbl_member');  
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    public function getMemberByID($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_member'); 
        $this->db->where('member_id',$id);
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    
    function updateMember($id,$data){ 
        $this->db->where('member_id',$id);
        $this->db->update('tbl_member', $data); 
    }


    
}
