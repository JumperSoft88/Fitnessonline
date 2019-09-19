<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('auth_model');

    }


    public function logout()
    {

        if (isset($_SESSION['member_type'])){
            if($_SESSION['member_type'] == 'trainer'){

                $data = array(
                    'status_login' => 'off'
                );

                $this->auth_model->update_status_logon($_SESSION['username'],$data);
            }
        }


        $this->session->set_flashdata("success","You are logged in");



        unset($_SESSION);
        session_destroy();
        redirect("auth/login","refresh");
    }

    public function login()
    {

        $this->form_validation->set_rules('member_username','Username','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');

        if ($this->form_validation->run() == TRUE) {
            $username = $_POST['member_username'];
            $password = md5($_POST['password']);

            $user_data = $this->auth_model->check_user_login($username,$password);

            //  $user = $query->row();
 
            
            if (isset($user_data[0]->member_type)) {

                if(isset($user_data[0]->activeted)){

                    $_SESSION['username'] = $username;
                    $_SESSION['member_type'] = $user_data[0]->member_type;
                    $_SESSION['activeted'] = $user_data[0]->activeted;

                    if($user_data[0]->activeted){
                        $_SESSION['user_logged'] = TRUE;
                        $_SESSION['username'] = $username;
                        $_SESSION['member_type'] = $user_data[0]->member_type;
                        $_SESSION['email'] = $user_data[0]->email;

                        $_SESSION['type'] = $user_data[0]->member_type;

                        //echo $_SESSION['member_type'];


                        $id= $user_data[0]->member_id;


                        if($_SESSION['member_type'] == 'trainer'){

                            $data = array(
                                'status_login' => 'on'
                            );

                            $this->auth_model->update_status_logon($username,$data);
                        }

                        $this->session->set_flashdata("success","You are logged in");


                        $history_data = $arrayName = array(
                            'username' => $_POST['member_username'],
                            'email' =>  $user_data[0]->email,
                            'member_type'  => $user_data[0]->member_type,
                            'createdDate' => date('Y-m-d H:i:s')

                        );
                        $this->auth_model->insert_history_login($history_data);


                        if($_SESSION['member_type'] == 'trainer'
                            || $_SESSION['member_type'] == 'ftcenter'
                            || $_SESSION['member_type'] == 'member'){

                        redirect("info/profile","refresh");
                        }else{
                            echo date('Y-m-d H:i:s');
                            redirect("","refresh");
                        }
                    }else{
                        $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");
                        redirect("auth/login","refresh");

                        //unset($_SESSION);
                        //session_destroy();
                     
                    }

                }else{

                    $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");
                    redirect("auth/login","refresh");
                }


            }else {
                $this->session->set_flashdata("error","No such account exists in database");
            }

            
        }

        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('login');
        #$this->load->view('profile');
    }


    public function register()
    {
        $this->form_validation->set_rules('member_username','Username','trim|required|min_length[8]',array('required' => 'กรุณากำหนดชื่อเข้าใช้งาน','min_length'=>'กรุณากำหนดชื่อเข้าใช้งาน อย่างน้อย 8 ตัวอักษร'));
        $this->form_validation->set_rules('email','Email','required|valid_email',array('required' => 'กรุณากำหนดอีเมลล์เข้าใช้งานให้ถูกต้อง'));
        $this->form_validation->set_rules('password','Password','required|min_length[8]',array('required' => 'กรุณากำหนดรหัสผ่านอย่างน้อย 8 ตัวอีกษร'));
        $this->form_validation->set_rules('confrmpassword','Confirm Password','required|min_length[8]|matches[password]',array('required' => 'กรุณายืนยันรหัสผ่าน'));
        $this->form_validation->set_rules('check_accept','Accept','required',array('required' => 'กรุณายอมรับข้อตกลงและเงื่อนไข'));


                if ($this->form_validation->run() == TRUE) {
                   // echo 'form validated';

                    if(isset($_POST['member_username'])){
                        $isDup = $this->auth_model->validate_username($_POST['member_username']);

                        if($isDup){

                            $data = $arrayName = array(
                                'member_username' => $_POST['member_username'],
                                'email' =>  $_POST['email'],
                                'password' => md5($_POST['password']),
                                'createdDate' => date('Y-m-d'),
                                'modifiedDate' => date('Y-m-d'),
                                'status_logon'  => $_POST['status_logon'],
                                'status_system'  => $_POST['status_system'],
                                'member_type'  => $_POST['member_type']

                            );
                            $this->db->insert('fit_member',$data);


                            $from_email = "info@fitnessonline.co.th";

                            //Load email library
                            $this->load->library('email');

                            $message = '<html>';
                            $message .= '<head>';
                            $message .= '<title>confirm </title>';
                            $message .= '   </head>';
                            $message .= '        <body>';
                            $message .= '            <div style=\"font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center\" align=\"center\" id=\"emb-email-header\"><img style=\"border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px\" src="'.base_url().'assets/img/Final_LOGO_fitnessOnline_R.png" alt=\"\" width="152" height="108"></div>';
                            $message .= '              <h4 style="color:#3336FF"> ชื่อผู้ใช้งาน : '.$_POST['member_username'].' </h4>  ';
                            $message .= '              <h4 style="color:#3336FF"> ประเภทผู้ใช้ :  '.$_POST['member_type'].' </h4>';
                            $message .= '              <br> <br>  ';

                            $message .= '              <p>ขอบคุณสำหรับการสมัครสมาชิกกับ Fitnessonline.co.th! กรุณายืนยัน  <strong> ';
                            $message .= '                <a href=" '.base_url().'auth/validate_email/'.$_POST['member_username'].'">ยืนยัน</a> ';
                            $message .= '                </strong>สำหรับการสมัครสมาชิก. หลังจากยืนยัน คุณจะสามารถเข้าใช้ระบบได้นะคะ ';
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
                            $this->email->to($_POST['email']);
                            $this->email->subject('ยินดีต้อนรับ '.$_POST['member_username'].' เข้าสู่ fitnessonline.com');
                            $this->email->message($message);
                            $this->email->set_mailtype('html');



                            //Send mail
                            if($this->email->send())
                                echo 'SUCCESS';
                            else
                                echo 'Not SUCCESS';


                            $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");
                            redirect("auth/register","refresh");

                        }else{
                            $this->session->set_flashdata("success","ชื่อสมาชิกนี้มีอยู่ในระบบไม่สามารถใช้ได้");
                            redirect("auth/register","refresh");
                        }
                }

        }




        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('register');
    }

    public function select_registration()
    {
        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('select_registration');
    }

    public function register_trainer()
    {
        $this->form_validation->set_rules('member_username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('confrmpassword','Confirm Password','required|min_length[5]|matches[password]');
        $this->form_validation->set_rules('check_accept','Accept','required');
        $this->form_validation->set_rules('price','price','required');

        if(isset($_POST['member_username'])){
            $isDup = $this->auth_model->validate_username($_POST['member_username']);

            if($isDup){

                $data_user = $_POST['member_username'];
                $splittedstring=explode(".",$data_user);


                $isStudent = $this->auth_model->validate_student($splittedstring[0]);

                if($isStudent){

                    $this->insert_student($splittedstring[0]);

                }else{
                    if ($this->form_validation->run() == TRUE) {
                        // echo 'form validated';
                        $data = $arrayName = array(
                            'member_username' => $_POST['member_username'],
                            'email' =>  $_POST['email'],
                            'password' => md5($_POST['password']),
                            'createdDate' => date('Y-m-d'),
                            'modifiedDate' => date('Y-m-d'),
                            'price' =>  $_POST['price'],
                            'status_logon'  => $_POST['status_logon'],
                            'status_system'  => $_POST['status_system'],
                            'member_type'  => $_POST['member_type'],
                            'activeted' => false
                        );
                        $this->db->insert('fit_member',$data);

                        /* Form email */

                        $from_email = "info@fitnessonline.co.th";

                     
                        //Load email library
                        $this->load->library('email');


                        $message = '<html>';
                        $message .= '<head>';
                        $message .= '<title>confirm </title>';
                        $message .= '   </head>';
                        $message .= '        <body>';
                        $message .= '            <div style=\"font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center\" align=\"center\" id=\"emb-email-header\"><img style=\"border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px\" src="'.base_url().'assets/img/Final_LOGO_fitnessOnline_R.png" alt=\"\" width="152" height="108"></div>';
                        $message .= '              <h4 style="color:#3336FF"> ชื่อผู้ใช้งาน : '.$_POST['member_username'].' </h4>  ';
                        $message .= '              <h4 style="color:#3336FF"> ประเภทผู้ใช้ :  '.$_POST['member_type'].' </h4>';
                        $message .= '              <h4 style="color:#3336FF"> เลขที่สมาชิก :  10010 </h4>';
                        $message .= '             <h3 style="color:#3336FF"> จำนวนเงินที่ต้องชำระ '.$_POST['price']. ' บาท </h3> ';
                        $message .= '              <h4 style="color:#3336FF"> เพื่อให้ท่านได้สามารถใช้งาน fitness Online ได้อย่างเป็นทางการ จึงขออนุญาตแจ้งยอดชำระค่าบริการการสมัครสมาชิกตามรายลเอียดข้างต้น
                                                        หากอีเมลนี้ไม่ได้รับการตอบรับจากท่านตามรายละเอียดข้างต้นที่กล่าวกลับมาภา
                                                        ยใน 24 ชม. ทางระบบขอระงับการขอสมัครสมาชิกของท่านโดยไม่ได้แจ้งให้ทราบล่วงหน้า
                                                        และขออภัยหากท่านได้ทำการชำระเรียบร้อยแล้ว ท่านสามารถแจ้งโอนเงินได้ที่
                                                        อีเมล: (E-mail FitnessOnline) หรือ Line@ : (Line@)
                                                        *สามารถใช้งานได้ภายใน 30 นาที หลังแจ้งโอนเงินค่ะ* </h4>';
                        $message .= '              <br> <br>  ';

                      //  $message .= '              <p>ขอบคุณสำหรับการสมัครสมาชิกกับ Fitnessonline.co.th! กรุณายืนยัน  <strong> ';
                      //  $message .= '                <a href=" '.base_url().'auth/validate_email/'.$_POST['member_username'].'">ยืนยัน</a> ';
                        $message .= '                </strong>สำหรับการสมัครสมาชิก. หลังจากส่งเอกสารยืนยัน ตรวจสอบ คุณจะสามารถเข้าใช้ระบบได้นะคะ ';
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
                        $this->email->to($_POST['email']);
                        $this->email->subject('ยินดีต้อนรับ '.$_POST['member_username'].' เข้าสู่ fitnessonline.com');
                        $this->email->message($message);
                        $this->email->set_mailtype('html');



                        //Send mail
                        //if($this->email->send())
                           // echo 'SUCCESS';
                       // else
                           // echo 'Not SUCCESS';


                        $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");
                        //redirect("auth/register_trainer","refresh");
                    }

                }

            }else{
                $this->session->set_flashdata("success","ชื่อสมาชิกนี้มีอยู่ในระบบไม่สามารถใช้ได้");
                redirect("auth/register","refresh");
            }
        }

        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('register_trainer');
    }

    public function sendEmail(){

    }

    public function register_fitness_center()
    {
        $this->form_validation->set_rules('member_username','Username','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        $this->form_validation->set_rules('confrmpassword','Confirm Password','required|min_length[5]|matches[password]');
        $this->form_validation->set_rules('check_accept','Accept','required');
        $this->form_validation->set_rules('price','price','required');

        if(isset($_POST['member_username'])){
            $isDup = $this->auth_model->validate_username($_POST['member_username']);

            if($isDup){

                $data_user = $_POST['member_username'];
                $splittedstring=explode(".",$data_user);


                $isStudent = $this->auth_model->validate_student($splittedstring[0]);

                if($isStudent){

                    $this->insert_student($splittedstring[0]);

                }else{
                    if ($this->form_validation->run() == TRUE) {
                        // echo 'form validated';
                        $data = $arrayName = array(
                            'member_username' => $_POST['member_username'],
                            'email' =>  $_POST['email'],
                            'password' => md5($_POST['password']),
                            'createdDate' => date('Y-m-d'),
                            'modifiedDate' => date('Y-m-d'),
                            'price' =>  $_POST['price'],
                            'status_logon'  => $_POST['status_logon'],
                            'status_system'  => $_POST['status_system'],
                            'member_type'  => $_POST['member_type'],
                            'activeted' => false
                        );
                        $this->db->insert('fit_member',$data);

                        /* Form email */

                        $from_email = "info@fitnessonline.co.th";

                        //Load email library
                        $this->load->library('email');

                        $message = '<html>';
                        $message .= '<head>';
                        $message .= '<title>confirm </title>';
                        $message .= '   </head>';
                        $message .= '        <body>';
                        $message .= '            <div style=\"font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center\" align=\"center\" id=\"emb-email-header\"><img style=\"border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px\" src="'.base_url().'assets/img/Final_LOGO_fitnessOnline_R.png" alt=\"\" width="152" height="108"></div>';
                        $message .= '              <h4 style="color:#3336FF"> ชื่อผู้ใช้งาน : '.$_POST['member_username'].' </h4>  ';
                        $message .= '              <h4 style="color:#3336FF"> ประเภทผู้ใช้ :  '.$_POST['member_type'].' </h4>';
                        $message .= '             <h3 style="color:#3336FF"> รายเดือน '.$_POST['price']. ' บาท </h3> ';
                        $message .= '              <h4 style="color:#3336FF"> กรุณาชำระค่าบริการ และส่งหลักฐานยืนยันให้เจ้าหน้าที่ตรวจสอบด้วยนะค่ะ </h4>';
                        $message .= '              <br> <br>  ';

                        //  $message .= '              <p>ขอบคุณสำหรับการสมัครสมาชิกกับ Fitnessonline.co.th! กรุณายืนยัน  <strong> ';
                        //  $message .= '                <a href=" '.base_url().'auth/validate_email/'.$_POST['member_username'].'">ยืนยัน</a> ';
                        $message .= '                </strong>สำหรับการสมัครสมาชิก. หลังจากส่งเอกสารยืนยัน ตรวจสอบ คุณจะสามารถเข้าใช้ระบบได้นะคะ ';
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
                        $this->email->to($_POST['email']);
                        $this->email->subject('ยินดีต้อนรับ '.$_POST['member_username'].' เข้าสู่ fitnessonline.com');
                        $this->email->message($message);
                        $this->email->set_mailtype('html');



                        //Send mail
                        if($this->email->send())
                            echo 'SUCCESS';
                        else
                            echo 'Not SUCCESS';


                        $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");
                        //redirect("auth/register_trainer","refresh");
                    }

                }

            }else{
                $this->session->set_flashdata("success","ชื่อสมาชิกนี้มีอยู่ในระบบไม่สามารถใช้ได้");
                redirect("auth/register","refresh");
            }
        }

        $lang=$this->session->userdata("lang")==null?"english":$this->session->userdata("lang");
        $this->lang->load($lang,$lang);
        $this->load->view('register_fitness_center');
    }

    public function insert_student($uni_code){

        $data_university = $this->auth_model->get_university($uni_code);


        if ($this->form_validation->run() == TRUE) {
            // echo 'form validated';
            $data = $arrayName = array(
                'member_username' => $_POST['member_username'],
                'email' =>  $_POST['email'],
                'password' => md5($_POST['password']),
                'createdDate' => date('Y-m-d'),
                'modifiedDate' => date('Y-m-d'),
                'price' =>  $_POST['price'],
                'status_logon'  => $_POST['status_logon'],
                'status_system'  => $_POST['status_system'],
                'member_type'  => $_POST['member_type'],
                'uni_code'  => $data_university[0]->uni_code_en
            );
            $this->db->insert('fit_member',$data);

            /* Form email */

            $from_email = "info@fitnessonline.co.th";

            //Load email library
            $this->load->library('email');

            $message = '<html>';
            $message .= '<head>';
            $message .= '<title>confirm </title>';
            $message .= '   </head>';
            $message .= '        <body>';
            $message .= '            <div style=\"font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center\" align=\"center\" id=\"emb-email-header\"><img style=\"border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px\" src="'.base_url().'assets/img/Final_LOGO_fitnessOnline_R.png" alt=\"\" width="152" height="108"></div>';
            $message .= '              <h4 style="color:#3336FF"> ชื่อผู้ใช้งาน : '.$_POST['member_username'].' </h4>  ';
            $message .= '              <h4 style="color:#3336FF"> ประเภทผู้ใช้ :  '.$_POST['member_type'].' </h4>';
            $message .= '             <h3 style="color:#3336FF"> รายเดือน '.$_POST['price']. ' บาท </h3> ';
            $message .= '              <h4 style="color:#3336FF"> ฟรี สำหรับนักศึกษา : '.$data_university[0]->uni_name.' </h4>';
            $message .= '              <br> <br>  ';

            $message .= '              <p>ขอบคุณสำหรับการสมัครสมาชิกกับ Fitnessonline.co.th! กรุณายืนยัน  <strong> ';
            $message .= '                <a href=" '.base_url().'auth/validate_email/'.$_POST['member_username'].'">ยืนยัน</a> ';
            $message .= '                </strong>สำหรับการสมัครสมาชิก. หลังจากยืนยัน คุณจะสามารถเข้าใช้ระบบได้นะคะ ';
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
            $this->email->to($_POST['email']);
            $this->email->subject('ยินดีต้อนรับ '.$_POST['member_username'].' เข้าสู่ fitnessonline.com');
            $this->email->message($message);
            $this->email->set_mailtype('html');



            //Send mail
            if($this->email->send())
                echo 'SUCCESS';
            else
                echo 'Not SUCCESS';


            $this->session->set_flashdata("success","Your account has been registered. You can check email for confirm");
            //redirect("auth/register_trainer","refresh");
        }
    }


    public function validate_email($member_username){
       // echo $this->uri->segment(3);
        $result = $this->auth_model->validate_email($member_username);

        if($result){
            $this->load->view('confirm_registration');

        }

    }



}