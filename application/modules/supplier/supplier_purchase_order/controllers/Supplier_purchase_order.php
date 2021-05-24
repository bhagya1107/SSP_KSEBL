<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_purchase_order extends SP_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('dashboard/Dashboard_model', 'dashM');
	$this->load->model('procurement/Procurement_model', 'procM');
	
	
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

		public function PDIRequest_POST()
		{
			 $data = array(
						"VendorId" => "1036226",
						"POId" => "1",
						"serialn.ofrom"=>"100",
						"serialn.ofrom"=>"150",
						"quantity"=>"10",
						"visit request date"=>"2021-05-07",
						"file"=>"",
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

		public function insert_predispatch()
	{

		$res = '';
		$data['serialno_from'] = $this->input->post('serialfrom');
		$data['serialno_to'] = $this->input->post('serialto');
		$data['quantity'] = $this->input->post('quantitypdi');
		$data['visit_request_date'] = $this->input->post('visitdate');
		$data['upload_file'] ="";
		$data['supplierid'] = $this->session->userdata('uid'); 

				$res =  $this->procM->insert('pdi_predispatch', $data);
			 if($res > 0) {
				$this->session->set_flashdata('msg', 'PDI added Sucessfully');
				$this->callpdirequest_postapi($data);
			} else {
				echo "Error while adding";
			}


		} 
		private function callpdirequest_postapi($data)
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
		$apiurl     = 'http://hris.kseb.in/erpws/api/login';
		$data_array = json_encode($data);
		$curl       = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $apiurl );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		) );
		$result = curl_exec( $curl );
		return $result;
		}

		public function getpredispatchData()
	{

		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		$supplierid = $this->session->userdata('uid');

		$pdidata = $this->procM->getListOfPreDispatch($supplierid);

		$data = array();

		$i = 1;
		foreach ($pdidata as $r) {


			$data[] = array(
				'slno' => $i,
				'date' => $r->visit_request_date,
				'status' =>'Requested',
				'button' =>'',
				
			);
			$i++;
		}

		$output = array(
			"draw" => $draw,

			"data" => $data
		);

		echo json_encode($output);
	}

	public function insert_deliveryschedule()
	{

		$res = '';
		$data['material'] = $this->input->post('productdelivery');
		$data['quantity'] = $this->input->post('quantitydelivery');
		$data['schedule_date'] = $this->input->post('deliverydate');
		$data['supplier_id'] = $this->session->userdata('uid'); 

				$res =  $this->procM->insert('delivery_schedule', $data);
			 if($res > 0) {
				$this->session->set_flashdata('msg', 'Delivery Scheduled added Sucessfully');
				$this->callscheduleddelivery_postapi($data);
			} else {
				echo "Error while adding";
			}

		} 

		private function callscheduleddelivery_postapi($data)
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
		$apiurl     = 'http://hris.kseb.in/erpws/api/login';
		$data_array = json_encode($data);
		$curl       = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $apiurl );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		) );
		$result = curl_exec( $curl );
		return $result;
		}

		public function post_changerequest()
	{

		$res = '';
		$data['commentrequest'] = $this->input->post('commentrequest');
		$data['supplier_id'] = $this->session->userdata('uid'); 

				//$res =  $this->procM->insert('delivery_schedule', $data);
				$res=	$this->callchangerequest_postapi($data);

			 if($res > 0) {
				$this->session->set_flashdata('msg', 'Delivery Scheduled added Sucessfully');
			
			} else {
				echo "Error while adding";
			}

		} 

		private function callchangerequest_postapi($data)
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
		$apiurl     = 'http://hris.kseb.in/erpws/api/login';
		$data_array = json_encode($data);
		$curl       = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $apiurl );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		) );
		$result = curl_exec( $curl );
		return $result;
		}

		public function post_acceptloa()
	{

		$res = '';
		$data['poid'] = $this->session->userdata('poid');
		$data['Loa'] = $this->session->userdata('Loa');
		$data['supplier_id'] = $this->session->userdata('uid'); 

				$res=	$this->callacceptloa_postapi($data);

			 if($res > 0) {
				$this->session->set_flashdata('msg', 'LOA added Sucessfully');
			
			} else {
				echo "Error while adding";
			}

		} 

		private function callacceptloa_postapi($data)
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
		$apiurl     = 'http://hris.kseb.in/erpws/api/login';
		$data_array = json_encode($data);
		$curl       = curl_init();
		curl_setopt( $curl, CURLOPT_URL, $apiurl );
		curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		) );
		$result = curl_exec( $curl );
		return $result;
		}

}
