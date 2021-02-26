<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->module('template');
	}

	public function views($page = 'home',$data=array())
	{
		 if ((is_file(APPPATH . 'modules' . DS . 'website' . DS . 'web' . DS . 'views' . DS . $page . '.php'))) {
			$this->template->make( 'web/'.$page, $data,'public');
		} else {
			$this->template->make( 'web/404', $data,'public');
		}
	}
	public function completereg($page = 'home',$data=array())
	{

		 if ((is_file(APPPATH . 'modules' . DS . 'website' . DS . 'web' . DS . 'views' . DS . $page . '.php'))) {
			$this->template->make( 'web/'.$page, $data,'public');
		} else {
			$this->template->make( 'web/404', $data,'public');
		}
	}

}
