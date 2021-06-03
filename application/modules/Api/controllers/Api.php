<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Api extends MX_Controller {
  
  public function __construct()
  {
    parent::__construct();

  }

  public function Login_POST()
  {

  
     $data = array(
        "email" => "1036226@kseberp.in",
        "password" => "password"
      );  

      $appendurl='login';
     return $this-> curl_postdata($appendurl,$data);
            
      
  }
  
  public function curl_postdata($url,$data){

    $apiurl     = "http://hris.kseb.in/erpws/api/$url";
    $data_array = json_encode( $data );
    $curl       = curl_init();
    curl_setopt( $curl, CURLOPT_URL, $apiurl );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
    curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
    $result = curl_exec( $curl );//echo"<pre>";print_r($result);exit;
    return $result;
  }

  public function curl_getdata($url,$data=array()){

    $token=$this->Login_POST();
		$token1=json_decode($token);
    $apiurl     = "http://hris.kseb.in/erpws/api/$url";
    $curl       = curl_init();
    curl_setopt( $curl, CURLOPT_URL, $apiurl );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
   

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $token1->token->access_token
    ));
    $result = curl_exec( $curl );
    return print_r($result);
    
  }
    
 
		public function getallmaterialsubcatid_get()
		{

      $appendurl="prc/getMaterialGroupData";

      return $this->curl_getdata($appendurl);
			
		}



			public function getsbudata_get()
		{

      $appendurl="prc/getSbuData";

      return $this->curl_getdata($appendurl);
		}
		
		public function getMaterialData($materialgroup, $productcategory)
		{

      $appendurl="prc/getMaterialData/' . $productcategory . '/' . $materialgroup";

      return $this->curl_getdata($appendurl);
		
		}
    
		public function getMaterialById()
		{

      $appendurl="prc/getMaterialById/173";
      return $this->curl_getdata($appendurl);
		}
		
		
		public function getTenderData()
		{

      $appendurl="prc/getTenderData";
      return $this->curl_getdata($appendurl);
		
		}
		
		public function getTenderDataById()
		{

      $appendurl="prc/getTenderData?id=1&mst_material_id=3";
      return $this->curl_getdata($appendurl);

		}
		public function getPOData()
		{ 
      
      $appendurl="prc/getPOData?vender_id=10003744";
      return $this->curl_getdata($appendurl);
		}
		
		public function getPODataById()
		{
      $appendurl="prc/getPOData?prc_tender_id=1&vender_id=1";
      return $this->curl_getdata($appendurl);	
		}

    public function getordersbyId()
	{
		$appendurl="prc/getordersbyId";
      return $this->curl_getdata($appendurl);	
	}
		
}
