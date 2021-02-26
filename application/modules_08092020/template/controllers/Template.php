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
			$this->load->view($theme .'header',$data);
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

}
