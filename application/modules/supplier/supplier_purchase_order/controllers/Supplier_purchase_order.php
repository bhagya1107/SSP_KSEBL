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
		$data['upload_file'] ="1";
		$data['supplierid'] = $this->session->userdata('uid'); 

				$res =  $this->procM->insert('pdi_predispatch', $data);
			 if($res > 0) {
				$this->session->set_flashdata('msg', 'Selected Tenders added to Favourites');
			} else {
				echo "Error while adding";
			}
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



}
