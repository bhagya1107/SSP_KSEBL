<?php
class User_management_model extends CI_Model
{ 

  public function getUserProfile() 
  {
   $this->db->select('*');
   $this->db->where('active_status',0);
   $this->db->order_by('uid','DESC');
   return $this->db->get("suppliers")->result();
 }
 public function activate_account($table,$id)
 {
   $this->db->where('uid',$id); 
   $this->db->set('active_status',1);
   $this->db->update('suppliers');
 }
 public function ajaxselect($statusType,$userType)
 {

   $this->db->select('*');
   $this->db->where('active_status',$statusType);
   if($userType){
    $this->db->where('user_type',$userType);
  }
  $this->db->order_by('uid','DESC');
  return $this->db->get("suppliers")->result(); 
}
// function insert($data)
// {
//   $this->db->insert_batch('suppliers', $data);
// }
 public function insert($table,$data)
    { 
        $this->db->insert($table,$data);
        return $this->db->insert_id();

    }
function getpan($pannumber) {
  $this->db->select('*');
  $this->db->where('pannumber',$pannumber);
  return $this->db->get('suppliers')->row();
}
 public function supplier_profile($id) 
  {
   $this->db->select('*');
   $this->db->where('uid',$id);
   return $this->db->get("suppliers")->row();
 }
  public function company_profile($id) 
  {
   $this->db->select('*');
   $this->db->where('supplierid',$id);
   return $this->db->get("companyprofile")->row();
 }
  public function update($table,$data, $where)
    { 
        $query=$this->db->update($table,$data,$where);
        return $query;
    }
  public function getstaffdetails($id) 
  {
   $this->db->select('*');
   $this->db->where('supplierid',$id);
   $this->db->where('isdeleted',false);
   // $this->db->where('islocked','');
   return $this->db->get("employees")->result();
 }
 
 public function update_staffdetails($data,$id)
 {
   // $this->db->where('supplierid',$supplierid); 
   $this->db->where('id',$id); 
   $this->db->update('employees',$data);
   
 }
  public function bank_details($table,$id) 
  {
   $this->db->select('*');
   $this->db->where('supplierid',$id);
   return $this->db->get($table)->result();
 }
  public function supplierinfo($table,$id) 
  {
   $this->db->select('*');
   $this->db->where('supplierId',$id);
   return $this->db->get($table)->result();
 }
 

}
