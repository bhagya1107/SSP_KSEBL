<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_management extends AD_Controller {
  public function __construct()
  {
  	parent::__construct();

  }
  public function suppliers()
  {
    $data['page'] = 'Supplier';
    $data['title'] = 'Supplier';
    $this->template->make('user_management/supplier',$data);
  }
  public function supervisors()
  {
    $data['page'] = 'supervisors';
    $data['title'] = 'Supplier';
    $this->template->make('user_management/supervisors',$data);

  }
  public function supplier_profile()
  {
    $data['page'] = 'Supplier';
    $data['title'] = 'Supplier Profile';
    $this->template->make('user_management/supplier_profile',$data);
  }
}
