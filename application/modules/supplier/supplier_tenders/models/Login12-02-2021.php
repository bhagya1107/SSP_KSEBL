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
}

 ?>
