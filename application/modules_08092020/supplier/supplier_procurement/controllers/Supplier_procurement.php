<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_procurement extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function index()
	{
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Procurement Plan';
    $this->template->make('supplier_procurement/home',$data,'supplier_portal');
  }
}
