<?php
/**
 * Created by PhpStorm.
 * User: mgi
 * Date: 26/3/2018 AD
 * Time: 21:54
 */

class Info_model extends CI_Model
{
    public function __construct(){
        parent::__construct();

        $this->load->database();
    }

    function check_data_profile($username){

        $this->db->select('*');
        $this->db->from('fit_member');
        $this->db->where('member_username' ,$username );
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    function get_question_to_trainer($username){
        $this->db->select('*');
        $this->db->from('fit_questions');
        $this->db->where('name' , $username );
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function check_user_photo_header($username){
        $this->db->select('file_name,path');
        $this->db->from('file_proto_path');
        $this->db->where($arrayName = array('username' => $username,'photo_type' => 'P'));
        $this->db->order_by("createdDate", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    function check_user_photo_exp($username){
        $this->db->select('file_name,path');
        $this->db->from('file_proto_path');
        $this->db->where($arrayName = array('username' => $username,'photo_type' => 'E'));
        $this->db->order_by("createdDate", "desc");
        $this->db->limit(6);
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    function check_user_photo_header_webboard(){
        $this->db->select('file_name,path,username');
        $this->db->from('file_proto_path');
        $this->db->where($arrayName = array('photo_type' => 'P'));
        $this->db->order_by("createdDate", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result();


        return $result;
    }

    function insert_history_view_trainer_model($data){
        $this->db->insert('fit_history_trainer',$data);
    }


    function searchInfo_model($username){
        $this->db->select('*');
        $this->db->from('fit_member');
        $this->db->like('member_username',$username);
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function searchInfoByUserId_model($member_Id){
        $this->db->select('*');
        $this->db->from('fit_member');
        $this->db->where('member_id', $member_Id);
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function get_his_login_list_model($limit, $start){
        $this->db->select('*');
        $this->db->from('fit_history_system');
        $this->db->join('fit_member', 'fit_history_system.username = fit_member.member_username', 'left');

        $this->db->limit($limit, $start);
        $this->db->order_by("fit_history_system.createdDate", "desc");
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function get_his_view_list_model($limit, $start){
        $this->db->select('*');
        $this->db->from('fit_history_trainer');
        $this->db->join('fit_member', 'fit_history_trainer.	his_username = fit_member.member_username', 'left');
        $this->db->join('fit_questions', 'fit_history_trainer.his_username_trainer = fit_questions.name', 'left');

        $this->db->limit($limit, $start);
        $this->db->order_by("fit_history_trainer.createdDate", "desc");
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function update_approve_trainer_model($id,$data){
        $this->db->where('member_id',$id);
        $this->db->update('fit_member', $data);

    }

    function exportInfo_model(){
        $this->db->select('*');
        $this->db->from('fit_member');
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function get_province(){
        $this->db->select('*');
        $this->db->from('fit_province');
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function update_profile_member($username,$data){
        $this->db->where('member_username',$username);
        $this->db->update('fit_member', $data);

    }

    function searchProvinceById($provinveId){

        $this->db->select('*');
        $this->db->from('fit_province');
        $this->db->where('id' ,$provinveId );
        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    function deleteTopic_model($id,$data){
        $this->db->where('member_id',$id);
        $this->db->update('fit_question', $data);

    }
}