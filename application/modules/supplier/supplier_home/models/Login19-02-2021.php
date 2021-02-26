<?php
class Login extends CI_Model
{
  function validate($username,$password)
  {
      $query = $this->db->query("SELECT * FROM suppliers where username='$username' and password='$password'");

    // $query = $this->db->query("SELECT * FROM suppliers join employees on suppliers.user_type=employees.usertype where employees.mobilenum='$username' or suppliers.username='$username' and employees.password='$password' or suppliers.password='$password'");

     //  $query = $this->db->query("SELECT * FROM suppliers where username='$username' and password='$password' union SELECT * FROM employees where mobilenum='$username' and password='$password' ");

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

   function validateuser($username,$password)
  {
      $query = $this->db->query("SELECT * FROM employees where mobilenum='$username' and password='$password'");

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
