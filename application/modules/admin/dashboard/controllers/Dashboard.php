<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends AD_Controller {
public function __construct()
{
	parent::__construct();
    $this->load->model('Dashboard_model','dashM');
}
	public function index()
	{
  	$data['page'] = 'dashboard';
    $data['title'] = 'Dashboard';
	$data['total_suppliers'] = $this->dashM->total_suppliers();
	$data['Pending_approvals'] = $this->dashM->Pending_approvals();
	$data['suppliers_registered'] = $this->dashM->suppliers_registered();
	$data['contractors_registered'] = $this->dashM->contractors_registered();
	$data['total_tenders'] = $this->dashM->total_tenders();
	$data['completed_tenders'] = $this->dashM->completed_tenders();
    // $data['appliedtenderdetails']= $this->getappliedtenders($data['tender']);
		$this->template->make('dashboard/home',$data);
  }
  

	public function profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
    	$data['page_title'] = 'Profile';
		// $data['user_details']=$this->dashM->getUser_details($loged_user);
		$this->template->make('dashboard/profile',$data);
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
public function logout()
  {
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value)
         {
           $this->session->unset_userdata($key);
         }
    $this->session->sess_destroy();
		$url=base_url();
		$url.=ADMIN."/home";
		redirect($url);

  }

	public function stationLocation()
	{
			$locations=$this->dashM->getStationLocations();
			echo json_encode($locations);
	}
	public function stationlistxml()
	{
		$data['stdetails']=$this->dashM->stationlist();
   	$this->load->view('dashboard/stationxml',$data);

	}



}
