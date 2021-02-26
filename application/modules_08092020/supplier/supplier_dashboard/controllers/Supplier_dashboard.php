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
		$this->template->make('supplier_dashboard/home',$data,'supplier_portal');
  }
	public function profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
    $data['page_title'] = 'Profile';
		  $data['title'] = 'Comp(any Profile';
		// $data['user_details']=$this->dashM->getUser_details($loged_user);
		$this->template->make('supplier_dashboard/company_profile',$data,'supplier_portal');
	}
	public function create_user()
	{

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


}
