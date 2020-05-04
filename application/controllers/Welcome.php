<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() { 
        parent::__construct(); 
         
        // Load facebook oauth library 
        $this->load->library('facebook'); 
         
        // Load user model 
		$this->load->model('user'); 
		
		$this->load->model('auth_model');

		$this->load->model('google_login_model');
		   
        // Load google oauth library 
	   //$this->load->library('google'); 
	   
	   //CURRENT_TIMESTAMP
    } 
	 
	
	public function index()
	{
		//$this->load->view('welcome_message');
  
		$userData = array(); 

		$logoutURL = "";
		$authURL = "";

		$msg = "";
		$login_button = "";


		include_once APPPATH . "libraries/vendor/autoload.php";

	 
		$alltrainner = $this->auth_model->getAllTraininer();
        $allfitness = $this->auth_model->getAllFitness();

        $this->session->set_userdata('allTrainner', $alltrainner);
		$this->session->set_userdata('allFitness', $allfitness);

		$google_client = new Google_Client();
		// $google_client->setClientId('1019177846192-u1cnjjob6hgr3r7ioe0gbosa32niki8d.apps.googleusercontent.com'); //Define your ClientID
		// $google_client->setClientSecret('QsKIW8-KzFKPoHEimC4iGzrw'); //Define your Client Secret Key
		// $google_client->setRedirectUri('http://localhost/fitnessonline/'); //Define your Redirect Uri
		$google_client->setClientId('1019177846192-peic1lk07eus7mg28vl4vfksoio9alc6.apps.googleusercontent.com'); //Define your ClientID
		$google_client->setClientSecret('RFb0K-crJU5HxwgUJHgXMEIH'); //Define your Client Secret Key
		$google_client->setRedirectUri('http://fitnessonline.co.th/'); //Define your Redirect Uri
		$google_client->addScope('email');
		$google_client->addScope('profile');
 
		if(isset($_GET["code"]))
		{
			//echo '1';
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
			
			if(!isset($token["error"])){
				$google_client->setAccessToken($token['access_token']);
				$this->session->set_userdata('access_token', $token['access_token']);
				$google_service = new Google_Service_Oauth2($google_client);
				$data = $google_service->userinfo->get();
				$current_datetime = date('Y-m-d H:i:s');

				//echo $data['id'];
				//echo $data['family_name'];

				if($this->auth_model->validate_login_google($data['id'])){
					   $user_data = array(
							'oauth_uid' => $data['id'],
							'oauth_provider' => 'google',							
							'username'  => $data['given_name'],
							'first_name'  => $data['given_name'],
							'last_name'   => $data['family_name'],
							'fullname'   => $data['given_name'].' '.$data['family_name'],
							'email'  => $data['email'],
							'picture' => $data['picture'],
							'type' => 'member',
							'createdDate'  => $current_datetime
						);

						$this->auth_model->insertUsername( $user_data);

						$this->session->set_userdata('username', $data['given_name']); 

						$msg = "ยินดีต้อนรับเข้าสู่ระบบ Fitnessonline";

						$this->signup($data['given_name'],$data['email']); 
		  
				}else{
					$this->session->set_userdata('username', $data['given_name']); 
					$msg = "ยินดีต้อนรับเข้าสู่ระบบ Fitnessonline";
				}
			}
		}else{
			//echo '2';
			$username = $this->input->post('signin_username'); 
			$password =  $this->input->post('signin_password');
			
			

			if($username != null && $password != null){
				//echo '3';
				$isSuccess =	$this->auth_model->validate_login($username,$password);  
				
				if(!$isSuccess){
					$msg = "ไม่สามารถล๊อคอินระบบ Fitnessonline";
				}else{
					$msg = "ยินดีต้อนรับเข้าสู่ระบบ Fitnessonline";
					$this->session->set_userdata('username', $username); 
				} 

			}

			$signup_email = $this->input->post('signup_email'); 
			$signup_username = $this->input->post('signup_username'); 
			$signup_password = $this->input->post('signup_password'); 

			if($signup_email != null && $signup_username != null && $signup_password != null){
				//echo '4';
				$isNotDup = $this->auth_model->validate_username($username,$signup_email);

				if($isNotDup){ 
					$msg = "ยินดีต้อนรับเข้าสู่ระบบ Fitnessonline";
					$current_datetime = date('Y-m-d H:i:s');
					$user_data = array( 					
						'username'  => $signup_username, 
						'email'  => $signup_email,
						'password' => $signup_password,
						'type' => 'member',
						'createdDate'  => $current_datetime
					);

					$this->auth_model->insertUsername($user_data);

					$this->session->set_userdata('username', $username); 
					$this->signup($username,$signup_email); 
				}else{
					$message = "ไม่สามารถสมัครสมาชิก Fitnessonline เนื่องจากมี ชื่อ อีเมลย์ในระบบ";
				}
			} 
		} 
        // Authenticate user with facebook 
        // if($this->facebook->is_authenticated()){ 
        //     // Get user info from facebook 
        //     $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture'); 
 
        //     // Preparing data for database insertion 
        //     $userData['oauth_provider'] = 'facebook'; 
        //     $userData['oauth_uid']    = !empty($fbUser['id'])?$fbUser['id']:'';; 
        //     $userData['first_name']    = !empty($fbUser['first_name'])?$fbUser['first_name']:''; 
        //     $userData['last_name']    = !empty($fbUser['last_name'])?$fbUser['last_name']:''; 
        //     $userData['email']        = !empty($fbUser['email'])?$fbUser['email']:''; 
        //     $userData['gender']        = !empty($fbUser['gender'])?$fbUser['gender']:''; 
        //     $userData['picture']    = !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:''; 
        //     $userData['link']        = !empty($fbUser['link'])?$fbUser['link']:'https://www.facebook.com/'; 
             
        //     // Insert or update user data to the database 
        //     $userID = $this->user->checkUser($userData); 
             
        //     // Check user data insert or update status 
        //     if(!empty($userID)){ 
        //         $data['userData'] = $userData; 
                 
        //         // Store the user profile info into session 
        //         $this->session->set_userdata('userData', $userData); 
        //     }else{ 
        //        $data['userData'] = array(); 
        //     } 
             
        //     // Facebook logout URL 
		// 	//$data['logoutURL'] = $this->facebook->logout_url(); 
			
		// 	$logoutURL = $this->facebook->logout_url(); 
        // }else{ 
        //     // Facebook authentication url 
		// 	//$data['authURL'] =  $this->facebook->login_url(); 
		// 	$authURL = $this->facebook->login_url(); 
		// } 
		
		$tab = 'tab1';  
		$login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'/assets/images/social/googlelogin.png" width="255" height="52"  /></a>';
		
		$allFitnessByHome = $this->auth_model->getAllFitnessByHome();
		$allTrainnerByHome = $this->auth_model->getAllTrainnerByHome();


		$data1 = array(
			'logoutURL' =>  $logoutURL,
			'authURL' => $authURL,
			'tab' => $tab,
			'message' => $msg,
			'login_button' =>  $login_button,
			'allFitnessByHome' => $allFitnessByHome,
			'allTrainnerByHome' => $allTrainnerByHome
		);

		if(isset($_SESSION['username'])) {
			$memb = $this->auth_model->getAllTraininerByUsername($_SESSION['username']);

			//echo $memb[0]->member_id;
			if($memb != null){
				$this->session->set_userdata('memberOfType', $memb[0]->type); 
				$this->session->set_userdata('memberOfId', $memb[0]->member_id); 
			}
		}

		$this->session->set_userdata('message', $msg);
		$this->load->view('home',$data1); 
	}

	public function signup($username,$email)
    { 
		$from_email = "info@fitnessonline.co.th";

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
  
	}
	
	public function updateProfile()
	{

		$member_id = $this->input->post('member_id'); 

		$first_name = $this->input->post('first_name'); 
		$last_name = $this->input->post('last_name'); 
		$address = $this->input->post('address'); 
		$telephone = $this->input->post('telephone'); 
		$facebook = $this->input->post('facebook'); 
		$line = $this->input->post('line'); 
		$fullname = $first_name.' '.$last_name;
		$current_datetime = date('Y-m-d H:i:s');

					 

		$data = array( 
			'first_name'  => $first_name,
			'last_name'   => $last_name,
			'address'   => $address,
			'telephone'   => $telephone,
			'facebook'   => $facebook,
			'line'   => $line,
			'fullname'   => $fullname, 
			'createdDate'  => $current_datetime
		);

		$this->auth_model->updateProfile($member_id,$data);


	}
}