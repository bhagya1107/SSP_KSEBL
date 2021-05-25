<?php
class Procurement_model extends CI_Model
{

  public function getFormengine_Titles()
  {
    $qry="SELECT * FROM formengine_types ";
    $qrry=$this->db->query($qry);
    return $qrry->result();
  }


  function getFormengine_tenderqs($tid){

    $qry="SELECT question_id from tender_questions where tender_id=$tid";
    $qrry=$this->db->query($qry);
    $resArray = $qrry->result();
    $data_new=array();
    $data['tender_qsid'] =array();
    foreach ($resArray as $key => $value) {
        //$value->question_id;
        $data_new[]=$value->question_id;
    }

    return $data['tender_qsid'] =$data_new;

  }

    function getFormengine_questions($where="",$userid=''){
        //  formengine_questions : master questions
        //  tender_questions // connecting tender & question
        // formengine_types // different option category of formengine_questions
        $qry= "Select fp.*,ft.type,tq.tender_id,tq.id as tenderqsid from formengine_questions fp INNER JOIN formengine_types ft on ft.id=fp.type_id LEFT JOIN tender_questions tq on fp.id=tq.question_id ";
       
		if($where){
            $qry.=" $where";
        }

        $qry.=" order by tq.orderid ASC";
       
        $qrry=$this->db->query($qry);
        $resArray = $qrry->result();
        $data_list='';
        $data['option_list'] ='';
        $data['answers'] ='';
        $data=array();
		$i=1; 
        foreach ($resArray as $key => $value) {
            $answer= '';
            $data['question'][]=$value->question;//print_r($data['question']);exit;
            $data['tenderid'][]=$value->tender_id;
            $data['questionid'][]=$value->id;
            $data['type'][]=$value->type;
            $data['tenderqsid'][]=$value->tenderqsid;
            $checkOptionsExists=$this->get_OptionsByTYpeId($value->type_id,$value->id);  // typeId & QuestionId

            $questionid=$value->id;
            $tenderId=$value->tender_id;
            $data_list='';



            // check if ans exists for this question

            if($userid){
                $query = $this->db->query("SELECT * FROM formengine_registration tq  $where and question_id='$questionid'");

                $rows=$query->num_rows();
                if($rows>0)
                {
                    $row = $query->row();

                    $answer=$row->answer;
                   
                }
            
            }

            $data['answers'][]=$answer;

            if($value->type_id == '7'){  // boolean
                $checked= "";
                $checked2= "";
                if($answer == 'Yes' ){
                    $checked= "checked";
                }else if($answer == 'No'){
                    $checked2= "checked";
                }
                $data_list="<input type='radio' name='$questionid' class='$questionid inputtext'   value='Yes' $checked data-names='Yes'> Yes <input type='radio' class='$questionid inputtext' name='$questionid' value='No' $checked2 data-names='No'> No   ";
               
                $data['option_list'][] = $data_list;

                continue;
            }
			$i++;
            
            if($checkOptionsExists){

               
                if($value->type_id == '5'){
                    $data_list="<select class='form-control inputtext' id='$questionid' name='".$questionid."_1'>";
                }
 
                foreach ($checkOptionsExists as $key => $value1) {
                   
                    $typeName=$value1->type;
                    $attrid=$value1->id;
                   
                    if($value->type_id == '5'){
                        $selected ="";
                        if($attrid == $answer){
                            $selected ="selected";
                        }
                        $data_list.="<option value='$attrid' $selected>$value1->attr_value</option>";
                    }else if($value->type_id == '4' || $value->type_id == '3'){

                        // for checkbox or radio we need to set value attr as formengine_attribute id

                        if($value->type_id == '3') // checkbox
                        {
                            $values_checkbox= explode('|',$answer);
                           
                            $checked_checkbox ="";
                          

                            if(in_array($attrid,$values_checkbox)){
                                $checked_checkbox ="checked";
                            }
                            $data_list.= "<input type='$value1->type' name='".$questionid."_1' value='$attrid' id='$questionid' $checked_checkbox  class='inputtext' data-names='$value1->attr_value'>&nbsp;$value1->attr_value<br>";
		
                            
                        }else{
                            // radio
                            $checked_radio ="";
                            if($attrid == $answer){
                                $checked_radio ="checked";
                            }

                            $data_list.= "<input type='$value1->type' name='".$questionid."_1' value='$attrid' data-names='$value1->attr_value' id='$questionid' $checked_radio class='inputtext' >&nbsp;$value1->attr_value<br>";
                       
                        }



                     // $data_list.= "&nbsp; ";
                    }else{
                        // not necessay
                        $data_list.= "<input type='$value1->type' name='$questionid'  id='$questionid' class='inputtext'>&nbsp;$value1->attr_value<br>";
                    }
                  
                }

                if($value->type_id == '5'){
                    $data_list.="</select>";
                }

               // echo $data_list;

                $data['option_list'][] = $data_list;
            }else{
                $data['option_list'][] ='';
            }
         
         
        }

       
        return $data;
    }
    function get_OptionsByTYpeId($typeid,$questionid){
        $qry="SELECT fa.*,ft.type FROM formengine_attributes fa INNER JOIN  formengine_types ft on ft.id=fa.type_id where fa.type_id='$typeid' AND question_id='$questionid' AND attr_name='option'";
        $qrry=$this->db->query($qry);
        return $qrry->result();
    }
	
	 public function insert($table,$data)
    { 
        $this->db->insert($table,$data);
        return $this->db->insert_id();

    }
	
	 public function getfavtender($supplierid) {
        $this->db->select('*');
        $this->db->where('supplierid',$supplierid);
		$this->db->order_by('tenders_favourites.id','desc');
        $result=$this->db->get('tenders_favourites');
		
		return $result->result();
    }


    public function getAllTemplates(){
        $this->db->select('*');
		// $this->db->order_by('tenders_favourites.id','desc');
        $result=$this->db->get('formengine_templates');
		
		return $result->result();

    }


    public function getnewQuestions($templateid){
        $this->db->select('*');
        $this->db->where('template_id',$templateid);
        $result=$this->db->get('formengine_template_questions');
		
		return $result->result();
    }
	
	public function getSupplierMaterials($supplierid)
    {
        
     $this->db->select('*');
	 $this->db->where('supplierId',$supplierid);
     $this->db->where('isdeleted',false);
        return $this->db->get("suppliermaterials")->result();
        
    }

    public function getSupplierServices($supplierid)
    {
        //echo"$supplierid";exit;
     $this->db->select('*');
	 $this->db->where('supplierid',$supplierid);
     $this->db->where('isdeleted',false);
        return $this->db->get("services")->result();
        
    }
   

    public function getappliedtender($supplierid) {
      $this->db->select('array_agg(id) as idorder,tender_id');
        
        $this->db->where('user_id',$supplierid);
       // $this->db->where('tender_id',8);
		//$this->db->order_by('formengine_registration.id','desc');
        $this->db->group_by('tender_id');
        $this->db->order_by('idorder','desc');
        $result=$this->db->get('formengine_registration');
		 //echo $this->db->last_query();exit;
		return $result->result();
    }

    public function getListOfPreDispatch($supplierid)
    {
        
     $this->db->select('*');
	 $this->db->where('supplierid',$supplierid);
  
        return $this->db->get("pdi_predispatch")->result();
        
    }

    public function getListOfAdminTenders()
    {
        
     $this->db->select('tender_id');
	 
        return $this->db->get("tender_questions")->result();
        
    }
 
}
