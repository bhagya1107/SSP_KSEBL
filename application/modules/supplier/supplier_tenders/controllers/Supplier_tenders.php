<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_tenders extends SP_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('procurement/Procurement_model','procM');
	$this->load->model('Login','Login');

} 
	public function index($tab=1) 
	{    
		//neethu
		$this->load->model('Getmenus','GETM');
		$user_type=$this->session->userdata('user_type');
		$uid=$this->session->userdata('supplierid');
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission2($uid,$user_type);
		
       if($getcompanypermissiondetails->tenders=='1' and $this->session->userdata('active_status')=='1')
	   { //neethu end
		$data['showdashbaord'] =true;
		$data['page'] = 'tenders';
		$data['title'] = 'Tenders';
		$data['indexurl'] = base_url()."supplier/dashboard";
		$data['tab']=$tab;
		$tender=json_decode($this->getTenderData());
		$data['tender']=$tender->result_data->list;//echo"<pre>";print_r($data['tender']);exit;
		$data['getsuppliertender']=$this->procM->getSupplierMaterials($uid);//print_r($data['getsuppliertender']);exit;
		$data['getsuppliertenderservices']=$this->procM->getSupplierServices($uid);//print_r($data['getsuppliertenderservices']);exit;
		$data['materialid']=array_column($data['getsuppliertender'],'materialId');
		$data['mytenderproducts'] = array();
		
	//echo"<pre>";print_r($data['materialid']);exit;
		if(!empty($data['materialid'])){
			 foreach($data['tender'] as $key => $materialid){
				 $materials ='';
				// $prc_purchase_order_items= array_column($materialid->prc_proposed_delivery_details,'mst_material_id');
			//print_r($prc_purchase_order_items);exit;
					// foreach($prc_purchase_order_items as $key1 => $items){
					//  $materials = $materials.','.implode(',',array_column($items,'mst_material_id'));
				 // }
					$materialsArr= array_column($materialid->prc_proposed_delivery_details,'mst_material_id');
				 //$materialsArr = explode(',',$materials);
				// array_shift($materialsArr);
				if(array_intersect($materialsArr,$data['materialid'])){
					array_push($data['mytenderproducts'],$data['tender'][$key]);
				}
				} 
		}

		$data['serviceid']=array_column($data['getsuppliertenderservices'],'serviceid');
		$data['mytenderservices'] = array();
		
	//echo"<pre>";print_r($data['serviceid']);exit;
		if(!empty($data['serviceid'])){
			 foreach($data['tender'] as $key => $serviceid){
				 $materials ='';
				 $prc_purchase_order_items= array_column($serviceid->prc_purchase_orders,'prc_purchase_order_item_dtl');
				 foreach($prc_purchase_order_items as $key1 => $items){
					 $materials = $materials.','.implode(',',array_column($items,'mst_material_id'));
				 }
				 $materialsArr = explode(',',$materials);
				 array_shift($materialsArr);
				if(array_intersect($materialsArr,$data['serviceid'])){
					array_push($data['mytenderservices'],$data['tender'][$key]);
				}
				} 
		}
		//$getfavtender=$this->procM->getfavtender();print_r($getfavtender);exit;
		$data['getfavtender']=$this->procM->getfavtender();//print_r($data['getfavtender']);exit;
		$data['favid']=array_column($data['getfavtender'],'tendername');
		if(!empty($data['favid'])){
			 foreach($data['tender'] as $key => $tender1){
				if(in_array($tender1->id,$data['favid'])){
					$data['tender'][$key]->sorting = 1;
				}else{
					$data['tender'][$key]->sorting  = 0;
				}
				} 
			$col = array_column( $data['tender'], "sorting" );
			array_multisort( $col, SORT_ASC, $data['tender'] );	
		}
        
		$supplierid=$this->session->userdata('uid');

		$data['gettenderdetails']=$this->Login->gettenderdetails('tenders_favourites',$supplierid);
		$this->template->make('supplier_tenders/home',$data,'supplier_portal');
	 //neethu
	   }
	    else
	    {
	    	$acl_error_message=acl_error_message('Tenders');
	        $this->session->set_flashdata('msg',$acl_error_message);
	    	redirect(base_url('supplier/dashboard'));
	    } //neethu end
		
	  }
	public function getProductTender()
	{
		$uid = $this->session->userdata('supplierid');
		$tender = json_decode($this->getTenderData());
		$data['tender'] = $tender->result_data->list; //echo"<pre>";print_r($data['tender']);exit;
		$data['getsuppliertender'] = $this->procM->getSupplierMaterials($uid); //print_r($data['getsuppliertender']);exit;
		$data['materialid'] = array_column($data['getsuppliertender'], 'materialId');
		$data['mytenderproducts'] = array();

		//echo"<pre>";print_r($data['materialid']);exit;
		// if (!empty($data['materialid'])) {
		// 	foreach ($data['tender'] as $key => $materialid) {
		// 		$materials = '';
		// 		$prc_purchase_order_items = array_column($materialid->prc_proposed_delivery_details, 'prc_proposed_delivery_details');//print_r($prc_purchase_order_items);exit;
		// 		foreach ($prc_purchase_order_items as $key1 => $items) {
		// 			$materials = $materials . ',' . implode(',', array_column($items, 'mst_material_id'));
		// 		}
		// 		$materialsArr = explode(',', $materials);
		// 		array_shift($materialsArr);
		// 		if (array_intersect($materialsArr, $data['materialid'])) {
		// 			array_push($data['mytenderproducts'], $data['tender'][$key]);
		// 		}
		// 	}
		// }
		if(!empty($data['materialid'])){
			foreach($data['tender'] as $key => $materialid){
				$materials ='';
			// $prc_purchase_order_items= array_column($materialid->prc_proposed_delivery_details,'mst_material_id');
		//print_r($prc_purchase_order_items);exit;
				// foreach($prc_purchase_order_items as $key1 => $items){
				//  $materials = $materials.','.implode(',',array_column($items,'mst_material_id'));
				// }
				$materialsArr= array_column($materialid->prc_proposed_delivery_details,'mst_material_id');
				//$materialsArr = explode(',',$materials);
			// array_shift($materialsArr);
			if(array_intersect($materialsArr,$data['materialid'])){
				array_push($data['mytenderproducts'],$data['tender'][$key]);
			}
			} 
	}
		// echo"<pre>";print_r($data['mytenderproducts']);exit;
		echo json_encode($data['mytenderproducts']);
	}

	public function getProductServices()
	{
		$uid = $this->session->userdata('supplierid');
		$tender = json_decode($this->getTenderData());
		$data['tender'] = $tender->result_data->list; //echo"<pre>";print_r($data['tender']);exit;
		$data['getsuppliertenderservices']=$this->procM->getSupplierServices($uid);
		$data['serviceid']=array_column($data['getsuppliertenderservices'],'serviceid');
		$data['mytenderservices'] = array();
		
	//echo"<pre>";print_r($data['serviceid']);exit;
		if(!empty($data['serviceid'])){
			 foreach($data['tender'] as $key => $serviceid){
				 $materials ='';
				 $prc_purchase_order_items= array_column($serviceid->prc_proposed_delivery_details,'prc_purchase_order_item_dtl');
				 foreach($prc_purchase_order_items as $key1 => $items){
					 $materials = $materials.','.implode(',',array_column($items,'mst_material_id'));
				 }
				 $materialsArr = explode(',',$materials);
				 array_shift($materialsArr);
				if(array_intersect($materialsArr,$data['serviceid'])){
					array_push($data['mytenderservices'],$data['tender'][$key]);
				}
				} 
		}
		// echo"<pre>";print_r($data['mytenderproducts']);exit;
		echo json_encode($data['mytenderservices']);
	}
	  
	  public function my(){
		$this->index(2);

	  }
	  
	  
	public function Login_POST(){
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
	public function getTenderData()
	{
				$logintoken=$this->Login_POST();
				$token1=json_decode($logintoken);
			
			  $apiurl     = 'http://hris.kseb.in/erpws/api/prc/getTenderData';
			  $curl       = curl_init();
			  curl_setopt( $curl, CURLOPT_URL, $apiurl );
			  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
  
			  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			   'Content-Type: application/json',
			   'Authorization: Bearer ' . $token1->result_data->token->access_token
			   ));
			   $result = curl_exec($curl);
			   return $result;
	}
	public function insert_favtenders(){

					$res='';
					//$data['id']=rand(10,100);
						$data['tendername']=$this->input->post('title');
						$data['tenderid']=$this->input->post('title');
						$data['tenderdate']=$this->input->post('tender_date');
						$data['tenderno']=$this->input->post('tender_num');
						$data['tenderauthority']=$this->input->post('tendering_authority');
						$data['supplierid'] =$this->session->userdata('uid');
						$data['favcreateddate']=date('Y-m-d H:i:s');
						$data['status']=1;
						$res=  $this->procM->insert('tenders_favourites',$data);
         
					 if($res>0)
						{
						   $this->session->set_flashdata('msg','Selected Tenders added to Favourites');
							
						}
						else
						{
							echo "Error while adding";
						}

	}

	 // kk updates

	public function apply($tenderId,$userid=''){
	  	//neethu
		 
		$this->load->model('Getmenus','GETM');
		$user_type=$this->session->userdata('user_type');
		$uid=$this->session->userdata('supplierid');
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission2($uid,$user_type);
		
       if($getcompanypermissiondetails->tenders=='1' and $this->session->userdata('active_status')=='1')
	     {
		 
		/* $this->load->model('Getmenus','GETM');
		$user_type=$this->session->userdata('user_type');
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission1($user_type);
		
       if($getcompanypermissiondetails->tenders=='1') */
	 
		  //neethu end
		$data['showdashbaord'] =true;
		$data['page'] = 'tenders';
		$data['title'] = 'Tenders';
		$data['indexurl'] = base_url()."supplier/dashboard";


		//	$tenderanswers=$this->Login->getTenderanswers($tenderId,$this->session->userdata('userid'));

		//	print_r($tenderanswers);
		//exit;
		// $data['form_types'] =$this->procM->getFormengine_Titles();
		$where =" WHERE tq.tender_id = $tenderId";

	
		$form_questions =$this->procM->getFormengine_questions($where,$userid);
		
		// print_r($form_questions);
		// exit;
		$data['getfavtender']=$this->procM->getfavtender();
		$data['tenderId']=$tenderId;
		$tender=json_decode($this->getTenderData());
		$data['tender']=$tender->result_data->list;
		
		$dataAppend='';
		if($form_questions){
			$i=1;
			foreach ($form_questions['question'] as $key => $value) {

				$questionId=$form_questions['questionid'][$key];
				$inputtype=$form_questions['type'][$key];

				$answerss=$form_questions['answers'][$key];

				$dataAppend.= "<div class='form-row'>
									<div class='form-group col-md-4'>
										<label for='feFirstName' class='labelfor'>".ucfirst($value)."</label>
									</div>";
				
				if($form_questions['option_list'][$key]){
					$Listoption=$form_questions['option_list'][$key];

					$dataAppend.="	<div class='form-group col-md-8'>
								$Listoption					 
								</div>
							</div>";
				}else{
					if($inputtype =='textarea'){
						$dataAppend.="<div class='form-group col-md-8'><textarea class='form-control inputtext' name='$questionId' id='$questionId'>$answerss</textarea></div>
						</div>";
					}else{
						$dataAppend.="	<div class='form-group col-md-8'>
									<input type='$inputtype' id='$questionId' class='form-control inputtext' required name='$questionId' value='$answerss'>
									</div>
							</div>";
					}
				}
				$dataAppend.="<div class='clearfix'></div>";
					
				
				
			


			$data['form_questions']=$dataAppend;
			}
		}

		$supplierid=$this->session->userdata('uid');
		$id=$this->uri->segment(4);
		$data['gettenderdetails']=$this->Login->gettenderdetails1('tenders_favourites',$supplierid,$id);

		$data['tender_id']=$tenderId;
		$data['user_id']=$this->session->userdata('userid');
		$this->template->make('supplier_tenders/apply_tender',$data,'supplier_portal');
		 //neethu
	   }
	    else
	    {
	    	echo " “Sorry, You Are Not Allowed to Access This Page” ";
	    } //neethu end
	}
	  
	public function applicationForm($tenderId){
	 		//neethu
		$this->load->model('Getmenus','GETM');
		$user_type=$this->session->userdata('user_type');
		$uid=$this->session->userdata('supplierid');
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission2($uid,$user_type);
		
       if($getcompanypermissiondetails->tenders=='1' and $this->session->userdata('active_status')=='1')
	   { //neethu end
		$data['showdashbaord'] =true;
		$data['page'] = 'tenders';
		$data['title'] = 'Tenders';
		$data['indexurl'] = base_url()."supplier/dashboard";
		// $data['form_types'] =$this->procM->getFormengine_Titles();
		$where =" WHERE tq.tender_id = $tenderId";
		$form_questions =$this->procM->getFormengine_questions($where);
		$data['tenderId']=$tenderId;
		$dataAppend='';
		if($form_questions){
			$i=1;
			foreach ($form_questions['question'] as $key => $value) {
				$questionId=$form_questions['questionid'][$key];
				$inputtype=$form_questions['type'][$key];

				$dataAppend.= "<div class='form-row'>
									<div class='form-group col-md-4'>
										<label for='feFirstName'>".ucfirst($value)."</label>
									</div>";
				
				if($form_questions['option_list'][$key]){
					$Listoption=$form_questions['option_list'][$key];

					$dataAppend.="	<div class='form-group col-md-8'>
								$Listoption					 
								</div>
							</div>";
				}else{
					if($inputtype =='textarea'){
						$dataAppend.="<div class='form-group col-md-8'><textarea class='form-control'></textarea></div>
						</div>";
					}else{
						$dataAppend.="	<div class='form-group col-md-8'>
									<input type='$inputtype' class='form-control' required>
									</div>
							</div>";
					}
				}
				$dataAppend.="<div class='clearfix'></div>";
					
				
				
			


			$data['form_questions']=$dataAppend;
			}
		}


		$this->template->make('supplier_tenders/application',$data,'supplier_portal');
		 //neethu
	   }
	    else
	    {
	    	echo " “Sorry, You Are Not Allowed to Access This Page” ";
	    } //neethu end
	 }
	  
	  
	
	public function insert_appliedtenders(){

        $res='';
		
			$data['tender_fav_name']=$this->input->post('title');
			$data['tender_fav_date']=$this->input->post('tenderdate');
			$data['tender_fav_no']=$this->input->post('tenderno');
			$data['tender_fav_authority']=$this->input->post('tenderauthority');
			$data['supplierid'] =$this->session->userdata('uid');
			
            $res=  $this->procM->insert('appliedtenders',$data);
         
		 if($res>0)
            {
                echo "Applied Tenders Added Successfully";
            }
            else
            {
                echo "Error while adding";
            }

    }


	public function saveApplication(){
	
		$res=0;
		$post=$_POST;
		$tenderid = $this->input->post('tender_id');
		$userid = $this->input->post('user_id');
		$is_completed = $this->input->post('is_completed');
	

		// before inserting answers first delete all data of this tender by this user 
		// we first delete all data except input files
		// this input files will be deleted if any files are overwritten on update


		$deletewhere= " tender_id=$tenderid AND user_id = $userid and is_file !=1 ";
		simpleDelete('formengine_registration',$deletewhere);


		$deleteApplication= " tender_id=$tenderid AND user_id = $userid ";
		simpleDelete('formengine_application_status',$deleteApplication);


		if (!file_exists('./uploads/tender_applications')) {
			mkdir('./uploads/tender_applications', 0777, true);
		}


		if(!empty($_FILES)){
			foreach ($_FILES as $key => $files) {
				$question_id=$key;
				$filename=$key['name'];

				if(!empty($_FILES[$key]['name']))
				{

					// delete the file with same question id
					$deletewhere= " tender_id=$tenderid AND user_id = $userid and is_file =1 and question_id=$question_id ";
					simpleDelete('formengine_registration',$deletewhere);


					$config['upload_path']          = './uploads/tender_applications';
					$config['allowed_types'] = '*';
					$name=rand(10000,1000000);
					$config['file_name'] =$name;

					$this->load->library('upload',$config);
					$arr = array('msg' => 'something went wrong', 'success' => false);

					if($this->upload->do_upload($key))
					{
							
							$upload_data = $this->upload->data();
							$file_name = $upload_data['file_name'];
							$image_path="uploads/tender_applications/".$file_name;

						$newarray=array('question_id'=>$question_id,
							'is_attribute'=>0,
							'is_file'=>1,
							'answer'=>$image_path,
							'created_date'=>date('Y-m-d'),
							'tender_id'=>$tenderid,
							'user_id'=>$userid

						);
						$res=  $this->procM->insert('formengine_registration',$newarray);
						

					}else{
						$result = array('status'=>100,'msg' => $this->upload->display_errors());
							echo json_encode($result);
							exit;
					}
				}
			
			}
		}

		foreach ($post as $key => $value) {

			if(!$value){
				continue;
			}

			if($key == 'tender_id' || $key=='user_id' || $key =='is_completed'){
				continue;
			}

			// for checkbox , select,radio etc we need to save attribute id also along with user input value; so for identifying whether tha value is user input or value from checkbox,radio or select we pass '_1'   along with name attribute
			$isattribute= 0;
		 	$name= $key;
			$name_full=array();


			
			$name_full= array_pad(explode('_',$name),2,null);
		
			if($name_full && $name_full[1]){
				$isattribute = 1;
				$questionId=$name_full[0];
			}else{
				$questionId=$name;
			}
			

			

			
			
			$newarray=array('question_id'=>$questionId,
							'is_attribute'=>$isattribute,
							'answer'=>$value,
							'created_date'=>date('Y-m-d'),
							'tender_id'=>$tenderid,
							'user_id'=>$userid

					);

					
			$res=  $this->procM->insert('formengine_registration',$newarray);
		
			
		}


		$statusUpdate=array(
							'is_completed'=>$is_completed,
							'created_date'=>date('Y-m-d'),
							'tender_id'=>$tenderid,
							'user_id'=>$userid

						);

		$res=  $this->procM->insert('formengine_application_status',$statusUpdate);


		if($res){
			$result = array('status'=>101,'msg' => "Success");
			echo json_encode($result);
		}else{
			$result = array('status'=>100,'msg' => "Something Went Wrong");
			echo json_encode($result);
		}
	

	}


	public function getSavedAnswers(){
		$names = $_POST;
		$tenderId = $this->input->post('tender_id');
		$userId = $this->input->post('user_id');
		$data= array();

		// print_r($names);
		// exit;

		foreach ($names as $key => $value) {

			if($key == 'tender_id' || $key=='user_id'){
				continue;
			}


			$name= $key;

			$name_full= array_pad(explode('_',$name),2,null);
		
			if($name_full && $name_full[1]){
			
				$questionId=$name_full[0];
			}else{
				$questionId=$name;
			}

			$result=$this->Login->getTenderanswers($tenderId,$userId,$questionId);
		//	echo $this->db->last_query();
			$answer= "";
			if($result){
				$answer= $result->answer;
			}

			//$array_result= array("$questionId" => $result->answer);
			$data['questionId'][]=$questionId;
			$data['answer'][]=  $answer;

			
			

		}

		echo json_encode($data);
	}


	public function getApplicationForm(){
		$tenderid = $this->input->post('tenderid');
		$userid   = $this->session->userdata('userid');

		$result= $this->Login->getTenderApplicationForm($tenderid,$userid);
		$dataAppend="";
		foreach ($result as $key => $value) {
			$answer= $value->answer;
			$question = $value->question;
			$type=$value->type_id;
			$isAttr=$value->is_attribute;

			if($isAttr==1){
				if($type==3){
					// checkbox
					$values_checkbox= explode('|',$answer);
					$attributeArray=array();
					foreach ($values_checkbox as $key => $value_c) {
						$attributeArray[]=$this->Login->getAttributeValue($value_c);
						
					}

					$answer =  implode(',',$attributeArray);
				}else{
					$answer =$this->Login->getAttributeValue($answer);
				}
	
			}


			$dataAppend.= "<div class='form-row'>
								<div class='form-group col-md-7'>
									<label for='feFirstName' class='labelfor'>".ucfirst($question)."</label>
								</div>
								<div class='form-group col-md-5'>
									<label>$answer</label>
								</div>
							</div>
							";
				
				
		}

		echo json_encode($dataAppend);

		
	

	}


	// km updates

	public function getAAlltendersApi(){
		$tender=json_decode($this->getTenderData());
		$data['tender'] =$tender->result_data->list;
		$data['getfavtender']=$this->procM->getfavtender();//print_r($data['getfavtender']);exit;
		$data['favid']=array_column($data['getfavtender'],'tendername');
		if(!empty($data['favid'])){
			 foreach($data['tender'] as $key => $tender1){
				if(in_array($tender1->id,$data['favid'])){
					$data['tender'][$key]->sorting = 1;
				}else{
					$data['tender'][$key]->sorting  = 0;
				}
				} 
			$col = array_column( $data['tender'], "sorting" );
			array_multisort( $col, SORT_ASC, $data['tender'] );	
		}
        


		echo json_encode($data['tender']);
		
	}
	  
}
