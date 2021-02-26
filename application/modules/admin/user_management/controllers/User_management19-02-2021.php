<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class User_management extends AD_Controller { 
  public function __construct()
  {
  	parent::__construct();
    $this->load->model('User_management_model','userM');
    // $this->load->library('excel');

  }
  public function suppliers()
  {
    $data['page'] = 'Supplier';
    $data['title'] = 'Supplier';
    $data['getuserdetails']=$this->userM->getUserProfile();
    $this->template->make('user_management/supplier',$data); 
  }
  public function supervisors()
  {
    $data['page'] = 'supervisors';
    $data['title'] = 'Supplier';
    $this->template->make('user_management/supervisors',$data);

  }
  public function supplier_profile()
  {
    $data['page'] = 'Supplier';
    $data['title'] = 'Supplier Profile';
    $id=$this->uri->segment(4);
    $data['supplierinfo']=$this->userM->supplierinfo('suppliermaterials',$id);
    $data['getbankdetails']=$this->userM->bank_details('bank_details',$id);
    $data['getcompanydetails']=$this->userM->company_profile($id);
    $data['getuserdetails']=$this->userM->supplier_profile($id);
    $data['getstaffdetails']=$this->userM->getstaffdetails($id);
    $this->template->make('user_management/supplier_profile',$data);
  }
  public function activate_account()
  {
    $id=$this->uri->segment(4);
    $this->userM->activate_account('suppliers',$id);
    $this->session->set_flashdata('msg','Approved successfully');
    redirect(base_url('webuser/user_management/suppliers'));
  }
  public function getdetails()
  {
    $statusType=$this->input->post("status_type");
    $userType=$this->input->post("user_type");
    $details=$this->userM->ajaxselect($statusType,$userType);
    echo json_encode($details);   
  }
  public function exl_insert()
  {
    $config['upload_path'] = './uploads/suppliers_list';
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
      $exl=$data['file_name'];

    }

  }


  public function import() 
  {
    $this->load->library('excel');
    $status='error';
   // $msg='Some user already exist for ';
$data=[];
$isError=false;
    if(isset($_FILES["file"]["name"]))
    {
      $path = $_FILES["file"]["tmp_name"];
      $object = PHPExcel_IOFactory::load($path);
      foreach($object->getWorksheetIterator() as $worksheet)
      {
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();
        for($row=2; $row<=$highestRow; $row++)
        {
          $erp_supplier_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
          $pannumber =(string) $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          //$getpannum='';
          $getpannum=$this->userM->getpan($pannumber);
          $uTypeTemp=(string) $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $user_type=$uTypeTemp=="2,3"||$uTypeTemp =="3,2"?1:$uTypeTemp;
          $active_status=0;
          $isdeleted=0;
          $created_user=1;
          $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
          $password = array(); 
          $alpha_length = strlen($alphabet) - 1; 
          for ($i = 0; $i < 8; $i++) 
          {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
          }
          $pass=implode($password); 
          date_default_timezone_set("Asia/Kolkata");
          $date=date('Y-m-d H:i:s');
          
          
        
         if($getpannum) 
           { $msg=1;
            $ms=" ";
            $m=" Users already exist";
            $isError=true;
            if($row>2){
               $msg= $msg+1;
            }
            $msg= $msg.$ms.$m; 
           }else{
          $data[] = array(
            'name'        =>  $name,
            'username'     =>  $pannumber,
            'password'      => $pass,
            'active_status' => $active_status,
            'created_date'  =>$date,
            'user_type'   => $user_type,
            'isdeleted'   => $isdeleted,
            'created_user' =>$created_user,
            'pannumber'    =>  $pannumber,
            'erp_supplier_id'     =>  $erp_supplier_id
          );
        }
        }

      }
      if($data){
        $msg=$isError?"Some data inserted sucessfully but ".$msg:"Data inserted sucessfully";
        $status='sucess';
      $this->userM->insert($data);
        }
      echo json_encode(['status'=>$status,'msg'=>$msg]);
    } 
  }
  function random_password() 
  {

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = array(); 
    $alpha_length = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) 
    {
      $n = rand(0, $alpha_length);
      $password[] = $alphabet[$n];
    }

    $pass=implode($password); 
    echo $pass; 

  }
    public function update_supplierprofile(){
      

         $res='';
        $suppplierid=$this->input->post('suppplierid');
        // echo $suppplierid; exit;
           $data['name']=$this->input->post('name');
           $data['primary_contact_name']=$this->input->post('primary_contact_name');
           $data['created_date']=$this->input->post('created_date');
           $data['username']=$this->input->post('username');
           $data['password']=$this->input->post('password');
           $data['mobile']=$this->input->post('mobile');
           $data['email']=$this->input->post('email');
      
            if($suppplierid){

                $where=array('uid'=>$suppplierid);
                $res =$this->userM->update('suppliers',$data, $where);
                
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
    public function update_staffdetails()
    {
        $res='';
        $suppplierid=$this->input->post('suppplierid');
        $id=$this->input->post('id');
        $data['name']=$this->input->post('staffname');
        // echo $suppplierid; echo $id; echo $data;  exit;
         
            $data['mobilenum']=$this->input->post('mobile');
            $data['email']=$this->input->post('email');
      
             if($suppplierid){

             
                $res =$this->userM->update_staffdetails($data,$id);
                
             }
      
       if($res>=0)
        {
            
            echo "Updated Successfully";
        }
        else
        {
            echo "Error while Updating";
        }  
    }
     public function delete_staffdetails() {
      
        $id=$this->input->post('id');
        // echo $id; exit;
        $where = array('id'=>$id);
        $data=array('isdeleted'=>true);
        $result =$this->userM->update('employees',$data, $where);
      
        if($result>0)
        {
            
            echo "Deleted successfully";
        }
        else
        {
            echo "Error while deleting";
        }  
    }
   


}
