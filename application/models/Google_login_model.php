<?php
class Google_login_model extends CI_Model
{

    public function __construct(){
        parent::__construct();
   
          $this->load->database();
     } 

     
    function Is_already_register($id)
    {
        $this->db->where('oauth_uid', $id);
        $query = $this->db->get('tbl_member');

        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    function Update_user_data($data, $id)
    {
        $this->db->where('oauth_uid', $id);
        $this->db->update('tbl_member', $data);
    }

    function Insert_user_data($data)
    {
        $this->db->insert('tbl_member', $data);
    }
}
?>