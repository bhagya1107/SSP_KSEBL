<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {


	function _remap()
	{
				echo 'No direct access allowed';
	} 

	public function make($page,$data=array(),$theme='')
	{
			// $data['roleid']=$_SESSION['roleid'];
			// $data['userid'] = $_SESSION['userid'];
			// $data['getcompanypermissiondetails']='';
			if(!isset($data['showdashbaord'] )){

				@$data['showdashbaord'] = false;
			}
			if(!$theme){
				if(isset($_SESSION['theme'])){
					// $this->load->model('Dashboard_model','dashM');
					// $data['getcompanypermissiondetails']=$this->dashM->getCompanyPermission1(4);
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
			 // $this->load->model('Dashboard_model','dashM');
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
