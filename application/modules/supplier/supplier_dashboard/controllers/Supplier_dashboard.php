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
		if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='3')
		{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['tab'] =$tab;
		$data['page'] = 'profile';
		$data['mainpage'] = '';
    	$data['page_title'] = 'Profile';
		$data['title'] = 'Company Profile';
		$data['indexurl'] = base_url()."supplier/dashboard";
		$uid=$this->session->userdata('uid');
		$data['getcompanydetails']=$this->dashM->getCompanyProfile($uid);
		// $data['user_details']=$this->dashM->getUser_details($loged_user);
		$this->template->make('supplier_dashboard/company_profile',$data,'supplier_portal'); 
	    }
	    else
	    {
	    	$this->session->set_flashdata('msg','You are not allowed to access Company Profile');
	    	redirect(base_url('supplier/dashboard'));
	    }
	}
	public function personal_profile()
	{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
		$data['page_title'] = 'personal_profile';
		$data['title'] = 'Profile';
		$uid=$this->session->userdata('uid');
		$data['getpersonalprofile']=$this->dashM->getpersonalprofile('suppliers',$uid); 
		$this->template->make('supplier_dashboard/personal_profile',$data,'supplier_portal'); 
	}
	
	/***************************bhagya********************************/
	
	public function preference_profile()
	{

		if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='2'
			OR $this->session->userdata('user_type')=='3')
		{
		$loged_user=$_SESSION['userid'];
		$usertype=$_SESSION['user_type'];
		$data['page'] = 'profile';
		$data['mainpage'] = '';
		$data['page_title'] = 'preference_profile';
		$data['title'] = 'preference Profile';
		$this->template->make('supplier_dashboard/preferences',$data,'supplier_portal');
		 }
	    else
	    {
	    	echo " “Sorry, You Are Not Allowed to Access This Page” ";
	    }
	}
	
	
		public function notifications() 
	{

	if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='2'
	 OR $this->session->userdata('user_type')=='3')
	{
		$data['page'] = 'notifications';
		$data['mainpage'] = '';
		$data['page_title'] = 'notifications';
		$data['title'] = 'Company notifications';
		$this->template->make('supplier_dashboard/supplier_notifications',$data,'supplier_portal');

 	}
	    else
	    {
	    	echo " “Sorry, You Are Not Allowed to Access This Page” ";
	    }

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
		if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='3')
		{
		$data['page'] = 'users';
		$data['mainpage'] = '';
		$data['page_title'] = 'create users';
		$data['title'] = 'Users';
		$data['getemployeeusertypesdetails']=$this->dashM->getemployeesusertype();
		$data['getemployeesdetails']=$this->dashM->getEmployees();
		$this->template->make('supplier_dashboard/manage_users',$data,'supplier_portal');
		 }
	    else
	    {
	    	
	    	$this->session->set_flashdata('msg','You are not allowed to access Employees');
	    	redirect(base_url('supplier/dashboard'));
	    }

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

		if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='2'
			OR $this->session->userdata('user_type')=='3')
		{

		$data['page'] = 'Banking';
		$data['mainpage'] = '';
		$data['page_title'] = 'Banking';
		$data['title'] = 'Banking Services';
		$uid=$this->session->userdata('uid');
		$data['getbankdetails']=$this->dashM->getbankdetails('bank_details',$uid);
		$this->template->make('supplier_dashboard/banking_services',$data,'supplier_portal');
		 }
	    else
	    {
	    	echo " “Sorry, You Are Not Allowed to Access This Page” ";
	    }
	}
	public function attachments(){
		$data['page'] = 'attachments';
		$data['mainpage'] = '';
		$data['page_title'] = 'Attachments';
		$data['title'] = 'Attachments';
		$this->template->make('supplier_dashboard/attachments',$data,'supplier_portal');
	}
	
	public function permission(){
		if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='3')
		{
		$data['page'] = 'Access Permission';
		$data['mainpage'] = '';
		$data['page_title'] = 'Access Permission';
		$data['title'] = 'Access Permission';
		// $data['getcompanypermissiondetails']=$this->dashM->getCompanyPermission(); 
		$this->template->make('supplier_dashboard/permission',$data,'supplier_portal');
		}
	    else
	    {
	    	
	    	$this->session->set_flashdata('msg','You are not allowed to access  Permission Page');
	    	redirect(base_url('supplier/dashboard'));
	    }
	}
	

	public function portfolio(){
		if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='3' OR $this->session->userdata('user_type')=='2')
		{
		$data['page'] = 'Portfolio';
		$data['mainpage'] = '';
		$data['page_title'] = 'Portfolio';
		$data['title'] = 'Portfolio';
		$data['tab']=1;
		$supplierid=$this->session->userdata('uid');
	$materialdata=json_decode($this->getMaterialGroupData());
	$data['materialdata']=$materialdata->result_data->list;//echo"<pre>";print_r($data['materialdata']);exit;
	$getcategorydata=json_decode($this->getSbuData_get());
	$data['getcategory']=$getcategorydata->result_data->list;
	//$getmatrdata=json_decode($this->getMaterialData(1,3));
	//$getmatrdata=json_decode($this->getMaterialById());
	//$data['getmaterial']=$getcategorydata->result_data->list;echo"<pre>";print_r($data['getmaterial']);exit;
	$data['getsuppliermaterials']=$this->dashM->getSupplierMaterials($supplierid);//echo"<pre>";print_r($data['getsuppliermaterials']);exit;
	$this->template->make('supplier_dashboard/portfolio',$data,'supplier_portal');
	 }
	    else
	    {
	    	
	    	$this->session->set_flashdata('msg','You are not allowed to access Company Portfolio');
	    	redirect(base_url('supplier/dashboard'));
	    }


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

		if($this->session->userdata('user_type')=='1' OR $this->session->userdata('user_type')=='2'
		 OR $this->session->userdata('user_type')=='3')
		{

		$data['page'] = 'subscription';
		$data['mainpage'] = '';
		$data['page_title'] = 'subscription';
		$data['title'] = 'subscription';
		$data['tab']=1;
		$uid=$this->session->userdata('uid');
		$data['getsubscriptionstatus']=$this->dashM->getsubscriptionstatus($uid);
		$this->template->make('supplier_dashboard/subscription',$data,'supplier_portal');
		 }
	    else
	    {
	    	echo " “Sorry, You Are Not Allowed to Access This Page” ";
	    }
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
			//$materialgroup=$this->input->post('materialgroup');
			$token=$this->Login_POST();
			$token1=json_decode($token);
			$apiurl     = 'http://hris.kseb.in/erpws/api/prc/getMaterialData/'.$materialgroup.'/'.$productcategory;
		  $curl       = curl_init();
		  curl_setopt( $curl, CURLOPT_URL, $apiurl );
		  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		   'Content-Type: application/json',
		   'Authorization: Bearer ' . $token1->result_data->token->access_token
		   ));
		   $result = curl_exec( $curl );
		   $value= json_decode($result);
		   //echo"<pre>";print_r($value);exit;
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
		   'Authorization: Bearer ' . $token1->result_data->token->access_token
		   ));
		   $result = curl_exec( $curl );//print_r($result);exit;
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
		   'Authorization: Bearer ' . $token1->result_data->token->access_token
		   ));
		   $result = curl_exec( $curl );//print_r($result);exit;
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
	   'Authorization: Bearer ' . $token1->result_data->token->access_token
	   ));
	   $result = curl_exec( $curl );//print_r($result);exit;
	   return $result;
		}
		
		public function insert_materials(){

        $res='';
			$data['categoryId']=$this->input->post('productcategory');
			$data['categoryname']=$this->input->post('categoryname');
			$data['materialId']=$this->input->post('material');
			$data['materialname']=$this->input->post('product');
			//$data['materialinput']=$this->input->post('materialinput');
			//$data['created_date']=date('Y-m-d H:i:s');
			$data['supplierId']=$this->session->userdata('uid');  
			//$data['isdeleted']=false;
            $res=  $this->dashM->insert('suppliermaterials',$data);
         
			 
		 
		 if($res>0)
            {
				 $this->session->set_flashdata('msg','Materials added successfully');
                 //redirect(base_url('supplier/dashboard/portfolio'));
            }
            else
            {
                echo "Error while adding";
            }
			

    }
	
	public function getMaterialListData() {
		//echo $supplierid;exit;
		
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
		$supplierid=$this->session->userdata('uid');  

            $materialdata = $this->dashM->getSupplierMaterials($supplierid);
			
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
							'materialId'=>$r->materialId
							
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
	$supplierid=$this->session->userdata('uid');  
	$data['getsuppliermaterials']=$this->dashM->getSupplierMaterials($supplierid);
		$this->template->make('supplier_dashboard/materialdetails',$data,'supplier_portal');

	}
	
	 public function deleteSupplierMaterials() {
      
        $supplierid=$this->input->post('supplierid');
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
	
	public function update_companyprofile(){

         $res='';
       $suppplierid=$this->input->post('suppplierid');
        
            $data['companyname']=$this->input->post('profile');
            $data['incorporationNo']=$this->input->post('incorporation');
			$data['incorporationdate']=$this->input->post('date');
            $data['pancardno']=$this->input->post('pancard');
            $data['gst']=$this->input->post('gstin');
            $data['companyaddress']=$this->input->post('address');
            $data['mobile']=$this->input->post('mobile');
			$data['email']=$this->input->post('email');
			$data['website']=$this->input->post('website');
			$data['authorizedperson']=$this->input->post('authorizedperson');
			
            if($suppplierid){

                $where=array('id'=>$suppplierid);
				$res =$this->dashM->update('companyprofile',$data, $where);
                
            }
			
			 if($res>0)
        {
            
            echo "Updated Successfully";
        }
        else
        {
            echo "Error while Updating";
        }  
    }
	
	public function insert_companyprofile(){ 
 
        $res='';
			$data['name']=$this->input->post('name');
			$data['mobilenum']=$this->input->post('mobilenumber');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['usertype']=$this->input->post('usertype');
			$data['supplierid']=$this->session->userdata('uid');

			$id=$this->input->post('id');
			$data['isdeleted']= false;

		    if($id!="")
		    {
		    	// echo $id; exit;
            $res=  $this->dashM->updatedata('employees',$data,$id);

             if($res>=0)
            {
               
                $this->session->set_flashdata('msg','Employees Updated successfully');
                 redirect(base_url('supplier/dashboard/manage_user'));

            }
            else
            {
                echo "Error while adding";
            }
             }
             else
             {
             	$res=  $this->dashM->insert('employees',$data);
             	       
             	 if($res>=0)
            {
               // echo "Employees added successfully"; 
                $this->session->set_flashdata('msg','Employees added successfully');
                 redirect(base_url('supplier/dashboard/manage_user'));

            }
            else
            {
                echo "Error while adding";
            }
             }
		
          
    }
	
	
	public function getEmployeesListData() {
		
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
		
		$uid=$this->session->userdata('uid');
            $employeedata = $this->dashM->getEmployees1($uid);
			
            $data = array();
         
            $i =1;
            foreach($employeedata as $r) {
	        $edit ='<div style="display:flex"><a href="javascript:void(0);  " id="editprofilefn"> <span style="color:blue;padding-right: 24px;"><i class="fa fa-pencil" id="edit-supplier" aria-hidden="true"></i></span></a>'
			.'<a href="javascript:void(0);"><span style="color:red"><i class="fa fa-trash" id="delete-supplier" aria-hidden="true"></i></span></a>';
			if($r->islocked==true)
			{
			$status ='<a href="javascript:void(0);"><span style="color:#ffcccb"><i class="fa fa-lock" id="unlock-supplier" aria-hidden="true"></i></span></a>';
			}
			else
			{
			$status ='<a href="javascript:void(0);"><span style="color:SlateBlue"><i class="fa fa-unlock" id="lock-supplier" aria-hidden="true"></i></span></a></div>';
			}

			if($r->usertype==4)
			{
                  $data[] = array(
							'no'=>$i,
							'id'=>$r->id,
							'mobile'=>$r->mobilenum,
							'email'=>$r->email,
							'name'=>$r->name,
							'password'=>$r->password,
							'usertype'=>$r->usertype,
							'usertype1'=>"Accounts Manager",
							'edit'=>$edit,
							/* 'delete'=>$delete,*/
							'status'=>$status 

							
							
                 );
              }
             
              	elseif($r->usertype==5)
			{
                  $data[] = array(
							'no'=>$i,
							'id'=>$r->id,
							'mobile'=>$r->mobilenum,
							'email'=>$r->email,
							'name'=>$r->name,
							'password'=>$r->password,
							'usertype'=>$r->usertype,
							'usertype1'=>"Delivery Manager",
							'edit'=>$edit,
							/* 'delete'=>$delete,*/
							'status'=>$status 

							
							
                 );
              
              }
              if($r->usertype==6)
			{
                  $data[] = array(
							'no'=>$i,
							'id'=>$r->id,
							'mobile'=>$r->mobilenum,
							'email'=>$r->email,
							'name'=>$r->name,
							'password'=>$r->password,
							'usertype'=>$r->usertype,
							'usertype1'=>"Basic User",
							'edit'=>$edit,
							/* 'delete'=>$delete,*/
							'status'=>$status 

							
							
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
	
	public function insert_preferenceprofile(){

        $res='';
			$data['timezone']=$this->input->post('timezone');
			$data['notification']=$this->input->post('display_status');
			$data['date']=$this->input->post('date');
			
			
            $res=  $this->dashM->insert('preferences',$data);
         
		 if($res>0)
            {
                echo "preferences added successfully";
            }
            else
            {
                echo "Error while adding";
            }

    }
	
	 public function deleteSupplierEmployees() {
      
        $supplierid=$this->input->post('supplierid');
        $where = array('id'=>$supplierid);
        $data=array('isdeleted'=>true);
        $result =$this->dashM->update('employees',$data, $where);
      
        if($result>0)
        {
            $this->session->set_flashdata('msg','Employees Deleted successfully');
            // echo "Deleted successfully";
        }
        else
        {
            echo "Error while deleting";
        }  
    } 



    //neethu
     public function lockSupplierEmployees() {
      
        $supplierid=$this->input->post('supplierid');
        $where = array('id'=>$supplierid);
        $data=array('islocked'=>true);
        $result =$this->dashM->update('employees',$data, $where);
      
        if($result>0)
        {
            $this->session->set_flashdata('msg','Employees Locked successfully');
            // echo "Locked successfully";
        }
        else
        {
            echo "Error while Locking";
        }  
    }  
    public function unlockSupplierEmployees() {
      
        $supplierid=$this->input->post('supplierid');
        $where = array('id'=>$supplierid);
        $data=array('islocked'=>false);
        $result =$this->dashM->update('employees',$data, $where);
      
        if($result>0)
        {
            $this->session->set_flashdata('msg','Employees Unlocked successfully');
            // echo "Locked successfully";
        }
        else
        {
            echo "Error while Locking";
        }  
    }  
    public function editSupplierEmployees() {
      
        $id=$this->input->post('supplierid');
        echo $supplierid; exit;
  //       $getemployeesdetail="";
  //       $data['getemployeesdetail']=$this->dashM->getemployeesdetail($id);
		// $this->template->make('supplier_dashboard/manage_users',$data,'supplier_portal');
    } 
	public function insert_access_permission(){
		     
        	 $user_type=$this->input->post('user_type');
        	 $uid=$this->session->userdata('uid');
			 $procurement_plan=$this->input->post('procurement_plan')=="1"?$this->input->post('procurement_plan'):'0'; 
			 $tenders=$this->input->post('tenders')=="1"?$this->input->post('tenders'):'0';
			 $purchase_order=$this->input->post('purchase_order')=="1"?$this->input->post('purchase_order'):'0';
			 $delivery=$this->input->post('delivery')=="1"?$this->input->post('delivery'):'0';
			 $accounts=$this->input->post('accounts')=="1"?$this->input->post('accounts'):'0';
			 $work_measurement=$this->input->post('work_measurement')=="1"?$this->input->post('work_measurement'):'0'; 

			 $data=array(
			'user_type'=>$user_type,
			'procurement_plan'=>$procurement_plan,
			'tenders'=>$tenders,
			'purchase_order'=>$purchase_order,
			'delivery'=>$delivery,
			'accounts'=>$accounts,
			'work_measurement'=>$work_measurement
		    );
		   $result=$this->dashM->update_access_permission('access_permission',$data,$user_type,$uid);
		   if($result>=0)
        {
        	$this->session->set_flashdata('msg','Access Permission added successfully');
            redirect(base_url('supplier/dashboard/permission'));
           
        }
        else
        {
            echo "Error while Updating";
        }  
		   
		     
    }
    

	public function getdetails()
	{
		$id=$this->input->post("id");
		$uid=$this->session->userdata('uid');
		$details=$this->dashM->ajaxselect('access_permission',$id,$uid);
		echo json_encode($details);		
	}

	public function regcompany()

	{
		$s=$this->session->userdata('supplier');
		$companyname=$this->input->post('companyname');
		$individualname=$this->input->post('individualname');
		$username=$this->input->post('username');
		$pannumber=$this->input->post('pannumber');
		$registrationtype=$this->input->post('registrationtype')?$this->input->post('registrationtype'):'2';
		$firstname=$this->input->post('firstname');
		$phonenumber=$this->input->post('phonenumber');
		$emailaddress=$this->input->post('emailaddress');
		$password=$this->input->post('password');
		$primary_contact_name=$this->input->post('firstname');
		date_default_timezone_set("Asia/Kolkata");
		$date=date('Y-m-d H:i:s');
	    $getpannum='';
	    $getpannum=$this->dashM->getpan($pannumber); 
		//echo $getpannum->pannumber; exit;
	    if($getpannum->pannumber!='') 
		{
			// echo '<script type="text/javascript" >alert("You are already registerd. Please Login");
   //          </script>';
   //          echo ' <script>window.location.href="";</script>';
			$this->session->set_flashdata('error','You are already registered. Please Login');
            redirect(base_url('home'));


	    
		}
		   else
		   {
		   	 
          if($companyname!="")  
		{
		
		 $data=array(
		 	'name'=>$companyname,
		 	'username'=>$username,
		 	'password'=>$password,
			'mobile'=>$phonenumber,
			'email'=>$emailaddress,
			'pannumber'=>$pannumber,
			'created_date'  =>$date,
			'user_type'=>$registrationtype,
			'active_status'=>0,
			'primary_contact_name'=>$primary_contact_name,
			'source'=>'External'

			 );
		 
		   $this->dashM->insert('suppliers',$data);
		    $supplierid=$this->db->insert_id();
		     $data1=array(
		 	'companyname'=>$companyname,
			'mobile'=>$phonenumber,
			'email'=>$emailaddress,
			'supplierid'=>$supplierid,
			'pancardno'=>$pannumber
			 );
			 $data2=array(
		 	'user_type'=>4,
			'supplierid'=>$supplierid
			
			 );
			 $data3=array(
		 	'user_type'=>5,
			'supplierid'=>$supplierid
			
			 );
			 $data4=array(
		 	'user_type'=>6,
			'supplierid'=>$supplierid
			
			 );
			  $data5=array(
		 	'user_type'=>1,
		 	'procurement_plan'=>1,
		 	'tenders'=>1,
		 	'purchase_order'=>1,
		 	'delivery'=>1,
		 	'accounts'=>1,
		 	'work_measurement'=>1,

			'supplierid'=>$supplierid
			
			 );
			   $data6=array(
		 	'user_type'=>2,
		 	'procurement_plan'=>1,
		 	'tenders'=>1,
		 	'purchase_order'=>1,
		 	'delivery'=>1,
		 	'accounts'=>1,
		 	'work_measurement'=>1,
			'supplierid'=>$supplierid
			
			 );
			    $data7=array(
		 	'user_type'=>3,
		 			 	'procurement_plan'=>1,
		 	'tenders'=>1,
		 	'purchase_order'=>1,
		 	'delivery'=>1,
		 	'accounts'=>1,
		 	'work_measurement'=>1,
			'supplierid'=>$supplierid
			
			 );
			 $this->dashM->insert('companyprofile',$data1);
			 $this->dashM->insert('access_permission',$data2);
			 $this->dashM->insert('access_permission',$data3);
			 $this->dashM->insert('access_permission',$data4);
			 $this->dashM->insert('access_permission',$data5);
			 $this->dashM->insert('access_permission',$data6);
			 $this->dashM->insert('access_permission',$data7);
			 // echo '<script type="text/javascript" >alert("You are successfully registerd");
    //         </script>';
    //         echo ' <script>window.location.href="";</script>';
		      $this->session->set_flashdata('rmsg','You are  registered successfully.');
		      redirect(base_url('home'));
		 
		}
		else
		{
			 $data=array(
		 	'name'=>$individualname,
		 	'username'=>$username,
		 	'password'=>$password,
			'mobile'=>$phonenumber,
			'email'=>$emailaddress,
			'pannumber'=>$pannumber,
			'created_date'  =>$date,
			'user_type'=>2,
			'active_status'=>0,
			'primary_contact_name'=>$primary_contact_name,
			'source'=>'External'

			 );
		 
		   $this->dashM->insert('suppliers',$data);
		    $supplierid=$this->db->insert_id();
		     $data1=array(
		 	'companyname'=>$individualname,
			'mobile'=>$phonenumber,
			'email'=>$emailaddress,
			'supplierid'=>$supplierid,
			'pancardno'=>$pannumber
			 );
			  $data2=array(
		 	'user_type'=>4,
			'supplierid'=>$supplierid
			
			 );
			 $data3=array(
		 	'user_type'=>5,
			'supplierid'=>$supplierid
			
			 );
			 $data4=array(
		 	'user_type'=>6,
			'supplierid'=>$supplierid
			
			 ); $data5=array(
		 	'user_type'=>1,
		 	'procurement_plan'=>1,
		 	'tenders'=>1,
		 	'purchase_order'=>1,
		 	'delivery'=>1,
		 	'accounts'=>1,
		 	'work_measurement'=>1,

			'supplierid'=>$supplierid
			
			 );
			   $data6=array(
		 	'user_type'=>2,
		 	'procurement_plan'=>1,
		 	'tenders'=>1,
		 	'purchase_order'=>1,
		 	'delivery'=>1,
		 	'accounts'=>1,
		 	'work_measurement'=>1,
			'supplierid'=>$supplierid
			
			 );
			    $data7=array(
		 	'user_type'=>3,
		 			 	'procurement_plan'=>1,
		 	'tenders'=>1,
		 	'purchase_order'=>1,
		 	'delivery'=>1,
		 	'accounts'=>1,
		 	'work_measurement'=>1,
			'supplierid'=>$supplierid
			
			 );
			 $this->dashM->insert('companyprofile',$data1);
			 $this->dashM->insert('access_permission',$data2);
			 $this->dashM->insert('access_permission',$data3);
			 $this->dashM->insert('access_permission',$data4);
			 $this->dashM->insert('access_permission',$data5);
			 $this->dashM->insert('access_permission',$data6);
			 $this->dashM->insert('access_permission',$data7);
			  // echo '<script type="text/javascript" >alert("You are successfully registerd");
     //        </script>';
     //        echo ' <script>window.location.href="";</script>';
			 $this->session->set_flashdata('rmsg','You are  registered successfully.');
		      redirect(base_url('home'));
		}

		   }
	

	}

	public function insert_bank_details()
	{
		$supplierid=$this->session->userdata('uid');
		$bank=$this->input->post('bank');
		$branch=$this->input->post('branch');
		$ifsc=$this->input->post('ifsc');
		$accountno=$this->input->post('accountno');
		// $file=$this->input->post('file');
		$config['upload_path'] = './uploads/bank_details';
            $config['allowed_types'] = '*';
            $config['max_size'] = '5000';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file'))
             {
          
                print_r($this->upload->display_errors());
              } 
              else 
              {
	            $data = $this->upload->data();
	            $file=$data['file_name'];
	            
        	  }

        	  if ($file!="")
      	{
			$data=array(
					'supplierid'=>$supplierid,
			'accountno'=>$accountno,
			'bankname'=>$bank,
			'ifsccode'=>$ifsc,
			'branchname'=>$branch,
			'document'=>$file
					
	);
		 $this->dashM->insert('bank_details',$data);
		 $this->session->set_flashdata('msg','Bank Details added successfully');
		 redirect(base_url('supplier/dashboard/banking'));
	}
	else
	{
		 $data=array(
		
			'supplierid'=>$supplierid,
			'accountno'=>$accountno,
			'bankname'=>$bank,
			'ifsccode'=>$ifsc,
			'branchname'=>$branch
			
			 );
		 $this->dashM->insert('bank_details',$data);
		 $this->session->set_flashdata('msg','Bank Details added successfully');
		 redirect(base_url('supplier/dashboard/banking'));
	}
}
	public function delete($id)
	{
		$id=$this->uri->segment(4);
		$this->dashM->delete('bank_details',$id);
		$this->session->set_flashdata('msg','Bank Details deleted successfully');
		redirect(base_url('supplier/dashboard/banking'));
	}
	//neethu end



}
