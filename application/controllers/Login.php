<?php
header('Access-Control-Allow-Origin: *');

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct()
    { 
        parent::__construct();  
        $this->load->helper('url'); 
        $this->load->model('auth_model');

        $this->load->library('session');

    }

    public function index()
    { 
        $data['tab'] = 'tab1';

        $this->session->sess_destroy(); 

        $this->load->view('login',$data);
    }

    
    public function member(){   
        $type = $this->input->post('type');
     //   $data['tab'] = 'tab1';
      /*   $this->form_validation->set_rules('username', 'Username', 'callback_username_check');

        if ($this->form_validation->run() == FALSE)
        { 
            $this->load->view('login', $data);
        }
        else
        {
            if ($this->input->post('type')  == "loggin") {
                $this->signin();
            }else{
                $this->signup();
            } 
        } */ 
 
        if ($type == "login") { 
            $username = $this->input->post('username1');
            $pwd = $this->input->post('pwd');

            $this->signin($username,md5($_POST['pwd']));
   
        }else{
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $pwd = $this->input->post('pwd');

            $data  = array(
                'email' =>  $email,
                'username' => $username, 
                'password' => md5($pwd)  
            );

            $this->signup($data);
        } 
     
    }

    public function signin()
    {  

        $username = $this->input->post('signin_username'); 
        $password =  $this->input->post('signin_password');

        $isSuccess = $this->auth_model->validate_login($username,$password);

        echo  $isSuccess;
        if($isSuccess){   

            $tab = 'tab1'; 
            
            $data1 = array( 
                'tab' => $tab 
            );
        
            $this->load->view('home',$data1 );
            // $arr = array('a' =>  $isSuccess, 'b' => $username, 'c' => 3, 'd' => 4, 'e' => 5);    
     
            // header('Content-Type: application/json');
            // echo json_encode( $arr );
 

        }else{ 
            // $arr = array('a' =>  $isSuccess, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);    
    
            // header('Content-Type: application/json');
            // echo json_encode( $arr );
        }
           

        
       
    }

    public function signup()
    {
        //echo 'signup';
        $username = $this->input->post('signup_username');
        $email = $this->input->post('signup_email');
        $password =  $this->input->post('signup_password');


        $from_email = "info@fitnessonline.co.th";

        if($username != null && $email != null){
            if(isset($username)){
                $isNotDup = $this->auth_model->validate_username($username,$email);

                
                if($isNotDup){

                    $data = array(
                        'username' => $username , 
                        'email' => $email, 
                        'password' => $password, 
                        'createdDate' => 'NOW()'  
                    ); 
                    
                    $this->auth_model->insertUsername($data);

                 
                     $this->session->set_userdata('username', $username);

            
                    //Load email library
                    $this->load->library('email');
                
                    $message = '<html>';
                    $message .= '<head>';
                    $message .= '<title>confirm </title>';
                    $message .= '   </head>';
                    $message .= '        <body>';
                    $message .= '            <div style=\"font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center\" align=\"center\" id=\"emb-email-header\"><img style=\"border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px\" src="'.base_url().'assets/images/logo/Final_LOGO_fitnessOnline_R.png" alt=\"\" width="152" height="108"></div>';
                    $message .= '              <h4 style="color:#3336FF"> ชื่อผู้ใช้งาน : '.$username.' </h4>  ';
                 //   $message .= '              <h4 style="color:#3336FF"> ประเภทผู้ใช้ :  '.$_POST['member_type'].' </h4>';
                    $message .= '              <br> <br>  '; 
    
                    $message .= '            <p> บริษัท ฟิตเนส ออนไลน์ จำกัด </p>';
                    $message .= '           <p> 91/17 ซอยวัฒนานิเวศน์ 4  </p>';
                    $message .= '          <p> แขวงสามเสนนอก เขตห้วยขวาง </p>';
                    $message .= '         <p> กรุงเทพมหานคร 10310 </p>';
                    $message .= '        <p> โทร : 0-2276-5763, 094-794-7896</p>';
                    $message .= '       <p> Email : info@fitnessonline.com </p>';
                    $message .= '</body>';
                    $message .= '</html>';
    
                    //echo $message;
    
                    $this->email->from($from_email, 'ยินดีต้อนรับสู่ fitnessonline.co.th');
                    $this->email->to($email);
                    $this->email->subject('ยินดีต้อนรับ '.$username.' เข้าสู่ fitnessonline.com');
                    $this->email->message($message);
                    $this->email->set_mailtype('html');
                    $this->email->send();


                    $arr = array('message' => 'success',
                    'username' => $_SESSION['username']);   
 
                    header('Content-Type: application/json');
                    echo json_encode($arr);
     
                    //Send mail
                    // if($this->email->send())
                   //      $this->load->view('home');
                   //  else
                   //      echo 'Not SUCCESS';
                }else{
                     
                    ///$this->session->set_flashdata("message","ชื่อสมาชิกนี้มีอยู่ในระบบไม่สามารถใช้ได้");
                    //$this->load->view('someview',$data);
                    //redirect("login");
 
                   // $data = array(
                   //     'message' =>  'ชื่อสมาชิกนี้มีอยู่ในระบบไม่สามารถใช้ได้',
                   //     'tab' => 'tab2' 
                   // );

                        $arr = array('message' => 'userDup');    
     
                        header('Content-Type: application/json');
                        echo json_encode($arr);

                   // $this->load->view('login',$data);// pass your message to your view
                } 
            }
        }
         
    }
    public function signupGoogle()
    { 
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $fullname =  $this->input->post('fullname');
        $imageUrl =  $this->input->post('imageUrl');
        $email =  $this->input->post('email');

        $data = array(
            'username' => $name , 
            'email' => $email,  
            'oauth_provider' =>'google',
            'oauth_uid' => $id,
            'fullname' => $fullname,
            'createdDate' =>  date('Y-m-d H:i:s')
        ); 

        $this->session->set_userdata('username', $name);
 
        $isNotDup = $this->auth_model->validate_login_google($id);

        if($isNotDup){
            
            $this->auth_model->insertUsername($data);
        }
          

        $arr = array('message' => 'success','username' => $_SESSION['username']);    
    
        header('Content-Type: application/json');
        echo json_encode($arr);


    }

    public function signupTest()
    {
            $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);    
    
    //    //add the header here
            header('Content-Type: application/json');
            echo json_encode( $arr );
         
    }
}