<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_dashboard extends SP_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model','dashM');
		
	}
	public function index()
	{
		$data['showdashbaord'] =true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Supplier Dashboard';
		$data['indexurl'] = base_url()."supplier/dashboard";
		// $this->template->make('supplier_dashboard/home',$data,'supplier_portal');
		$this->template->make('supplier_dashboard/dashboard',$data,'supplier_portal');

  }

	
	public function profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
    	$data['page_title'] = 'Profile';
		$data['title'] = 'Company Profile';
		$data['indexurl'] = base_url()."supplier/dashboard";
		// $data['user_details']=$this->dashM->getUser_details($loged_user);
		$this->template->make('supplier_dashboard/company_profile',$data,'supplier_portal');
	}
	public function personal_profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
		$data['page_title'] = 'personal_profile';
		$data['title'] = 'Profile';
		$this->template->make('supplier_dashboard/personal_profile',$data,'supplier_portal');
	}
	
	/***************************bhagya********************************/
	
	public function preference_profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
		$data['page_title'] = 'preference_profile';
		$data['title'] = 'preference Profile';
		$this->template->make('supplier_dashboard/preferences',$data,'supplier_portal');
	}
	
	
		public function notifications()
	{
		$data['page'] = 'notifications';
		$data['mainpage'] = '';
		$data['page_title'] = 'notifications';
		$data['title'] = 'Company notifications';
		$this->template->make('supplier_dashboard/supplier_notifications',$data,'supplier_portal');
	}
	/***************************bhagya End********************************/
	public function manage_user()
	{
		$data['page'] = 'users';
		$data['mainpage'] = '';
		$data['page_title'] = 'create users';
		$data['title'] = 'Users';
		$this->template->make('supplier_dashboard/manage_users',$data,'supplier_portal');
	}
	public function products()
	{
		$data['page'] = 'Products';
		$data['mainpage'] = '';
		$data['page_title'] = 'Products';
		$data['title'] = 'Company Products';
		$this->template->make('supplier_dashboard/company_products',$data,'supplier_portal');
	}
	public function services()
	{
		$data['page'] = 'Services';
		$data['mainpage'] = '';
		$data['page_title'] = 'Services';
		$data['title'] = 'Company Services';
		$this->template->make('supplier_dashboard/company_services',$data,'supplier_portal');
	}
public function updateNewuser()
{
	$email=$this->input->post('email');
	$mobile=$this->input->post('mobile');
	$name=$this->input->post('name');
	$data=array(
		'name'=>$name,
		'email'=>$email,
		'mobile'=>$mobile
	);
	$loged_user=$_SESSION['userid'];
	$where=array(
		'uid'=>$loged_user
	);

	$up=simpleUpdate('web_users',$data,$where);
	if($up) print 1; else print 2;
}
public function updatePassword()
{
	$password=$this->input->post('password');
	$newpasswprd=$this->input->post('newpasswprd');
	$cpasword=$this->input->post('cpasword');
	$loged_user=$_SESSION['userid'];
	if($newpasswprd==$cpasword)
	{
		$checkpwd=getAfield("password","web_users","where uid=$loged_user",$as="");
		if($password==$checkpwd)
		{
			$data=array('password'=>$newpasswprd);
			$where=array('uid'=>$loged_user);
			$up=simpleUpdate('web_users',$data,$where);
			if($up) print 1; else print 4;
		}
		else {
			print 2;
		}
	}
	else {
		print 3;
	}

}

	public function logout(){
		$url=base_url($_SESSION['key']);
		$user_data = $this->session->all_userdata();
			foreach ($user_data as $key => $value)
			{
			$this->session->unset_userdata($key);
			}
		$this->session->sess_destroy();
			redirect($url);
	}

	public function banking(){
		$data['page'] = 'Banking';
		$data['mainpage'] = '';
		$data['page_title'] = 'Banking';
		$data['title'] = 'Banking Services';
		$this->template->make('supplier_dashboard/banking_services',$data,'supplier_portal');
	}
	public function attachments(){
		$data['page'] = 'attachments';
		$data['mainpage'] = '';
		$data['page_title'] = 'Attachments';
		$data['title'] = 'Attachments';
		$this->template->make('supplier_dashboard/attachments',$data,'supplier_portal');
	}

	public function portfolio(){
		$data['page'] = 'Portfolio';
		$data['mainpage'] = '';
		$data['page_title'] = 'Portfolio';
		$data['title'] = 'Portfolio';
		$data['tab']=1;
		$this->template->make('supplier_dashboard/portfolio',$data,'supplier_portal');

	}

	public function administration(){
		$data['page'] = 'Portfolio';
		$data['mainpage'] = '';
		$data['page_title'] = 'Portfolio';
		$data['title'] = 'Portfolio';
		$data['tab']=1;
		$this->template->make('supplier_dashboard/administration',$data,'supplier_portal');
	}

	public function subscription(){
		$data['page'] = 'subscription';
		$data['mainpage'] = '';
		$data['page_title'] = 'subscription';
		$data['title'] = 'subscription';
		$data['tab']=1;
		$this->template->make('supplier_dashboard/subscription',$data,'supplier_portal');
	}
	public function change_password(){
		//$data['page'] = 'subscription';
		$data['mainpage'] = '';
		//$data['page_title'] = 'subscription';
		$data['title'] = 'password';
		$data['tab']=1;
		$this->template->make('supplier_dashboard/forgot_password',$data,'supplier_portal');
	}


}
