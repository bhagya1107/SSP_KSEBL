<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_home extends MX_Controller {
 	public function __construct(){
			$this->load->module('template');
	}
 
	public function index()
	{

		$user = $this->session->userdata('supplier'); 
		if (!$user) {
        redirect(base_url());
		}
		else{
			redirect(supplier_url('dashboard'));
		} 
	}
	public function admin_login()   
	{


		decrypt();
       
		
		

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|max_length[50]|trim');
		$this->form_validation->set_rules('password','Password ','required|min_length[3]|max_length[30]');
		if($this->form_validation->run())
		{

			$username=$this->input->post('username');
			$password=$this->input->post('password');
        //    echo "password"; exit;

			$this->load->model('login');
			$chk=$this->login->validate($username,$password); 

    		//  print_r($chk); exit;
			if($chk)
			{
				$uid=$chk['uid'];
				$roleid=$chk['role_id'];
				$username=$chk['name'];
				$user_type=$chk['user_type'];
				$lock_user=$chk['active_status'];
				$is_deleted=$chk['isdeleted'];
				// $district_id=$chk['district_id'];
				// $basin_id=$chk['basin_id'];
			
				if($is_deleted!=1)
				{
					$ip=$this->input->ip_address();
					$lgtime=date('Y-m-d H:i:s');
					$data = array(
					'uid' => $uid,
					'login_ip'=>$ip,
					'login_time'=>$lgtime
					);
					$this->db->insert('login_history', $data);
					$session_data= array(
						'username'=>$username,
						'roleid'=>$roleid,
						'userid'=>$uid,
						'supplierid'=>$uid,
						'user_type'=>$user_type, 
						'active_status'=>$lock_user,
						'user_district'=>$district_id,
						'supplier'=>TRUE
						);
				$this->session->set_userdata($session_data);
				$this->session->set_userdata('supplierid',$uid);
				$this->session->set_userdata('uid',$uid);
				$this->session->set_userdata('user_type',$user_type);
				
						$_SESSION['theme'] = 'supplier';
						$_SESSION['key'] = '';
					
						 redirect(USER.'/dashboard');
            // if($username=="user1")
            // {
            //   redirect(USER.'/dashboard');

            // }
            // else
            // {
            //   redirect(USER.'/registration/step_4');
            // }


				} 
				else
				{
					$this->session->set_flashdata('error',"You dont have permision to access dashboard");
						$this->session->unset_userdata('account_user','userid','pid');
						$url=base_url();
					//	$url.=USER."";
						redirect($url);
				}

			}
			else {

				$this->session->set_flashdata('error',"Invalid Username or Password");
				$this->session->unset_userdata('username','userid');
				$url=base_url();
			//	$url.=ADMIN."/home";
				redirect($url);
			}
		}
		else
		{
			$valerror=validation_errors();
			$this->session->set_flashdata('error',$valerror);
			$this->session->unset_userdata('account_user','userid','pid');
			$url=base_url();
		//	$url.=ADMIN."/home";
			redirect($url);
		}
	}



 
	public function user_login()  
	{

		// decrypt();
		

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|max_length[50]|trim');
		$this->form_validation->set_rules('password','Password ','required|min_length[3]|max_length[30]');
		

		if($this->form_validation->run())
		{

			$username=$this->input->post('username');
			$password=$this->input->post('password');
			// echo $password;exit;

           
			$this->load->model('login');
			$chk=$this->login->validateuser($username,$password); 
             $supplier_active_status=$chk['active_status'];
            // print($supplier_active_status);exit;
    		// print_r($chk); exit;
			if($chk)
			{
				$uid=$chk['id'];
				$username=$chk['name'];
				$user_type=$chk['usertype'];
				$lock_user=$chk['islocked'];
			    $supplierid=$chk['supplierid'];
			    $supplier_active_status=$chk['active_status'];
			   
				if($lock_user!=1 and $supplier_active_status==1 )
				{
					$ip=$this->input->ip_address();
					$lgtime=date('Y-m-d H:i:s');
					$data = array(
					'uid' => $uid,
					'login_ip'=>$ip,
					'login_time'=>$lgtime
					);
					$this->db->insert('login_history', $data);
					$session_data= array(
						'username'=>$username,
						'userid'=>$uid,
						'user_type'=>$user_type, 
						 'active_status'=>1,
						'user_district'=>$district_id,
						'fname'=>$name,
						'supplier'=>TRUE
						);
				$this->session->set_userdata($session_data);
				$this->session->set_userdata('supplierid',$supplierid);
				$this->session->set_userdata('uid',$uid);
				$this->session->set_userdata('user_type',$user_type);
				
						$_SESSION['theme'] = 'supplier';
						$_SESSION['key'] = '';
					$_SESSION['showpop'] = 'false';
						 redirect(USER.'/dashboard');



				} 
				else
				{
					$msg="You dont have permision to access dashboard";
					if($supplier_active_status!=1 ){
						$msg="Your supplier Not Active";
					}
					$this->session->set_flashdata('msg',$msg);
					$this->session->unset_userdata('account_user','userid','pid');
						$_SESSION['showpop'] = 'true';
						// echo json_encode('msg'=>$msg);
						$url=base_url();
					//	$url.=USER."";
						redirect($url);
				}

			}
			else {

				$this->session->set_flashdata('msg',"Invalid Username or Password");
				$this->session->unset_userdata('username','userid');
				$url=base_url();
				$_SESSION['showpop'] = 'true';
			//	$u=rl.ADMIN."/home";
				redirect($url);
			}
		}
		else
		{
			$_SESSION['showpop'] = 'true';
			$valerror=validation_errors();
			$this->session->set_flashdata('msg',$valerror);
			$this->session->unset_userdata('account_user','userid','pid');
			$url=base_url();
		//	$url.=ADMIN."/home";
			redirect($url);
		}
	}



	public function forgot_password()
	{
	$this->load->view('forgot_pasword');
	}

	public function forgotPassword()
	{
	$this->load->view('forgotpassword');
	}
	public function forgotpaswrdManage()
	{
		$type=$this->input->post('type');


		if($type==1)
		{
			if(isset($_SESSION['new_otp']))
			{
				unset($_SESSION['new_otp']);
				unset($_SESSION['forgot_user']);
			}
			$email=$this->input->post('email');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email','Email','required|max_length[50]|trim|valid_email');
			if($this->form_validation->run())
			{
				//get user id of
				$uid=getAfield("uid","web_users","where email='$email' AND is_deleted=0 AND active_status=1",$as="");
				if($uid>0)
				{
					$otp=rand(100000,999999);
					$_SESSION['new_otp']=$otp;
					$_SESSION['forgot_user']=$uid;
					$msg='Your one time password for reseting your password is <b>'.$otp.'</b>';
					$sendmail=SendMail($email,"OTP FOR FORGOT PASSWORD",$msg);
					if($sendmail)
					{
						print 1;
					}
					else {
						echo "Unable to send otp to the email. please try again later";
					}
				}
				else {
					echo "We didnt find any user for entered email id";
				}
			}
			else {
		 	echo validation_errors();
			}
		}
		else if($type==2)
		{

			if(isset($_SESSION['new_otp']) && isset($_SESSION['forgot_user']))
			{
					$otp=$this->input->post('otp');
					$n_password=$this->input->post('n_password');
					$c_password=$this->input->post('c_password');
						if($c_password==$n_password)
						{
								if($otp==$_SESSION['new_otp'])
								{
									$data=array('password'=>$c_password);
									$where=array('uid'=>$_SESSION['forgot_user']);
									$up=simpleUpdate('web_users',$data,$where);
									if($up) {
									unset($_SESSION['new_otp']);
									unset($_SESSION['forgot_user']);
									print 1;
								 } else print "Some unexpected error occures try again";
								}
								else {
									echo "Invalid OTP";
								}
						}
						else {
							echo "Password do not match";
						}
			}
			else {
				echo "Invalid attempt for password reset";
			}
		}
	}

	// km
	public function changeFontsize(){
		$fontsize= $this->input->post('fontsize');

		$this->session->set_userdata('fontsize',$fontsize);
		echo 1;

	}
	
	  
}
