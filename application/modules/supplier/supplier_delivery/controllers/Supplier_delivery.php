<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_delivery extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function index($tab=1)
	{
      //neethu
    $this->load->model('Getmenus','GETM');
    $user_type=$this->session->userdata('user_type');
    $uid=$this->session->userdata('supplierid');
    $getcompanypermissiondetails=$this->GETM->getCompanyPermission2($uid,$user_type);
    
       if($getcompanypermissiondetails->delivery=='1' and $this->session->userdata('active_status')=='1')
     { //neethu end

	  $data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Delivery';
    $data['indexurl'] = base_url()."supplier/dashboard";

    $this->template->make('supplier_delivery/deliverydetails',$data,'supplier_portal');
     //neethu
     }
      else
      {
        $acl_error_message=acl_error_message('Delivery');
        $this->session->set_flashdata('msg',$acl_error_message);
        redirect(base_url('supplier/dashboard'));    
      } //neethu end
  
   
  }

  public function fetch_calendarevents(){
    $eventArray = array();
    // while ($row = mysqli_fetch_assoc($result)) {
    //     array_push($eventArray, $row);
    // }
    // $eventArray =
    
    echo json_encode($eventArray);
  }
  
  
   public function delivery_module($tab=1)
	{
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Delivery details';
    $data['indexurl'] = base_url()."supplier/dashboard";
    // $this->template->make('supplier_delivery/home',$data,'supplier_portal');
    $this->template->make('supplier_delivery/calendar',$data,'supplier_portal');

  }
}

