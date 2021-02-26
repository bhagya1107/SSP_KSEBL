<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class accounts extends AD_Controller {
  public function __construct()
  {
  	parent::__construct();

  }
  public function index()
  {
    $data['page'] = 'Accounts';
    $data['title'] = 'Accounts';
    $this->template->make('accounts/home',$data);
  }


}
