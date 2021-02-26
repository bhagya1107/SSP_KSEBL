<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Supplier_tenders extends SP_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('procurement/Procurement_model','procM');


}
	public function index($tab=1)
	{
		$data['showdashbaord'] =true;
		$data['page'] = 'tenders';
		$data['title'] = 'Tenders';
		$data['indexurl'] = base_url()."supplier/dashboard";
		$data['tab']=$tab;
		$this->template->make('supplier_tenders/home',$data,'supplier_portal');
	  }
	  public function my(){
		$this->index(2);

	  }

	  public function apply($tenderId){
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


		$this->template->make('supplier_tenders/apply_tender',$data,'supplier_portal');
	  }
}
