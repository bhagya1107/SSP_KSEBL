<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Supplier_purchase_order extends SP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard/Dashboard_model', 'dashM');
		$this->load->model('procurement/Procurement_model', 'procM');
	}
	public function index($tab = 1)
	{

		//neethu
		$this->load->model('Getmenus', 'GETM');
		$user_type = $this->session->userdata('user_type');
		$uid = $this->session->userdata('supplierid');
		$erp_id = $this->session->userdata('supplier_erp_id');
		$poid=9;
		$getcompanypermissiondetails = $this->GETM->getCompanyPermission2($uid, $user_type);

		if ($getcompanypermissiondetails->purchase_order == '1' and $this->session->userdata('active_status') == '1') { //neethu end	
			$data['tab'] = $tab;
			$data['showdashbaord'] = true;
			$data['page'] = 'supplier_dashboard';
			if ($user_type == 2) {
				$data['title'] = 'Work Order';
			} else {
				$data['title'] = 'Purchase Order';
			}

			$data['indexurl'] = base_url() . "supplier/dashboard";
			$purchaseOrder = json_decode($this->api->getPOData($erp_id));
			$data['purchaseorder'] = $purchaseOrder->result_data->list;
			$purchaseOrderpdiList = json_decode($this->api->getLstOfApprovedStatusPDI($erp_id,$poid));
			$data['purchaseOrderpdiList'] = $purchaseOrderpdiList->result_data->list;
			$this->template->make('supplier_purchase_order/home', $data, 'supplier_portal');

			//neethu
		} else {
			$acl_error_message = acl_error_message('Purchase Order');
			$this->session->set_flashdata('msg', $acl_error_message);
			redirect(base_url('supplier/dashboard'));
		} //neethu end

	}

	public function delivery($tab = 1)
	{
		$data['tab'] = $tab;
		$data['showdashbaord'] = true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Purchase Order';
		$data['indexurl'] = base_url() . "supplier/dashboard";

		$this->template->make('supplier_purchase_order/deliverydetails', $data, 'supplier_portal');
	}



	public function PDIRequest_POST()
	{
		$data = array(
			"VendorId" => "1036226",
			"POId" => "1",
			"serialn.ofrom" => "100",
			"serialn.ofrom" => "150",
			"quantity" => "10",
			"visit request date" => "2021-05-07",
			"file" => "",
		);

		$this->api->curl_postdata($data);
	}


	public function getAllpurchasesApi()
	{
		$erp_id = $this->session->userdata('supplier_erp_id');
		$purchaseOrder = json_decode($this->api->getPOData($erp_id));
		$data['purchaseorder'] = $purchaseOrder->result_data->list;
		echo json_encode($data['purchaseorder']);
	}

	public function insert_predispatch()
	{

		$res = '';
		$data['serialno_from'] = $this->input->post('serialfrom');
		$data['serialno_to'] = $this->input->post('serialto');
		$data['quantity'] = $this->input->post('quantitypdi');
		$data['visit_request_date'] = $this->input->post('visitdate');
		$data['upload_file'] = "";
		$data['supplierid'] = $this->session->userdata('uid');

		$res =  $this->procM->insert('pdi_predispatch', $data);
		if ($res > 0) {
			$this->session->set_flashdata('msg', 'PDI added Sucessfully');
			$this->callpostapi($data);
		} else {
			echo "Error while adding";
		}
	}
	private function callpostapi($data)
	{
		$url="http://hris.kseb.in/erpws/api/prc/getPOListingDeliveryscheduled?vender_id=10003526";
		$this->api->curl_postdata($url,$data);
	}

	public function getpredispatchData()
	{
		$erp_id = $this->session->userdata('supplier_erp_id');
		$poid=9;
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		$supplierid = $this->session->userdata('uid');

		$pdidata = $this->procM->getListOfPreDispatch($supplierid);
		$purchaseOrderpdiList = json_decode($this->api->getLstOfApprovedStatusPDI($erp_id,$poid));
		$purchaseOrderpdiListdetail = $purchaseOrderpdiList->result_data->list;
		$data = array();

		$i = 1;
		
		foreach ($purchaseOrderpdiListdetail as $r) {
			$pay='';
			if($r->inspection_status=="Approved"){
						$pay = '<button class="btn btn-primary dropdown-toggle"  data-toggle="modal" data-target="#PaymentPDI" type="button">Pay</button>';
			}
			$data[] = array(
				'slno' => $i,
				'date' => $r->visit_planning_date,
				'status' => $r->inspection_status,
				'button' => $pay,

			);
			$i++;
		}

		$output = array(
			"draw" => $draw,

			"data" => $data
		);

		echo json_encode($output);
	}

	public function getvmiData()
	{
		$erp_id = $this->session->userdata('supplier_erp_id');
		$poid=9;
		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		$supplierid = $this->session->userdata('uid');

		//$pdidata = $this->procM->getListOfPreDispatch($supplierid);
		$purchaseOrdervmiList = json_decode($this->api->getPOData($erp_id));
		$purchaseOrdervmilistdetail = $purchaseOrdervmiList->result_data->list;
		//echo"<pre>";print_r($purchaseOrdervmilistdetail);exit;
		
		$data = array();

		$i = 1;
		
		foreach ($purchaseOrdervmilistdetail as $r) {
		//	$pay='';
			
					//	$pay = '<button class="btn btn-primary dropdown-toggle"  data-toggle="modal" data-target="#PaymentPDI" type="button">Pay</button>';
				//	echo"<pre>";print_r($r->purchaseschemedetails);exit;
					$podetails= (array)$r;
					$vmidetails=$podetails['vendor managed details'][0];
					$arrayvmi=(array)	$vmidetails;
					//echo"<pre>";print_r($arrayvmi);exit;
					$data[] = array(
						'slno' => $i,
						'poorder' => $arrayvmi['po order'],
						'name' => $arrayvmi['material name'],
						'maxcapacity' => $arrayvmi['material name'],
						'minimumcapacity' => $arrayvmi['minimum capacity'],
						'onhand' => $arrayvmi['on hand'],
						//'button' => $pay,

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
		if ($res > 0) {
			$this->session->set_flashdata('msg', 'Delivery Scheduled added Sucessfully');
			$this->callpostapi($data);
		} else {
			echo "Error while adding";
		}
	}

	public function post_changerequest()
	{

		$res = '';
		$data['commentrequest'] = $this->input->post('commentrequest');
		$data['supplier_id'] = $this->session->userdata('uid');

		//$res =  $this->procM->insert('delivery_schedule', $data);
		$res =	$this->callpostapi($data);

		if ($res > 0) {
			$this->session->set_flashdata('msg', 'Delivery Scheduled added Sucessfully');
		} else {
			echo "Error while adding";
		}
	}

	public function post_acceptloa()
	{

		$res = '';
		$data['poid'] = $this->session->userdata('poid');
		$data['Loa'] = $this->session->userdata('Loa');
		$data['supplier_id'] = $this->session->userdata('uid');

		$res =	$this->callpostapi($data);

		if ($res > 0) {
			$this->session->set_flashdata('msg', 'LOA added Sucessfully');
		} else {
			echo "Error while adding";
		}
	}
}
