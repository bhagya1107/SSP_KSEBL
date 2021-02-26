<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_procurement extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function index()
	{
	//neethu
		$this->load->model('Getmenus','GETM');
		$user_type=$this->session->userdata('user_type');
		$uid=$this->session->userdata('supplierid');
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission2($uid,$user_type);
		
       if($getcompanypermissiondetails->procurement_plan=='1')
	   { //neethu end
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Procurement Plan';
    $data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_procurement/home',$data,'supplier_portal');
  
   //neethu
	   }
	    else
	    {
	    	
	    	$this->session->set_flashdata('msg','You are not allowed to access Procurement Plan');
	    	redirect(base_url('supplier/dashboard'));
	    } //neethu end
		
}
}
