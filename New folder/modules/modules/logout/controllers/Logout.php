<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends MX_Controller {
public function __construct()
{
	parent::__construct();
}
	public function index()
	{
		$url=base_url($_SESSION['key']);
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value)
         {
           $this->session->unset_userdata($key);
         }
    $this->session->sess_destroy();
		redirect($url);

  }


}
