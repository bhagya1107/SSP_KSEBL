<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_delivery extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function index()
	{
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Delivery details';
    $data['indexurl'] = base_url()."supplier/dashboard";
    // $this->template->make('supplier_delivery/home',$data,'supplier_portal');
    $this->template->make('supplier_delivery/calendar',$data,'supplier_portal');

  }

  public function fetch_calendarevents(){
    $eventArray = array();
    // while ($row = mysqli_fetch_assoc($result)) {
    //     array_push($eventArray, $row);
    // }
    // $eventArray =
    
    echo json_encode($eventArray);
  }
}

