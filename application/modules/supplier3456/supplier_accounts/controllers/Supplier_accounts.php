<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_accounts extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function payments($tab=1)
	{
		$data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Accounts';
    $data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_accounts/home',$data,'supplier_portal');
  }
  public function invoices($tab=1)
	{
		$data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Procurement Plan';
    $data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_accounts/invoice',$data,'supplier_portal');
  }
}
