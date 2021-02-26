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
		$data['tender']=$tender->result_data->list;
		//$getfavtender=$this->procM->getfavtender();print_r($getfavtender);exit;
		$data['getfavtender']=$this->procM->getfavtender();
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
	        $this->session->set_flashdata('msg','You are not allowed to access Tenders ');
	    	redirect(base_url('supplier/dashboard'));
	    } //neethu end
		
	  } 
	  
	  public function my(){
		$this->index(2);

	  }

	  public function apply($tenderId){
	  	//neethu
		$this->load->model('Getmenus','GETM');
		$user_type=$this->session->userdata('user_type');
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission1($user_type);
		
       if($getcompanypermissiondetails->tenders=='1')
	   { //neethu end
		$data['showdashbaord'] =true;
		$data['page'] = 'tenders';
		$data['title'] = 'Tenders';
		$data['indexurl'] = base_url()."supplier/dashboard";
		// $data['form_types'] =$this->procM->getFormengine_Titles();
		$where =" WHERE tq.tender_id = $tenderId";
		$form_questions =$this->procM->getFormengine_questions($where);
		
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

		$supplierid=$this->session->userdata('uid');
		$id=$this->uri->segment(4);
		$data['gettenderdetails']=$this->Login->gettenderdetails1('tenders_favourites',$supplierid,$id);

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
		$getcompanypermissiondetails=$this->GETM->getCompanyPermission1($user_type);
		
       if($getcompanypermissiondetails->tenders=='0')
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
				
				public function insert_favtenders(){//echo"fff";exit;

        $res='';
		//$data['id']=rand(10,100);
			$data['tendername']=$this->input->post('title');
			$data['tenderdate']=$this->input->post('tender_date');
			$data['tenderno']=$this->input->post('tender_num');
			$data['tenderauthority']=$this->input->post('tendering_authority');
			$data['supplierid'] =$this->session->userdata('uid');
            $res=  $this->procM->insert('tenders_favourites',$data);//print_r($res);exit;
         
		 if($res>0)
            {
                echo "Favourite Tenders Added Successfully";
            }
            else
            {
                echo "Error while adding";
            }

    }
	
	public function insert_appliedtenders(){//echo"fff";exit;

        $res='';
		//$data['id']=rand(10,100);
			$data['tender_fav_name']=$this->input->post('title');
			$data['tender_fav_date']=$this->input->post('tenderdate');
			$data['tender_fav_no']=$this->input->post('tenderno');
			$data['tender_fav_authority']=$this->input->post('tenderauthority');
			$data['supplierid'] =$this->session->userdata('uid');
            $res=  $this->procM->insert('appliedtenders',$data);//print_r($res);exit;
         
		 if($res>0)
            {
                echo "Applied Tenders Added Successfully";
            }
            else
            {
                echo "Error while adding";
            }

    }
	  
}
