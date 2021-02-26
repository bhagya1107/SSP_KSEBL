<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delivery extends AD_Controller {
  public function __construct()
  {
  	parent::__construct();

  }
  public function index()
  {
    $data['page'] = 'Delivery';
    $data['title'] = 'Manage Delivery';
    $this->template->make('delivery/manage_delivery',$data);
  }


}
