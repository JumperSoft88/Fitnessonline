<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    var $data = array();
    function __Construct(){
        parent::__Construct ();

        $this->load->database(); //

        $this->load->helper('url');
        $this->load->model('info_model');

    }

    public function ebookfit(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('ebook');
    }

    public function aboutfit(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('aboutfit');
	}


    public function change($type)
    {
        $this->session->set_userdata('lang',$type);
        redirect("","refresh");
    }

    public function contact(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('contact');
    }

    public function login()
    {
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('login');
    }

    public function select_registration(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('select_registration');
    }

    public function profile(){
        if(isset($_SESSION['member_type'])){

            if($_SESSION['member_type'] == 'member'){
                //echo  $_SESSION['username'];


                $this->db->select('*');
                $this->db->from('fit_member');
                //  $this->db->where('member_username ',"'".$user_code."'");
                $this->db->where('member_username' ,$_SESSION['username']);
                $query = $this->db->get();
                $result = $query->result();

                $numb = $query->num_rows();



                if($numb > 0){

                    $photo_header = $this->info_model->check_user_photo_header($_SESSION['username']);

                    $photo_ex = $this->info_model->check_user_photo_exp($_SESSION['username']);

                    $data['photo_ex'] = $photo_ex;
                    $data['photo_header'] = $photo_header;
                    $data['data_profile'] = $result;

                    $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
                    $this->lang->load($lang,$lang);
                    $this->load->view('profile',$data);
                }else{
                    $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
                    $this->lang->load($lang,$lang);
                    $this->load->view('profile');
                }
            }else{

                $result = $this->info_model->check_data_profile($_SESSION['username']);

               // $numb = $query->num_rows();

                if (isset($result[0]->member_username)) {
                   $result2 = $this->info_model->get_question_to_trainer($_SESSION['username']);

                   $photo_header = $this->info_model->check_user_photo_header($_SESSION['username']);

                   $photo_ex = $this->info_model->check_user_photo_exp($_SESSION['username']);

                   $data['data_profile'] = $result;
                   $data['question_trainer'] = $result2;
                   $data['photo_header'] = $photo_header;
                   $data['photo_ex'] = $photo_ex;

                    $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
                    $this->lang->load($lang,$lang);


                    $this->load->view('profile',$data);
                }
            }
        }else{
            echo 'none';
        }
    }

    public function update_trainer(){

        $provinceName = $this->info_model->searchProvinceById($_POST['province_id']);

        if(isset($provinceName[0]->province)){
            $provinceName = $provinceName[0]->province;
        }else{
            $provinceName = '';
        }
        
        $data = $arrayName = array(
            'frist_name' => $_POST['frist_name'],
            'last_name' =>  $_POST['last_name'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender'],
            'status' =>  $_POST['status'],
            'address1' =>  $_POST['address1'],
            'address2' =>  $_POST['address2'],
            'province_id' =>  $_POST['province_id'],
            'province_name' =>  $provinceName,
            'postcode' =>  $_POST['postcode'],
            'telephone1' =>  $_POST['telephone1'],
            'telephone2' =>  $_POST['telephone2'],
            'id_card' => $_POST['id_card'],
            'price'  => $_POST['price'],
            'work_exprerience'  => $_POST['work_exprerience'],
            'member_overview'  => $_POST['member_overview'],
            'modifiedDate' => date('Y-m-d')

        );

        $this->db->where('member_id', $_POST['id']);
        $this->db->update('fit_member', $data);
        $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");

        $_SESSION['editPortfolio'] = false;

        redirect("info/profile","refresh");
    }

    public function upload_photo(){
        $config = array(
            'upload_path' => 'upload/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => 1024,
            'filename' => url_title($this->input->post('file'))
        );
        $this->load->library('upload',$config);

        if($this->upload->do_upload('file')){


            $upload_data = $this->upload->data();
            $file_name =   $upload_data['file_name'];

            $this->db->insert('file_proto_path',array(
                'username' =>  $_SESSION['username'],
                'path' => 'upload',
                'type' => $_POST['type'],
                'file_name' => $file_name,
                'createdDate' => date('Y-m-d H:i:s'),
                'photo_type' => 'P'
            ));
            $this->session->set_flashdata('msg','Success');
        }


        $this->profile();
    }

    public function upload_ex_photo(){
//echo 'upload_ex_photo';
        $config = array(
            'upload_path' => 'upload/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            //'max_size' => 1024,
            'filename' => url_title($this->input->post('file_ex'))
        );
        $this->load->library('upload',$config);

        if($this->upload->do_upload('file_ex')){


            $upload_data = $this->upload->data();
            $file_name =   $upload_data['file_name'];

            echo $file_name;

            $this->db->insert('file_proto_path',array(
                'username' =>  $_SESSION['username'],
                'path' => 'upload',
                'type' => $_POST['type'],
                'file_name' => $file_name,
                'createdDate' => date('Y-m-d H:i:s'),
                'photo_type' => 'E'
            ));
            $this->session->set_flashdata('msg','Success');
        }


        $this->profile();

    }

    public function admin(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

       /* unset(
            $_SESSION['resultSearch'],
            $_SESSION['resultByMemberId']
        );*/

        $this->getHistorySystem();
        $this->load->view('admin_menu');
    }

    public function admin_history_trainer(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

        /* unset(
             $_SESSION['resultSearch'],
             $_SESSION['resultByMemberId']
         );*/

        $this->getHistorySystem();
        $this->getHistoryViewSystem();
        $this->load->view('admin_menu_history_trainer');
    }

    public function admin_history_login(){
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

        /* unset(
             $_SESSION['resultSearch'],
             $_SESSION['resultByMemberId']
         );*/

        $this->getHistorySystem();
        $this->load->view('admin_menu_history_login');
    }


    public function searchInfo(){
        $this->form_validation->set_rules('username','Username','required');

        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

        if ($this->form_validation->run() == TRUE) {

            $username = $_POST['username'];


            $resultSearch = $this->info_model->searchInfo_model($username);
            $data['resultSearch'] = $resultSearch;

            $_SESSION['resultSearch'] = $resultSearch;

            $this->load->view('admin_menu', $data);

        }else{
          /*  unset(
                $_SESSION['resultSearch']
            );*/
            $this->load->view('admin_menu');
        }
    }

    public function searchInfoByUserId($member_id){

        $result = $this->info_model->searchInfoByUserId_model($member_id);

        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

        $data['resultByMemberId'] = $result;

        $_SESSION['resultByMemberId'] = $result;

        $_SESSION['adminMeberId'] = $member_id;

       // $this->load->view('admin_menu');
        redirect("info/admin","refresh");

    }

    public function cancelEditProfile(){

        unset(
            $_SESSION['resultByMemberId']
        );

        redirect("info/admin","refresh");

    }

    public function getHistorySystem(){

        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

        $this->load->library('pagination');
        $config['base_url'] = site_url('info/admin_history_login/');
        $config['total_rows'] =$this->db->count_all('fit_history_system');
        $config['per_page'] = 30;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        ##$this->pagination->initialize($config);


        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data


        $data['posts'] = $this->get_his_login_list($config['per_page'], $data['page']);

        $data['pagination2'] = $this->pagination->create_links();


        if(!empty($data['posts'])){


            $data['posts'] = $data['posts'];

            $_SESSION['historyTrainer'] = $data['posts'];
            $_SESSION['historyTrainerpagination2'] = $data['pagination2'];

           // redirect("info/admin_history_login","refresh");

        }
    }

    function get_his_login_list($limit, $start)
    {
         $result = $this->info_model->get_his_login_list_model($limit, $start);

        return $result;
    }

    public function getHistoryViewSystem(){

        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);

        $this->load->library('pagination');
        $config['base_url'] = site_url('info/admin_history_trainer/');
        $config['total_rows'] =$this->db->count_all('fit_history_system');
        $config['per_page'] = 30;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        ##$this->pagination->initialize($config);


        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data


        $data['posts'] = $this->get_his_view_list($config['per_page'], $data['page']);

        $data['pagination2'] = $this->pagination->create_links();


        if(!empty($data['posts'])){


            $data['posts'] = $data['posts'];

            $_SESSION['historyViewTrainer'] = $data['posts'];
            $_SESSION['historyTrainerpagination3'] = $data['pagination2'];

            // redirect("info/admin_history_login","refresh");

        }
    }

    function get_his_view_list($limit, $start)
    {
        $result = $this->info_model->get_his_view_list_model($limit, $start);

        return $result;
    }

    function submitApproveTrainer(){
        echo $_POST['status_system'];
        echo $_POST['activeted'];

        $data = $arrayName = array(
            'status_system' =>$_POST['status_system'],
            'activeted'  => $_POST['activeted']

        );

        $this->info_model->update_approve_trainer_model($_SESSION['adminMeberId'],$data);

        echo $_POST['isSentEmail'];

        if($_POST['isSentEmail'] == 1){

            $from_email = "info@fitnessonline.co.th";

            //Load email library
            $this->load->library('email');

            $message = '<html>';
            $message .= '<head>';
            $message .= '<title>confirm </title>';
            $message .= '   </head>';
            $message .= '        <body>';
            $message .= '            <div style=\"font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center\" align=\"center\" id=\"emb-email-header\"><img style=\"border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px\" src="'.base_url().'assets/img/Final_LOGO_fitnessOnline_R.png" alt=\"\" width="152" height="108"></div>';
            $message .= '              <h4 style="color:#3336FF"> ชื่อผู้ใช้งาน : '.$_SESSION['resultByMemberId'][0]->member_username.' </h4>  ';
            $message .= '              <h4 style="color:#3336FF"> ประเภทผู้ใช้ :  '.$_SESSION['resultByMemberId'][0]->member_type.' </h4>';
            $message .= '             <h3 style="color:#3336FF"> รายเดือน '.$_SESSION['resultByMemberId'][0]->price.' บาท </h3> ';
            $message .= '              <h4 style="color:#3336FF"> คุณสามารถเข้าใช้ระบบได้แล้วนะคะ </h4>';
            $message .= '              <br> <br>  ';


            $message .= '               </p>';

            $message .= '               <br><br><br>';

            $message .= '            <p> บริษัท ฟิตเนส ออนไลน์ จำกัด </p>';
            $message .= '           <p> 91/17 ซอยวัฒนานิเวศน์ 4  </p>';
            $message .= '          <p> แขวงสามเสนนอก เขตห้วยขวาง </p>';
            $message .= '         <p> กรุงเทพมหานคร 10310 </p>';
            $message .= '        <p> โทร : 0-2276-5763 , 06-3978-8222 </p>';
            $message .= '       <p> Email : info@fitnessonline.com </p>';
            $message .= '</body>';
            $message .= '</html>';

            //echo $message;

            $this->email->from($from_email, 'ยินดีต้อนรับสู่ fitnessonline.co.th');
            $this->email->to($_SESSION['resultByMemberId'][0]->email);
            $this->email->subject('ยืนยันการสมัคร ยินดีต้อนรับ '.$_SESSION['resultByMemberId'][0]->member_username.' เข้าสู่ fitnessonline.com');
            $this->email->message($message);
            $this->email->set_mailtype('html');



            //Send mail
            if($this->email->send())
                echo 'SUCCESS';
            else
                echo 'Not SUCCESS';


        }

        $this->searchInfoByUserId($_SESSION['adminMeberId']);

        redirect("info/admin","refresh");
    }

    function editpPortfolio(){

        $_SESSION['editPortfolio'] = true;

        redirect("info/profile","refresh");

    }

    function cancelEditpPortfolio(){
        echo "edit";

        $_SESSION['editPortfolio'] = false;

        redirect("info/profile","refresh");

    }

    function profile_member_edit(){

        $username =$_SESSION['username'];
        $provinceName = $this->info_model->searchProvinceById($_POST['province_id']);

        $data = $arrayName = array(
            'frist_name' => $_POST['frist_name'],
            'last_name' => $_POST['last_name'],
            'gender' => $_POST['gender'],
            'telephone1' => $_POST['telephone1'],
            'address1' => $_POST['address1'],
            'address2' => $_POST['address2'],
            'province_id' => $_POST['province_id'],
            'province_name' => $provinceName[0]->province,
            'postcode' => $_POST['postcode'],
            'email' =>  $_POST['email'],
            'createdDate' => date('Y-m-d'),
            'modifiedDate' => date('Y-m-d')

        );

        $this->info_model->update_profile_member( $username,$data);
        $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");

        $_SESSION['editPortfolio'] = false;

        redirect("info/profile","refresh");

    }

    function editProfileInfo_trainer(){
        $_SESSION['editPortfolio'] = true;

        redirect("info/profile","refresh");
    }

    function cancelProfileInfo_trainer(){
        $_SESSION['editPortfolio'] = false;

        redirect("info/profile","refresh");
    }



    function deleteTopic(){
        $topicId = 1;
        $data = $arrayName = array(
            'isDeleted' => false
        );
            $this->info_model->deleteTopic_model($topicId ,$data);

    }

}
