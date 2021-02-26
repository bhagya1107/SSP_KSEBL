<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class purchase_order extends AD_Controller {
  public function __construct()
  {
  	parent::__construct();

  }
  public function index()
  {
    $data['page'] = 'PurchaseOrder';
    $data['title'] = 'PurchaseOrder';
    $this->template->make('purchase_order/home',$data);
  }


}
