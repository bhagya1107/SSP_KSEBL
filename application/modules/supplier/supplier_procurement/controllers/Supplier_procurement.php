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
// 	$procuredplns = array (
//   array("Product" =>"DIST TFR 3PH 150kVA 11kV/433V	","Scheme"=>KSEB 20-21,"Plan Duration"=>100 Days,"Plan Start Date"=>12-04-2021,"Expected Quantity"=>18,"Procured so far"=>18),
//   array("Product" =>"DIST TFR 3PH 150kVA 11kV/433V	","Scheme"=>KSEB 20-21,"Plan Duration"=>100 Days,"Plan Start Date"=>12-04-2021,"Expected Quantity"=>18,"Procured so far"=>18),
//   array("Product" =>"DIST TFR 3PH 150kVA 11kV/433V	","Scheme"=>KSEB 20-21,"Plan Duration"=>100 Days,"Plan Start Date"=>12-04-2021,"Expected Quantity"=>18,"Procured so far"=>18),
//   array("Product" =>"DIST TFR 3PH 150kVA 11kV/433V	","Scheme"=>KSEB 20-21,"Plan Duration"=>100 Days,"Plan Start Date"=>12-04-2021,"Expected Quantity"=>18,"Procured so far"=>18),
// );
		$this->load->model('Getmenus','GETM');
		$user_type=$this->session->userdata('user_type');
		$uid=$this->session->userdata('supplierid');
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission2($uid,$user_type);
		
       if($getcompanypermissiondetails->procurement_plan=='1' and $this->session->userdata('active_status')=='1')
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
			$procurement=acl_error_message('Procurement Plan');
	    	
	    	$this->session->set_flashdata('msg',$procurement);
	    	redirect(base_url('supplier/dashboard'));
	    } //neethu end
		
}
}
