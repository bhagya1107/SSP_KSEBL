<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Procurement extends AD_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Procurement_model','procM');

  }
  public function tenders()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'Tender';
    $this->template->make('procurement/tenders',$data);
  }
  public function applied_suppliers()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'Applied suppliers';
    $this->template->make('procurement/applied_suppliers',$data);
  }
  public function tender_application()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'Applied suppliers';
    $this->template->make('procurement/tender_application',$data);
  }
  public function request_clarification(){
    $data['page'] = 'Teders';
    $data['title'] = 'Request Clarification';
    $this->template->make('procurement/request_clarification',$data);
  }
  public function pq_list()
  {
    $data['page'] = 'Teders';
    $data['title'] = 'PQ List';
    $this->template->make('procurement/pq_list',$data);
  }

  public function form_engine($tid){
    $data['page'] = 'Teders';
    $data['title'] = 'Form Engine';
    $data['form_types'] =$this->procM->getFormengine_Titles();
    $data['form_questions'] =$this->procM->getFormengine_questions();
    $data['tenderId']=$tid;
    // print_r($data['form_questions']);
    // exit;
    $this->template->make('procurement/form_engine',$data);

  }

  public function generateformfields(){
      $inputtype=$this->input->post('inputtype');
      $inputclass=$this->input->post('inputclass');

      $Field="";

        switch ($inputtype) {
          case 'checkbox':
          case 'radio':
          case 'select':
           
            // <input type='$inputtype' name=''  >&nbsp;
            $Field= "<input type='text' name='attributes[]' placeholder='Option 1' class='no-border form-control' id='1'>
            <a><input type='text' name='attributes[]' placeholder='Add Option' id='2' class='no-border form-control' onclick=addOptions(this,'$inputtype');></a>";
    
          break;
         
          case 'textarea':
            $Field= "<textarea  class='$inputclass' name='' ></textarea> ";
            break;
   
  
          default:
         
            $Field= "<input type='$inputtype'  class='$inputclass' name=''  >";
            break;
        }
  
     
    
      
      echo $Field;

  }

  public function saveform_engine(){
    $question=$this->input->post('question');
    $inputtext=$this->input->post('type_id');
    $tenderId=$this->input->post('tenderId');
    $inputarray=explode("!",$inputtext);
    $type_id =$inputarray[1];
    $attributes =$this->input->post('attributes[]');

    $QuestionArray=array('question' =>$question,
                         'type_id'   => $type_id,
                        
                  );
    $ins=insertInDb("formengine_questions",$QuestionArray);  // question_id for other tables
    if($ins){
      if($attributes){
        foreach ($attributes as  $value) {
            
          if($value){
            $InsertArray=array('type_id' =>$type_id,
                                'attr_name' =>'option',
                                'attr_value' =>$value,
                                'question_id'=>$ins,
                              );
  
            $ins2=insertInDb("formengine_attributes",$InsertArray);
          }
        }
      }


      // adding qs saving for this template also  if it is from procurement only
      if($tenderId){

        $checkexists=getAfield("tender_id","tender_questions","where question_id=$ins and tender_id =$tenderId ",$as="");
        if(!$checkexists){
          $insertArray= array('tender_id'=>$tenderId,
                                  'question_id'=>$ins
                                );

          $ins2=insertInDb("tender_questions",$insertArray);
        }
      }


    }

    if($tenderId){
      redirect(admin_url("procurement/form_engine/$tenderId"));
    }else{
      redirect(admin_url("settings/query_rep"));
    }
    
     //echo $ins;
    // return;

  }

  public function gettenderbased_qs(){

      $TenderId=$this->input->post('TenderId');
      $where= " where fp.tender_id='$TenderId'";
      $data= $this->procM->getFormengine_questions($where);
      print_r($data);


  }

  public function update_displayorder(){
    
    $newOrder = $this->input->post('ID');
    $counter = 1;
    foreach ($newOrder as $recordIDValue) {

      $data=array('orderid'=>$counter);
      $where=array('id'=>$recordIDValue);
      $ins=simpleUpdate('tender_questions',$data,$where,'');
    

      $counter++;
    }

    if($ins){
      print "Saved Successfully";
    }
    

  }

  public function tender_operations(){
     $questionIds = $this->input->post('questionIds');
     $tenderId = $this->input->post('tenderId');
     $process = $this->input->post('process');
      if($process =="add"){
          $checkexists=getAfield("tender_id","tender_questions","where question_id=$questionIds and tender_id =$tenderId",$as="");
          if(!$checkexists){
              $insertArray= array('tender_id'=>$tenderId,
                                'question_id'=>$questionIds
                              );

              $ins=insertInDb("tender_questions",$insertArray);
              if($ins){
                echo "Successfully Added";
              }else{
                echo "Something went wrong";
              }
          }else{
            echo "Already Exists";
          }
      }else if($process =="remove"){
        $where= " tender_id=$tenderId AND question_id = $questionIds ";
        simpleDelete("tender_questions",$where);
        echo "Successfully Deleted";
      }

  }

  public function response_consolidate(){

    $data['page'] = 'Teders';
    $data['title'] = 'Applied suppliers';
    $this->template->make('procurement/response_consolidate',$data);

  }

}
