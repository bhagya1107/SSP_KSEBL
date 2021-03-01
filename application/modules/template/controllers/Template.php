<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	public function __construct() 
	{
		parent::__construct();

		foreach ($_POST as $key => $value) {
			$_POST[$key]=$this->security->xss_clean($value);
		}
		foreach ($_GET as $key => $value) {
			$_GET[$key]=$this->security->xss_clean($value);
		}
	}


	


	function _remap()
	{
				echo 'No direct access allowed';
	} 

	public function make($page,$data=array(),$theme='')
	{

			if(!isset($data['showdashbaord'] )){

				@$data['showdashbaord'] = false;
			}
			if(!$theme){
				if(isset($_SESSION['theme'])){
				
					$theme = $_SESSION['theme'].'/';
					$data['sidebar']=$this->load->view($theme .'sidebar',$data,true);
				}
				else{

					$theme = 'public/';
				}
			}
			else{
				$theme .= '/';  
			}
			//neethu
			 $user_type=$this->session->userdata('user_type');
			  $uid=$this->session->userdata('supplierid');
			$this->load->model('Getmenus','GETM');
			 $data['getcompanypermissiondetails']=$this->GETM->getCompanyPermission2($uid,$user_type); 
			 //neethu end
			$this->load->view($theme .'header',$data);
			if(isset($_SESSION['theme']) &&  $_SESSION['theme']=='supplier'){ 
				
				
				$this->load->view($theme .'banner',$data);
				$this->load->view($theme .'widget');
			}
			$this->load->view($page,$data);
			$this->load->view($theme .'footer');
			$this->load->view($theme .'javafns');

	}

	public function e404()
	{
		$data=NULL;
		if(isset($_SESSION['theme'])){
			$theme = $_SESSION['theme'].'/';
			$data['sidebar']=$this->load->view($theme .'sidebar',$data,true);
		}
		else{
			$theme = 'public/';
		}
			$this->load->view($theme .'header',$data);
			$this->load->view($theme .'e404',$data);
			$this->load->view($theme .'footer');

	}
	public function registration(){
		echo 1;
	}
	



}
