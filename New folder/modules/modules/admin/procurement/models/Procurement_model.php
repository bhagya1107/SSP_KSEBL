<?php
class Procurement_model extends CI_Model
{

  public function getFormengine_Titles()
  {
    $qry="SELECT * FROM formengine_types ";
    $qrry=$this->db->query($qry);
    return $qrry->result();
  }

    function getFormengine_questions($where=""){
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
        $data=array();
		$i=1;
        foreach ($resArray as $key => $value) {
            $data['question'][]=$value->question;//print_r($data['question']);exit;
            $data['tenderid'][]=$value->tender_id;
            $data['questionid'][]=$value->id;
            $data['type'][]=$value->type;
            $data['tenderqsid'][]=$value->tenderqsid;
            $checkOptionsExists=$this->get_OptionsByTYpeId($value->type_id,$value->id);  // typeId & QuestionId

            $data_list='';

            if($value->type_id == '7'){  // boolean
                $data_list="<input type='radio' name='questionid' >&nbsp; Yes &nbsp;<input type='radio' name='questionid' >&nbsp; No   ";
               
                $data['option_list'][] = $data_list;

                continue;
            }
			$i++;
            
            if($checkOptionsExists){

               
                if($value->type_id == '5'){
                    $data_list="<select class='form-control' name='questionid'>";
                }
 
                foreach ($checkOptionsExists as $key => $value1) {
                    $typeName=$value1->type;
                   
                    if($value->type_id == '5'){
                        $data_list.="<option>$value1->attr_value</option>";
                    }else{
                        $data_list.= "<input type='$value1->type' name='questionid'>&nbsp;$value1->attr_value<br>";
                        // $data_list.= "&nbsp; ";
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
	
	 public function getfavtender() {
        $this->db->select('*');
		$this->db->order_by('tenders_favourites.id','desc');
        $result=$this->db->get('tenders_favourites');
		
		return $result->result();
    }
 
}
