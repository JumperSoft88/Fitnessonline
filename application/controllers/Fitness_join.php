<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fitness_join extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();  
        $this->load->helper('url'); 
        $this->load->model('address_model');
        $this->load->model('auth_model');

    }

    public function index()
    {  

        $provinces = $this->address_model->getProvince();

        $data['provinces'] = $provinces;
                    

        $this->load->view('fitness_join',$data);
    }
    public function fitness_regis()
    {
      /* echo $this->input->post('fullname').'\n';
       echo $this->input->post('telephone').'\n';
       echo $this->input->post('province_id').'\n';
       echo $this->input->post('amphure_id').'\n';
       echo $this->input->post('district_id').'\n';
       echo $this->input->post('facebook').'\n';
       echo $this->input->post('line').'\n';
       echo $this->input->post('ig').'\n'; */

       $fullname = $this->input->post('fullname');
       $telephone = $this->input->post('telephone');
       $address = $this->input->post('address');
       $provinceId = $this->input->post('province_id');
       $amphureId = $this->input->post('amphure_id');
       $districtId = $this->input->post('district_id');
       $facebook = $this->input->post('facebook');
       $line = $this->input->post('line');
       $ig = $this->input->post('ig');
       $type = 'Fitness';

       $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
       $code = "FNCT_";
       for ($i = 0; $i < 5; $i++) {
           $code .= $chars[mt_rand(0, strlen($chars)-1)];
       }

       $data  = array(
           'code'  => $code,
           'fullname' =>  $fullname,
           'telephone' => $telephone, 
           'provinceId' => $provinceId,
           'amphureId' => $amphureId,
           'districtId' => $districtId,
           'facebook' => $facebook,
           'line' => $line,
           'ig' => $ig,
           'type' => $type,
           'createdDate' => date('y-m-d'),
           'ModifiedDate' => date('y-m-d'),

       );

       $this->auth_model->update_tbl_member_trainner_join($_SESSION['memberId'],$data);

       //Load email library
       $this->load->library('email');
   
       $from_email = "info@fitnessonline.co.th";

       $message = '<html>';
       $message .= '<head>';
       $message .= '<title>confirm </title>';
       $message .= '   </head>';
       $message .= '        <body>';
       $message .= '            <div style=\"font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center\" align=\"center\" id=\"emb-email-header\"><img style=\"border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px\" src="'.base_url().'assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt=\"\" width="152" height="108"></div>';
       $message .= '              <h4 style="color:#3336FF"> เรียน : '.$fullname.' </h4>  ';
       $message .= '              <h4 style="color:#3336FF"> เรื่อง : รหัสเพื่อยืนยันการสมัครบัญชีบนบริการ Fitness Online </h4>  ';
    //   $message .= '              <h4 style="color:#3336FF"> ประเภทผู้ใช้ :  '.$_POST['member_type'].' </h4>';
       $message .= '              <br> <br>  '; 

       $message .= '              <p>ตามที่ท่านได้ทำการลงทะเบียนอีเมลบนบริการ Fitness Online กรุณานำรหัสยืนยันกรอกลงในหน้าหน้า Login บนเว็บไซต์ Fitness Online  </p> ';
       $message .= '              <br>  ';
       $message .= '              <h4 style="color:#3336FF"> User : '.$_SESSION['username'].' </h4>  '; 
       $message .= '               <p>กรุณานำรหัสนี้ไปใช้ภายใน 24 ชม. เพื่อยืนยันบัญชี Fitness Online ของคุณ</p>'; 
       $message .= '               <p>สอบถามข้อมูลเพิ่มเติมได้ที่ Fitness Online Center Contect (24 ชั่วโมง) โทร. 0-2276-5763, 094-794-7896 </p>'; 
       $message .= '              <h4> ขอแสดงความนับถือ </h4>  '; 
       $message .= '              <h4> บมจ. ฟิตเนสออนไลน์ </h4>  '; 
       $message .= '               <br><br><br>';  

       $message .= '            <p> บริษัท ฟิตเนส ออนไลน์ จำกัด </p>';
       $message .= '           <p> 91/17 ซอยวัฒนานิเวศน์ 4  </p>';
       $message .= '          <p> แขวงสามเสนนอก เขตห้วยขวาง </p>';
       $message .= '         <p> กรุงเทพมหานคร 10310 </p>';
       $message .= '        <p> โทร : 0-2276-5763, 094-794-7896</p>';
       $message .= '       <p> Email : info@fitnessonline.com </p>';
       $message .= '</body>';
       $message .= '</html>';

       //echo $message;

       $this->email->from($from_email, 'fitnessonline.co.th');
       $this->email->to($_SESSION['email']);
       $this->email->subject('รหัสเพื่อยืนยันการสมัครบัญชีบนบริการ Fitness Online');
       $this->email->message($message);
       $this->email->set_mailtype('html');

       //Send mail
       if($this->email->send()){ 

           $message = array(
               'messagejoin' =>  'ได้รับข้อความเรียบร้อย รอการยืนยันผ่านทาง Email ค่ะ ' 
           );

           $this->load->view('home',$message);

       }else
           echo 'Not SUCCESS'; //TODO

    }

}