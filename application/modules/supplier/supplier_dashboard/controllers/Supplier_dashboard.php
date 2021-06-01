<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Supplier_dashboard extends SP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model', 'dashM');
	}
	public function index()
	{
		$data['showdashbaord'] = true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Supplier Dashboard';
		$data['indexurl'] = base_url() . "supplier/dashboard";
		$uid = $this->session->userdata('supplierid');
		$data['getcompanydetails'] = $this->dashM->getappliedtender($uid);
		$data['getcounttenders'] = count($data['getcompanydetails']);
		$purchaseOrder = json_decode($this->getPOData());
		$data['purchaseorder'] = $purchaseOrder->result_data->list;
		$data['countpurchaseorder'] = count($data['purchaseorder']);
		// $this->template->make('supplier_dashboard/home',$data,'supplier_portal');
		$this->template->make('supplier_dashboard/dashboard', $data, 'supplier_portal');
	}
	public function dashboard1()
	{
		$data['showdashbaord'] = true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Supplier Dashboard';
		$data['indexurl'] = base_url() . "supplier/dashboard";
		// $this->template->make('supplier_dashboard/home',$data,'supplier_portal');
		//$this->template->make('supplier_dashboard/dashboard_2',$data,'supplier_portal');
		$this->load->view('supplier_dashboard/dashboard_2');
	}
	public function dashboard2()
	{
		$data['showdashbaord'] = true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Supplier Dashboard';
		$data['indexurl'] = base_url() . "supplier/dashboard";
		$this->load->view('supplier_dashboard/dashboard_3');
	}


	public function profile($tab = 1)
	{
		if ($this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '3') {
			$loged_user = $_SESSION['userid'];
			$usertype = $_SESSION['user_type'];
			$data['tab'] = $tab;
			$data['page'] = 'profile';
			$data['mainpage'] = '';
			$data['page_title'] = 'Profile';
			$data['title'] = 'Company Profile';
			$data['indexurl'] = base_url() . "supplier/dashboard";
			$uid = $this->session->userdata('uid');
			$user_type = $this->session->userdata('user_type');
			$data['getpreferencedate'] = $this->dashM->getpreferencedate($uid, $user_type);
			$data['getcompanydetails'] = $this->dashM->getCompanyProfile($uid);
			$this->template->make('supplier_dashboard/company_profile', $data, 'supplier_portal',true);

			// $this->template->make('supplier_dashboard/company_profile', $data, 'supplier_portal');
		} else {
			$this->session->set_flashdata('msg', 'You are not allowed to access Company Profile');
			redirect(base_url('supplier/dashboard'));
		}
	}

	public function supplier_administration($tab='tab_1'){
		$loged_user = $_SESSION['userid'];
		$usertype = $_SESSION['user_type'];
		$data['page'] = 'Administration';
		$data['mainpage'] = '';
		$data['page_title'] = 'Administration';
		$data['title'] = 'Administration';
		$data['tab_s'] = $tab;
		$uid = $this->session->userdata('uid');
		$this->template->make('supplier_dashboard/administration_index', $data, 'supplier_portal');

	}
	public function personal_profile()
	{
		$loged_user = $_SESSION['userid'];
		$usertype = $_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
		$data['page_title'] = 'personal_profile';
		$data['title'] = 'Profile';
		$uid = $this->session->userdata('uid');
		$data['getpersonalprofile'] = $this->dashM->getpersonalprofile('suppliers', $uid);
		$data['getpersonalprofile1'] = $this->dashM->getpersonalprofileemp('employees', $uid);
		$this->template->make('supplier_dashboard/personal_profile', $data, 'supplier_portal',true);
		// $this->load->view('supplier_dashboard/personal_profile', $data, 'supplier_portal',true);
	}

	/***************************bhagya********************************/

	public function preference_profile()
	{

		if (
			$this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '2'
			or $this->session->userdata('user_type') == '3'
		) {
			// $loged_user = $_SESSION['userid'];
			// $usertype = $_SESSION['user_type'];
			$data['page'] = 'profile';
			$data['mainpage'] = '';
			$data['page_title'] = 'preference_profile';
			$data['title'] = 'preference Profile';
			$user_type = $this->session->userdata('user_type');
			$uid = $this->session->userdata('supplierid');
			$data['getpreferencedate'] = $this->dashM->getpreferencedate($uid, $user_type);
			$data['getpreferencetime'] = $this->dashM->getpreferencetime($uid, $user_type);
			$data['num'] = $this->dashM->num($uid, $user_type);
			$data['numviewnotifications'] = $this->dashM->numviewnotifications($uid, $user_type);
			$data['viewnotifications'] = $this->dashM->viewnotifications($uid, $user_type);
			$this->template->make('supplier_dashboard/preferences', $data, 'supplier_portal',true);
		} else {
			$this->session->set_flashdata('msg', 'You are not allowed to access preferences');
			redirect(base_url('supplier/dashboard'));
		}
	}


	public function notifications()
	{

		if (
			$this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '2'
			or $this->session->userdata('user_type') == '3' or $this->session->userdata('user_type') == '4' or $this->session->userdata('user_type') == '5'
			or $this->session->userdata('user_type') == '6'
		) {
			$data['page'] = 'notifications';
			$data['mainpage'] = '';
			$data['page_title'] = 'notifications';
			$data['title'] = 'Company notifications';
			$user_type = $this->session->userdata('user_type');
			$uid = $this->session->userdata('supplierid');
			// echo $uid;
			// echo $user_type;
			// exit;

			$data['notificationsview'] = $this->dashM->snotifications($uid, $user_type);
			$data['displaynotifications'] = $this->dashM->displaynotifications($uid, $user_type);
			$this->template->make('supplier_dashboard/supplier_notifications', $data, 'supplier_portal',true);
		} else {
			echo " “Sorry, You Are Not Allowed to Access This Page” ";
		}
	}

	public function fontsize()
	{
		$data['page'] = 'fontsize';
		$data['mainpage'] = '';
		$data['page_title'] = 'fontsize';
		$data['title'] = 'Font Size';
		$this->template->make('supplier_dashboard/fontsize', $data, 'supplier_portal');
	}
	/***************************bhagya End********************************/
	public function manage_user()
	{
		if ($this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '3') {
			$data['page'] = 'users';
			$data['mainpage'] = '';
			$data['page_title'] = 'create users';
			$data['title'] = 'Users';
			$data['getemployeeusertypesdetails'] = $this->dashM->getemployeesusertype();
			$data['getemployeesdetails'] = $this->dashM->getEmployees();
			$this->template->make('supplier_dashboard/manage_users', $data, 'supplier_portal',true);
		} else {

			$this->session->set_flashdata('msg', 'You are not allowed to access Employees');
			redirect(base_url('supplier/dashboard'));
		}
	}
	public function products()
	{
		$data['page'] = 'Products';
		$data['mainpage'] = '';
		$data['page_title'] = 'Products';
		$data['title'] = 'Company Products';
		$this->template->make('supplier_dashboard/company_products', $data, 'supplier_portal');
	}
	public function services()
	{
		$data['page'] = 'Services';
		$data['mainpage'] = '';
		$data['page_title'] = 'Services';
		$data['title'] = 'Company Services';
		$this->template->make('supplier_dashboard/company_services', $data, 'supplier_portal');
	}
	public function updateNewuser()
	{
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$name = $this->input->post('name');
		$data = array(
			'name' => $name,
			'email' => $email,
			'mobile' => $mobile
		);
		$loged_user = $_SESSION['userid'];
		$where = array(
			'uid' => $loged_user
		);

		$up = simpleUpdate('web_users', $data, $where);
		if ($up) print 1;
		else print 2;
	}
	public function updatePassword()
	{
		$password = $this->input->post('password');
		$newpasswprd = $this->input->post('newpasswprd');
		$cpasword = $this->input->post('cpasword');
		$loged_user = $_SESSION['userid'];
		if ($newpasswprd == $cpasword) {
			$checkpwd = getAfield("password", "web_users", "where uid=$loged_user", $as = "");
			if ($password == $checkpwd) {
				$data = array('password' => $newpasswprd);
				$where = array('uid' => $loged_user);
				$up = simpleUpdate('web_users', $data, $where);
				if ($up) print 1;
				else print 4;
			} else {
				print 2;
			}
		} else {
			print 3;
		}
	}

	public function logout()
	{
		$url = base_url($_SESSION['key']);
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			$this->session->unset_userdata($key);
		}
		$this->session->sess_destroy();
		redirect($url);
	}

	public function banking()
	{

		if (
			$this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '2'
			or $this->session->userdata('user_type') == '3'
		) {

			$data['page'] = 'Banking';
			$data['mainpage'] = '';
			$data['page_title'] = 'Banking';
			$data['title'] = 'Banking Services';
			$uid = $this->session->userdata('uid');
			$data['getbankdetails'] = $this->dashM->getbankdetails('bank_details', $uid);
			$data['getbankdetails1'] = $this->dashM->getbankdetails1('bank_details', $uid);
			$materialdata = json_decode($this->getMaterialGroupData());
			$data['materialdata'] = $materialdata->result_data->list;
			$getcategorydata = json_decode($this->getSbuData_get());
			$data['getcategory'] = $getcategorydata->result_data->list;
			$this->template->make('supplier_dashboard/banking_services', $data, 'supplier_portal',true);
		} else {
			echo " “Sorry, You Are Not Allowed to Access This Page” ";
		}
	}
	public function attachments()
	{
		$data['page'] = 'attachments';
		$data['mainpage'] = '';
		$data['page_title'] = 'Attachments';
		$data['title'] = 'Attachments';
		$this->template->make('supplier_dashboard/attachments', $data, 'supplier_portal');
	}

	public function permission()
	{
		if ($this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '3') {
			$data['page'] = 'Access Permission';
			$data['mainpage'] = '';
			$data['page_title'] = 'Access Permission';
			$data['title'] = 'Access Permission';
			// $data['getcompanypermissiondetails']=$this->dashM->getCompanyPermission(); 
			$this->template->make('supplier_dashboard/permission', $data, 'supplier_portal',true);
		} else {

			$this->session->set_flashdata('msg', 'You are not allowed to access  Permission Page');
			redirect(base_url('supplier/dashboard'));
		}
	}


	public function portfolio()
	{
		if ($this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '3' or $this->session->userdata('user_type') == '2') {
			$data['page'] = 'Portfolio';
			$data['mainpage'] = '';
			$data['page_title'] = 'Portfolio';
			$data['title'] = 'Portfolio';
			$data['tab'] = 1;
			$supplierid = $this->session->userdata('uid');
			$materialdata = json_decode($this->getMaterialGroupData());
			$data['materialdata'] = $materialdata->result_data->list;
			$getcategorydata = json_decode($this->getSbuData_get());
			$data['getcategory'] = $getcategorydata->result_data->list;
			$data['getsuppliermaterials'] = $this->dashM->getSupplierMaterials($supplierid);
			$getordersdata = json_decode($this->getordersbyId());
			$data['ordersId'] = $getordersdata->result_data->list;
			$this->template->make('supplier_dashboard/portfolio', $data, 'supplier_portal',true);

			// $this->template->make('supplier_dashboard/portfolio', $data, 'supplier_portal');
		} else {

			$this->session->set_flashdata('msg', 'You are not allowed to access Company Portfolio');
			redirect(base_url('supplier/dashboard'));
		}
	}

	public function administration()
	{

		$data['page'] = 'Portfolio';
		$data['mainpage'] = '';
		$data['page_title'] = 'Portfolio';
		$data['title'] = 'Portfolio';
		$data['tab'] = 1;
		$this->template->make('supplier_dashboard/administration', $data, 'supplier_portal');
	}

	public function subscription()
	{

		if (
			$this->session->userdata('user_type') == '1' or $this->session->userdata('user_type') == '2'
			or $this->session->userdata('user_type') == '3'
		) {

			$data['page'] = 'subscription';
			$data['mainpage'] = '';
			$data['page_title'] = 'subscription';
			$data['title'] = 'subscription';
			$data['tab'] = 1;
			$uid = $this->session->userdata('uid');
			$user_type = $this->session->userdata('user_type');
			$data['getpreferencedate'] = $this->dashM->getpreferencedate($uid, $user_type);
			$data['getsubscriptionstatus'] = $this->dashM->getsubscriptionstatus($uid);
			$this->template->make('supplier_dashboard/subscription', $data, 'supplier_portal',true);
		} else {
			echo " “Sorry, You Are Not Allowed to Access This Page” ";
		}
	}
	public function change_password()
	{

		$data['mainpage'] = '';
		$data['title'] = 'password';
		$data['tab'] = 1;
		$this->template->make('supplier_dashboard/forgot_password', $data, 'supplier_portal');
	}

	public function Login_POST()
	{
		$data = array(
			"email" => "1036226@kseberp.in",
			"password" => "password"
		);

		$apiurl     = 'http://hris.kseb.in/erpws/api/login';
		$data_array = json_encode($data);
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data_array);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = curl_exec($curl);
		return $result;
	}

	public function getMaterialData($materialgroup, $productcategory)
	{
		//$materialgroup=$this->input->post('materialgroup');
		$token = $this->Login_POST();
		$token1 = json_decode($token);
		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialData/' . $productcategory . '/' . $materialgroup;
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl);
		$value = json_decode($result);
		echo json_encode($value->result_data->list);
	}

	public function getMaterialProductsDetails()
	{

		$materialgroup = $this->input->post('materialgroup');
		$productcategory = $this->input->post('productcategory');
		$this->getMaterialData($materialgroup, $productcategory);
	}

	public function getMaterialGroupData()
	{
		$token = $this->Login_POST();
		$token1 = json_decode($token);

		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialGroupData';
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl); 
		return $result;
	}


	public function getSbuData_get()
	{
		$token = $this->Login_POST();
		$token1 = json_decode($token);

		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getSbuData';
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl); 
		return $result;
	}


	public function getMaterialById()
	{
		$token = $this->Login_POST();
		$token1 = json_decode($token);

		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialById/3';
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl); 
		return $result;
	}

	public function check_products()
	{

		$supplierId = $this->session->userdata('uid');
		$count = $this->dashM->check_products($supplierId);
		echo $count;
	}


	public function insert_materials()
	{

		$res = '';
		$data['categoryId'] = $this->input->post('productcategory');
		$data['categoryname'] = $this->input->post('categoryname');
		$data['materialId'] = $this->input->post('material');
		$data['materialname'] = $this->input->post('product');
		$data['materialinputId']=$this->input->post('materialinput');
		$data['materialinputname']=$this->input->post('materialinputname');
		//$data['created_date']=date('Y-m-d H:i:s');
		$data['supplierId'] = $this->session->userdata('uid');
		//$data['isdeleted']=false;
		$res =  $this->dashM->insert('suppliermaterials', $data);


		if ($res > 0) {
			$this->session->set_flashdata('msg', 'Materials added successfully');
			//redirect(base_url('supplier/dashboard/portfolio'));
		} else {
			echo "Error while adding";
		}
	}

	public function getMaterialListData()
	{
		//echo $supplierid;exit;

		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		$supplierid = $this->session->userdata('uid');

		$materialdata = $this->dashM->getSupplierMaterials($supplierid);

		$data = array();

		$i = 1;
		foreach ($materialdata as $r) {
			$edit = '<a href="javascript:void(0)" data-toggle="modal" data-target="#orders" id="edit-user" style="color:#eebd01" >2</a>';
			$editoverdue = '<a href="javascript:void(0)" data-toggle="modal" data-target="#overdue" id="edit-user"style="color:#eebd01">2</a>';
			$editreceipts = '<a href="javascript:void(0)" data-toggle="modal" data-target="#pay" id="edit-user"style="color:#eebd01">1 </a>';
			$editdefects = '<a href="javascript:void(0)" data-toggle="modal" data-target="#defects" id="edit-user" style="color:#eebd01"> 2</a>';
			$editvmi = '<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal_vmi1" id="edit-user"style="color:#eebd01">2</a>';
			$editperformance = '<a href="javascript:void(0)" <span class="score">
    <div class="score-wrap">
        <span class="stars-active">
            <i class="fa fa-star checked" aria-hidden="true"></i>
            <i class="fa fa-star checked" aria-hidden="true"></i>
            <i class="fa fa-star checked" aria-hidden="true"></i>
            <i class="fa fa-star checked" aria-hidden="true"></i>
			 <i class="fa fa-star .score .stars-inactive" style="color:grey"aria-hidden="true"></i></span></a>';
			$capacityinfo = '<button class="btn btn-primary dropdown-toggle"  data-toggle="modal" data-target="#myModal_capacity" type="button" id="capacityinfo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Capacity Info
                                                                        </button>';
			$delete = '<a href="javascript:void(0);"><span style="color:red"><i class="fa fa-trash" id="delete-supplier" aria-hidden="true"></i></span></a>';

			$data[] = array(
				'no' => $i,
				'category' => $r->categoryname,
				'materialname' => $r->materialname,
				'materialinputname' => $r->materialinputname,
				'orders' => $edit,
				'overdue' => $editoverdue,
				'receipts' => $editreceipts,
				'defects' => $editdefects,
				'vmi' => $editvmi,
				'On-Time Performance' => $editperformance,
				'Consigned Inventory' => '',
				'delete' => $delete,
				'capacityinfo' => $capacityinfo,
				'id' => $r->id,
				'materialId' => $r->materialId,
				'materialgroupId' => $r->materialinputId

			);
			$i++;
		}

		$output = array(
			"draw" => $draw,

			"data" => $data
		);
		// print_r($output);exit;
		echo json_encode($output);
	}


	public function portfoliocompany()
	{

		$data['page'] = 'MATERIAL DETAILS';
		$data['mainpage'] = '';
		$data['page_title'] = 'MATERIAL DETAILS';
		$data['title'] = 'MATERIAL DETAILS';
		$data['tab'] = 1;

		$materialdata = json_decode($this->getMaterialGroupData());
		$data['materialdata'] = $materialdata->result_data->list;
		$sbudata = json_decode($this->getSbuData_get());
		$data['SbuData'] = $sbudata->result_data->list;
		$data['getcategroy'] = $this->dashM->getcategroy();
		$supplierid = $this->session->userdata('uid');
		$data['getsuppliermaterials'] = $this->dashM->getSupplierMaterials($supplierid);
		$this->template->make('supplier_dashboard/materialdetails', $data, 'supplier_portal');
	}

	public function deleteSupplierMaterials()
	{

		$supplierid = $this->input->post('supplierid');
		$where = array('id' => $supplierid);
		$data = array('isdeleted' => true);
		$result = $this->dashM->update('suppliermaterials', $data, $where);

		if ($result > 0) {

			echo "Deleted successfully";
		} else {
			echo "Error while deleting";
		}
	}

//employee change password
public function forgotpasswordemployees() 
{
	$data['page'] = 'ForgotPassword';
	$data['mainpage'] = '';
	$data['page_title'] = 'ForgotPassword';
	$data['title'] = 'Change Password';
	$this->session->set_userdata('Employee','Employee');
	$this->template->make('supplier_dashboard/forgot_pasword', $data, 'supplier_portal');
}
public function send_otp_employee_changepass()
{
	$mobile=$this->input->post('mobile');
	$uid=$this->session->userdata('uid');
	$get_supplier_mobile=$this->dashM->get_employee_mobile('employees',$mobile,$uid);
	if($get_supplier_mobile!='')
	{
	$session_mobile=$this->session->set_userdata('supplier_mobile',$mobile);
	$otp=rand(100000, 999999);
	$session_otp=$this->session->set_userdata('session_otp',$otp);
	echo '<script type="text/javascript" >alert("your otp is '.$otp.'" );
		 </script>';
	echo ' <script>window.location.href="verity_otp_change_password";</script>';
	// $this->session->set_flashdata('msg',"your otp is $otp" );
	// redirect(base_url('supplier/dashboard/verity_otp_change_password'));

	} 
	if($get_supplier_mobile=='')
	{
		echo '<script type="text/javascript" >alert("Not registerd Mobile Number" );
		 </script>';
		 echo ' <script>window.location.href="forgotpassword";</script>';

		// $this->session->set_flashdata('msg',"Not registerd mobile number" );
		// redirect(base_url('supplier/dashboard/forgotpassword'));


	}
}
public function change_pswd_emp()
{
		
		$new_pass=$this->input->post('new_pass');
		$confirm_pass=$this->input->post('confirm_pass');
		$supplierid=$this->session->userdata('uid');
		$user_type=$this->session->userdata('user_type');
	
		if ($confirm_pass==$new_pass)
			{
				$where = array('id' => $supplierid);
				$data = array('password' => $confirm_pass );
				$result = $this->dashM->update('employees', $data, $where);
				$this->session->unset_userdata('session_otp');
				$this->session->unset_userdata('supplier_mobile');
				$this->session->unset_userdata('session_otp_change');
		
				echo '<script type="text/javascript" >alert("Password changed successfully" );
				</script>';
				echo ' <script>window.location.href="personal_profile";</script>';
		   
				// $this->session->set_flashdata('omsg','Password changed successfully !"');
				// redirect(base_url('supplier/dashboard/forgotpassword'));
			}
			else{
				echo '<script type="text/javascript" >alert("Password mismatch" );
				</script>';
				echo ' <script>window.location.href="changepassword";</script>';
		   
				// $this->session->set_flashdata('omsg','Password mismatch'); 
				// redirect(base_url('supplier/dashboard/changepassword'));
			
	}

}


//supplier change password	
public function forgotpassword()
{
	$data['page'] = 'ForgotPassword';
	$data['mainpage'] = '';
	$data['page_title'] = 'ForgotPassword';
	$data['title'] = 'Change Password';
	$this->template->make('supplier_dashboard/forgot_pasword', $data, 'supplier_portal');
}
public function verity_otp_change_password()
{
	if (
		$this->session->userdata('supplier_mobile') != '') {
	$data['page'] = 'verity otp';
	$data['mainpage'] = '';
	$data['page_title'] = 'Verify otp';
	$data['title'] = 'Verify OTP';
	$this->template->make('supplier_dashboard/verity_otp_change_pass', $data, 'supplier_portal');
}
else{
	redirect(base_url('supplier/dashboard/forgotpassword'));
}
}
public function changepassword()
{
	
	if (
	$this->session->userdata('supplier_mobile') != '' and $this->session->userdata('session_otp') != '') {
	$data['page'] = 'Change Password';
	$data['mainpage'] = '';
	$data['page_title'] = 'Change Password';
	$data['title'] = 'Change Password';
	$this->template->make('supplier_dashboard/change_password', $data, 'supplier_portal');
		}
		else{
			redirect(base_url('supplier/dashboard/forgotpassword'));
		}
}

public function send_otp()
{
	$mobile=$this->input->post('mobile');
	$uid=$this->session->userdata('supplierid');
	$get_supplier_mobile=$this->dashM->get_supplier_mobile('suppliers',$mobile,$uid);
	if($get_supplier_mobile!='')
	{
	$session_mobile=$this->session->set_userdata('supplier_mobile',$mobile);
	$otp=rand(100000, 999999);
	$session_otp=$this->session->set_userdata('session_otp',$otp);
	echo '<script type="text/javascript" >alert("your otp is '.$otp.'" );
		 </script>';
	echo ' <script>window.location.href="verity_otp_change_password";</script>';
	// $this->session->set_flashdata('msg',"your otp is $otp" );
	// redirect(base_url('supplier/dashboard/verity_otp_change_password'));

	}
	if($get_supplier_mobile=='')
	{
		echo '<script type="text/javascript" >alert("Not registerd Mobile Number" );
		 </script>';
		 echo ' <script>window.location.href="forgotpassword";</script>';

		// $this->session->set_flashdata('msg',"Not registerd mobile number" );
		// redirect(base_url('supplier/dashboard/forgotpassword'));


	}
}
public function verify_send_otp_change_pass()
{
	$otp=$this->input->post('otp');
	$session_otp=$this->session->userdata('session_otp');
	// $session_mobile=$this->session->set_userdata('supplier_mobile',$mobile);
	// $get_supplier_mobile=$this->dashM->get_supplier_mobile_forget_pass('suppliers', $mobile);
	
	if($otp==$session_otp) 
	{
	$session_otp_change=$this->session->set_userdata('session_otp_change','100');
	redirect(base_url('supplier/dashboard/changepassword'));  

	}
	else
	{
		echo '<script type="text/javascript" >alert("Not Valid OTP" );
		 </script>';
		echo ' <script>window.location.href="verity_otp_change_password";</script>';

		// $this->session->set_flashdata('rmsg',"Not Valid OTP" );
		// redirect(base_url('supplier/dashboard/verity_otp_change_password'));

	}

}
public function resend_otp_change_pass()
{
	$otp=rand(100000, 999999);
	$session_otp=$this->session->set_userdata('session_otp',$otp);
	echo '<script type="text/javascript" >alert("your otp is '.$otp.'" );
		 </script>';
	echo ' <script>window.location.href="verity_otp_change_password";</script>';
	// $this->session->set_flashdata('msg',"your otp is $otp" );
	// redirect(base_url('supplier/dashboard/verity_otp_change_password'));
}
public function change_pswd()
{
		
		$new_pass=$this->input->post('new_pass');
		$confirm_pass=$this->input->post('confirm_pass');
		$supplierid=$this->session->userdata('supplierid');
		$user_type=$this->session->userdata('user_type');
	
		if ($confirm_pass==$new_pass)
			{
				$where = array('uid' => $supplierid);
				$data = array('password' => $confirm_pass );
				$result = $this->dashM->update('suppliers', $data, $where);
				$this->session->unset_userdata('session_otp');
				$this->session->unset_userdata('supplier_mobile');
				$this->session->unset_userdata('session_otp_change');
		
				echo '<script type="text/javascript" >alert("Password changed successfully" );
				</script>';
				echo ' <script>window.location.href="personal_profile";</script>';
		   
				// $this->session->set_flashdata('omsg','Password changed successfully !"');
				// redirect(base_url('supplier/dashboard/forgotpassword'));
			}
			else{
				echo '<script type="text/javascript" >alert("Password mismatch" ); 
				</script>';
				echo ' <script>window.location.href="changepassword";</script>';
		   
				// $this->session->set_flashdata('omsg','Password mismatch'); 
				// redirect(base_url('supplier/dashboard/changepassword'));
			
	}

}
// forgot password

public function forgotpasstohome()
{
		$this->session->unset_userdata('session_otp');
		$this->session->unset_userdata('supplier_mobile');
		$this->session->unset_userdata('session_otp_change');
		$this->session->unset_userdata('Employee');
		$this->session->unset_userdata('Supplier');
		// $this->session->unset_userdata('supplier');
		redirect(base_url(''));
}
public function send_otp_supplier()
{
	$mobile=$this->input->post('mobile');
	$session_mobile=$this->session->set_userdata('supplier_mobile',$mobile);
	$get_supplier_mobile=$this->dashM->get_supplier_mobile_forget_pass('suppliers', $mobile);
	
	if($get_supplier_mobile!='')
	{
	$otp=rand(100000, 999999);
	$session_otp=$this->session->set_userdata('session_otp',$otp);
	$this->session->set_flashdata('msg',"your otp is $otp" );
	redirect(base_url('verify_otp'));
	}
	if($get_supplier_mobile=='')
	{
		$this->session->set_flashdata('msg',"Not registerd mobile number" );
		redirect(base_url('forgot_password'));

	}

}
public function send_otp_supplier_verify()
{
	$otp=$this->input->post('otp');
	$session_otp=$this->session->userdata('session_otp');
	// $session_mobile=$this->session->set_userdata('supplier_mobile',$mobile);
	// $get_supplier_mobile=$this->dashM->get_supplier_mobile_forget_pass('suppliers', $mobile);
	
	if($otp==$session_otp)
	{
	$session_otp_change=$this->session->set_userdata('session_otp_change','100');
	redirect(base_url('Change_forgot_password'));
	}
	else
	{
		$this->session->set_flashdata('rmsg',"Not Valid OTP" );
		redirect(base_url('verify_otp'));

	}

}
public function resend_otp()
{
	$otp=rand(100000, 999999);
	$session_otp=$this->session->set_userdata('session_otp',$otp);
	$this->session->set_flashdata('msg',"your otp is $otp" );
	redirect(base_url('verify_otp'));
}
public function update_supplier_password()
{
	

	$confirm_pass=$this->input->post('confirm_pass');
	$pass=$this->input->post('pass');
	$supplier_mobile=$this->session->userdata('supplier_mobile');
	if ($confirm_pass==$pass)
	{
		$where = array('mobile' => $supplier_mobile);
		$data = array('password' => $pass );
		$result = $this->dashM->update('suppliers', $data, $where);
		$this->session->unset_userdata('session_otp');
		$this->session->unset_userdata('supplier_mobile');
		$this->session->unset_userdata('session_otp_change');
		$this->session->unset_userdata('Supplier');
		$this->session->set_flashdata('rmsg','Password changed successfully');
		redirect(base_url('home'));
		
	} 
	else{
	
		$this->session->set_flashdata('omsg','Password mismatch'); 
		redirect(base_url('Change_forgot_password'));
	
} 
} 

//forgot password employee
public function forgot_passwordss()
{
	echo "hii";
}
public function emp_forgot_password()
{ 
	echo "hii"; exit;
	$this->session->set_userdata('Employee','Employee'); 
	// $this->session->set_userdata('supplier','abc'); 
	redirect(base_url('forgot_password'));
}
public function sup_forgot_password()
{
	$this->session->set_userdata('supplier','abc');
	$this->session->set_userdata('Supplier','Supplier'); 
	redirect(base_url('forgot_password'));
}
public function send_otp_employee()
{
	// echo "emp"; exit;
	$mobile=$this->input->post('mobile');
	$this->session->set_userdata('Employee','Employee');
	$session_mobile=$this->session->set_userdata('supplier_mobile',$mobile);
	$get_employee_mobile=$this->dashM->get_employee_mobile_forget_pass('employees', $mobile);
	
	if($get_employee_mobile!='')
	{
	$otp=rand(100000, 999999);
	$session_otp=$this->session->set_userdata('session_otp',$otp);
	$this->session->set_flashdata('msg',"your otp is $otp" );
	redirect(base_url('verify_otp'));
	}
	if($get_employee_mobile=='')
	{
		$this->session->set_flashdata('msg',"Not registerd mobile number" );
		redirect(base_url('forgot_password'));

	}

}
public function update_employee_password()
{
	$confirm_pass=$this->input->post('confirm_pass');
	$pass=$this->input->post('pass');
	$supplier_mobile=$this->session->userdata('supplier_mobile');
	if ($confirm_pass==$pass)
	{
		$where = array('mobilenum' => $supplier_mobile);
		$data = array('password' => $pass );
		$result = $this->dashM->update('employees', $data, $where);
		$this->session->unset_userdata('session_otp');
		$this->session->unset_userdata('supplier_mobile');
		$this->session->unset_userdata('session_otp_change');
		$this->session->unset_userdata('Employee');
		// $this->session->userdata('tabs',2);
		$this->session->set_flashdata('rmsg','Password changed successfully');
		redirect(base_url('home'));
		
	}
	else{
	
		$this->session->set_flashdata('omsg','Password mismatch'); 
		redirect(base_url('Change_forgot_password'));
	
}
}





	public function update_companyprofile() 
	{
		// echo "string"; exit;

		// $res='';
		$supplierid = $this->input->post('supplierid');

		$companyname = $this->input->post('profile');
		$incorporationNo = $this->input->post('incorporation');
		$incorporationdate = $this->input->post('date');
		$pancardno = $this->input->post('pancard');
		$gst = $this->input->post('gstin');
		$companyaddress = $this->input->post('address');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$authorizedperson = $this->input->post('authorizedperson');

		$config['upload_path'] = './uploads/company_profile';
		$config['allowed_types'] = '*';
		$config['max_size'] = '5000';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file1')) {

			// print_r($this->upload->display_errors());
			$file1 = "";
		} else {
			$data = $this->upload->data();
			$file1 = $data['file_name'];
		}
		if (!$this->upload->do_upload('file2')) {

			// print_r($this->upload->display_errors());
			$file2 = "";
		} else {
			$data = $this->upload->data();
			$file2 = $data['file_name'];
		}
		if (!$this->upload->do_upload('file3')) {

			// print_r($this->upload->display_errors());
			$file3 = "";
		} else {
			$data = $this->upload->data();
			$file3 = $data['file_name'];
		}
		// echo $file1;
		//  echo $file2;
		// echo $file3; exit;
		// $file1 = $data['file_name'];
		// $file2 = $data['file_name'];
		// $file3 = $data['file_name'];

		if ($file1 != "" and $file2 != "" and $file3 != "") {

			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'email' => $email,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'website' => $website,
				'authorizedperson' => $authorizedperson,
				'incorporationcertificate' => $file1,
				'gst_tinfile' => $file2,
				'authorisedpersonfile' => $file3
			);
			//   $data1=array(

			// 'mobile'=>$mobile,
			// 'email'=>$email
			//    );


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		}
		if ($file1 != "" and $file2 != "") {

			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'email' => $email,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'website' => $website,
				'authorizedperson' => $authorizedperson,
				'incorporationcertificate' => $file1,
				'gst_tinfile' => $file2

			);
			$data1 = array(

				'mobile' => $mobile,
				'email' => $email
			);


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		}
		if ($file1 != "" and $file3 != "") {

			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'email' => $email,
				'website' => $website,
				'authorizedperson' => $authorizedperson,
				'incorporationcertificate' => $file1,
				'authorisedpersonfile' => $file3
			);
			$data1 = array(

				'mobile' => $mobile,
				'email' => $email
			);


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		}
		if ($file2 != "" and $file3 != "") {

			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'email' => $email,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'website' => $website,
				'authorizedperson' => $authorizedperson,
				'gst_tinfile' => $file2,
				'authorisedpersonfile' => $file3
			);
			$data1 = array(

				'mobile' => $mobile,
				'email' => $email
			);


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		}

		if ($file1 != "") {

			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'email' => $email,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'website' => $website,
				'authorizedperson' => $authorizedperson,
				'incorporationcertificate' => $file1
			);

			$data1 = array(

				'mobile' => $mobile,
				'email' => $email
			);


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		}
		if ($file2 != "") {

			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'email' => $email,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'website' => $website,
				'authorizedperson' => $authorizedperson,
				'gst_tinfile' => $file2
			);
			$data1 = array(

				'mobile' => $mobile,
				'email' => $email
			);


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		}
		if ($file3 != "") {

			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'email' => $email,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'website' => $website,
				'authorizedperson' => $authorizedperson,
				'authorisedpersonfile' => $file3
			);
			$data1 = array(

				'mobile' => $mobile,
				'email' => $email
			);


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		} else {
			$data = array(
				'companyaddress' => $companyaddress,
				'mobile' => $mobile,
				'email' => $email,
				'gst' => $gst,
				'incorporationno'=> $incorporationNo,
				'incorporationdate'=>$incorporationdate,
				'website' => $website,
				'authorizedperson' => $authorizedperson
			);
			$data1 = array(

				'mobile' => $mobile,
				'email' => $email
			);


			$this->dashM->update_company('companyprofile', $supplierid, $data);
			// $this->dashM->update_company_supplier('suppliers',$supplierid,$data1);
			$this->session->set_flashdata('msg', 'Updated successfully');
			redirect(base_url('supplier/dashboard/profile'));
		}
	}




	public function insert_companyprofile()
	{

		$res = '';
		$data['name'] = $this->input->post('name');
		$data['mobilenum'] = $this->input->post('mobilenumber');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['usertype'] = $this->input->post('usertype');
		$data['supplierid'] = $this->session->userdata('uid'); 

		$id = $this->input->post('id');
		$data['isdeleted'] = false;

		if ($id != "") {
			// echo $id; exit;
			$res =  $this->dashM->updatedata('employees', $data, $id);

			if ($res >= 0) {

				$this->session->set_flashdata('msg', 'Employees Updated successfully');
				redirect(base_url('supplier/dashboard/manage_user'));
			} else {
				echo "Error while adding";
			}
		} else {
			$res =  $this->dashM->insert('employees', $data);

			if ($res >= 0) {
				// echo "Employees added successfully"; 
				$this->session->set_flashdata('msg', 'Employees added successfully');
				redirect(base_url('supplier/dashboard/manage_user'));
			} else {
				echo "Error while adding";
			}
		}
	}


	public function getEmployeesListData()
	{

		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));

		$uid = $this->session->userdata('uid');
		$employeedata = $this->dashM->getEmployees1($uid);

		$data = array();

		$i = 1;
		foreach ($employeedata as $r) {
			$edit = '<div style="display:flex"><a href="javascript:void(0);  " > <span style="color:blue;padding-right: 24px;"><i class="fa fa-pencil" id="edit-supplier" aria-hidden="true"></i></span></a>'
				. '<a href="javascript:void(0);"><span style="color:red;padding-right: 24px;"><i class="fa fa-trash" id="delete-supplier" aria-hidden="true"></i></span></a>';

			if ($r->islocked == true) {
				$edit .= '<a href="javascript:void(0);"><span style="color:#ffcccb"><i class="fa fa-lock" id="unlock-supplier" aria-hidden="true"></i></span></a>';
			} else {
				$edit .= '<a href="javascript:void(0);"><span style="color:green"><i class="fa fa-unlock" id="lock-supplier" aria-hidden="true"></i></span></a></div>';
			}
			$status = '<a href=""><button id="resend_pass1" type="submit" class="btn btn-primary"  style="margin-left: 15px;" data-nlok-ref-guid="727bd987-58f0-47cd-f295-b92298e95987" ><span>Resend Password</span></button></a>';
			if ($r->usertype == 4) {
				$data[] = array(
					'no' => $i,
					'id' => $r->id,
					'mobile' => $r->mobilenum,
					'email' => $r->email,
					'name' => $r->name,
					'password' => $r->password,
					'usertype' => $r->usertype,
					'usertype1' => "Accounts Manager",
					'edit' => $edit,
					/* 'delete'=>$delete,*/
					'status' => $status



				);
			} elseif ($r->usertype == 5) {
				$data[] = array(
					'no' => $i,
					'id' => $r->id,
					'mobile' => $r->mobilenum,
					'email' => $r->email,
					'name' => $r->name,
					'password' => $r->password,
					'usertype' => $r->usertype,
					'usertype1' => "Delivery Manager",
					'edit' => $edit,
					/* 'delete'=>$delete,*/
					'status' => $status



				);
			}
			if ($r->usertype == 6) {
				$data[] = array(
					'no' => $i,
					'id' => $r->id,
					'mobile' => $r->mobilenum,
					'email' => $r->email,
					'name' => $r->name,
					'password' => $r->password,
					'usertype' => $r->usertype,
					'usertype1' => "Basic User",
					'edit' => $edit,
					/* 'delete'=>$delete,*/
					'status' => $status



				);
			}

			$i++;
		}

		$output = array(
			"draw" => $draw,

			"data" => $data
		);
		echo json_encode($output);
	}

	public function insert_preferenceprofile()
	{

		$res = '';
		$data['timezone'] = $this->input->post('timezone');
		$data['notification'] = $this->input->post('display_status');
		$data['date'] = $this->input->post('date');


		$res =  $this->dashM->insert('preferences', $data);

		if ($res > 0) {
			echo "preferences added successfully";
		} else {
			echo "Error while adding";
		}
	}
	public function insert_notification_status()
	{
		$user_type = $this->session->userdata('user_type');
		$uid = $this->session->userdata('uid');
		$data = $this->input->post('display_status');
		$timezone = $this->input->post('timezone');
		$date = $this->input->post('date');
		// echo $display_status; exit;
		$data1 =

			array(
				'name' => '1', // 1=time zone
				'value' => $timezone,
				'user_id' => $uid,
				'user_type' => $user_type

			);

		$data2 =

			array(
				'name' => '2', // 2= date formate
				'value' => $date,
				'user_id' => $uid,
				'user_type' => $user_type

			);

		$data3 =

			array(
				'message' => 'Notifications turn on successfully',
				'status' => '2',
				'preference_display_status' => 'true',
				'user_id' => $uid,
				'user_type' => $user_type

			);
		$get_preference = $this->dashM->get_preference($uid, $user_type);
		$get_preference_notifi = $this->dashM->get_preference_notifi($uid, $user_type);
		//   echo $get_preference; exit;
		if ($get_preference != 0) {
			$this->dashM->update_globals_time($timezone, $uid, $user_type);
			$this->dashM->update_globals_date($date, $uid, $user_type);
		}
		if ($get_preference == 0) {
			$this->dashM->insert('globals', $data1);
			$this->dashM->insert('globals', $data2);
		}
		// $this->dashM->update_preference($timezone,$date,$uid,$user_type);

		if ($get_preference_notifi == 0) {
			$this->dashM->insert('notifications', $data3);
		}
		$this->dashM->update_notifications_preference_display_status($data, $uid, $user_type);
		$this->session->set_flashdata('msg', 'Notification Status Changed successfully');
		redirect(base_url('supplier/dashboard/preference_profile'));
	}

	public function deleteSupplierEmployees()
	{

		$supplierid = $this->input->post('supplierid');
		$where = array('id' => $supplierid);
		$data = array('isdeleted' => true, 'islocked' => true);
		// $data=array('islocked'=>true);
		$result = $this->dashM->update('employees', $data, $where);

		if ($result > 0) {
			$this->session->set_flashdata('msg', 'Employees Deleted successfully');
			// echo "Deleted successfully";
		} else {
			echo "Error while deleting";
		}
	}



	//neethu
	public function notification_change_status()
	{
		$user_type = $this->session->userdata('user_type');
		$uid = $this->session->userdata('uid');
		// echo $uid;
		$this->dashM->update_notification_status($uid, $user_type);
		redirect(base_url('supplier/dashboard/notifications'));
	}
	public function resend_pass()
	{
		//   echo "hii"; exit;
		// $id=$this->uri->segment(4);
		$id = $this->input->post('supplierid');
		// echo $id; exit;
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$password = array();
		$alpha_length = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alpha_length);
			$password[] = $alphabet[$n];
		}

		$pass = implode($password);
		$where = array('id' => $id);
		$data = array('password' => $pass);
		$result = $this->dashM->update('employees', $data, $where);
		if ($result > 0) {
			$this->session->set_flashdata('msg', 'Resend Password successfully');
		} else {
			echo "Error while Resend";
		}
	}

	public function lockSupplierEmployees()
	{

		$supplierid = $this->input->post('supplierid');
		$where = array('id' => $supplierid);
		$data = array('islocked' => true);
		$result = $this->dashM->update('employees', $data, $where);

		if ($result > 0) {
			$this->session->set_flashdata('msg', 'Employees Locked successfully');
			// echo "Locked successfully";
		} else {
			echo "Error while Locking";
		}
	}
	public function unlockSupplierEmployees()
	{

		$supplierid = $this->input->post('supplierid');
		$where = array('id' => $supplierid);
		$data = array('islocked' => false);
		$result = $this->dashM->update('employees', $data, $where);

		if ($result > 0) {
			$this->session->set_flashdata('msg', 'Employees Unlocked successfully');
			// echo "Locked successfully";
		} else {
			echo "Error while Locking";
		}
	}
	public function editSupplierEmployees()
	{

		$id = $this->input->post('supplierid');
		echo $supplierid;
		exit;
		//       $getemployeesdetail="";
		//       $data['getemployeesdetail']=$this->dashM->getemployeesdetail($id);
		// $this->template->make('supplier_dashboard/manage_users',$data,'supplier_portal');
	}
	public function insert_access_permission()
	{

		$user_type = $this->input->post('user_type');
		$uid = $this->session->userdata('uid');
		$procurement_plan = $this->input->post('procurement_plan') == "1" ? $this->input->post('procurement_plan') : '0';
		$tenders = $this->input->post('tenders') == "1" ? $this->input->post('tenders') : '0';
		$purchase_order = $this->input->post('purchase_order') == "1" ? $this->input->post('purchase_order') : '0';
		$delivery = $this->input->post('delivery') == "1" ? $this->input->post('delivery') : '0';
		$accounts = $this->input->post('accounts') == "1" ? $this->input->post('accounts') : '0';
		$work_measurement = $this->input->post('work_measurement') == "1" ? $this->input->post('work_measurement') : '0';

		$data = array(
			'user_type' => $user_type,
			'procurement_plan' => $procurement_plan,
			'tenders' => $tenders,
			'purchase_order' => $purchase_order,
			'delivery' => $delivery,
			'accounts' => $accounts,
			'work_measurement' => $work_measurement
		);
		$result = $this->dashM->update_access_permission('access_permission', $data, $user_type, $uid);
		if ($result >= 0) {
			$this->session->set_flashdata('msg', 'Access Permission added successfully');
			redirect(base_url('supplier/dashboard/permission'));
		} else {
			echo "Error while Updating";
		}
	}


	public function getdetails()
	{
		$id = $this->input->post("id");
		$uid = $this->session->userdata('uid');
		$details = $this->dashM->ajaxselect('access_permission', $id, $uid);
		echo json_encode($details);
	}

	public function regcompany()

	{
		$s = $this->session->userdata('supplier');
		$companyname = $this->input->post('companyname');
		$individualname = $this->input->post('individualname');
		$username = $this->input->post('username');
		$pannumber = $this->input->post('pannumber');
		$registrationtype = $this->input->post('registrationtype') ? $this->input->post('registrationtype') : '2';
		$firstname = $this->input->post('firstname');
		$phonenumber = $this->input->post('phonenumber');
		$emailaddress = $this->input->post('emailaddress');
		$password = $this->input->post('password');
		$primary_contact_name = $this->input->post('firstname');
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$getpannum = '';
		$getpannum = $this->dashM->getpan($pannumber);
		//echo $getpannum->pannumber; exit;
		if ($getpannum->pannumber != '') {
			// echo '<script type="text/javascript" >alert("You are already registerd. Please Login");
			//          </script>';
			//          echo ' <script>window.location.href="";</script>';
			$this->session->set_flashdata('error', 'You are already registered. Please Login');
			redirect(base_url('home'));
		} else {

			if ($companyname != "") {

				$data = array(
					'name' => $companyname,
					'username' => $username,
					'password' => $password,
					'mobile' => $phonenumber,
					'email' => $emailaddress,
					'pannumber' => $pannumber,
					'created_date'  => $date,
					'user_type' => $registrationtype,
					'active_status' => 0,
					'primary_contact_name' => $primary_contact_name,
					'source' => 'External'

				);

				$this->dashM->insert('suppliers', $data);
				$supplierid = $this->db->insert_id();
				$data1 = array(
					'companyname' => $companyname,
					'mobile' => $phonenumber,
					'email' => $emailaddress,
					'supplierid' => $supplierid,
					'pancardno' => $pannumber
				);
				$data2 = array(
					'user_type' => 4,
					'supplierid' => $supplierid

				);
				$data3 = array(
					'user_type' => 5,
					'supplierid' => $supplierid

				);
				$data4 = array(
					'user_type' => 6,
					'supplierid' => $supplierid

				);
				$data5 = array(
					'user_type' => 1,
					'procurement_plan' => 1,
					'tenders' => 1,
					'purchase_order' => 1,
					'delivery' => 1,
					'accounts' => 1,
					'work_measurement' => 1,

					'supplierid' => $supplierid

				);
				$data6 = array(
					'user_type' => 2,
					'procurement_plan' => 1,
					'tenders' => 1,
					'purchase_order' => 1,
					'delivery' => 1,
					'accounts' => 1,
					'work_measurement' => 1,
					'supplierid' => $supplierid

				);
				$data7 = array(
					'user_type' => 3,
					'procurement_plan' => 1,
					'tenders' => 1,
					'purchase_order' => 1,
					'delivery' => 1,
					'accounts' => 1,
					'work_measurement' => 1,
					'supplierid' => $supplierid

				);
				$this->dashM->insert('companyprofile', $data1);
				$this->dashM->insert('access_permission', $data2);
				$this->dashM->insert('access_permission', $data3);
				$this->dashM->insert('access_permission', $data4);
				$this->dashM->insert('access_permission', $data5);
				$this->dashM->insert('access_permission', $data6);
				$this->dashM->insert('access_permission', $data7);
				// echo '<script type="text/javascript" >alert("You are successfully registerd");
				//         </script>';
				//         echo ' <script>window.location.href="";</script>';
				$this->session->set_flashdata('rmsg', 'You are  registered successfully.');
				redirect(base_url('home'));
			} else {
				$data = array(
					'name' => $individualname,
					'username' => $username,
					'password' => $password,
					'mobile' => $phonenumber,
					'email' => $emailaddress,
					'pannumber' => $pannumber,
					'created_date'  => $date,
					'user_type' => 2,
					'active_status' => 0,
					'primary_contact_name' => $primary_contact_name,
					'source' => 'External'

				);

				$this->dashM->insert('suppliers', $data);
				$supplierid = $this->db->insert_id();
				$data1 = array(
					'companyname' => $individualname,
					'mobile' => $phonenumber,
					'email' => $emailaddress,
					'supplierid' => $supplierid,
					'pancardno' => $pannumber
				);
				$data2 = array(
					'user_type' => 4,
					'supplierid' => $supplierid

				);
				$data3 = array(
					'user_type' => 5,
					'supplierid' => $supplierid

				);
				$data4 = array(
					'user_type' => 6,
					'supplierid' => $supplierid

				);
				$data5 = array(
					'user_type' => 1,
					'procurement_plan' => 1,
					'tenders' => 1,
					'purchase_order' => 1,
					'delivery' => 1,
					'accounts' => 1,
					'work_measurement' => 1,

					'supplierid' => $supplierid

				);
				$data6 = array(
					'user_type' => 2,
					'procurement_plan' => 1,
					'tenders' => 1,
					'purchase_order' => 1,
					'delivery' => 1,
					'accounts' => 1,
					'work_measurement' => 1,
					'supplierid' => $supplierid

				);
				$data7 = array(
					'user_type' => 3,
					'procurement_plan' => 1,
					'tenders' => 1,
					'purchase_order' => 1,
					'delivery' => 1,
					'accounts' => 1,
					'work_measurement' => 1,
					'supplierid' => $supplierid

				);
				$this->dashM->insert('companyprofile', $data1);
				$this->dashM->insert('access_permission', $data2);
				$this->dashM->insert('access_permission', $data3);
				$this->dashM->insert('access_permission', $data4);
				$this->dashM->insert('access_permission', $data5);
				$this->dashM->insert('access_permission', $data6);
				$this->dashM->insert('access_permission', $data7);
				// echo '<script type="text/javascript" >alert("You are successfully registerd");
				//        </script>';
				//        echo ' <script>window.location.href="";</script>';
				$this->session->set_flashdata('rmsg', 'You are  registered successfully.');
				redirect(base_url('home'));
			}
		}
	}

	public function insert_bank_details()
	{
		$supplierid = $this->session->userdata('uid');
		$bank = $this->input->post('bank');
		$branch = $this->input->post('branch');
		$ifsc = $this->input->post('ifsc');
		$accountno = $this->input->post('accountno');
		// $file=$this->input->post('file');
		$config['upload_path'] = './uploads/bank_details';
		$config['allowed_types'] = '*';
		$config['max_size'] = '5000';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')) {

			print_r($this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$file = $data['file_name'];
		}

		if ($file != "") {
			$data = array(
				'supplierid' => $supplierid,
				'accountno' => $accountno,
				'bankname' => $bank,
				'ifsccode' => $ifsc,
				'branchname' => $branch,
				'document' => $file

			);
			$this->dashM->insert('bank_details', $data);
			$this->session->set_flashdata('msg', 'Bank Details added successfully');
			redirect(base_url('supplier/dashboard/banking'));
		} else {
			$data = array(

				'supplierid' => $supplierid,
				'accountno' => $accountno,
				'bankname' => $bank,
				'ifsccode' => $ifsc,
				'branchname' => $branch

			);
			$this->dashM->insert('bank_details', $data);
			$this->session->set_flashdata('msg', 'Bank Details added successfully');
			redirect(base_url('supplier/dashboard/banking'));
		}
	}
	public function delete($id)
	{
		$id = $this->uri->segment(4);
		// $this->dashM->delete('bank_details', $id);
		$where = array('id' => $id);
		$data = array('is_deleted' => true);
		$result = $this->dashM->update('bank_details', $data, $where);

		$this->session->set_flashdata('msg', 'Bank Details deleted successfully');
		redirect(base_url('supplier/dashboard/banking'));
	}
	//neethu end
	public function save_companydetails()
	{
		echo 1;
	}

	public function insert_services()
	{

		$res = '';
		$data['categoryservices'] = $this->input->post('inputservicesCity');
		$data['services'] = $this->input->post('inputservices');
		$data['tenderid'] = 1;
		$data['serviceid'] = 1;
		$data['isdeleted'] = false;
		$data['createddate'] = date("Y-m-d H:i:s");
		$data['supplierid'] = $this->session->userdata('uid');
		//$data['isdeleted']=false;
		$res =  $this->dashM->insert('services', $data);



		if ($res > 0) {
			$this->session->set_flashdata('msg', 'Services added successfully');
			//redirect(base_url('supplier/dashboard/portfolio'));
		} else {
			echo "Error while adding";
		}
	}

	public function getServicesListData()
	{

		$draw = intval($this->input->get("draw"));
		$start = intval($this->input->get("start"));
		$length = intval($this->input->get("length"));
		$supplierid = $this->session->userdata('uid');

		$servicedata = $this->dashM->getServices($supplierid);

		$data = array();

		$i = 1;
		foreach ($servicedata as $r) {

			$delete = '<a href="javascript:void(0);"><span style="color:red"><i class="fa fa-trash" id="delete-services" aria-hidden="true"></i></span></a>';

			$data[] = array(
				'no' => $i,
				'services' => $r->services,
				'servicesname' => $r->categoryservices,
				'delete' => $delete,



			);
			$i++;
		}

		$output = array(
			"draw" => $draw,

			"data" => $data
		);

		echo json_encode($output);
	}

	public function deleteSupplierServices()
	{

		$supplierid = $this->input->post('supplierid');
		$where = array('id' => $supplierid);
		$data = array('isdeleted' => true);
		$result = $this->dashM->update('services', $data, $where);

		if ($result > 0) {

			echo "Deleted successfully";
		} else {
			echo "Error while deleting";
		}
	}

	public function getPOData()
	{
		$token = $this->Login_POST();
		$token1 = json_decode($token);

		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getPOData';
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl);
		return $result;
	}


	public function getBankData()
	{
		$token = $this->Login_POST();
		$token1 = json_decode($token);

		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialGroupData';
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl); 
		return $result;
	}

	public function getBankById()
	{
		$token = $this->Login_POST();
		$token1 = json_decode($token);

		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialById/3';
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl); 
		return $result;
	}

	public function notification_count()
	{
		$user_type = $this->session->userdata("user_type");
		$uid = $this->session->userdata('supplierid');
		$count = $this->dashM->ajaxnotificationscount($user_type, $uid);
		// if($count!=0)
		// {
		echo json_encode($count);
		// }
		// else
		// {
		// 	echo json_encode('');	
		// }
		
		
	}

	public function getordersbyId()
	{
		$token = $this->Login_POST();
		$token1 = json_decode($token);

		$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getordersbyId';
		$curl       = curl_init();
		curl_setopt($curl, CURLOPT_URL, $apiurl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Authorization: Bearer ' . $token1->result_data->token->access_token
		));
		$result = curl_exec($curl); 
		//print_r($result);exit;
		return $result;
	}

}
