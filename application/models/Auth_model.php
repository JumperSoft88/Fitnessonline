<?php

class Auth_model extends CI_Model
{
    public function __construct(){
      parent::__construct();


        $this->load->database();
   }

   function check_user_login($username,$password){

       $this->db->select('*');
       $this->db->from('fit_member');
       $this->db->where($arrayName = array('member_username' => $username,'password' => $password ));
       $query = $this->db->get();
       $result = $query->result();


       return $result;
   }

   function update_status_logon($username,$data){
       $this->db->where('name',$username);
       $this->db->update('fit_questions', $data);

   }


   function update_member_login($id,$data){
       $this->db->where('member_id',$id);
       $this->db->update('fit_member', $data);
   }

   function insert_history_login($history_data){
       $this->db->insert('fit_history_system',$history_data);
   }

    function insert_history_trainer($history_traner_data){
        $this->db->insert('fit_history_trainer',$history_traner_data);
    }

    function validate_email($member_username){
        $sql = "SELECT member_username,	email from fit_member Where member_username = '{$member_username}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if($result -> num_rows() == 1){
            $data = array(
                'activeted' => true
            );


            $this->db->where('member_username',$member_username);
            $this->db->update('fit_member', $data);


            $this->db->select('*');
            $this->db->from('fit_member');
            $this->db->where($arrayName = array('member_username' => $member_username));
            $query1 = $this->db->get();
            $result1 = $query1->result();


            if($result1[0]->member_type == 'trainer'){
                $topic = 'รับสอนฟิตเนสโดยคุณ '.$member_username;
                $detail = 'รับสอนฟิตเนส ตามสถานที่ออกกำลังกาย ตามบ้านและคอนโด';

                $data = $arrayName = array(
                    'topic' => $topic,
                    'detail' =>  $detail,
                    'name' => $member_username,
                    'email'  => $result1[0]->email,
                    'created' => date('Y-m-d H:i:s')

                );
                $this->db->insert('fit_questions',$data);
            }



            return true;
        }else{

            return false;
        }

    }

    function validate_username($member_username){

        $sql = "SELECT member_username,	email from fit_member Where member_username = '{$member_username}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if($result -> num_rows() == 1){

            return false;
        }else{
            return true;
        }
    }

    function validate_student($uni_code){
        $uni_code = strtoupper($uni_code);
        $sql = "SELECT uni_code_en from fit_university Where uni_code_en = '{$uni_code}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if($result -> num_rows() == 1){

            return true;
        }else{
            return false;
        }


    }

    function get_university($uni_code){

        $this->db->select('*');
        $this->db->from('fit_university');
        $this->db->where($arrayName = array('uni_code_en' => strtoupper($uni_code)));
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    function get_member($username){
        $this->db->select('*');
        $this->db->from('fit_member');
        $this->db->where($arrayName = array('member_username' => $username ));
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    function update_status_system($username,$data){ 
        $this->db->where('member_username',$username);
        $this->db->update('fit_member', $data); 
    }

    function update_status_question($member_id,$data){ 
        $this->db->where('name',$member_id);
        $this->db->update('fit_questions', $data); 
    }

}




