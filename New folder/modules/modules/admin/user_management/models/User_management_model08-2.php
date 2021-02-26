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
function insert($data)
{
  $this->db->insert_batch('suppliers', $data);
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

}
