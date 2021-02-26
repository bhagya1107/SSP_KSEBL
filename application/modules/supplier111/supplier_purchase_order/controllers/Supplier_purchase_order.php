<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_purchase_order extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function index($tab=1)
	{
    $data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Purchase Order';
    $data['indexurl'] = base_url()."supplier/dashboard";

    $this->template->make('supplier_purchase_order/home',$data,'supplier_portal');
  }
}
