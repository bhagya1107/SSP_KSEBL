<?php
class Login extends CI_Model 
{
  function validate($username,$password)
  {
    $query = $this->db->query("SELECT * FROM suppliers where username='$username' and password='$password'");
    $rows=$query->num_rows();

    if($rows>0)
    {
        $row = $query->row();

        if (isset($row))
        {
          return $query->row_array();
        }
      }
      else {
        return FALSE;
      }

  }

   public function gettenderdetails($table,$supplierid) 
  {
   $this->db->select('*');
   $this->db->where('supplierid',$supplierid);
   return $this->db->get($table)->row();
 }
  public function gettenderdetails1($table,$supplierid,$id) 
  {
   $this->db->select('*');
   $this->db->where('supplierid',$supplierid);
   $this->db->where('tenderid',$id);
   return $this->db->get($table)->row();
 }



//  km updated
  public function getTenderanswers($tenderId,$userId,$questionid){
    $query = $this->db->query("SELECT * FROM formengine_registration where tender_id='$tenderId' and user_id ='$userId' and question_id = '$questionid'");

    $rows=$query->num_rows();

      if($rows>0)
      {
          $row = $query->row();

          if (isset($row))
          {
            return $query->row();
          }
      }
      else {
          return FALSE;
      }
  }

  public function getTenderApplicationForm($tenderId,$userId){
    $query = $this->db->query("SELECT fr.*,fq.question,fq.type_id FROM formengine_registration fr  INNER JOIN formengine_questions fq ON fq.id=fr.question_id  INNER JOIN formengine_types ft ON ft.id= fq.type_id  where tender_id='$tenderId' and user_id ='$userId'  order by fr.id ASC");

    $rows=$query->num_rows();

      if($rows>0)
      {
          $row = $query->result();

          if (isset($row))
          {
            return $query->result();
          }
      }
      else {
          return FALSE;
      }
  }


  public function getAttributeValue($attrId){

    $query = $this->db->query("SELECT attr_value from formengine_attributes where id=$attrId");
    $rows=$query->num_rows();

    if($rows>0)
    {
        $row = $query->row();

        if (isset($row))
        {
          $res= $query->row();
          return $res->attr_value;
        }
    }
    else {
        return FALSE;
    }
  }

  public function update_appliedstatus($data, $where)
  {
      $query=$this->db->update('tenders_favourites',$data,$where);
      return $query;
      
  }


}

 ?>
