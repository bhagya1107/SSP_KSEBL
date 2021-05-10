<?php
class Dashboard_model extends CI_Model 
{

  public function getStationLocations()
  {
    $qry="SELECT latitude,longitude FROM station_master WHERE latitude>0 AND is_deleted=0";
    $qrry=$this->db->query($qry);
    return $qrry->result();
  }
  public function getUser_details($uid)
  {
    $qry="SELECT * FROM web_users where uid=$uid";
    $qrry=$this->db->query($qry);
    return $qrry->row();
   }
   public function stationlist()
   {
     $qry="SELECT * FROM station_master WHERE latitude>0 AND is_deleted=0 AND location_verified=1 AND is_deleted=0 AND display_status=1";
     $qrry=$this->db->query($qry);
     return $qrry->result();
   }
  public function total_suppliers()
 {
   $this->db->select('*');
   $this->db->where('active_status', 1);
   return $this->db->get('suppliers')->num_rows();
 }
 public function Pending_approvals()
 {
   $this->db->select('*');
   $this->db->where('active_status', 0);
   return $this->db->get('suppliers')->num_rows();
 }
 public function contractors_registered()
 {
   $this->db->select('*');
   $this->db->where('user_type', '2');
   return $this->db->get('suppliers')->num_rows();
 }
 public function suppliers_registered()
 {
   $this->db->select('*');
   $this->db->where('user_type', '3');
   return $this->db->get('suppliers')->num_rows();
 }
 public function total_tenders()
 {
   $this->db->select('*');
   return $this->db->get('formengine_application_status')->num_rows();
 }
 public function completed_tenders()
 {
   $this->db->select('*');
   $this->db->where('is_completed', 1);
   return $this->db->get('formengine_application_status')->num_rows();
 }
}
