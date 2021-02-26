<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_tenders extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function index()
	{
    $data['showdashbaord'] =true;
    $data['page'] = 'tenders';
	$data['title'] = 'Tenders';
	$data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_tenders/home',$data,'supplier_portal');
  }
}
