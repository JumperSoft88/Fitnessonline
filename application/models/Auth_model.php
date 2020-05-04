<?php

class Auth_model extends CI_Model
{
    public function __construct(){
      parent::__construct();


        $this->load->database();
   } 

   public function insertUsername($data)
   {
        $this->db->insert('tbl_member',$data);
   }

   function validate_login($username,$password){ 

       $sql = "SELECT username from tbl_member Where username = '{$username}' and password = '{$password}' LIMIT 1";
       $result = $this->db->query($sql);
       $row = $result->row();

       if($result -> num_rows() == 1){ 
            $this->session->set_userdata('username', $username);

           return true;
       }else{
           return false;
       } 
   }

   public function validate_login_google($oauth_uid)
   {
        $sql = "SELECT oauth_uid from tbl_member Where oauth_uid = '{$oauth_uid}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if($result -> num_rows() == 1){ 
            return false;
        }else{
            return true;
        } 
   }

//    function update_status_logon($username,$data){
//        $this->db->where('name',$username);
//        $this->db->update('fit_questions', $data);

//    }


//    function update_member_login($id,$data){
//        $this->db->where('member_id',$id);
//        $this->db->update('fit_member', $data);
//    }

//    function insert_history_login($history_data){
//        $this->db->insert('fit_history_system',$history_data);
//    }

//     function insert_history_trainer($history_traner_data){
//         $this->db->insert('fit_history_trainer',$history_traner_data);
//     }

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

    function validate_username($username,$email){

        $sql = "SELECT username,email from tbl_member Where username = '{$username}' and email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if($result -> num_rows() == 1){ 
            return false;
        }else{

            $sql = "SELECT username from tbl_member Where username = '{$username}' LIMIT 1";
            $result = $this->db->query($sql);
            $row = $result->row();
            if($result -> num_rows() == 1){ 
                return false;
            }else{
                $sql = "SELECT email from tbl_member Where email = '{$email}' LIMIT 1";
                $result = $this->db->query($sql);
                $row = $result->row();
                if($result -> num_rows() == 1){ 
                    return false;
                }else{
                    return true;
                }
            } 
 
        }
    }
 
    function update_tbl_member_trainner_join($memberId,$data){ 
        $this->db->where('member_id',$memberId);
        $this->db->update('tbl_member', $data); 
    }

    function get_member($username){
        $this->db->select('*');
        $this->db->from('tbl_member');
       // $this->db->where($arrayName = array('username' => $username ));
        $this->db->where('username',$username);
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    public function getAllTraininer()
    {
        $this->db->select('*');
        $this->db->from('tbl_member'); 
        $this->db->where('type','trainner');
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    
    public function getTraininerById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_member'); 
        $this->db->where('member_id',$id);
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    public function getAllFitness()
    {
        $this->db->select('*');
        $this->db->from('tbl_member'); 
        $this->db->where('type','fitness');
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    public function getAllFitnessByHome()
    {
        $this->db->select('*'); 
        $this->db->from('tbl_member');  
        $this->db->where('type','fitness');
        $this->db->where('isHomepage','1');
        $query = $this->db->get();
        $result = $query->result();

       

        $output = array();
        $arrMemb = array();
        $i = 0;
        $arrIndex = 0;
        $x = 0;
        $y = 0;
        foreach($query->result() as $row){ 
            $i++;
            if($i <= 4){  
                $output[$arrIndex][$i] = $row; 
                
            }else{
                $arrIndex = $arrIndex+1;
                $i = 0;
                $output[$arrIndex][$i] = $row;
            } 

            $x++;
 
            // if($x == 8){
            //     $arrMemb[$y] = $output;
            //     $y++;
            // }else if($x == 4){
            //     $arrMemb[$y] = $output;
            //     $y++;
            // }
 
        }

        //print_r(count($output[0]));
        //print_r($arrMemb);
        return $output;
    }

    public function getAllTrainnerByHome()
    {
         
        $this->db->select('*'); 
        $this->db->from('tbl_member');  
        $this->db->where('type','trainner');
        $this->db->where('isHomepage','1');
        $query = $this->db->get();
        $result = $query->result();

        $output = array();
        $arrMemb = array();
        $i = 0;
        $arrIndex = 0;
        $x = 0;
        $y = 0;
        foreach($query->result() as $row){ 
            $i++;
            if($i <= 4){ 
               // echo $row->member_id.'>>> '.$i.',';
                $output[$arrIndex][$i] = $row; 
                
            }else{
                $arrIndex = $arrIndex+1;
                $i = 0;
                $output[$arrIndex][$i] = $row;
            } 

            $x++;

            if($x == 8){
                $arrMemb[$y] = $output;
                $y++;
            }
        }


      //  $x = 1;
       // print_r(count($arrMemb[0][0]));
      //  print_r($arrMemb[0][0][1]);

        // foreach($output as $row){ 
        //    // echo $row[0];

        //    print_r('==========='); 
        //     print_r($row);
        //     print_r('===========');

        //     $x++;
        // }

        return $arrMemb;
    }

    function update_status_system($username,$data){ 
        $this->db->where('username',$username);
        $this->db->update('tbl_member', $data); 
    }
 

    public function getAllTraininerByUsername($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_member'); 
        $this->db->where('username',$username);
        $query = $this->db->get();
        $result = $query->result();
       
       return $result;
    }

    function updateProfile($member_id,$data){ 
        $this->db->where('member_id',$member_id);
        $this->db->update('tbl_member', $data); 
    }

}




