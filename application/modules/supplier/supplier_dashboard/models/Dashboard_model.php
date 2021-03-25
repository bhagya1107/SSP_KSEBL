<?php
class Dashboard_model extends CI_Model
{

  public function getStationLocations()
  {
    $qry = "SELECT latitude,longitude FROM station_master WHERE latitude>0 AND is_deleted=0";
    $qrry = $this->db->query($qry);
    return $qrry->result();
  }
  public function getUser_details($uid)
  {
    $qry = "SELECT * FROM web_users where uid=$uid";
    $qrry = $this->db->query($qry);
    return $qrry->row();
  }
  public function stationlist()
  {
    $qry = "SELECT * FROM station_master WHERE latitude>0 AND is_deleted=0 AND location_verified=1 AND is_deleted=0 AND display_status=1";
    $qrry = $this->db->query($qry);
    return $qrry->result();
  }

  public function update($table, $data, $where)
  {
    $query = $this->db->update($table, $data, $where);
    return $query;
  }

  public function insert($table, $data)
  {
    $this->db->insert($table, $data);
    return $this->db->insert_id();
  }

  public function getcategroy()
  {
    $this->db->select('*');
    return $this->db->get('category')->row();
  }


  public function getSupplierMaterials($supplierid)
  {
    //echo"$supplierid";exit;
    $this->db->select('*');
    $this->db->where('supplierId', $supplierid);
    $this->db->where('isdeleted', false);
    return $this->db->get("suppliermaterials")->result();
  }

  public function getCompanyProfile($uid)
  {
    $this->db->select('*');
    $this->db->where('supplierid', $uid);
    return $this->db->get('companyprofile')->row();
  }

  public function getemployeesusertype()
  {
    $this->db->select('*');
    return $this->db->get('Employees_usertypes')->row();
  }

  public function getEmployees1($uid)
  {
    $this->db->select('*');
    $this->db->where('isdeleted', false);
    $this->db->where('supplierid', $uid);
    return $this->db->get('employees')->result();
  }

  public function getEmployees()
  {
    $this->db->select('*');
    $this->db->where('isdeleted', false);
    return $this->db->get('employees')->result();
  }
  //neethu
  //  public function getemployeesdetail($id) {
  //     $this->db->select('*');
  // $this->db->where('id',$id);
  //     return $this->db->get('employees')->row();
  // }
  function update_notification_status($uid,$user_type) {
    // $this->db->trans_start();
    $this->db->where('user_id', $uid);
    $this->db->where('user_type', $user_type);
    $this->db->set('status', '2');
    $this->db->update('notifications');
      return;
  }
  function update_notifications_preference_display_status($data,$uid,$user_type) {
    // $this->db->trans_start();
    $this->db->where('user_id', $uid);
    $this->db->where('user_type', $user_type);
    $this->db->set('preference_display_status', $data);
    $this->db->update('notifications');
      return;
  }
  public function update_access_permission($table, $data, $user_type, $uid)
  {
    $this->db->where('supplierid', $uid);
    $this->db->where('user_type', $user_type);
    $this->db->update($table, $data);
    return;
  }
  public function update_company($table, $supplierid, $data)
  {
    $this->db->where('supplierid', $supplierid);
    $this->db->update($table, $data);
    return;
  }
  public function update_company_supplier($table, $supplierid, $data1)
  {
    $this->db->where('uid', $supplierid);
    $this->db->update($table, $data);
    return;
  }

  public function updatedata($table, $data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update($table, $data);
    return;
  }

  public function ajaxselect($table, $id, $uid)
  {

    $this->db->where('supplierid', $uid);
    $this->db->where('user_type', $id);
    $this->db->select("*");
    $this->db->from($table);
    $data = $this->db->get();
    return $data->row();
  }

  public function getpan($pannumber)
  {
    $this->db->select('*');
    $this->db->where('pannumber', $pannumber);
    return $this->db->get('suppliers')->row();
  }

  public function getpersonalprofile($table, $uid)
  {
    $this->db->select('*');
    $this->db->where('uid', $uid);
    return $this->db->get('suppliers')->row();
  }
  public function getpersonalprofileemp($table, $uid)
  {
    $this->db->select('*');
    $this->db->where('id', $uid);
    return $this->db->get('employees')->row();
  }
  public function getbankdetails($table, $uid)
  {
    $this->db->select('*');
    $this->db->where('supplierid', $uid);
    return $this->db->get($table)->result();
  }
  public function delete($table, $id)
  {
    $this->db->where('id', $id);
    $this->db->delete($table);
  }
  public function getsubscriptionstatus($uid)
  {
    $this->db->select('*');
    $this->db->where('uid', $uid);
    return $this->db->get('suppliers')->row();
  }

  public function getServices($supplierid)
  {

    $this->db->select('*');
    $this->db->where('supplierid', $supplierid);
    $this->db->where('isdeleted', false);
    return $this->db->get("services")->result();
  }

  public function snotifications($uid,$user_type) {
    
    $this->db->select('*');
    $this->db->where('user_id',$uid);
    $this->db->where('user_type',$user_type); 
    $this->db->where('status','1');
    return $this->db->get('notifications')->row(); 
}
public function viewnotifications($uid,$user_type) {
    
  $this->db->select('*');
  $this->db->where('user_id',$uid);
  $this->db->where('user_type',$user_type); 
  //  $this->db->where('status','1');
  return $this->db->get('notifications')->row(); 
}
 
  public function notifications($uid,$user_type) {
    
    $this->db->select('*');
    $this->db->where('user_id',$uid);
    $this->db->where('user_type',$user_type); 
    $this->db->where('status','1');
    return $this->db->get('notifications')->row(); 
}
public function check_products($supplierId) 
  {
    $this->db->select('supplierId');
    $this->db->where('supplierId', $supplierId);
    $this->db->where('isdeleted', false);
    $Query = $this->db->get('suppliermaterials');
    return $Query->num_rows();
  }


  public function getappliedtender($supplierid)
  {
    $this->db->select('array_agg(id) as idorder,tender_id');
    $this->db->where('user_id', $supplierid);
    $this->db->group_by('tender_id');
    $this->db->order_by('idorder', 'desc');
    $result = $this->db->get('formengine_registration');
    return $result->result();
  }
}
