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
   $this->db->where('id',$id);
   return $this->db->get($table)->row();
 }
}

 ?>
