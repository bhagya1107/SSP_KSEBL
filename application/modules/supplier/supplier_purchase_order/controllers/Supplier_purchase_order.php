<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_purchase_order extends SP_Controller {
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
		
       if($getcompanypermissiondetails->purchase_order=='1' and $this->session->userdata('active_status')=='1')
	   { //neethu end	
    $data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    if($user_type==2)
    {
    	$data['title'] = 'Work Order';
    }
    else
    {
    	$data['title'] = 'Purchase Order';
    }
    
    $data['indexurl'] = base_url()."supplier/dashboard";
	$purchaseOrder=json_decode($this->getPOData());
	$data['purchaseorder']=$purchaseOrder->result_data->list;
    $this->template->make('supplier_purchase_order/home',$data,'supplier_portal');

     //neethu
	   }
	    else
	    {
			$acl_error_message=acl_error_message('Purchase Order');	
	    	$this->session->set_flashdata('msg',$acl_error_message);
	    	redirect(base_url('supplier/dashboard'));
	    } //neethu end
	
  }
  
  public function delivery($tab=1)
	{
    $data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Purchase Order';
    $data['indexurl'] = base_url()."supplier/dashboard";

    $this->template->make('supplier_purchase_order/deliverydetails',$data,'supplier_portal');
  }
  
   public function Login_POST()
		{
			 $data = array(
						"email" => "1036226@kseberp.in",
						"password" => "password"
					);  
				
			  $apiurl     = 'http://hris.kseb.in/erpws/api/login';
			  $data_array = json_encode( $data );
			  $curl       = curl_init();
			  curl_setopt( $curl, CURLOPT_URL, $apiurl );
			  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
			  curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
			  curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
			  $result = curl_exec( $curl );
			  return $result;
 
		}
  
  	public function getPOData()
		{
		$token=$this->Login_POST();
		$token1=json_decode($token);
			
		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getPOData';
	    $curl       = curl_init();
	    curl_setopt( $curl, CURLOPT_URL, $apiurl );
	    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	   'Content-Type: application/json',
	   'Authorization: Bearer ' . $token1->result_data->token->access_token
	   ));
	   $result = curl_exec( $curl );
	  return $result;
		}

		public function getAllpurchasesApi(){
			$purchaseOrder=json_decode($this->getPOData());
			$data['purchaseorder']=$purchaseOrder->result_data->list;
			
	
			echo json_encode($data['purchaseorder']);
			
		}

}
