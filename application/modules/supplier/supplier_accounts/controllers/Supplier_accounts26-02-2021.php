<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_accounts extends SP_Controller {
public function __construct()
{
	parent::__construct();

}
	public function payments($tab=1)
	{
    //neethu
    $this->load->model('Getmenus','GETM');
    $user_type=$this->session->userdata('user_type');
    $uid=$this->session->userdata('supplierid');
    $getcompanypermissiondetails=$this->GETM->getCompanyPermission2($uid,$user_type);
    
       if($getcompanypermissiondetails->accounts=='1' and $this->session->userdata('active_status')=='1')
     { //neethu end
    $this->Login_POST(); 
		$data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Accounts';
    $data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_accounts/home',$data,'supplier_portal');
     //neethu
     }
      else
      {
         $this->session->set_flashdata('msg','You are not allowed to access Delivery');
        redirect(base_url('supplier/dashboard'));
      } //neethu end
  
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
		
		public function getallmaterialsubcatid_get()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialGroupData';
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
  return print_r($result);
		}
			public function getsbudata_get()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getSbuData';
  //$data_array = json_encode( $data );
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
   print_r($result);
		}
		
		public function getMaterialData()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialData/3/9';
  //$data_array = json_encode( $data );
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
   print_r($result);
		}
		
		public function getMaterialById()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialById/173';
  //$data_array = json_encode( $data );
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
   print_r($result);
		}
		
		
		public function getTenderData()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getTenderData';
  //$data_array = json_encode( $data );
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
   print_r($result);
		}
		
		public function getTenderDataById()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getTenderData?id=1&mst_material_id=3';
  //$data_array = json_encode( $data );
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
   print_r($result);
		}
		public function getPOData()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getPOData';
  //$data_array = json_encode( $data );
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
   print_r($result);
		}
		
		public function getPODataById()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getPOData?prc_tender_id=1&vender_id=1';
  //$data_array = json_encode( $data );
  $curl       = curl_init();
  curl_setopt( $curl, CURLOPT_URL, $apiurl );
  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  //curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
  //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
  
  
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   'Authorization: Bearer ' . $token1->token->access_token
   ));
   $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
   print_r($result);
		}
		
  public function invoices($tab=1)
	{
    //neethu
    $this->load->model('Getmenus','GETM');
    $user_type=$this->session->userdata('user_type');
    $getcompanypermissiondetails=$this->GETM->getCompanyPermission1($user_type);
    
       if($getcompanypermissiondetails->accounts=='1')
     { //neethu end
		$data['tab'] =$tab;
    $data['showdashbaord'] =true;
    $data['page'] = 'supplier_dashboard';
    $data['title'] = 'Procurement Plan';
    $data['indexurl'] = base_url()."supplier/dashboard";
    $this->template->make('supplier_accounts/invoice',$data,'supplier_portal');
    //neethu
     }
      else
      {
        echo " “Sorry, You Are Not Allowed to Access This Page” ";
      } //neethu end
  
  }
}
