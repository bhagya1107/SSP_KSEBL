<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class supplier_workmeasurement extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function workmeasure($tab=1)
	{
		$data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'work_measurements';
    $data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_workmeasurement/home',$data,'supplier_portal');
  }
 
}
