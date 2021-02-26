<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class supplier_workmeasurement extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function workmeasure($tab=1)
	{
    //neethu
        $this->load->model('Getmenus','GETM');
        $user_type=$this->session->userdata('user_type');
        $getcompanypermissiondetails=$this->GETM->getCompanyPermission1($user_type);
        
       if($getcompanypermissiondetails->work_measurement=='0')
       { //neethu end
	$data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'work_measurements';
    $data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_workmeasurement/home',$data,'supplier_portal');
    //neethu
       }
        else
        {
            echo " “Sorry, You Are Not Allowed to Access This Page” ";
        } //neethu end
    
  }
 
}
