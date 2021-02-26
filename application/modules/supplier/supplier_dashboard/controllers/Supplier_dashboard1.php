<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_dashboard extends SP_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model','dashM');
		
	}
	public function index()
	{
		$data['showdashbaord'] =true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Supplier Dashboard';
		$data['indexurl'] = base_url()."supplier/dashboard";
		// $this->template->make('supplier_dashboard/home',$data,'supplier_portal');
		$this->template->make('supplier_dashboard/dashboard',$data,'supplier_portal');

	  }
	  public function dashboard1()
	{
		$data['showdashbaord'] =true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Supplier Dashboard';
		$data['indexurl'] = base_url()."supplier/dashboard";
		// $this->template->make('supplier_dashboard/home',$data,'supplier_portal');
		//$this->template->make('supplier_dashboard/dashboard_2',$data,'supplier_portal');
		$this->load->view('supplier_dashboard/dashboard_2');

	  }
	  public function dashboard2()
	{
		$data['showdashbaord'] =true;
		$data['page'] = 'supplier_dashboard';
		$data['title'] = 'Supplier Dashboard';
		$data['indexurl'] = base_url()."supplier/dashboard";
		$this->load->view('supplier_dashboard/dashboard_3');

  	}

	
	public function profile($tab=1)
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['tab'] =$tab;
		$data['page'] = 'profile';
		$data['mainpage'] = '';
    	$data['page_title'] = 'Profile';
		$data['title'] = 'Company Profile';
		$data['indexurl'] = base_url()."supplier/dashboard";
		// $data['user_details']=$this->dashM->getUser_details($loged_user);
		$this->template->make('supplier_dashboard/company_profile',$data,'supplier_portal');
	}
	public function personal_profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
		$data['page_title'] = 'personal_profile';
		$data['title'] = 'Profile';
		$this->template->make('supplier_dashboard/personal_profile',$data,'supplier_portal');
	}
	
	/***************************bhagya********************************/
	
	public function preference_profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
		$data['page_title'] = 'preference_profile';
		$data['title'] = 'preference Profile';
		$this->template->make('supplier_dashboard/preferences',$data,'supplier_portal');
	}
	
	
		public function notifications()
	{
		$data['page'] = 'notifications';
		$data['mainpage'] = '';
		$data['page_title'] = 'notifications';
		$data['title'] = 'Company notifications';
		$this->template->make('supplier_dashboard/supplier_notifications',$data,'supplier_portal');
	}
	
	public function fontsize()
	{
		$data['page'] = 'fontsize';
		$data['mainpage'] = '';
		$data['page_title'] = 'fontsize';
		$data['title'] = 'Font Size';
		$this->template->make('supplier_dashboard/fontsize',$data,'supplier_portal');
	}
	/***************************bhagya End********************************/
	public function manage_user()
	{
		$data['page'] = 'users';
		$data['mainpage'] = '';
		$data['page_title'] = 'create users';
		$data['title'] = 'Users';
		$this->template->make('supplier_dashboard/manage_users',$data,'supplier_portal');
	}
	public function products()
	{
		$data['page'] = 'Products';
		$data['mainpage'] = '';
		$data['page_title'] = 'Products';
		$data['title'] = 'Company Products';
		$this->template->make('supplier_dashboard/company_products',$data,'supplier_portal');
	}
	public function services()
	{
		$data['page'] = 'Services';
		$data['mainpage'] = '';
		$data['page_title'] = 'Services';
		$data['title'] = 'Company Services';
		$this->template->make('supplier_dashboard/company_services',$data,'supplier_portal');
	}
public function updateNewuser()
{
	$email=$this->input->post('email');
	$mobile=$this->input->post('mobile');
	$name=$this->input->post('name');
	$data=array(
		'name'=>$name,
		'email'=>$email,
		'mobile'=>$mobile
	);
	$loged_user=$_SESSION['userid'];
	$where=array(
		'uid'=>$loged_user
	);

	$up=simpleUpdate('web_users',$data,$where);
	if($up) print 1; else print 2;
}
public function updatePassword()
{
	$password=$this->input->post('password');
	$newpasswprd=$this->input->post('newpasswprd');
	$cpasword=$this->input->post('cpasword');
	$loged_user=$_SESSION['userid'];
	if($newpasswprd==$cpasword)
	{
		$checkpwd=getAfield("password","web_users","where uid=$loged_user",$as="");
		if($password==$checkpwd)
		{
			$data=array('password'=>$newpasswprd);
			$where=array('uid'=>$loged_user);
			$up=simpleUpdate('web_users',$data,$where);
			if($up) print 1; else print 4;
		}
		else {
			print 2;
		}
	}
	else {
		print 3;
	}

}

	public function logout(){
		$url=base_url($_SESSION['key']);
		$user_data = $this->session->all_userdata();
			foreach ($user_data as $key => $value)
			{
			$this->session->unset_userdata($key);
			}
		$this->session->sess_destroy();
			redirect($url);
	}

	public function banking(){
		$data['page'] = 'Banking';
		$data['mainpage'] = '';
		$data['page_title'] = 'Banking';
		$data['title'] = 'Banking Services';
		$this->template->make('supplier_dashboard/banking_services',$data,'supplier_portal');
	}
	public function attachments(){
		$data['page'] = 'attachments';
		$data['mainpage'] = '';
		$data['page_title'] = 'Attachments';
		$data['title'] = 'Attachments';
		$this->template->make('supplier_dashboard/attachments',$data,'supplier_portal');
	}
	
	public function permission(){
		$data['page'] = 'Access Permission';
		$data['mainpage'] = '';
		$data['page_title'] = 'Access Permission';
		$data['title'] = 'Access Permission';
		$this->template->make('supplier_dashboard/permission',$data,'supplier_portal');
	}

	public function portfolio(){
		$data['page'] = 'Portfolio';
		$data['mainpage'] = '';
		$data['page_title'] = 'Portfolio';
		$data['title'] = 'Portfolio';
		$data['tab']=1;
		
	$materialdata=json_decode($this->getMaterialGroupData());
	$data['materialdata']=$materialdata->result_data->list;
	$sbudata=json_decode($this->getSbuData_get());
	$data['SbuData']=$sbudata->result_data->list;
	$data['getcategroy']=$this->dashM->getcategroy();
	$data['getsuppliermaterials']=$this->dashM->getSupplierMaterials();//print_r($data['getsuppliermaterials']);exit;
		$this->template->make('supplier_dashboard/portfolio',$data,'supplier_portal');

	}

	public function administration(){
		
		$data['page'] = 'Portfolio';
		$data['mainpage'] = '';
		$data['page_title'] = 'Portfolio';
		$data['title'] = 'Portfolio';
		$data['tab']=1;
		$this->template->make('supplier_dashboard/administration',$data,'supplier_portal');
	}

	public function subscription(){
		$data['page'] = 'subscription';
		$data['mainpage'] = '';
		$data['page_title'] = 'subscription';
		$data['title'] = 'subscription';
		$data['tab']=1;
		$this->template->make('supplier_dashboard/subscription',$data,'supplier_portal');
	}
	public function change_password(){
		
		$data['mainpage'] = '';
		$data['title'] = 'password';
		$data['tab']=1;
		$this->template->make('supplier_dashboard/forgot_password',$data,'supplier_portal');
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
	
	  public function getMaterialData($materialgroup,$productcategory)
		{
			$materialgroup=$this->input->post('materialgroup');
			$token=$this->Login_POST();
			$token1=json_decode($token);
			$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialData/'.$materialgroup.'/'.$productcategory;
		  $curl       = curl_init();
		  curl_setopt( $curl, CURLOPT_URL, $apiurl );
		  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . $token1->token->access_token
		   ));
		   $result = curl_exec( $curl );
		   $value= json_decode($result);
		   echo json_encode($value->result_data->list);
				}
			
				public function getMaterialProductsDetails()
			{
			
			$materialgroup=$this->input->post('materialgroup');
			$productcategory=$this->input->post('productcategory');
			$this->getMaterialData($materialgroup,$productcategory);
				} 
				
				public function getMaterialGroupData()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
		  $apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialGroupData';
		  $curl       = curl_init();
		  curl_setopt( $curl, CURLOPT_URL, $apiurl );
		  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . $token1->token->access_token
		   ));
		   $result = curl_exec( $curl );
			return $result;
		}
		
		public function getSbuData_get()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
			$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getSbuData';
		  $curl       = curl_init();
		  curl_setopt( $curl, CURLOPT_URL, $apiurl );
		  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . $token1->token->access_token
		   ));
		   $result = curl_exec( $curl );
		  return $result;
		}


	public function getMaterialById()
		{
			$token=$this->Login_POST();
			$token1=json_decode($token);
			
	  $apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialById/173';
	  $curl       = curl_init();
	  curl_setopt( $curl, CURLOPT_URL, $apiurl );
	  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	   'Content-Type: application/json',
	   'Authorization: Bearer ' . $token1->token->access_token
	   ));
	   $result = curl_exec( $curl );
	   return $result;
		}
		
		public function insert_materials(){

        $res='';
       
            //$data['category']=$this->input->post('productcategory');
			$data['categoryId']=$this->input->post('productcategory');
			$data['categoryname']=$this->input->post('categoryname');
			$data['materialId']=$this->input->post('material');
			$data['materialname']=$this->input->post('product');
			$data['supplierId'] =1;
             $res=  $this->dashM->insert('suppliermaterials',$data);
         //print_r($data);exit;
       
		 if($res>0)
            {
                echo "Materials added successfully";
            }
            else
            {
                echo "Error while adding";
            }

    }
	
	public function getMaterialListData() {
		
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
		

            $materialdata = $this->dashM->getSupplierMaterials();//print_r($materialdata);exit;
			
            $data = array();
        
            $i =1;
            foreach($materialdata as $r) {
	 $edit ='<a href="javascript:void(0)" data-toggle="modal" data-target="#orders" id="edit-user" style="color:#eebd01" >2</a>';
	 $editoverdue ='<a href="javascript:void(0)" data-toggle="modal" data-target="#overdue" id="edit-user"style="color:#eebd01">2</a>';
	 $editreceipts ='<a href="javascript:void(0)" data-toggle="modal" data-target="#pay" id="edit-user"style="color:#eebd01">1 </a>';
	 $editdefects ='<a href="javascript:void(0)" data-toggle="modal" data-target="#defects" id="edit-user" style="color:#eebd01"> 2</a>';
		$editvmi ='<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal_vmi1" id="edit-user"style="color:#eebd01">2</a>';
		$editperformance ='<a href="javascript:void(0)" <span class="score">
    <div class="score-wrap">
        <span class="stars-active">
            <i class="fa fa-star checked" aria-hidden="true"></i>
            <i class="fa fa-star checked" aria-hidden="true"></i>
            <i class="fa fa-star checked" aria-hidden="true"></i>
            <i class="fa fa-star checked" aria-hidden="true"></i>
			 <i class="fa fa-star .score .stars-inactive" style="color:grey"aria-hidden="true"></i></span></a>';
			$capacityinfo='<button class="btn btn-primary dropdown-toggle"  data-toggle="modal" data-target="#myModal_capacity" type="button" id="capacityinfo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Capacity Info
                                                                        </button>';
			$delete='<a href="javascript:void(0);"><span style="color:red"><i class="fa fa-trash" id="delete-supplier" aria-hidden="true"></i></span></a>';
				
                  $data[] = array(
							'no'=>$i,
							'category'=>$r->categoryname,
							'materialname'=>$r->materialname,
							'orders'=>$edit,
							'overdue'=>$editoverdue,
							'receipts'=>$editreceipts,
							'defects'=>$editdefects,
							'vmi'=>$editvmi,
							'On-Time Performance'=>$editperformance,
							'Consigned Inventory'=>'',
							'delete'=>$delete,
							'capacityinfo'=>$capacityinfo,
							'id'=>$r->id,
							
                 );
                 $i++; 
        }

        $output = array(
             "draw" => $draw,
              
               "data" => $data
          );
        echo json_encode($output);
    }
	
	
	public function portfoliocompany(){
		$data['page'] = 'MATERIAL DETAILS';
		$data['mainpage'] = '';
		$data['page_title'] = 'MATERIAL DETAILS';
		$data['title'] = 'MATERIAL DETAILS';
		$data['tab']=1;
		
	$materialdata=json_decode($this->getMaterialGroupData());
	$data['materialdata']=$materialdata->result_data->list;
	$sbudata=json_decode($this->getSbuData_get());
	$data['SbuData']=$sbudata->result_data->list;
	$data['getcategroy']=$this->dashM->getcategroy();
	$data['getsuppliermaterials']=$this->dashM->getSupplierMaterials();//print_r($data['getsuppliermaterials']);exit;
		$this->template->make('supplier_dashboard/materialdetails',$data,'supplier_portal');

	}

	public function insert_access_permission(){

        
       
            $data['user_type']=$this->input->post('user_type');
            $user_type=$data['user_type'];
			$data['procurement_plan']=$this->input->post('procurement_plan');
			$data['tenders']=$this->input->post('tenders');
			$data['purchase_order']=$this->input->post('purchase_order');
			$data['delivery']=$this->input->post('delivery');
			$data['accounts']=$this->input->post('accounts');
			$data['work_measurement']=$this->input->post('work_measurement');
			$this->dashM->update_access_permission('access_permission',$data,$user_type);
		    redirect(base_url('supplier/dashboard/permission'));

    }

	
	 public function deleteSupplierMaterials() {
      
        $supplierid=$this->input->post('supplierid');
       // print_r($supplierid);exit;
        $where = array('id'=>$supplierid);
        $data=array('isdeleted'=>true);
        $result =$this->dashM->update('suppliermaterials',$data, $where);
      
        if($result>0)
        {
            
            echo "Deleted successfully";
        }
        else
        {
            echo "Error while deleting";
        }  
    }
	
		public function forgotpassword(){
		$data['page'] = 'ForgotPassword';
		$data['mainpage'] = '';
		$data['page_title'] = 'ForgotPassword';
		$data['title'] = 'Forgot Password';
		$this->template->make('supplier_dashboard/forgot_pasword',$data,'supplier_portal');
	}

}
